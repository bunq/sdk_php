<?php declare(strict_types=1);


namespace bunq\Http\Handler;


use bunq\Http\ApiClient;
use phpDocumentor\Reflection\Types\This;
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
     * @var RequestRetryert
     */
    private $retryer;

    /**
     * ResponseHandlerRateLimit constructor.
     * @param ApiClient $client
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
            usleep(1500);
            return $this->retryer->retryRequest($request);
        }

        return $response;
    }
}