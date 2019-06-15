<?php

namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\NotificationFilterPush;

/**
 * Manage the push notification filters for a user.
 *
 * @generated
 */
class NotificationFilterPushUser extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/notification-filter-push';
    const ENDPOINT_URL_LISTING = 'user/%s/notification-filter-push';

    /**
     * Field constants.
     */
    const FIELD_NOTIFICATION_FILTERS = 'notification_filters';

    /**
     * Object type.
     */
    const OBJECT_TYPE_POST = 'NotificationFilterPush';
    const OBJECT_TYPE_GET = 'NotificationFilterPush';

    /**
     * The types of notifications that will result in a push notification for
     * this user.
     *
     * @var NotificationFilterPush[]
     */
    protected $notificationFilters;

    /**
     * The types of notifications that will result in a push notification for
     * this user.
     *
     * @var NotificationFilterPush[]|null
     */
    protected $notificationFiltersFieldForRequest;

    /**
     * @param NotificationFilterPush[]|null $notificationFilters The types of
     *                                                           notifications that will result in a push notification
     *                                                           for this user.
     */
    public function __construct(array $notificationFilters = null)
    {
        $this->notificationFiltersFieldForRequest = $notificationFilters;
    }

    /**
     * @param NotificationFilterPush[]|null $notificationFilters The types of
     *                                                           notifications that will result in a push notification
     *                                                           for this user.
     * @param string[] $customHeaders
     *
     * @return BunqResponseNotificationFilterPushUser
     */
    public static function create(
        array $notificationFilters = null,
        array $customHeaders = []
    ): BunqResponseNotificationFilterPushUser {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [self::FIELD_NOTIFICATION_FILTERS => $notificationFilters],
            $customHeaders
        );

        return BunqResponseNotificationFilterPushUser::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_POST)
        );
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseNotificationFilterPushUserList
     */
    public static function listing(
        array $params = [],
        array $customHeaders = []
    ): BunqResponseNotificationFilterPushUserList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId()]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseNotificationFilterPushUserList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The types of notifications that will result in a push notification for
     * this user.
     *
     * @return NotificationFilterPush[]
     */
    public function getNotificationFilters()
    {
        return $this->notificationFilters;
    }

    /**
     * @param NotificationFilterPush[] $notificationFilters
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setNotificationFilters($notificationFilters)
    {
        $this->notificationFilters = $notificationFilters;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->notificationFilters)) {
            return false;
        }

        return true;
    }
}
