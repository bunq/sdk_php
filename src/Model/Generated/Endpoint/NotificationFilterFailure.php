<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\NotificationFilter;

/**
 * Manage the url notification filters for a user.
 *
 * @generated
 */
class NotificationFilterFailure extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/notification-filter-failure';
    const ENDPOINT_URL_LISTING = 'user/%s/notification-filter-failure';

    /**
     * Field constants.
     */
    const FIELD_NOTIFICATION_FILTER_FAILED_IDS = 'notification_filter_failed_ids';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'NotificationFilterFailure';

    /**
     * The types of notifications that will result in a url notification for
     * this user.
     *
     * @var NotificationFilter[]
     */
    protected $notificationFilters;

    /**
     * The category of the failed notification.
     *
     * @var string
     */
    protected $category;

    /**
     * The event type of the failed notification.
     *
     * @var string
     */
    protected $eventType;

    /**
     * The object id used to generate the body of the notification.
     *
     * @var int
     */
    protected $objectId;

    /**
     * The exception bunq encountered when processing the callback.
     *
     * @var string
     */
    protected $exceptionMessage;

    /**
     * The response code (or null) received from the endpoint.
     *
     * @var int
     */
    protected $responseCode;

    /**
     * The IDs to retry.
     *
     * @var string
     */
    protected $notificationFilterFailedIdsFieldForRequest;

    /**
     * @param string $notificationFilterFailedIds The IDs to retry.
     */
    public function __construct(string  $notificationFilterFailedIds)
    {
        $this->notificationFilterFailedIdsFieldForRequest = $notificationFilterFailedIds;
    }

    /**
     * @param string $notificationFilterFailedIds The IDs to retry.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(string  $notificationFilterFailedIds, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [self::FIELD_NOTIFICATION_FILTER_FAILED_IDS => $notificationFilterFailedIds],
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
     * @return BunqResponseNotificationFilterFailureList
     */
    public static function listing( array $params = [], array $customHeaders = []): BunqResponseNotificationFilterFailureList
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

        return BunqResponseNotificationFilterFailureList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The types of notifications that will result in a url notification for
     * this user.
     *
     * @return NotificationFilter[]
     */
    public function getNotificationFilters()
    {
        return $this->notificationFilters;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param NotificationFilter[] $notificationFilters
     */
    public function setNotificationFilters($notificationFilters)
    {
        $this->notificationFilters = $notificationFilters;
    }

    /**
     * The category of the failed notification.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * The event type of the failed notification.
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $eventType
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    }

    /**
     * The object id used to generate the body of the notification.
     *
     * @return int
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $objectId
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;
    }

    /**
     * The exception bunq encountered when processing the callback.
     *
     * @return string
     */
    public function getExceptionMessage()
    {
        return $this->exceptionMessage;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $exceptionMessage
     */
    public function setExceptionMessage($exceptionMessage)
    {
        $this->exceptionMessage = $exceptionMessage;
    }

    /**
     * The response code (or null) received from the endpoint.
     *
     * @return int
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $responseCode
     */
    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->notificationFilters)) {
            return false;
        }

        if (!is_null($this->category)) {
            return false;
        }

        if (!is_null($this->eventType)) {
            return false;
        }

        if (!is_null($this->objectId)) {
            return false;
        }

        if (!is_null($this->exceptionMessage)) {
            return false;
        }

        if (!is_null($this->responseCode)) {
            return false;
        }

        return true;
    }
}
