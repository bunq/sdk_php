<?php
declare(strict_types=1);

namespace bunq\test\Http;

use bunq\Http\Handler\ResponseHandlerRateLimit;
use bunq\test\BunqSdkTestBase;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ResponseHandlerRateLimitTest
 * @package bunq\test\Http
 */
class ResponseHandlerRateLimitTest extends BunqSdkTestBase
{
    /**
     * @return array
     */
    public function dataProviderTestExecute(): array
    {
        return [
            'retry once' => [
                new Response(429),
                new Request('$method', '$uri'),
                false,
                1
            ],
            'retry twice' => [
                new Response(429),
                new Request('$method', '$uri'),
                true,
                2,
            ],
            'dont retry' => [
                new Response(200),
                new Request('$method', '$uri'),
                true,
                0,
            ],
        ];
    }

    /**
     * @dataProvider dataProviderTestExecute
     */
    public function testExecute(ResponseInterface $response, RequestInterface $request, bool $retry, int $retryCounter)
    {
        $retryer = new RequestRertyerForTest($retry);
        $sut = new ResponseHandlerRateLimit($retryer);

        $response = $sut->execute($response, $request);

        static::assertEquals(200, $response->getStatusCode());
        static::assertEquals($retryCounter, $retryer->getCalledCounter());
    }

    /**
     */
    public function testActualRequest()
    {
        static::markTestSkipped('how do we want to test this');
    }
}
