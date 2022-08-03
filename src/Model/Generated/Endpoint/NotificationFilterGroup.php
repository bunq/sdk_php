<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Manage the notification filter groups for a user.
 *
 * @generated
 */
class NotificationFilterGroup extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/notification-filter-group';
    const ENDPOINT_URL_LISTING = 'user/%s/notification-filter-group';

    /**
     * Field constants.
     */
    const FIELD_GROUP = 'group';
    const FIELD_STATUS_PUSH = 'status_push';
    const FIELD_STATUS_EMAIL = 'status_email';

    /**
     * Object type.
     */
    const OBJECT_TYPE_POST = 'NotificationFilterGroup';
    const OBJECT_TYPE_GET = 'NotificationFilterGroup';

    /**
     * The notification filter group.
     *
     * @var string
     */
    protected $group;

    /**
     * The status for push messaging.
     *
     * @var string
     */
    protected $statusPush;

    /**
     * The status for emails.
     *
     * @var string
     */
    protected $statusEmail;

    /**
     * The notification filter group.
     *
     * @var string
     */
    protected $groupFieldForRequest;

    /**
     * The status for push messaging.
     *
     * @var string
     */
    protected $statusPushFieldForRequest;

    /**
     * The status for emails.
     *
     * @var string
     */
    protected $statusEmailFieldForRequest;

    /**
     * @param string $group The notification filter group.
     * @param string $statusPush The status for push messaging.
     * @param string $statusEmail The status for emails.
     */
    public function __construct(string  $group, string  $statusPush, string  $statusEmail)
    {
        $this->groupFieldForRequest = $group;
        $this->statusPushFieldForRequest = $statusPush;
        $this->statusEmailFieldForRequest = $statusEmail;
    }

    /**
     * @param string $group The notification filter group.
     * @param string $statusPush The status for push messaging.
     * @param string $statusEmail The status for emails.
     * @param string[] $customHeaders
     *
     * @return BunqResponseNotificationFilterGroup
     */
    public static function create(string  $group, string  $statusPush, string  $statusEmail, array $customHeaders = []): BunqResponseNotificationFilterGroup
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [self::FIELD_GROUP => $group,
self::FIELD_STATUS_PUSH => $statusPush,
self::FIELD_STATUS_EMAIL => $statusEmail],
            $customHeaders
        );

        return BunqResponseNotificationFilterGroup::castFromBunqResponse(
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
     * @return BunqResponseNotificationFilterGroupList
     */
    public static function listing( array $params = [], array $customHeaders = []): BunqResponseNotificationFilterGroupList
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

        return BunqResponseNotificationFilterGroupList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The notification filter group.
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $group
     */
    public function setGroup($group)
    {
        $this->group = $group;
    }

    /**
     * The status for push messaging.
     *
     * @return string
     */
    public function getStatusPush()
    {
        return $this->statusPush;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $statusPush
     */
    public function setStatusPush($statusPush)
    {
        $this->statusPush = $statusPush;
    }

    /**
     * The status for emails.
     *
     * @return string
     */
    public function getStatusEmail()
    {
        return $this->statusEmail;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $statusEmail
     */
    public function setStatusEmail($statusEmail)
    {
        $this->statusEmail = $statusEmail;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->group)) {
            return false;
        }

        if (!is_null($this->statusPush)) {
            return false;
        }

        if (!is_null($this->statusEmail)) {
            return false;
        }

        return true;
    }
}
