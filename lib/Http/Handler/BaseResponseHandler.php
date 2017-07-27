<?php
namespace bunq\Http\Handler;

use Psr\Http\Message\ResponseInterface;

/**
 */
abstract class BaseResponseHandler
{
    /**
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    abstract public function execute(ResponseInterface $response);
}
