<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\LabelUser;

/**
 * Manage the relation user details.
 *
 * @generated
 */
class RelationUser extends BunqModel
{
    /**
     * The user's ID.
     *
     * @var string
     */
    protected $userId;

    /**
     * The counter user's ID.
     *
     * @var string
     */
    protected $counterUserId;

    /**
     * The user's label.
     *
     * @var LabelUser
     */
    protected $labelUser;

    /**
     * The counter user's label.
     *
     * @var LabelUser
     */
    protected $counterLabelUser;

    /**
     * The requested relation type.
     *
     * @var string
     */
    protected $relationship;

    /**
     * The request's status, only for UPDATE.
     *
     * @var string
     */
    protected $status;

    /**
     * The user's ID.
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * The counter user's ID.
     *
     * @return string
     */
    public function getCounterUserId()
    {
        return $this->counterUserId;
    }

    /**
     * @param string $counterUserId
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCounterUserId($counterUserId)
    {
        $this->counterUserId = $counterUserId;
    }

    /**
     * The user's label.
     *
     * @return LabelUser
     */
    public function getLabelUser()
    {
        return $this->labelUser;
    }

    /**
     * @param LabelUser $labelUser
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setLabelUser($labelUser)
    {
        $this->labelUser = $labelUser;
    }

    /**
     * The counter user's label.
     *
     * @return LabelUser
     */
    public function getCounterLabelUser()
    {
        return $this->counterLabelUser;
    }

    /**
     * @param LabelUser $counterLabelUser
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCounterLabelUser($counterLabelUser)
    {
        $this->counterLabelUser = $counterLabelUser;
    }

    /**
     * The requested relation type.
     *
     * @return string
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * @param string $relationship
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;
    }

    /**
     * The request's status, only for UPDATE.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->userId)) {
            return false;
        }

        if (!is_null($this->counterUserId)) {
            return false;
        }

        if (!is_null($this->labelUser)) {
            return false;
        }

        if (!is_null($this->counterLabelUser)) {
            return false;
        }

        if (!is_null($this->relationship)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        return true;
    }
}
