<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class NotificationFilter extends BunqModel
{
    /**
     * The delivery method via which notifications that match this notification
     * filter will be delivered. Possible choices are PUSH for delivery via push
     * notification and URL for delivery via URL callback.
     *
     * @var string
     */
    protected $notificationDeliveryMethod;

    /**
     * The target of notifications that match this notification filter. For URL
     * notification filters this is the URL to which the callback will be made.
     * For PUSH notifications filters this should always be null.
     *
     * @var string
     */
    protected $notificationTarget;

    /**
     * The notification category that will match this notification filter.
     * Possible choices are BILLING, CARD_TRANSACTION_FAILED,
     * CARD_TRANSACTION_SUCCESSFUL, CHAT, DRAFT_PAYMENT, IDEAL, SOFORT,
     * MONETARY_ACCOUNT_PROFILE, MUTATION, PAYMENT, PROMOTION, REQUEST,
     * SCHEDULE_RESULT, SCHEDULE_STATUS, SHARE, SUPPORT, TAB_RESULT,
     * USER_APPROVAL.
     *
     * @var string
     */
    protected $category;

    /**
     * The delivery method via which notifications that match this notification
     * filter will be delivered. Possible choices are PUSH for delivery via push
     * notification and URL for delivery via URL callback.
     *
     * @var string
     */
    protected $notificationDeliveryMethodFieldForRequest;

    /**
     * The target of notifications that match this notification filter. For URL
     * notification filters this is the URL to which the callback will be made.
     * For PUSH notifications filters this should always be null.
     *
     * @var string
     */
    protected $notificationTargetFieldForRequest;

    /**
     * The notification category that will match this notification filter.
     * Possible choices are BILLING, CARD_TRANSACTION_FAILED,
     * CARD_TRANSACTION_SUCCESSFUL, CHAT, DRAFT_PAYMENT, IDEAL, SOFORT,
     * MONETARY_ACCOUNT_PROFILE, MUTATION, PAYMENT, PROMOTION, REQUEST,
     * SCHEDULE_RESULT, SCHEDULE_STATUS, SHARE, SUPPORT, TAB_RESULT,
     * USER_APPROVAL.
     *
     * @var string
     */
    protected $categoryFieldForRequest;

    /**
     * @param string $notificationDeliveryMethod The delivery method via which
     * notifications that match this notification filter will be delivered.
     * Possible choices are PUSH for delivery via push notification and URL for
     * delivery via URL callback.
     * @param string $notificationTarget The target of notifications that match
     * this notification filter. For URL notification filters this is the URL to
     * which the callback will be made. For PUSH notifications filters this
     * should always be null.
     * @param string $category The notification category that will match this
     * notification filter. Possible choices are BILLING,
     * CARD_TRANSACTION_FAILED, CARD_TRANSACTION_SUCCESSFUL, CHAT,
     * DRAFT_PAYMENT, IDEAL, SOFORT, MONETARY_ACCOUNT_PROFILE, MUTATION,
     * PAYMENT, PROMOTION, REQUEST, SCHEDULE_RESULT, SCHEDULE_STATUS, SHARE,
     * SUPPORT, TAB_RESULT, USER_APPROVAL.
     */
    public function __construct(string $notificationDeliveryMethod, string $notificationTarget, string $category)
    {
        $this->notificationDeliveryMethodFieldForRequest = $notificationDeliveryMethod;
        $this->notificationTargetFieldForRequest = $notificationTarget;
        $this->categoryFieldForRequest = $category;
    }

    /**
     * The delivery method via which notifications that match this notification
     * filter will be delivered. Possible choices are PUSH for delivery via push
     * notification and URL for delivery via URL callback.
     *
     * @return string
     */
    public function getNotificationDeliveryMethod()
    {
        return $this->notificationDeliveryMethod;
    }

    /**
     * @param string $notificationDeliveryMethod
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setNotificationDeliveryMethod($notificationDeliveryMethod)
    {
        $this->notificationDeliveryMethod = $notificationDeliveryMethod;
    }

    /**
     * The target of notifications that match this notification filter. For URL
     * notification filters this is the URL to which the callback will be made.
     * For PUSH notifications filters this should always be null.
     *
     * @return string
     */
    public function getNotificationTarget()
    {
        return $this->notificationTarget;
    }

    /**
     * @param string $notificationTarget
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setNotificationTarget($notificationTarget)
    {
        $this->notificationTarget = $notificationTarget;
    }

    /**
     * The notification category that will match this notification filter.
     * Possible choices are BILLING, CARD_TRANSACTION_FAILED,
     * CARD_TRANSACTION_SUCCESSFUL, CHAT, DRAFT_PAYMENT, IDEAL, SOFORT,
     * MONETARY_ACCOUNT_PROFILE, MUTATION, PAYMENT, PROMOTION, REQUEST,
     * SCHEDULE_RESULT, SCHEDULE_STATUS, SHARE, SUPPORT, TAB_RESULT,
     * USER_APPROVAL.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->notificationDeliveryMethod)) {
            return false;
        }

        if (!is_null($this->notificationTarget)) {
            return false;
        }

        if (!is_null($this->category)) {
            return false;
        }

        return true;
    }
}
