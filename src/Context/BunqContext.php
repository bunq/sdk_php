<?php
namespace bunq\Context;

use bunq\Exception\BunqException;

/**
 */
class BunqContext
{
    /**
     * Error constants.
     */
    const ERROR_API_CONTEXT_HAS_NOT_BEEN_LOADED = 'apiContext has not been loaded.';
    const ERROR_USER_CONTEXT_NOT_LOADED = 'userContext has not been loaded, you can load this by loading apiContext.';

    /**
     * @var ApiContext
     */
    protected static $apiContext;

    /**
     * @var UserContext
     */
    protected static $userContext;

    /**
     */
    private function __construct()
    {
    }

    /**
     * @param ApiContext $apiContext
     */
    public static function loadApiContext(ApiContext $apiContext)
    {
        static::$apiContext = $apiContext;
        static::$userContext = new UserContext(
            $apiContext->getSessionContext()->getUserId(),
            $apiContext->getSessionContext()->getUserReference()
        );
        static::$userContext->initMainMonetaryAccount();
    }

    /**
     * @return ApiContext
     */
    public static function getApiContext(): ApiContext
    {
        static::assertApiContextHasBeenLoaded();

        return static::$apiContext;
    }

    /**
     * @return UserContext
     * @throws BunqException
     */
    public static function getUserContext(): UserContext
    {
        if (is_null(static::$userContext)) {
            throw new BunqException(self::ERROR_USER_CONTEXT_NOT_LOADED);
        } else {
            return static::$userContext;
        }
    }

    /**
     * @param ApiContext $apiContext
     */
    public static function updateApiContext(ApiContext $apiContext)
    {
        static::assertApiContextHasBeenLoaded();

        static::$apiContext = $apiContext;
    }

    /**
     * @return bool
     * @throws BunqException
     */
    private static function assertApiContextHasBeenLoaded(): bool
    {
        if (is_null(static::$apiContext)) {
            throw new BunqException(self::ERROR_API_CONTEXT_HAS_NOT_BEEN_LOADED);
        }

        return true;
    }
}
