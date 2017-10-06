<?php

namespace bunq\Http\Handler;

use bunq\Exception\ApiException;
use Psr\Http\Message\ResponseInterface;

/**
 */
class ResponseHandlerError extends ResponseHandlerBase
{
    /**
     * Error constants.
     */
    const ERROR_UNKNOWN = 'An error occurred with status code "%d" and message "%s"';
    const ERROR_FROM_JSON = 'An unexpected error occurred with status code "%d" and message "%s"';

    /**
     * Header constants.
     */
    const HEADER_CONTENT_TYPE = 'Content-Type';
    const HEADER_CONTENT_TYPE_APPLICATION_JSON = 'application/json';

    /**
     * Field constants.
     */
    const FIELD_ERROR = 'Error';
    const FIELD_ERROR_DESCRIPTION = 'error_description';

    /**
     * Formatting constants.
     */
    const SEPERATOR_ERROR = ', ';

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
        $contentType = $response->getHeaderLine(self::HEADER_CONTENT_TYPE);

        if ($response->getStatusCode() === self::STATUS_CODE_OK) {
            return $response;
        } else {
            if ($contentType === self::HEADER_CONTENT_TYPE_APPLICATION_JSON) {
                $responseBody = $response->getBody();
                $responseJson = \GuzzleHttp\json_decode($responseBody, true);

                $errorDescriptions = [];

                foreach ($responseJson[self::FIELD_ERROR] as $error) {
                    $errorDescriptions[] = $error[self::FIELD_ERROR_DESCRIPTION];
                }

                throw new ApiException(
                    self::ERROR_FROM_JSON,
                    [
                        $response->getStatusCode(),
                        implode(self::SEPERATOR_ERROR, $errorDescriptions),
                    ]
                );
            } else {
                throw new ApiException(
                    self::ERROR_UNKNOWN,
                    [
                        $response->getStatusCode(),
                        $response->getBody(),
                    ]
                );
            }
        }
    }
}
