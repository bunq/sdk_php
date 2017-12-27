<?php
namespace bunq\test\Http;

use bunq\Exception\BadRequestException;
use bunq\Model\Generated\Endpoint\UserPerson;
use bunq\test\BunqSdkTestBase;

/**
 * Tests if the response id from a failed request can be retrieved successfully.
 */
class ErrorResponseIdTest extends BunqSdkTestBase
{
    /**
     */
    public function testBadRequestWitResponseId()
    {
        $caughtExcretion = null;

        try {
            UserPerson::get(static::$apiContext, 0);
        } catch (BadRequestException $exception) {
            $caughtExcretion = $exception;
        }

        static::assertNotNull($caughtExcretion);
        static::assertNotNull($caughtExcretion->getResponseId());
    }
}
