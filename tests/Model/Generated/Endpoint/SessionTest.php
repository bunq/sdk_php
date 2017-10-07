<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Model\Generated\Endpoint\Session;
use bunq\test\BunqSdkTestBase;

/**
 * Tests:
 *  Session
 */
class SessionTest extends BunqSdkTestBase
{
    /**
     *  The id of the session that we want to delete.
     */
    const SESSION_ID_DUMMY = 0;

    /**
     * Full name of context config file to use for testing.
     */
    const FILENAME_CONTEXT_CONFIG = __DIR__ . '/../bunq-test.conf';

    /**
     * Delete's the current session.
     *
     * This test has no assertion as of its testing to see if the code runs without errors.
     */
    public function testDeleteSession()
    {
        $apiContext = static::getApiContext();

        Session::delete($apiContext, self::SESSION_ID_DUMMY);
    }

    /**
     */
    public static function tearDownAfterClass()
    {
        unlink(static::FILENAME_CONTEXT_CONFIG);
    }
}
