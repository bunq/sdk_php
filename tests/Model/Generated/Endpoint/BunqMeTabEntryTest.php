<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Model\Generated\Endpoint\BunqMeTab;
use bunq\Model\Generated\Endpoint\BunqMeTabEntry;
use bunq\Model\Generated\Object\Amount;
use bunq\test\BunqSdkTestBase;

/**
 * Tests:
 * BunqMeTab
 * BunqMeTabEntry
 */
class BunqMeTabEntryTest extends BunqSdkTestBase
{
    /**
     * Test constants.
     */
    const ENTRY_DESCRIPTION = 'test';

    /**
     */
    public function testBunqMeTab()
    {
        $response = BunqMeTab::create(
            new BunqMeTabEntry(
                self::ENTRY_DESCRIPTION,
                new Amount(self::PAYMENT_AMOUNT_DEFAULT, self::MONETARY_ACCOUNT_CURRENCY)
            )
        );

        $tab = BunqMeTab::get($response->getValue());

        static::assertNotNull($tab);
    }
}
