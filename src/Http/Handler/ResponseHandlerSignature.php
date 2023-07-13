<?php
namespace bunq\Http\Handler;

use bunq\Exception\SecurityException;
use bunq\Security\PublicKey;
use Psr\Http\Message\ResponseInterface;

/**
 */
class ResponseHandlerSignature extends ResponseHandlerBase
{
    /**
     * Error constants.
     */
    const ERROR_VERIFYING_RESPONSE_FAILED = 'Verifying response failed.';

    /**
     * Header constants.
     */
    const HEADER_SERVER_SIGNATURE = 'X-Bunq-Server-Signature';
    const HEADER_PREFIX = 'X-Bunq-';
    const HEADER_PREFIX_START = 0;
    const HEADER_SEPARATOR = ', ';
    const FORMAT_HEADER = '%s: %s';

    /**
     * Regex constants.
     */
    const REGEX_FOR_LOWERCASE_HEADERS = '/-([a-z])/';
    const REGEX_REPLACE = '/%s/';
    const REGEX_CHECK_FAILED = '0';

    /**
     * The index of the first item in an array.
     */
    const INDEX_FIRST = 0;

    /**
     * Http status constants.
     */
    const STATUS_CODE_OK = 200;

    /**
     * Constants.
     */
    const RESULT_SIGNATURE_CORRECT = 1;
    const STRING_EMPTY = '';

    /**
     * @var PublicKey|null
     */
    protected $publicKeyServer;

    /**
     * @param PublicKey|null $publicKeyServer
     */
    public function __construct(PublicKey $publicKeyServer = null)
    {
        $this->publicKeyServer = $publicKeyServer;
    }

    /**
     * @param ResponseInterface $response
     *
     * @return ResponseInterface
     * @throws SecurityException when the response verification fails.
     */
    public function execute(ResponseInterface $response): ResponseInterface
    {
        if ($response->getStatusCode() === self::STATUS_CODE_OK) {
            if (is_null($this->publicKeyServer)) {
                // No installation yet.
                return $response;
            } elseif ($this->isResponseSignatureHeaderWithBodyValid($response)) {
                return $response;
            } elseif ($this->isResponseSignatureBodyValid($response)) {
                return $response;
            } else {
                throw new SecurityException(self::ERROR_VERIFYING_RESPONSE_FAILED);
            }
        } else {
            return $response;
        }
    }

    /**
     * @deprecated
     *
     * @param ResponseInterface $response
     *
     * @return bool
     */
    private function isResponseSignatureHeaderWithBodyValid(ResponseInterface $response): bool
    {
        $response->getBody()->seek(self::INDEX_FIRST);

        $toVerify =
            $response->getStatusCode() .
            self::NEWLINE .
            $this->determineHeaderStringForSignedResponse($response->getHeaders()) .
            self::NEWLINE . self::NEWLINE .
            $response->getBody()->getContents();

        $signature = base64_decode($response->getHeaderLine(self::HEADER_SERVER_SIGNATURE));
        $publicKey = $this->publicKeyServer->getKey();

        $signatureResult = openssl_verify($toVerify, $signature, $publicKey, OPENSSL_ALGO_SHA256);

        return $signatureResult === self::RESULT_SIGNATURE_CORRECT;
    }

    /**
     * @param ResponseInterface $response
     *
     * @return bool
     */
    private function isResponseSignatureBodyValid(ResponseInterface $response): bool
    {
        $response->getBody()->seek(self::INDEX_FIRST);

        $signature = base64_decode($response->getHeaderLine(self::HEADER_SERVER_SIGNATURE));
        $publicKey = $this->publicKeyServer->getKey();

        $signatureResult = openssl_verify(
            $response->getBody()->getContents(),
            $signature,
            $publicKey,
            OPENSSL_ALGO_SHA256
        );

        return $signatureResult === self::RESULT_SIGNATURE_CORRECT;
    }

    /**
     * @param string[][] $headers
     *
     * @return string
     */
    private function determineHeaderStringForSignedResponse(array $headers)
    {
        $signedDataHeaders = [];
        ksort($headers);

        foreach ($headers as $headerName => $headerValue) {
            // All headers with the prefix 'X-Bunq-' except 'Server-Signature' need to be signed.
            $headerName = $this->ensureHeaderIsCorrectlyCased($headerName);

            if ($headerName === self::HEADER_SERVER_SIGNATURE) {
                // Skip this header
            } elseif (strpos($headerName, self::HEADER_PREFIX) === self::HEADER_PREFIX_START) {
                $signedDataHeaders[] = $this->determineHeaderStringLine($headerName, $headerValue);
            }
        }

        return implode(self::NEWLINE, $signedDataHeaders);
    }

    /**
     * @param string $headerName
     *
     * @return string
     */
    private function ensureHeaderIsCorrectlyCased(string $headerName)
    {
        $headerName = ucfirst($headerName);
        $regexResult = preg_match_all(self::REGEX_FOR_LOWERCASE_HEADERS, $headerName, $matches);

        if ($regexResult != self::REGEX_CHECK_FAILED) {
            foreach ($matches[self::INDEX_FIRST] as $match) {
                $matchUpper = strtoupper($match);
                $headerName = preg_replace(vsprintf(self::REGEX_REPLACE, [$match]), $matchUpper, $headerName);
            }
        }

        return $headerName;
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
