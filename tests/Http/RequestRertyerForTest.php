<?php declare(strict_types=1);


namespace bunq\test\Http;

use bunq\Http\RequestRetryer;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class RequesRertyerForTest
 * @package bunq\test\Http
 */
class RequestRertyerForTest implements RequestRetryer
{
    /**
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    public function retryRequest(RequestInterface $request): ResponseInterface
    {
        return new Response();
    }
}