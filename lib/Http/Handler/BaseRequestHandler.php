<?php
namespace bunq\Http\Handler;

use Psr\Http\Message\RequestInterface;

/**
 */
abstract class BaseRequestHandler
{
    /**
     * @param RequestInterface $request
     * @return RequestInterface
     */
    abstract public function execute(RequestInterface $request);
}
