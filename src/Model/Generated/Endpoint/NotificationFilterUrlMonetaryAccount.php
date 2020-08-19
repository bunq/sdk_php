<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\NotificationFilterUrl;

/**
 * Manage the url notification filters for a user.
 *
 * @generated
 */
class NotificationFilterUrlMonetaryAccount extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/notification-filter-url';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/notification-filter-url';

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
     * this monetary account.
     *
     * @var NotificationFilterUrl[]
     */
    protected $notificationFilters;

    /**
     * The types of notifications that will result in a url notification for
     * this monetary account.
     *
     * @var NotificationFilterUrl[]|null
     */
    protected $notificationFiltersFieldForRequest;

    /**
     * @param NotificationFilterUrl[]|null $notificationFilters The types of
     * notifications that will result in a url notification for this monetary
     * account.
     */
    public function __construct(array $notificationFilters = null)
    {
        $this->notificationFiltersFieldForRequest = $notificationFilters;
    }

    /**
     * @param int|null $monetaryAccountId
     * @param NotificationFilterUrl[]|null $notificationFilters The types of
     * notifications that will result in a url notification for this monetary
     * account.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        int $monetaryAccountId = null,
        array $notificationFilters = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
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
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseNotificationFilterUrlMonetaryAccountList
     */
    public static function listing(
        int $monetaryAccountId = null,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseNotificationFilterUrlMonetaryAccountList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseNotificationFilterUrlMonetaryAccountList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The types of notifications that will result in a url notification for
     * this monetary account.
     *
     * @return NotificationFilterUrl[]
     */
    public function getNotificationFilters()
    {
        return $this->notificationFilters;
    }

    /**
     * @param NotificationFilterUrl[] $notificationFilters
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
