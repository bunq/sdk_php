<?php

namespace bunq\Http\Handler;

use bunq\Exception\ApiException;
use bunq\Exception\ExceptionFactory;
use Psr\Http\Message\ResponseInterface;

/**
 */
class ResponseHandlerError extends ResponseHandlerBase
{
    /**
     * Field constants.
     */
    const FIELD_ERROR = 'Error';
    const FIELD_ERROR_DESCRIPTION = 'error_description';
    const FIELD_BUNQ_CLIENT_RESPONSE_ID_UPPER_CASED = 'X-Bunq-Client-Response-Id';
    const FIELD_BUNQ_CLIENT_RESPONSE_ID_LOWER_CASED = 'x-bunq-client-response-id';

    /**
     * Http status code constants.
     */
    const STATUS_CODE_OK = 200;

    /**
     * @param ResponseInterface $response
     *
     * @return ResponseInterface
     * @throws ApiException when something goes wrong on the API side.
     */
    public function execute(ResponseInterface $response): ResponseInterface
    {
        if ($response->getStatusCode() !== self::STATUS_CODE_OK){
            throw ExceptionFactory::createExceptionForResponse(
                $this->fetchErrorMessages($response),
                $response->getStatusCode()
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

        if ($responseBodyInJson !== false){
            return $this->fetchErrorDescriptions($responseBodyInJson);
        }else{
            return [$responseBody];
        }
    }

    /**
     * @param string[] $errorArray
     *
     * @return string[]
     */
    private function fetchErrorDescriptions(array $errorArray): array
    {
        $errorDescriptions = [];

        foreach ($errorArray[self::FIELD_ERROR] as $error){
            $description = $error[self::FIELD_ERROR_DESCRIPTION];
            $errorDescriptions[] = $description;
        }

        return $errorDescriptions;
    }
}
