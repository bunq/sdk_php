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

    /**
     * Http status code constants.
     */
    const STATUS_CODE_OK = 200;

    /**
     * @param ResponseInterface $response
     *
     * @return ResponseInterface
     * @throws ApiException
     */
    public function execute(ResponseInterface $response)
    {
        if (!($response->getStatusCode() == self::STATUS_CODE_OK)){
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
     * @return array
     */
    private function fetchErrorMessages(ResponseInterface $response)
    {
        $responseBody = $response->getBody();
        $responseBodyInJson = json_decode($responseBody, true);

        if (!($responseBodyInJson == false)){
            return $this->fetchErrorDescriptions($responseBodyInJson);
        }

        return [$responseBody];

    }

    /**
     * @param array $errorArray
     *
     * @return array
     */
    private function fetchErrorDescriptions(array $errorArray)
    {
        $errorDescriptions = [];

        foreach ($errorArray[self::FIELD_ERROR] as $error){
            $description = $error[self::FIELD_ERROR_DESCRIPTION];
            $errorDescriptions[] = $description;
        }

        return $errorDescriptions;
    }
}
