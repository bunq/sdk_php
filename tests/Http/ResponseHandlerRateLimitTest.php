<?php declare(strict_types=1);

namespace bunq\test\Http;

use bunq\Http\Handler\ResponseHandlerRateLimit;
use bunq\test\BunqSdkTestBase;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

/**
 * Class ResponseHandlerRateLimitTest
 * @package bunq\test\Http
 */
class ResponseHandlerRateLimitTest extends BunqSdkTestBase
{
    /**
     */
    public function testExecute()
    {
        $sut = new ResponseHandlerRateLimit(new RequestRertyerForTest());

        $response = $sut->execute(new Response(429), new Request('GET', 'https://whatthecommit.com/index.txt'));

        static::assertEquals(200, $response->getStatusCode());
    }

    /**
     */
    public function testActualRequest()
    {
        static::markTestSkipped('how do we want to test this');
    }
}
