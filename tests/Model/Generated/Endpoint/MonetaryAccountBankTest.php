<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Model\Generated\Endpoint\MonetaryAccountBank;
use bunq\test\BunqSdkTestBase;
use bunq\test\Config;

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
    private static $monetaryAccountBankToCloseId;

    /**
     *  Deletes the new created monetary account.
     */
    public static function tearDownAfterClass()
    {
        if (!is_null(static::$monetaryAccountBankToCloseId)) {
            MonetaryAccountBank::update(
                static::$monetaryAccountBankToCloseId,
                null,
                null,
                null,
                self::STATUS,
                self::SUB_STATUS,
                self::REASON,
                self::REASON_DESCRIPTION
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
        static::$monetaryAccountBankToCloseId = MonetaryAccountBank::create(
            self::CURRENCY,
            uniqid(self::PREFIX_MONETARY_ACCOUNT_DESCRIPTION)
        )->getValue();

        static::assertTrue(is_integer(static::$monetaryAccountBankToCloseId));
    }
}
