<?php

namespace bunq\Http\Handler;

use bunq\Exception\ApiException;
use bunq\Exception\BunqException;
use bunq\Exception\ExceptionFactory;
use Psr\Http\Message\ResponseInterface;

/**
 */
class ResponseHandlerError extends ResponseHandlerBase
{
    /**
     * Error constants.
     */
    const ERROR_COULD_NOT_DETERMINE_RESPONSE_ID_HEADER =
        'The response header "X-Bunq-Client-Response-Id" or "x-bunq-client-response-id" could not be found.';

    /**
     * Field constants.
     */
    const FIELD_ERROR = 'Error';
    const FIELD_ERROR_DESCRIPTION = 'error_description';

    /**
     * Header constants.
     */
    const HEADER_BUNQ_CLIENT_RESPONSE_ID_UPPER_CASED = 'X-Bunq-Client-Response-Id';
    const HEADER_BUNQ_CLIENT_RESPONSE_ID_LOWER_CASED = 'x-bunq-client-response-id';

    /**
     * Http status code constants.
     */
    const STATUS_CODE_OK = 200;

    /**
     * The index of the first item in an array.
     */
    const INDEX_FIRST = 0;

    /**
     * @param ResponseInterface $response
     *
     * @return ResponseInterface
     * @throws ApiException when something goes wrong on the API side.
     */
    public function execute(ResponseInterface $response): ResponseInterface
    {
        if ($response->getStatusCode() !== self::STATUS_CODE_OK) {
            throw ExceptionFactory::createExceptionForResponse(
                $this->fetchErrorMessages($response),
                $response->getStatusCode(),
                $this->getResponseId($response)
            );
        }

        return $response;
    }

    /**
     * @param ResponseInterface $response
     *
     * @return string[]
     */
    private function fetchErrorMessages(ResponseInterface $response): array
    {
        $responseBody = $response->getBody();
        $responseBodyInJson = json_decode($responseBody, true);

        if ($this->doesResponseBodyContainValidJson($responseBodyInJson)) {
            return $this->fetchAllErrorDescription($responseBodyInJson);
        } else {
            return [$responseBody];
        }
    }

    /**
     * @param bool|string[]|null $body
     *
     * @return bool
     */
    private function doesResponseBodyContainValidJson($body): bool
    {
        return $body !== false && !is_null($body);
    }

    /**
     * @param string[] $errorArray
     *
     * @return string[]
     */
    private function fetchAllErrorDescription(array $errorArray): array
    {
        $allErrorDescription = [];

        foreach ($errorArray[self::FIELD_ERROR] as $error) {
            $description = $error[self::FIELD_ERROR_DESCRIPTION];
            $allErrorDescription[] = $description;
        }

        return $allErrorDescription;
    }

    /**
     * @param ResponseInterface $response
     *
     * @return string
     * @throws BunqException
     */
    private function getResponseId(ResponseInterface $response): string
    {
        $header = $response->getHeader(self::HEADER_BUNQ_CLIENT_RESPONSE_ID_UPPER_CASED);

        if (empty($header)) {
            $header = $response->getHeader(self::HEADER_BUNQ_CLIENT_RESPONSE_ID_UPPER_CASED);
        }

        if (empty($header)) {
            return self::ERROR_COULD_NOT_DETERMINE_RESPONSE_ID_HEADER;
        }

        return $header[self::INDEX_FIRST];
    }
}
