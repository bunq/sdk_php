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
     * The users this filter pertains to.
     *
     * @var string[]
     */
    protected $allUserId;

    /**
     * The MAs this filter pertains to.
     *
     * @var string[]
     */
    protected $allMonetaryAccountId;

    /**
     * Type of verification required for the connection.
     *
     * @var string[]
     */
    protected $allVerificationType;

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
     * The users this filter pertains to. OPTIONAL FOR BACKWARD COMPATIBILITY
     *
     * @var string[]|null
     */
    protected $allUserIdFieldForRequest;

    /**
     * The MAs this filter pertains to. OPTIONAL FOR BACKWARD COMPATIBILITY
     *
     * @var string[]|null
     */
    protected $allMonetaryAccountIdFieldForRequest;

    /**
     * Type of verification required for the connection.
     *
     * @var string[]|null
     */
    protected $allVerificationTypeFieldForRequest;

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
     * @param string[]|null $allUserId The users this filter pertains to.
     * OPTIONAL FOR BACKWARD COMPATIBILITY
     * @param string[]|null $allMonetaryAccountId The MAs this filter pertains
     * to. OPTIONAL FOR BACKWARD COMPATIBILITY
     * @param string[]|null $allVerificationType Type of verification required
     * for the connection.
     */
    public function __construct(string  $category, string  $notificationTarget, array  $allUserId = null, array  $allMonetaryAccountId = null, array  $allVerificationType = null)
    {
        $this->categoryFieldForRequest = $category;
        $this->allUserIdFieldForRequest = $allUserId;
        $this->allMonetaryAccountIdFieldForRequest = $allMonetaryAccountId;
        $this->allVerificationTypeFieldForRequest = $allVerificationType;
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
     * The users this filter pertains to.
     *
     * @return string[]
     */
    public function getAllUserId()
    {
        return $this->allUserId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string[] $allUserId
     */
    public function setAllUserId($allUserId)
    {
        $this->allUserId = $allUserId;
    }

    /**
     * The MAs this filter pertains to.
     *
     * @return string[]
     */
    public function getAllMonetaryAccountId()
    {
        return $this->allMonetaryAccountId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string[] $allMonetaryAccountId
     */
    public function setAllMonetaryAccountId($allMonetaryAccountId)
    {
        $this->allMonetaryAccountId = $allMonetaryAccountId;
    }

    /**
     * Type of verification required for the connection.
     *
     * @return string[]
     */
    public function getAllVerificationType()
    {
        return $this->allVerificationType;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string[] $allVerificationType
     */
    public function setAllVerificationType($allVerificationType)
    {
        $this->allVerificationType = $allVerificationType;
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

        if (!is_null($this->allUserId)) {
            return false;
        }

        if (!is_null($this->allMonetaryAccountId)) {
            return false;
        }

        if (!is_null($this->allVerificationType)) {
            return false;
        }

        if (!is_null($this->notificationTarget)) {
            return false;
        }

        return true;
    }
}
