<?php
namespace bunq\Http;

use bunq\Context\ApiContext;
use bunq\Exception\BunqException;
use bunq\Http\Handler\HandlerUtil;
use bunq\Http\Handler\RequestHandlerAuthentication;
use bunq\Http\Handler\RequestHandlerEncryption;
use bunq\Http\Handler\RequestHandlerSignature;
use bunq\Http\Handler\ResponseHandlerError;
use bunq\Http\Handler\ResponseHandlerSignature;
use bunq\Util\BunqEnumApiEnvironmentType;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Uri;
use phpDocumentor\Reflection\Types\Self_;
use Psr\Http\Message\ResponseInterface;

/**
 */
class ApiClient
{
    /**
     * Endpoints not requiring active session for the request to succeed.
     */
    const URIS_NOT_REQUIRING_ACTIVE_SESSION = [
        self::DEVICE_SERVER_URL => true,
        self::INSTALLATION_URL => true,
        self::SESSION_SERVER_URL => true,
    ];
    const DEVICE_SERVER_URL = 'device-server';
    const INSTALLATION_URL = 'installation';
    const SESSION_SERVER_URL = 'session-server';

    /**
     * Error constants.
     */
    const ERROR_ENVIRONMENT_TYPE_UNKNOWN = 'Unknown environmentType "%s"';

    /**
     * Public key locations.
     */
    const FILE_PUBLIC_KEY_ENVIRONMENT_SANDBOX = '/Certificate/sandbox.public.api.bunq.com.pubkey.pem';
    const FILE_PUBLIC_KEY_ENVIRONMENT_PRODUCTION = '/Certificate/api.bunq.com.pubkey.pem';

    /**
     * Body constants.
     */
    const BODY_EMPTY = '{}';

    /**
     * Header name.
     */
    const HEADER_CLIENT_REQUEST_ID = 'X-Bunq-Client-Request-Id';
    const HEADER_ATTACHMENT_DESCRIPTION = 'X-Bunq-Attachment-Description';
    const HEADER_GEOLOCATION = 'X-Bunq-Geolocation';
    const HEADER_LANGUAGE = 'X-Bunq-Language';
    const HEADER_REGION = 'X-Bunq-Region';
    const HEADER_CACHE_CONTROL = 'Cache-Control';
    const HEADER_CONTENT_TYPE = 'Content-Type';
    const HEADER_USER_AGENT = 'User-Agent';

    /**
     * Header value constants.
     */
    const HEADER_CACHE_CONTROL_DEFAULT = 'no-cache';
    const HEADER_CUSTOM_GEOLOCATION_DEFAULT = '0 0 0 0 NL';
    const HEADER_CUSTOM_LANGUAGE_DEFAULT = 'en_US';
    const HEADER_CUSTOM_REGION_DEFAULT = 'en_US';

    /**
     * User agent constants.
     */
    const HEADER_USER_AGENT_BUNQ_SDK_DEFAULT = 'bunq-sdk-php/0.12.4';

    /**
     * Binary request constants.
     */
    const FIELD_BODY = 'body';
    const FIELD_CONTENT_TYPE = 'content_type';
    const FIELD_DESCRIPTION = 'description';

    /**
     * Guzzle client configuration options.
     */
    const OPTION_ALLOW_REDIRECTS = 'allow_redirects';
    const OPTION_DEFAULTS = 'defaults';
    const OPTION_EXCEPTIONS = 'exceptions';
    const OPTION_HEADERS = 'headers';
    const OPTION_HTTP_ERRORS = 'http_errors';
    const OPTION_BODY = 'body';
    const OPTION_CONFIG = 'config';
    const OPTION_CURL = 'curl';
    const OPTION_DEBUG = 'debug';
    const OPTION_HANDLER = 'handler';
    const OPTION_PROXY = 'proxy';
    const OPTION_VERIFY = 'verify';

    /**
     * HTTP methods to make calls.
     */
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_DELETE = 'DELETE';

