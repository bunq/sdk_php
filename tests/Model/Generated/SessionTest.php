<?php
namespace bunq\Model\Generated;

use bunq\test\ApiContextHandler;
use PHPUnit\Framework\TestCase;

/**
 * Tests:
 *  Session
 */
class SessionTest extends TestCase
{
    /**
     *  The id of the session that we want to delete.
     */
    const SESSION_ID_DUMMY = 0;

    /**
     * Delete's the current session.
     *
     * This test has no assertion as of its testing to see if the code runs without errors.
     */
    public function testDeleteSession()
    {
        $apiContext = ApiContextHandler::getApiContext();

        Session::delete($apiContext, self::SESSION_ID_DUMMY);
    }
}
