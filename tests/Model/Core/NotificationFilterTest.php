<?php
namespace bunq\test\Model\Core;

use bunq\Context\BunqContext;
use bunq\Model\Core\NotificationFilterPushUserInternal;
use bunq\Model\Core\NotificationFilterUrlMonetaryAccountInternal;
use bunq\Model\Core\NotificationFilterUrlUserInternal;
use bunq\Model\Generated\Endpoint\MonetaryAccountBank;
use bunq\Model\Generated\Object\NotificationFilterPush;
use bunq\Model\Generated\Object\NotificationFilterUrl;
use bunq\test\BunqSdkTestBase;

/**
 * Tests:
 *  NotificationFilterUrlMonetaryAccountInternal
 *  NotificationFilterUrlUserInternal
 *  NotificationFilterPushUserInternal
 */
class NotificationFilterTest extends BunqSdkTestBase
{
    /**
     * Filter constants.
     */
    const FILTER_CATEGORY_MUTATION = 'MUTATION';
    const FILTER_CALLBACK_URL = 'https://test.com/callback';

    /**
     * Test NotificationFilterUrlMonetaryAccount creation.
     */
    public function testNotificationFilterUrlMonetaryAccount()
    {
        $notification = $this->getNotificationFilterUrl();
        $allCreatedNotificationFilter = NotificationFilterUrlMonetaryAccountInternal::createWithListResponse(
            $this->getPrimaryMonetaryAccount()->getId(),
            [$notification]
        )->getValue();

        static::assertTrue(is_array($allCreatedNotificationFilter));
        static::assertTrue(count($allCreatedNotificationFilter) === 1);
    }

    /**
     * Test NotificationFilterUrlUser creation.
     */
    public function testNotificationFilterUrlUser()
    {
        $notification = $this->getNotificationFilterUrl();
        $allCreatedNotificationFilter = NotificationFilterUrlUserInternal::createWithListResponse(
            [$notification]
        )->getValue();

        static::assertTrue(is_array($allCreatedNotificationFilter));
        static::assertTrue(count($allCreatedNotificationFilter) === 1);
    }
    /**
     * Test NotificationFilterPushUser creation.
     */
    public function testNotificationFilterPushUser()
    {
        $notification = $this->getNotificationFilterPush();
        $allCreatedNotificationFilter = NotificationFilterPushUserInternal::createWithListResponse(
            [$notification]
        )->getValue();

        static::assertTrue(is_array($allCreatedNotificationFilter));
        static::assertTrue(count($allCreatedNotificationFilter) === 1);
    }

    /**
     * Test clear all filters.
     */
    public function testNotificationFilterClear()
    {
        $allCreatedNotificationFilterPushUser =
            NotificationFilterPushUserInternal::createWithListResponse()->getValue();
        $allCreatedNotificationFilterUrlUser =
            NotificationFilterUrlUserInternal::createWithListResponse()->getValue();
        $allCreatedNotificationFilterUrlMonetaryAccount =
            NotificationFilterUrlMonetaryAccountInternal::createWithListResponse()->getValue();

        static::assertEmpty($allCreatedNotificationFilterPushUser);
        static::assertEmpty($allCreatedNotificationFilterUrlUser);
        static::assertEmpty($allCreatedNotificationFilterUrlMonetaryAccount);

        static::assertCount(0, NotificationFilterPushUserInternal::listing()->getValue());
        static::assertCount(0, NotificationFilterUrlUserInternal::listing()->getValue());
        static::assertCount(0, NotificationFilterUrlMonetaryAccountInternal::listing()->getValue());
    }

    /**
     * @return NotificationFilterUrl
     */
    private function getNotificationFilterUrl(): NotificationFilterUrl
    {
        return new NotificationFilterUrl(self::FILTER_CATEGORY_MUTATION, self::FILTER_CALLBACK_URL);
    }

    /**
     * @return NotificationFilterPush
     */
    private function getNotificationFilterPush(): NotificationFilterPush
    {
        return new NotificationFilterPush(self::FILTER_CATEGORY_MUTATION);
    }

    /**
     * @return MonetaryAccountBank
     */
    private function getPrimaryMonetaryAccount(): MonetaryAccountBank
    {
        return BunqContext::getUserContext()->getPrimaryMonetaryAccount();
    }
}
