<?php
namespace bunq\Http;

use bunq\Context\ApiContext;
use bunq\Context\BunqContext;
use bunq\Exception\BunqException;
use bunq\Http\Handler\HandlerUtil;
use bunq\Http\Handler\RequestHandlerAuthentication;
use bunq\Http\Handler\RequestHandlerEncryption;
use bunq\Http\Handler\RequestHandlerSignature;
use bunq\Http\Handler\ResponseHandlerError;
use bunq\Http\Handler\ResponseHandlerSignature;
use bunq\Util\BunqEnumApiEnvironmentType;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\ResponseInterface;

/**
 */
class ApiClient
{
    /**
     * Error constants.
     */
    const ERROR_ENVIRONMENT_TYPE_UNKNOWN = 'Unknown environmentType "%s"';
    const ERROR_MAC_OS_CURL_VERSION = 'Your PHP seems to be linked to the MacOS provided curl binary. ' .
    'This is incompatible with our SDK, please reinstall by running: "brew reinstall %s --with-homebrew-curl".%s';
    const ERROR_CURL_DOES_NOT_SUPPORT_ROOT_CERTIFICATE_PINNING =
        //@codingStandardsIgnoreLine
        'Curl does not support root certificate pinning. See https://curl.haxx.se/docs/todo.html#Support_intermediate_root_pinn';

    /**
     * Endpoints not requiring active session for the request to succeed.
     */
    const URIS_NOT_REQUIRING_ACTIVE_SESSION = [
        self::SANDBOX_USER_URL => true,
        self::DEVICE_SERVER_URL => true,
        self::INSTALLATION_URL => true,
        self::SESSION_SERVER_URL => true,
        self::PAYMENT_SERVICE_PROVIDER_CREDENTIAL_URL => true,
    ];
    const SANDBOX_USER_URL = 'sandbox-user';
    const DEVICE_SERVER_URL = 'device-server';
    const INSTALLATION_URL = 'installation';
    const SESSION_SERVER_URL = 'session-server';
    const PAYMENT_SERVICE_PROVIDER_CREDENTIAL_URL = 'payment-service-provider-credential';

    /**
     * Public key locations.
     */
    const FILE_PUBLIC_KEY_ENVIRONMENT_PRODUCTION = '/Certificate/api.bunq.com.pubkey.pem';

    /**
     * String format constants.
     */
    const FORMAT_CURL_INSTALLATION_INSTRUCTIONS =
        'This is incompatible with our SDK, please reinstall by running: "brew reinstall %s --with-homebrew-curl".%s';
    const FORMAT_ERROR_MESSAGE_MAC_CURL = '%s%s%s';

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
    const HEADER_USER_AGENT_BUNQ_SDK_DEFAULT = 'bunq-sdk-php/1.12.1';

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
     * MacOS curl bug error code constant.
     */
    const ERROR_CODE_MAC_OS_CURL_BUG = 0;

    /**
     * uname constants.
     */
    const INDEX_UNAME_SYSNAME = 'sysname';
    const SYSNAME_MAC_OS = 'Darwin';

    /**
     * PHP version check command constant.
     */
    const COMMAND_DETERMINE_BREW_PHP_VERSION = 'brew list | egrep -e "^php[0-9]{2}$"';

    /**
     * Curl error regex constants.
     */
    const REGEX_CURL_ERROR_CODE = '/(cURL error )(?P<errorCode>\d+)/';
    const REGEX_NAMED_GOUP_ERROR_CODE = 'errorCode';

    /**
     * Curl option constants.
     */
    const CURL_FIELD_KEY_PINNING = 'CURLOPT_PINNEDPUBLICKEY';
    const CURL_VALUE_KEY_PINNING = 10230;

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
     * @throws BunqException
     */
    private function request(
        string $method,
        string $uri,
        $body,
        array $params,
        array $customHeaders
    ): BunqResponseRaw {
        $this->initialize($uri);

        try {
            $response = $this->httpClient->request(
                $method,
                $this->determineUriFull($uri, $params),
                $this->determineRequestOptions($body, $customHeaders)
            );
        } catch (RequestException $exception) {
            if ($this->isCurlErrorCodeZero($exception) && $this->isMacOs()) {
                throw new BunqException($this->determineErrorMessageCurlZero());
            } else {
                throw $exception;
            }
        }

        return $this->createBunqResponseRaw($response);
    }