    /**
     * Glue to connect multiple header values into one string.
     */
    const GLUE_HEADER_VALUE = ',';

    /**
     * @var Client
     */
    protected $httpClient;

    /**
     * @var ApiContext
     */
    protected $apiContext;

    /**
     * @var bool
     */
    protected $isBinary;

    /**
     * @var bool
     */
    protected $isEncrypted;

    /**
     * @param ApiContext $apiContext
     */
    public function __construct(ApiContext $apiContext)
    {
        $this->apiContext = $apiContext;
    }

    /**
     */
    public function enableBinary()
    {
        $this->isBinary = true;
    }

    /**
     */
    public function enableEncryption()
    {
        $this->isEncrypted = true;
    }

    /**
     * @param string $uri
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseRaw
     */
    public function get(string $uri, array $params, array $customHeaders): BunqResponseRaw
    {
        return $this->request(self::METHOD_GET, $uri, [], $params, $customHeaders);
    }

    /**
     * @param string $method
     * @param string $uri
     * @param mixed[][]|string $body
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseRaw
     */
    private function request(
        string $method,
        string $uri,
        $body,
        array $params,
        array $customHeaders
    ): BunqResponseRaw {
        $this->initialize($uri);

        $response = $this->httpClient->request(
            $method,
            $this->determineUriFull($uri, $params),
            $this->determineRequestOptions($body, $customHeaders)
        );

        return $this->createBunqResponseRaw($response);
    }

    /**
     */
    private function initialize(string $uri)
    {
        if (!isset(self::URIS_NOT_REQUIRING_ACTIVE_SESSION[$uri])) {
            $this->apiContext->ensureSessionActive();
        }

        $this->initializeHttpClient();
    }

    /**
     */
    private function initializeHttpClient()
    {
        if (is_null($this->httpClient)) {
            $middleware = $this->determineMiddleware();

            $this->httpClient = new Client(
                [
                    self::OPTION_DEFAULTS => [
                        self::OPTION_ALLOW_REDIRECTS => false,
                        self::OPTION_EXCEPTIONS => false,
                    ],
                    self::OPTION_HANDLER => $middleware,
                    self::OPTION_VERIFY => true,
                    self::OPTION_CURL => [
                        CURLOPT_PINNEDPUBLICKEY => $this->determinePinnedServerPublicKey(),
                    ],
                    self::OPTION_PROXY => $this->apiContext->getProxy(),
                ]
            );
        }
    }

    /**
     * @return HandlerStack
     */
    private function determineMiddleware(): HandlerStack
    {
        $handlerStack = HandlerStack::create();

        if (is_null($this->apiContext->getInstallationContext())) {
            // Disable verification middleware.
        } else {
            $sessionToken = $this->apiContext->getSessionToken();
            $handlerStack->push(HandlerUtil::applyRequestHandler(new RequestHandlerAuthentication($sessionToken)));

            if ($this->isEncrypted) {
                $publicKey = $this->apiContext->getInstallationContext()->getPublicKeyServer();
                $handlerStack->push(HandlerUtil::applyRequestHandler(new RequestHandlerEncryption($publicKey)));
            }

            $privateKey = $this->apiContext->getInstallationContext()->getKeyPairClient()->getPrivateKey();
            $handlerStack->push(HandlerUtil::applyRequestHandler(new RequestHandlerSignature($privateKey)));

            $serverPublicKey = $this->apiContext->getInstallationContext()->getPublicKeyServer();
            $handlerStack->push(HandlerUtil::applyResponseHandler(new ResponseHandlerSignature($serverPublicKey)));
        }

        $handlerStack->push(HandlerUtil::applyResponseHandler(new ResponseHandlerError()));

        return $handlerStack;
    }

