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
     * The first item index in an array.
     */
    const INDEX_FIRST = 0;

    /**
     * @param string $message
     * @param array $args
     *
     * @return BadRequestException|ForbiddenException|MethodNotAllowedException|NotFoundException|PleaseContactBunqException|ToManyRequestsException|UnauthorizedException|UnknownApiErrorException
     */
    public static function createExceptionForResponse($message, $args = [])
    {
        switch ($args[self::INDEX_FIRST])
        {
            case self::HTTP_RESPONSE_CODE_BAD_REQUEST:
                return new BadRequestException($message, $args);
            case self::HTTP_RESPONSE_CODE_UNAUTHORIZED:
                return new UnauthorizedException($message, $args);
            case self::HTTP_RESPONSE_CODE_FORBIDDEN:
                return new ForbiddenException($message, $args);
            case self::HTTP_RESPONSE_CODE_NOT_FOUND:
                return new NotFoundException($message, $args);
            case self::HTTP_RESPONSE_CODE_METHOD_NOT_ALLOWED:
                return new MethodNotAllowedException($message, $args);
            case self::HTTP_RESPONSE_CODE_TOO_MANY_REQUESTS:
                return new ToManyRequestsException($message, $args);
            case self::HTTP_RESPONSE_CODE_INTERNAL_SERVER_ERROR:
                return new PleaseContactBunqException($message, $args);
            default:
                return new UnknownApiErrorException($message, $args);
        }
    }
}
