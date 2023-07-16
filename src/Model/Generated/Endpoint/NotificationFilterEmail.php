<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\NotificationFilterEmail;

/**
 * Manage the email notification filters for a user.
 *
 * @generated
 */
class NotificationFilterEmail extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/notification-filter-email';
    const ENDPOINT_URL_LISTING = 'user/%s/notification-filter-email';

    /**
     * Field constants.
     */
    const FIELD_NOTIFICATION_FILTERS = 'notification_filters';

    /**
     * Object type.
     */
    const OBJECT_TYPE_POST = 'NotificationFilterEmail';
    const OBJECT_TYPE_GET = 'NotificationFilterEmail';

    /**
     * The types of notifications that will result in a email notification for
     * this user.
     *
     * @var NotificationFilterEmail[]
     */
    protected $notificationFilters;

    /**
     * The types of notifications that will result in a email notification for
     * this user.
     *
     * @var NotificationFilterEmail[]|null
     */
    protected $notificationFiltersFieldForRequest;

    /**
     * @param NotificationFilterEmail[]|null $notificationFilters The types of
     * notifications that will result in a email notification for this user.
     */
    public function __construct(array  $notificationFilters = null)
    {
        $this->notificationFiltersFieldForRequest = $notificationFilters;
    }

    /**
     * @param NotificationFilterEmail[]|null $notificationFilters The types of
     * notifications that will result in a email notification for this user.
     * @param string[] $customHeaders
     *
     * @return BunqResponseNotificationFilterEmail
     */
    public static function create(array  $notificationFilters = null, array $customHeaders = []): BunqResponseNotificationFilterEmail
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [self::FIELD_NOTIFICATION_FILTERS => $notificationFilters],
            $customHeaders
        );

        return BunqResponseNotificationFilterEmail::castFromBunqResponse(
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
     * @return BunqResponseNotificationFilterEmailList
     */
    public static function listing( array $params = [], array $customHeaders = []): BunqResponseNotificationFilterEmailList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId()]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseNotificationFilterEmailList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The types of notifications that will result in a email notification for
     * this user.
     *
     * @return NotificationFilterEmail[]
     */
    public function getNotificationFilters()
    {
        return $this->notificationFilters;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param NotificationFilterEmail[] $notificationFilters
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