    /**
     */
    private function initialize(string $uri)
    {
        if (!isset(self::URIS_NOT_REQUIRING_ACTIVE_SESSION[$uri])) {
            if ($this->apiContext->ensureSessionActive()) {
                BunqContext::updateApiContext($this->apiContext);
            }
        }

        $this->initializeHttpClient();
    }

    /**
     */
    private function initializeHttpClient()
    {
        if (is_null($this->httpClient)) {
            $this->initializeAllDefinitionIfNeeded();
            $middleware = $this->determineMiddleware();

            $this->httpClient = new Client(
                array_merge(
                    [
                        self::OPTION_DEFAULTS => [
                            self::OPTION_ALLOW_REDIRECTS => false,
                            self::OPTION_EXCEPTIONS => false,
                        ],
                        self::OPTION_HANDLER => $middleware,
                        self::OPTION_VERIFY => true,
                        self::OPTION_PROXY => $this->apiContext->getProxy(),
                    ],
                    $this->determinePinnedKeySetting()
                )
            );
        }
    }

    /**
     * Initialize definitions if needed.
     *
     * Defines CURLOPT_PINNEDPUBLICKEY for PHP <7.0.7.
     */
    private function initializeAllDefinitionIfNeeded()
    {
        if (defined(self::CURL_FIELD_KEY_PINNING)) {
            // Do nothing.
        } else {
            define(self::CURL_FIELD_KEY_PINNING, self::CURL_VALUE_KEY_PINNING);
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
     * @return string[]
     */
    private function determinePinnedKeySetting(): array
    {
        if ($this->apiContext->getEnvironmentType()->equals(BunqEnumApiEnvironmentType::SANDBOX())) {
            return [];
        } else {
            return [
                self::OPTION_CURL => [
                    CURLOPT_PINNEDPUBLICKEY => $this->determinePinnedServerPublicKey(),
                ],
            ];
        }
    }

    /**
     * @return string
     * @throws BunqException when the environment type is unknown.
     */
    private function determinePinnedServerPublicKey(): string
    {
        $environmentType = $this->apiContext->getEnvironmentType();

        if ($environmentType->equals(BunqEnumApiEnvironmentType::SANDBOX())) {
            throw new BunqException(self::ERROR_CURL_DOES_NOT_SUPPORT_ROOT_CERTIFICATE_PINNING);
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
     * @param RequestException $exception
     *
     * @return bool
     */
    private function isCurlErrorCodeZero(RequestException $exception): bool
    {
        $allMatch = [];

        preg_match(self::REGEX_CURL_ERROR_CODE, $exception->getMessage(), $allMatch);

        return isset($allMatch[self::REGEX_NAMED_GOUP_ERROR_CODE])
            && $allMatch[self::REGEX_NAMED_GOUP_ERROR_CODE] === self::ERROR_CODE_MAC_OS_CURL_BUG;
    }

    /**
     * @return bool
     */
    private function isMacOs(): bool
    {
        return posix_uname()[self::INDEX_UNAME_SYSNAME] === self::SYSNAME_MAC_OS;
    }

    /**
     * @return string
     */
    private function determineErrorMessageCurlZero(): string
    {
        return vsprintf(
            vsprintf(
                self::FORMAT_ERROR_MESSAGE_MAC_CURL,
                [self::ERROR_MAC_OS_CURL_VERSION, PHP_EOL, self::FORMAT_CURL_INSTALLATION_INSTRUCTIONS]
            ),
            [$this->determineVersionPhpMacOs(), PHP_EOL]
        );
    }

    /**
     * @return string
     */
    private function determineVersionPhpMacOs(): string
    {
        return exec(self::COMMAND_DETERMINE_BREW_PHP_VERSION);
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
