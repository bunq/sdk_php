<?php
declare(strict_types=1);


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
     * @var bool
     */
    private $retry;

    /**
     * @var int
     */
    private $calledCounter = 0;

    /**
     * RequestRertyerForTest constructor.
     * @param bool $retry
     */
    public function __construct(bool $retry = false)
    {
        $this->retry = $retry;
    }

    /**
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    public function retryRequest(RequestInterface $request): ResponseInterface
    {
        $this->calledCounter++;

        if ($this->retry) {
            $this->retry = false;
            return $this->retryRequest($request);
        }

        return new Response();
    }

    /**
     * @return int
     */
    public function getCalledCounter(): int
    {
        return $this->calledCounter;
    }
}
