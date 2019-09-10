<?php
namespace bunq\Model\Core;

use bunq\Http\ApiClient;
use bunq\Model\Generated\Endpoint\BunqResponseNotificationFilterUrlMonetaryAccountList;
use bunq\Model\Generated\Endpoint\NotificationFilterUrlMonetaryAccount;
use bunq\Model\Generated\Object\NotificationFilterUrl;

/**
 */
class NotificationFilterUrlMonetaryAccountInternal extends NotificationFilterUrlMonetaryAccount
{
    /**
     * Create notification filters with list response type.
     *
     * @param int|null $monetaryAccountId
     * @param NotificationFilterUrl[] $allNotificationFilter
     * @param string[] $allCustomHeader
     *
     * @return BunqResponseNotificationFilterUrlMonetaryAccountList
     */
    public static function createWithListResponse(
        int $monetaryAccountId = null,
        array $allNotificationFilter = [],
        array $allCustomHeader = []
    ): BunqResponseNotificationFilterUrlMonetaryAccountList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            [self::FIELD_NOTIFICATION_FILTERS => $allNotificationFilter],
            $allCustomHeader
        );

        return BunqResponseNotificationFilterUrlMonetaryAccountList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }
}