    /**
     * @return string
     * @throws BunqException when the environment type is unknown.
     */
    private function determinePinnedServerPublicKey(): string
    {
        $environmentType = $this->apiContext->getEnvironmentType();

        if ($environmentType->equals(BunqEnumApiEnvironmentType::SANDBOX())) {
            return __DIR__ . self::FILE_PUBLIC_KEY_ENVIRONMENT_SANDBOX;
        } elseif ($environmentType->equals(BunqEnumApiEnvironmentType::PRODUCTION())) {
            return __DIR__ . self::FILE_PUBLIC_KEY_ENVIRONMENT_PRODUCTION;
        } else {
            throw new BunqException(
                self::ERROR_ENVIRONMENT_TYPE_UNKNOWN,
                [
                    $environmentType->getChoiceString(),
                ]
            );
        }
    }

    /**
     * @param string $uri
     * @param string[] $params
     *
     * @return Uri
     */
    private function determineUriFull(string $uri, array $params): Uri
    {
        $basePath = $this->apiContext->determineBaseUri()->getPath();

        return $this->apiContext
            ->determineBaseUri()
            ->withPath($basePath . $uri)
            ->withQuery(http_build_query($params));
    }

    /**
     * @param mixed[][]|string $body
     * @param string[] $customHeaders
     *
     * @return mixed[]
     */
    private function determineRequestOptions($body, array $customHeaders): array
    {
        $headers = array_merge($this->determineDefaultHeaders(), $customHeaders);

        return [
            self::OPTION_HEADERS => $headers,
            self::OPTION_BODY => $this->determineBodyString($body),
            self::OPTION_DEBUG => false,
            self::OPTION_HTTP_ERRORS => false,
        ];
    }

    /**
     * @return string[][]
     */
    protected function determineDefaultHeaders(): array
    {
        return [
            self::HEADER_CACHE_CONTROL => [self::HEADER_CACHE_CONTROL_DEFAULT],
            self::HEADER_USER_AGENT => [self::HEADER_USER_AGENT_BUNQ_SDK_DEFAULT],
            self::HEADER_GEOLOCATION => [self::HEADER_CUSTOM_GEOLOCATION_DEFAULT],
            self::HEADER_LANGUAGE => [self::HEADER_CUSTOM_LANGUAGE_DEFAULT],
            self::HEADER_REGION => [self::HEADER_CUSTOM_REGION_DEFAULT],
            self::HEADER_CLIENT_REQUEST_ID => [uniqid()],
        ];
    }

    /**
     * @param mixed[][]|string $body
     *
     * @return string
     */
    protected function determineBodyString($body): string
    {
        if ($this->isBinary) {
            return $body;
        } elseif (empty($body)) {
            return self::BODY_EMPTY;
        } else {
            $bodyString = json_encode($body);
        }

        return $bodyString;
    }

    /**
     * @param ResponseInterface $response
     *
     * @return BunqResponseRaw
     */
    private function createBunqResponseRaw(ResponseInterface $response): BunqResponseRaw
    {
        $headers = [];

        foreach ($response->getHeaders() as $headerKey => $headerValues) {
            $headers[$headerKey] = implode(self::GLUE_HEADER_VALUE, $headerValues);
        }

        return new BunqResponseRaw($response->getBody(), $headers);
    }

    /**
     * @param string $uri
     * @param mixed[][]|string $body
     * @param string[] $customHeaders
     *
     * @return BunqResponseRaw
     */
    public function post(string $uri, $body, array $customHeaders): BunqResponseRaw
    {
        return $this->request(self::METHOD_POST, $uri, $body, [], $customHeaders);
    }

    /**
     * @param string $uri
     * @param mixed[][]|string $body
     * @param string[] $customHeaders
     *
     * @return BunqResponseRaw
     */
    public function put(string $uri, $body, array $customHeaders): BunqResponseRaw
    {
        return $this->request(self::METHOD_PUT, $uri, $body, [], $customHeaders);
    }

    /**
     * @param string $uri
     * @param string[] $customHeaders
     *
     * @return BunqResponseRaw
     */
    public function delete($uri, array $customHeaders)
    {
        return $this->request(self::METHOD_DELETE, $uri, [], [], $customHeaders);
    }
}
