<?php
namespace bunq\Model\Generated;

use bunq\Model\Generated\Object\Amount;
use bunq\test\ApiContextHandler;
use bunq\test\TestConfig;
use PHPUnit\Framework\TestCase;

/**
 * Tests:
 *  TabUsageSingle
 *  TabItemShop
 */
class TabUsageSingleTest extends TestCase
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
     * @var int
     */
    private static $userId;

    /**
     * @var int
     */
    private static $monetaryAccountId;

    /**
     * @var int
     */
    private static $cashRegisterId;

    /**
     * @var string
     */
    private static $tabUuid;

    /**
     */
    public static function setUpBeforeClass()
    {
        static::$userId = TestConfig::getUserId();
        static::$monetaryAccountId = TestConfig::getMonetaryAccountId();
        static::$cashRegisterId = TestConfig::getCashRegisterId();
    }

    /**
     * Deletes the created tab.
     */
    public static function tearDownAfterClass()
    {
        $apiContext = ApiContextHandler::getApiContext();

        TabUsageSingle::delete(
            $apiContext,
            static::$userId,
            static::$monetaryAccountId,
            static::$cashRegisterId,
            static::$tabUuid
        );
    }

    /**
     * Tests the creation of a tab.
     *
     * This test and all its dependants have no assertion as of its testing to see if the code runs without errors.
     */
    public function testCreateTab()
    {
        $apiContext = ApiContextHandler::getApiContext();

        $tabUsageSingleCreateMap = [
            TabUsageSingle::FIELD_DESCRIPTION => self::TAB_DESCRIPTION,
            TabUsageSingle::FIELD_STATUS => self::TAB_STATUS_BEFORE,
            TabUsageSingle::FIELD_AMOUNT_TOTAL => new Amount(self::AMOUNT_IN_EUR, self::TAB_CURRENCY),
        ];
        static::$tabUuid = TabUsageSingle::create(
            $apiContext,
            $tabUsageSingleCreateMap,
            static::$userId,
            static::$monetaryAccountId,
            static::$cashRegisterId
        );
    }

    /**
     * Tests adding a new tab item to an existing tab.
     *
     * @depends testCreateTab
     */
    public function testAddItemToTab()
    {
        $apiContext = ApiContextHandler::getApiContext();

        $tabItemShopMap = [
            TabItemShop::FIELD_DESCRIPTION => self::ITEM_DESCRIPTION,
            TabItemShop::FIELD_AMOUNT => new Amount(self::AMOUNT_IN_EUR, self::TAB_CURRENCY),
        ];
        TabItemShop::create(
            $apiContext,
            $tabItemShopMap,
            static::$userId,
            static::$monetaryAccountId,
            static::$cashRegisterId,
            static::$tabUuid
        );
    }

    /**
     * Tests updating a tab after adding an item to it.
     *
     * @depends testAddItemToTab
     */
    public function testUpdateTab()
    {
        $apiContext = ApiContextHandler::getApiContext();

        $tabUsageSingleUpdateMap = [
            TabUsageSingle::FIELD_STATUS => self::TAB_STATUS_AFTER,
        ];
        TabUsageSingle::update(
            $apiContext,
            $tabUsageSingleUpdateMap,
            static::$userId,
            static::$monetaryAccountId,
            static::$cashRegisterId,
            static::$tabUuid
        );
    }
}
