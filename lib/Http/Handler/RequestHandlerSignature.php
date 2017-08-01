<?php
namespace bunq\Http\Handler;

use bunq\Security\PrivateKey;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;

/**
 */
class RequestHandlerSignature extends RequestHandlerBase
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_INSTALLATION = '/v1/installation';

    /**
     * Header constants.
     */
    const HEADER_CLIENT_SIGNATURE = 'X-Bunq-Client-Signature';
    const HEADER_PREFIX = 'X-Bunq-';
    const HEADER_PREFIX_START = 0;
    const HEADER_SERVER_SIGNATURE = 'X-Bunq-Server-Signature';
    const HEADER_CACHE_CONTROL = 'Cache-Control';

    /**
     * Signature message constants.
     */
    const FORMAT_HEADER = '%s: %s';
    const HEADER_SEPARATOR = ', ';
    const HEADER_USER_AGENT = 'User-Agent';
    const REQUEST_METHOD_PATH_SEPARATOR = ' ';
    const SIGNED_DATA_EMPTY_STRING = '';

    /** @var PrivateKey */
    protected $privateKey;

    /**
     * SignatureHandler constructor.
     *
     * @param PrivateKey $privateKey
     */
    public function __construct(PrivateKey $privateKey)
    {
        $this->privateKey = $privateKey;
    }

    /**
     * @param RequestInterface $request
     * @return RequestInterface
     */
    public function execute(RequestInterface $request)
    {
        if ($request->getUri()->getPath() === self::ENDPOINT_INSTALLATION) {
            return $request;
        } else {
            $signature = $this->determineRequestSignature(
                $request->getUri(),
                $request->getMethod(),
                $request->getBody()->getContents(),
                $request->getHeaders()
            );

            return $request->withHeader(self::HEADER_CLIENT_SIGNATURE, $signature);
        }
    }

    /**
     * @param UriInterface $uri
     * @param string $method
     * @param string $body
     * @param array $headers
     *
     * @return string
     */
    protected function determineRequestSignature(
        UriInterface $uri,
        $method,
        $body,
        array $headers
    ) {
        $dataToSign =
            $method . self::REQUEST_METHOD_PATH_SEPARATOR . $uri->getPath() .
            $this->determineHeaderStringForSignedRequest($headers) .
            PHP_EOL . PHP_EOL .
            $body;

        return $this->privateKey->sign($dataToSign);
    }

    /**
     * @param string[][] $headers
     *
     * @return string
     */
    public function determineHeaderStringForSignedRequest(array $headers)
    {
        $signedDataHeaderString = self::SIGNED_DATA_EMPTY_STRING;
        ksort($headers);

        foreach ($headers as $headerName => $headerValue) {
            // Not all headers should be signed.
            // The User-Agent and Cache-Control headers need to be signed.
            if ($headerName === self::HEADER_USER_AGENT || $headerName === self::HEADER_CACHE_CONTROL) {
                $signedDataHeaderString .= PHP_EOL;
                $signedDataHeaderString .= $this->determineHeaderStringLine($headerName, $headerValue);
            }

            // All headers with the prefix 'X-Bunq-' except 'Server-Signature' need to be signed.
            if ($headerName === self::HEADER_SERVER_SIGNATURE) {
                // Skip this header
            } elseif (strpos($headerName, self::HEADER_PREFIX) === self::HEADER_PREFIX_START) {
                $signedDataHeaderString .= PHP_EOL;
                $signedDataHeaderString .= $this->determineHeaderStringLine($headerName, $headerValue);
            }
        }

        return $signedDataHeaderString;
    }

    /**
     * @param string $headerName
     * @param string[] $headerValue
     *
     * @return string
     */
    private function determineHeaderStringLine($headerName, array $headerValue)
    {
        return vsprintf(self::FORMAT_HEADER, [$headerName, implode(self::HEADER_SEPARATOR, $headerValue)]);
    }
}
