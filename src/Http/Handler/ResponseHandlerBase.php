<?php
namespace bunq\Http\Handler;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 */
abstract class ResponseHandlerBase extends HandlerBase
{
    /**
     * @param ResponseInterface $response
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     */
    abstract public function execute(ResponseInterface $response, RequestInterface $request): ResponseInterface;
}
