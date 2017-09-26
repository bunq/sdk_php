<?php
namespace bunq\Http\Handler;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 */
class HandlerUtil
{
    /**
     * Middleware that applies a map function to the request before passing to
     * the next handler.
     *
     * @param RequestHandlerBase $requestHandler
     *
     * @return callable
     */
    public static function applyRequestHandler(RequestHandlerBase $requestHandler): callable
    {
        return function (callable $handler) use ($requestHandler) {
            return function ($request, array $options) use ($handler, $requestHandler) {
                return $handler($requestHandler->execute($request), $options);
            };
        };
    }

    /**
     * Middleware that applies a map function to the resolved promise's
     * response.
     *
     * @param ResponseHandlerBase $responseHandler
     *
     * @return callable
     */
    public static function applyResponseHandler(ResponseHandlerBase $responseHandler): callable
    {
        return function (callable $handler) use ($responseHandler) {
            return function (RequestInterface $request, array $options) use ($handler, $responseHandler) {
                return $handler($request, $options)->then(
                    function (ResponseInterface $response) use ($responseHandler) {
                        return $responseHandler->execute($response);
                    }
                );
            };
        };
    }
}
