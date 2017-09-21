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
    const GLUE_ERROR_MESSAGES = "\n";

    /**
     * The first item index in an array.
     */
    const INDEX_FIRST = 0;

    /**
     * @param array $messages
     * @param int $responseCode
     *
     * @return ApiException
     */
    public static function createExceptionForResponse($messages, $responseCode)
    {
        $errorMessage = static::generateMessageError($responseCode, $messages);

        switch ($responseCode)
        {
            case self::HTTP_RESPONSE_CODE_BAD_REQUEST:
                return new BadRequestException($errorMessage, $responseCode);
            case self::HTTP_RESPONSE_CODE_UNAUTHORIZED:
                return new UnauthorizedException($errorMessage, $responseCode);
            case self::HTTP_RESPONSE_CODE_FORBIDDEN:
                return new ForbiddenException($errorMessage, $responseCode);
            case self::HTTP_RESPONSE_CODE_NOT_FOUND:
                return new NotFoundException($errorMessage, $responseCode);
            case self::HTTP_RESPONSE_CODE_METHOD_NOT_ALLOWED:
                return new MethodNotAllowedException($errorMessage, $responseCode);
            case self::HTTP_RESPONSE_CODE_TOO_MANY_REQUESTS:
                return new TooManyRequestsException($errorMessage, $responseCode);
            case self::HTTP_RESPONSE_CODE_INTERNAL_SERVER_ERROR:
                return new PleaseContactBunqException($errorMessage, $responseCode);
            default:
                return new UnknownApiErrorException($errorMessage, $responseCode);
        }
    }

    /**
     * @param $responseCode
     * @param $messages
     *
     * @return string
     */
    private static function generateMessageError($responseCode, $messages)
    {
        $lineResponseCode = sprintf(self::FORMAT_RESPONSE_CODE_LINE, $responseCode);

        return static::glueMessages(array_merge([$lineResponseCode], $messages));
    }

    /**
     * @param $messages
     *
     * @return string
     */
    private static function glueMessages($messages)
    {
        return implode(self::GLUE_ERROR_MESSAGES, $messages);
    }
}
