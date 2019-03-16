<?php declare(strict_types=1);

namespace bunq\Http;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Interface RequestRertier
 * @package bunq\Http
 */
interface RequestRetryer
{
    /**
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    public function retryRequest(RequestInterface $request): ResponseInterface;
}
