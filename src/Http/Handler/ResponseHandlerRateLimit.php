<?php
declare(strict_types=1);

namespace bunq\Http\Handler;

use bunq\Http\RequestRetryer;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ResponseHandlerRateLimit
 * @package bunq\Http\Handler
 */
class ResponseHandlerRateLimit extends ResponseHandlerBase
{
    /**
     * @var RequestRetryer
     */
    private $retryer;

    /**
     * @var string[]
     */
    private $retryMap;

    /**
     * ResponseHandlerRateLimit constructor.
     * @param RequestRetryer $retryer
     */
    public function __construct(RequestRetryer $retryer)
    {
        $this->retryer = $retryer;
    }

    /**
     * @param ResponseInterface $response
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     */
    public function execute(ResponseInterface $response, RequestInterface $request): ResponseInterface
    {
        if ($response->getStatusCode() === 429) {
            $this->incRetryCounter($request->getUri()->__toString());
            if ($this->retryMap[$request->getUri()->__toString()] > 2) {
                // let the error handler further down the stack handle the 429 error
                return $response;
            }
            usleep(1100 * $this->retryMap[$request->getUri()->__toString()]);
            return $this->retryer->retryRequest($request);
        }

        $this->retryMap[$request->getUri()->__toString()] = 0;

        return $response;
    }

    /**
     * @param string $url
     */
    private function incRetryCounter(string $url)
    {
        if (isset($this->retryMap[$url])) {
            $this->retryMap[$url]++;
        } else {
            $this->retryMap[$url] = 1;
        }
    }
}
