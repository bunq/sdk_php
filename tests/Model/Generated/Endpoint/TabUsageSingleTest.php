<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Context\BunqContext;
use bunq\Model\Generated\Endpoint\TabItemShop;
use bunq\Model\Generated\Endpoint\TabUsageSingle;
use bunq\Model\Generated\Object\Amount;
use bunq\test\BunqSdkTestBase;
use bunq\test\Config;

/**
 * Tests:
 *  TabUsageSingle
 *  TabItemShop
 */
class TabUsageSingleTest extends BunqSdkTestBase
{
    /**
     *  Field constants
     */
    const TAB_DESCRIPTION = 'Pay the tab for PHP test please';
    const TAB_STATUS_BEFORE = 'OPEN';
    const TAB_STATUS_AFTER = 'WAITING_FOR_PAYMENT';
    const ITEM_DESCRIPTION = 'Expansive PHP tea';

    /**
     * The currency that this tab will be charged in.
     */
    const TAB_CURRENCY = 'EUR';

    /**
     * The amount of money the tab and tab item will cost.
     */
    const AMOUNT_IN_EUR = '0.02';

    /**
     * @var string
     */
    private static $tabUuid;

    /**
     * Tests the creation of a tab.
     *
     * This test and all its dependants have no assertion as of its testing to see if the code runs without errors.
     */
    public function testCreateTab()
    {
        if (BunqContext::getUserContext()->isOnlyUserPersonSet()) {
            static::markTestSkipped('Only user company can create tabs.');
        }

        static::$tabUuid = TabUsageSingle::create(
            $this->getCashRegisterId(),
            self::TAB_DESCRIPTION,
            self::TAB_STATUS_BEFORE,
            new Amount(self::AMOUNT_IN_EUR, self::TAB_CURRENCY)
        )->getValue();
    }

    /**
     * Tests adding a new tab item to an existing tab.
     *
     * @depends testCreateTab
     */
    public function testAddItemToTab()
    {
        TabItemShop::create(
            $this->getCashRegisterId(),
            static::$tabUuid,
            self::ITEM_DESCRIPTION,
            null,
            null,
            null,
            null,
            null,
            new Amount(self::AMOUNT_IN_EUR, self::TAB_CURRENCY)
        );
    }

    /**
     * Tests updating a tab after adding an item to it.
     *
     * @depends testAddItemToTab
     */
    public function testUpdateTab()
    {
        TabUsageSingle::update(
            $this->getCashRegisterId(),
            static::$tabUuid,
            null,
            self::TAB_STATUS_AFTER
        );
    }
}
