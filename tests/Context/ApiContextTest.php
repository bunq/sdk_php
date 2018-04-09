<?php
namespace bunq\test\Context;

use bunq\Context\ApiContext;
use bunq\Context\BunqContext;
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
     * String format constants.
     */
    const STRING_EMPTY = '';

    /**
     * Exception message constants.
     */
    const EXPECTED_EXCEPTION_MESSAGE = '"" can not be used as a device description, must be a non empty string.';

    /**
     */
    public function testApiContextSerializeDeserialize()
    {
        $apiContextJson = BunqContext::getApiContext()->toJson();
        $apiContextDeSerialised = ApiContext::fromJson($apiContextJson);

        static::assertEquals($apiContextJson, $apiContextDeSerialised->toJson());
    }

    /**
     */
    public function testApiContextSaveRestore()
    {
        $apiContextJson = BunqContext::getApiContext()->toJson();
        BunqContext::getApiContext()->save(self::CONTEXT_FILE_PATH_TEST);
        $apiContextRestored = ApiContext::restore(self::CONTEXT_FILE_PATH_TEST);

        static::assertEquals($apiContextJson, $apiContextRestored->toJson());
    }

    /**
     */
    public function testCreateAdiContextWithInvalidDescription()
    {
        $this->expectException(BunqException::class);
        $this->expectExceptionMessage(self::EXPECTED_EXCEPTION_MESSAGE);
        ApiContext::create(BunqEnumApiEnvironmentType::SANDBOX(), self::STRING_EMPTY, false);
    }
}
