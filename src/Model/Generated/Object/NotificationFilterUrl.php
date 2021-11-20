<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class NotificationFilterUrl extends BunqModel
{
    /**
     * The id of the NotificationFilterUrl.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the NotificationFilterUrl's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the NotificationFilterUrl's last update.
     *
     * @var string
     */
    protected $updated;

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
     * @param string $category The notification category that will match this
     * notification filter.
     * @param string $notificationTarget The URL to which the callback should be
     * made.
     */
    public function __construct(string  $category, string  $notificationTarget)
    {
        $this->categoryFieldForRequest = $category;
        $this->notificationTargetFieldForRequest = $notificationTarget;
    }

    /**
     * The id of the NotificationFilterUrl.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The timestamp of the NotificationFilterUrl's creation.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the NotificationFilterUrl's last update.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
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
     * The URL to which the callback should be made.
     *
     * @return string
     */
    public function getNotificationTarget()
    {
        return $this->notificationTarget;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $notificationTarget
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
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->created)) {
            return false;
        }

        if (!is_null($this->updated)) {
            return false;
        }

        if (!is_null($this->category)) {
            return false;
        }

        if (!is_null($this->notificationTarget)) {
            return false;
        }

        return true;
    }
}
