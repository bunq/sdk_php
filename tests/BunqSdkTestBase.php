<?php
namespace bunq\test;

use bunq\Context\ApiContext;
use bunq\Context\BunqContext;
use bunq\Exception\ApiException;
use bunq\Exception\BunqException;
use bunq\Model\Generated\Endpoint\User;
use bunq\Util\BunqEnumApiEnvironmentType;
use PHPUnit\Framework\TestCase;

/**
 * The base for all the Bunq SDK tests.
 */
class BunqSdkTestBase extends TestCase
{
    /**
     * Full name of context config file to use for testing.
     */
    const FILENAME_CONTEXT_CONFIG = __DIR__ . '/../bunq-test.conf';

    /**
     * Device description for PHP unit tests
     */
    const DEVICE_DESCRIPTION = 'PHP unit tests';

    /**
     */
    public static function setUpBeforeClass()
    {
        static::ensureApiContextValid();
    }

    /**
     * Ensures the API context is still valid.
     */
    protected static function ensureApiContextValid()
    {
        try {
            $apiContext = ApiContext::restore(static::FILENAME_CONTEXT_CONFIG);
            $apiContext->ensureSessionActive();
        } catch (BunqException $exception) {
            $apiContext = self::createApiContext();
        }

        $apiContext->save(static::FILENAME_CONTEXT_CONFIG);

        BunqContext::loadApiContext($apiContext);
    }

    /**
     * @return ApiContext
     */
    protected static function createApiContext(): ApiContext
    {
        return ApiContext::create(
            BunqEnumApiEnvironmentType::SANDBOX(),
            Config::getApiKey(),
            static::DEVICE_DESCRIPTION,
            Config::getPermittedIps()
        );
    }
}
