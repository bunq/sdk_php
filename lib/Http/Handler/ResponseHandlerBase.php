<?php
namespace bunq\Http\Handler;

use Psr\Http\Message\ResponseInterface;

/**
 */
abstract class ResponseHandlerBase
{
    /**
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    abstract public function execute(ResponseInterface $response);
}
