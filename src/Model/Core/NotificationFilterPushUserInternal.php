<?php
namespace bunq\Model\Core;

use bunq\Http\ApiClient;
use bunq\Model\Generated\Endpoint\BunqResponseNotificationFilterPushUserList;
use bunq\Model\Generated\Endpoint\NotificationFilterPushUser;
use bunq\Model\Generated\Object\NotificationFilterPush;

/**
 */
class NotificationFilterPushUserInternal extends NotificationFilterPushUser
{
    /**
     * Create notification filters with list response type.
     *
     * @param NotificationFilterPush[] $allNotificationFilter
     * @param string[] $allCustomHeader
     *
     * @return BunqResponseNotificationFilterPushUserList
     */
    public static function createWithListResponse(
        array $allNotificationFilter = [],
        array $allCustomHeader = []
    ): BunqResponseNotificationFilterPushUserList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [self::FIELD_NOTIFICATION_FILTERS => $allNotificationFilter],
            $allCustomHeader
        );

        return BunqResponseNotificationFilterPushUserList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }
}
