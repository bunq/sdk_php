<?php
namespace bunq\Model\Core;

use bunq\Http\ApiClient;
use bunq\Model\Generated\Endpoint\BunqResponseNotificationFilterUrlUserList;
use bunq\Model\Generated\Endpoint\NotificationFilterUrlUser;

/**
 */
class NotificationFilterUrlUserInternal extends NotificationFilterUrlUser
{
    /**
     * Create notification filters with list response type.
     *
     * @param array $allNotificationFilter
     *
     * @param array $allCustomHeader
     *
     * @return BunqResponseNotificationFilterUrlUserList
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

        return BunqResponseNotificationFilterUrlUserList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }
}
