<?php
namespace bunq\Http\Handler;

use Psr\Http\Message\RequestInterface;

/**
 */
abstract class RequestHandlerBase
{
    /**
     * @param RequestInterface $request
     * @return RequestInterface
     */
    abstract public function execute(RequestInterface $request);
}
