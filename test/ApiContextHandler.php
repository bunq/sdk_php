<?php
namespace bunq\test;

use bunq\Context\ApiContext;
use bunq\Exception\ApiException;
use bunq\Exception\BunqException;
use bunq\Model\Generated\User;
use bunq\Util\BunqEnumApiEnvironmentType;

/**
 * Checks if the session token is still valid, if not will initialize a new ApiContext
 */
class ApiContextHandler
{
    /**
     * Path to the test configuration file
     */
    const PATH_CONFIG = 'bunq-test.conf';

    /**
     * Device description for PHP unit tests
     */
    const DEVICE_DESCRIPTION = 'PHP unit tests';

    /**
     * Calls IsSessionActive to check if the sessoin token is still active and returns the ApiContext.
     *
     * @return ApiContext
     */
    public static function getApiContext()
    {
        if (self::IsSessionActive()) {
            return ApiContext::restore(static::PATH_CONFIG);
        } else {
            $apiContext = ApiContext::create(BunqEnumApiEnvironmentType::SANDBOX(), TestConfig::getApiKey(),
                static::DEVICE_DESCRIPTION, [TestConfig::getIpAddress()]);
            $apiContext->save(self::PATH_CONFIG);

            return $apiContext;
        }
    }

    /**
     * Catches BunqEception if the conf file does not exist.
     * Catches ApiExceptoin if the session is inactive.
     *
     * @return bool
     */
    private static function IsSessionActive()
    {
        try {
            $apiContext = ApiContext::restore(static::PATH_CONFIG);
            User::listing($apiContext);

            return true;
        } catch (ApiException $exception) {
            return false;
        } catch (BunqException $exception) {
            return false;
        }
    }
}
