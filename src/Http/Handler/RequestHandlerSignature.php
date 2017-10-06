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

    /**
     * Delimiter between path and parameters.
     */
    const DELIMITER_URL_QUERY = '?';

    /**
     * @var PrivateKey
     */
    protected $privateKey;

    /**
     * @param PrivateKey $privateKey
     */
    public function __construct(PrivateKey $privateKey)
    {
        $this->privateKey = $privateKey;
    }

    /**
     * @param RequestInterface $request
     *
     * @return RequestInterface
     */
    public function execute(RequestInterface $request): RequestInterface
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
     * @param string[] $headers
     *
     * @return string
     */
    protected function determineRequestSignature(
        UriInterface $uri,
        string $method,
        string $body,
        array $headers
    ): string {
        $dataToSign =
            $method . self::REQUEST_METHOD_PATH_SEPARATOR . $this->getPathWithQuery($uri) .
            $this->determineHeaderStringForSignedRequest($headers) .
            self::NEWLINE . self::NEWLINE .
            $body;

        return $this->privateKey->sign($dataToSign);
    }

    /**
     * @param UriInterface $uri
     *
     * @return string
     */
    private function getPathWithQuery(UriInterface $uri): string
    {
        $uriString = $uri->getPath();

        if (!empty($uri->getQuery())) {
            $uriString .= self::DELIMITER_URL_QUERY . $uri->getQuery();
        }

        return $uriString;
    }

    /**
     * @param string[][] $headers
     *
     * @return string
     */
    public function determineHeaderStringForSignedRequest(array $headers): string
    {
        $signedDataHeaderString = self::SIGNED_DATA_EMPTY_STRING;
        ksort($headers);

        foreach ($headers as $headerName => $headerValue) {
            // Not all headers should be signed.
            // The User-Agent and Cache-Control headers need to be signed.
            if ($headerName === self::HEADER_USER_AGENT || $headerName === self::HEADER_CACHE_CONTROL) {
                $signedDataHeaderString .= self::NEWLINE;
                $signedDataHeaderString .= $this->determineHeaderStringLine($headerName, $headerValue);
            }

            // All headers with the prefix 'X-Bunq-' except 'Server-Signature' need to be signed.
            if ($headerName === self::HEADER_SERVER_SIGNATURE) {
                // Skip this header
            } elseif (strpos($headerName, self::HEADER_PREFIX) === self::HEADER_PREFIX_START) {
                $signedDataHeaderString .= self::NEWLINE;
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
    private function determineHeaderStringLine(string $headerName, array $headerValue): string
    {
        return vsprintf(self::FORMAT_HEADER, [$headerName, implode(self::HEADER_SEPARATOR, $headerValue)]);
    }
}
