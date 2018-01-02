<?php
namespace bunq\Exception;

/**
 */
class ExceptionFactory
{
    /**
     * HTTP error response codes constants.
     */
    const HTTP_RESPONSE_CODE_BAD_REQUEST = 400;
    const HTTP_RESPONSE_CODE_UNAUTHORIZED = 401;
    const HTTP_RESPONSE_CODE_FORBIDDEN = 403;
    const HTTP_RESPONSE_CODE_NOT_FOUND = 404;
    const HTTP_RESPONSE_CODE_METHOD_NOT_ALLOWED = 405;
    const HTTP_RESPONSE_CODE_TOO_MANY_REQUESTS = 429;
    const HTTP_RESPONSE_CODE_INTERNAL_SERVER_ERROR = 500;

    /**
     * Formatting constants
     */
    const FORMAT_RESPONSE_CODE_LINE = 'HTTP Response Code: %s';
    const FORMAT_RESPONSE_ID = 'The response id to help bunq debug: %s';
    const FORMAT_ERROR_MESSAGE_LINE = 'Error message: %s';

    /**
     * String separator constants
     */
    const SEPARATOR_ERROR_MESSAGES = "\n";

    /**
     * The first item index in an array.
     */
    const INDEX_FIRST = 0;

    /**
     * @param string[] $allMessage
     * @param int $responseCode
     * @param string $responseId
     *
     * @return ApiException
     */
    public static function createExceptionForResponse(
        array $allMessage,
        int $responseCode,
        string $responseId
    ): ApiException {
        $errorMessage = static::generateErrorMessage($responseCode, $allMessage, $responseId);

        switch ($responseCode) {
            case self::HTTP_RESPONSE_CODE_BAD_REQUEST:
                return new BadRequestException($errorMessage, $responseCode, $responseId);
            case self::HTTP_RESPONSE_CODE_UNAUTHORIZED:
                return new UnauthorizedException($errorMessage, $responseCode, $responseId);
            case self::HTTP_RESPONSE_CODE_FORBIDDEN:
                return new ForbiddenException($errorMessage, $responseCode, $responseId);
            case self::HTTP_RESPONSE_CODE_NOT_FOUND:
                return new NotFoundException($errorMessage, $responseCode, $responseId);
            case self::HTTP_RESPONSE_CODE_METHOD_NOT_ALLOWED:
                return new MethodNotAllowedException($errorMessage, $responseCode, $responseId);
            case self::HTTP_RESPONSE_CODE_TOO_MANY_REQUESTS:
                return new TooManyRequestsException($errorMessage, $responseCode, $responseId);
            case self::HTTP_RESPONSE_CODE_INTERNAL_SERVER_ERROR:
                return new PleaseContactBunqException($errorMessage, $responseCode, $responseId);
            default:
                return new UnknownApiErrorException($errorMessage, $responseCode, $responseId);
        }
    }

    /**
     * @param int $responseCode
     * @param string[] $allMessage
     * @param string $responseId
     *
     * @return string
     */
    private static function generateErrorMessage(
        int $responseCode,
        array $allMessage,
        string $responseId
    ): string {
        $lineResponseCode = sprintf(self::FORMAT_RESPONSE_CODE_LINE, $responseCode);
        $lineResponseId = sprintf(self::FORMAT_RESPONSE_ID, $responseId);
        $lineErrorMessage = sprintf(
            self::FORMAT_ERROR_MESSAGE_LINE,
            implode($allMessage)
        );

        return static::glueAllMessage([$lineResponseCode, $lineResponseId, $lineErrorMessage]);
    }

    /**
     * @param string[] $allMessage
     *
     * @return string
     */
    private static function glueAllMessage(array $allMessage): string
    {
        return implode(self::SEPARATOR_ERROR_MESSAGES, $allMessage);
    }
}
