<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\NotificationFilterUrl;

/**
 * Manage the url notification filters for a user.
 *
 * @generated
 */
class NotificationFilterUrlUser extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/notification-filter-url';
    const ENDPOINT_URL_LISTING = 'user/%s/notification-filter-url';

    /**
     * Field constants.
     */
    const FIELD_NOTIFICATION_FILTERS = 'notification_filters';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'NotificationFilterUrl';

    /**
     * The types of notifications that will result in a url notification for
     * this user.
     *
     * @var NotificationFilterUrl[]
     */
    protected $notificationFilters;

    /**
     * The types of notifications that will result in a url notification for
     * this user.
     *
     * @var NotificationFilterUrl[]|null
     */
    protected $notificationFiltersFieldForRequest;

    /**
     * @param NotificationFilterUrl[]|null $notificationFilters The types of
     * notifications that will result in a url notification for this user.
     */
    public function __construct(array  $notificationFilters = null)
    {
        $this->notificationFiltersFieldForRequest = $notificationFilters;
    }

    /**
     * @param NotificationFilterUrl[]|null $notificationFilters The types of
     * notifications that will result in a url notification for this user.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(array  $notificationFilters = null, array $customHeaders = []): BunqResponseInt
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

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseNotificationFilterUrlUserList
     */
    public static function listing( array $params = [], array $customHeaders = []): BunqResponseNotificationFilterUrlUserList
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

        return BunqResponseNotificationFilterUrlUserList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The types of notifications that will result in a url notification for
     * this user.
     *
     * @return NotificationFilterUrl[]
     */
    public function getNotificationFilters()
    {
        return $this->notificationFilters;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param NotificationFilterUrl[] $notificationFilters
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
