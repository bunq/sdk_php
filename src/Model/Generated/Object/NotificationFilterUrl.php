<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class NotificationFilterUrl extends BunqModel
{
    /**
     * The notification category that will match this notification filter.
     *
     * @var string
     */
    protected $category;

    /**
     * The URL to which the callback should be made.
     *
     * @var string
     */
    protected $notificationTarget;

    /**
     * The notification category that will match this notification filter.
     *
     * @var string
     */
    protected $categoryFieldForRequest;

    /**
     * The URL to which the callback should be made.
     *
     * @var string
     */
    protected $notificationTargetFieldForRequest;

    /**
     * @param string $category           The notification category that will match this
     *                                   notification filter.
     * @param string $notificationTarget The URL to which the callback should be
     *                                   made.
     */
    public function __construct(string $category, string $notificationTarget)
    {
        $this->categoryFieldForRequest = $category;
        $this->notificationTargetFieldForRequest = $notificationTarget;
    }

    /**
     * The notification category that will match this notification filter.
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
     *             constructor.
     *
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * The URL to which the callback should be made.
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
     *             constructor.
     *
     */
    public function setNotificationTarget($notificationTarget)
    {
        $this->notificationTarget = $notificationTarget;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->category)) {
            return false;
        }

        if (!is_null($this->notificationTarget)) {
            return false;
        }

        return true;
    }
}
