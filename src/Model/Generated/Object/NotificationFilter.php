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
     * @param string $notificationDeliveryMethod
     * @param string $notificationTarget
     * @param string $category
     */
    public function __construct($notificationDeliveryMethod, $notificationTarget, $category)
    {
        $this->notificationDeliveryMethod = $notificationDeliveryMethod;
        $this->notificationTarget = $notificationTarget;
        $this->category = $category;
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
     */
    public function setNotificationDeliveryMethod(string $notificationDeliveryMethod)
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
     */
    public function setNotificationTarget(string $notificationTarget)
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
     */
    public function setCategory(string $category)
    {
        $this->category = $category;
    }
}
