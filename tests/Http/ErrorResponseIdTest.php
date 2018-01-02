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
     * Invalid user id to trigger BadRequestException
     */
    const INVALID_USER_PERSON_ID = 0;

    /**
     */
    public function testBadRequestWitResponseId()
    {
        $caughtException = null;

        try {
            UserPerson::get(static::$apiContext, self::INVALID_USER_PERSON_ID);
        } catch (BadRequestException $exception) {
            $caughtException = $exception;
        }

        static::assertNotNull($caughtException);
        static::assertNotNull($caughtException->getResponseId());
    }
}
