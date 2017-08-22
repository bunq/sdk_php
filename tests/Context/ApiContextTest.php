<?php
namespace bunq\tests\Context;

use bunq\Context\ApiContext;
use bunq\test\BunqSdkTestBase;

/**
 * @author Daniil Belyakov <daniil@bunq.com>
 * @since 20170822 Initial creation.
 */
class ApiContextTest extends BunqSdkTestBase
{
    /**
     * Path to a temporary context file.
     */
    const CONTEXT_FILE_PATH_TEST = __DIR__ . '/context-save-restore-test.conf';

    /**
     */
    public static function setUpBeforeClass()
    {
        static::$apiContext = static::createApiContext();
    }

    /**
     */
    public function testApiContextSerializeDeserialize()
    {
        $apiContextJson = static::$apiContext->toJson();
        $apiContextDeSerialised = ApiContext::fromJson($apiContextJson);

        static::assertEquals($apiContextJson, $apiContextDeSerialised->toJson());
    }

    /**
     */
    public function testApiContextSaveRestore()
    {
        $apiContextJson = static::$apiContext->toJson();
        static::$apiContext->save(self::CONTEXT_FILE_PATH_TEST);
        $apiContextRestored = ApiContext::restore(self::CONTEXT_FILE_PATH_TEST);

        static::assertEquals($apiContextJson, $apiContextRestored->toJson());
    }
}
