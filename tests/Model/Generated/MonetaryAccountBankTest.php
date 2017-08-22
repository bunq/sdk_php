<?php
namespace bunq\Model\Generated;

use bunq\test\BunqSdkTestBase;
use bunq\test\TestConfig;

/**
 * Tests:
 *  MonetaryAccountBank
 */
class MonetaryAccountBankTest extends BunqSdkTestBase
{
    /**
     *  Field constants.
     */
    const STATUS = 'CANCELLED';
    const SUB_STATUS = 'REDEMPTION_VOLUNTARY';
    const REASON = 'OTHER';
    const REASON_DESCRIPTION = 'Because this is a test';
    const CURRENCY = 'EUR';

    /**
     *  Prefix for the monetary account description.
     */
    const PREFIX_MONETARY_ACCOUNT_DESCRIPTION = 'PHPtest_';

    /**
     * @var int
     */
    private static $userId;

    /**
     * @var int
     */
    private static $monetaryAccountBankToCloseId;

    /**
     */
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        static::$userId = TestConfig::getUserId();
    }

    /**
     *  Deletes the new created monetary account.
     */
    public static function tearDownAfterClass()
    {
        if (!is_null(static::$monetaryAccountBankToCloseId)) {
            $apiContext = static::getApiContext();

            $requestMap = [
                MonetaryAccountBank::FIELD_STATUS => self::STATUS,
                MonetaryAccountBank::FIELD_SUB_STATUS => self::SUB_STATUS,
                MonetaryAccountBank::FIELD_REASON => self::REASON,
                MonetaryAccountBank::FIELD_REASON_DESCRIPTION => self::REASON_DESCRIPTION,
            ];

            MonetaryAccountBank::update(
                $apiContext,
                $requestMap,
                static::$userId,
                static::$monetaryAccountBankToCloseId
            );
        }
    }

    /**
     * Test making a new monetary account with an unique description.
     *
     * This test has no assertion as of its testing to see if the code runs without errors.
     */
    public function testCreateNewMonetaryAccount()
    {
        $apiContext = static::getApiContext();
        $requestMap = [
            MonetaryAccountBank::FIELD_CURRENCY => self::CURRENCY,
            MonetaryAccountBank::FIELD_DESCRIPTION => uniqid(self::PREFIX_MONETARY_ACCOUNT_DESCRIPTION),
        ];

        static::$monetaryAccountBankToCloseId = MonetaryAccountBank::create(
            $apiContext,
            $requestMap,
            static::$userId
        )->getValue();
    }
}
