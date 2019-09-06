<?php
namespace bunq\Model\Core;

use bunq\Http\ApiClient;
use bunq\Model\Generated\Endpoint\BunqResponseNotificationFilterPushUserList;
use bunq\Model\Generated\Endpoint\NotificationFilterPushUser;

/**
 */
class NotificationFilterPushUserInternal extends NotificationFilterPushUser
{
    /**
     * Create notification filters with list response type.
     *
     * @param array $allNotificationFilter
     *
     * @param array $allCustomHeader
     *
     * @return BunqResponseNotificationFilterPushUserList
     */
    public static function createWithListResponse(
        array $allNotificationFilter = [],
        array $allCustomHeader = []
    ) {
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
