<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;

/**
 * Endpoint for getting information fulfillments for a user.
 *
 * @generated
 */
class Fulfillment extends BunqModel
{
    /**
     * Type of the information fulfillment.
     *
     * @var string
     */
    protected $type;

    /**
     * The reason why this fulfillment is requested.
     *
     * @var string
     */
    protected $reason;

    /**
     * The translated reason why this fulfillment is requested.
     *
     * @var string
     */
    protected $reasonTranslated;

    /**
     * Status of this fulfillment.
     *
     * @var string
     */
    protected $status;

    /**
     * Time when the information fulfillment becomes mandatory.
     *
     * @var string
     */
    protected $timeMandatory;

    /**
     * The user id this fulfillment is required for.
     *
     * @var int
     */
    protected $userId;

    /**
     * The allowed statusses for this fulfillment.
     *
     * @var string[]
     */
    protected $allStatusAllowed;

    /**
     * Type of the information fulfillment.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The reason why this fulfillment is requested.
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * The translated reason why this fulfillment is requested.
     *
     * @return string
     */
    public function getReasonTranslated()
    {
        return $this->reasonTranslated;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $reasonTranslated
     */
    public function setReasonTranslated($reasonTranslated)
    {
        $this->reasonTranslated = $reasonTranslated;
    }

    /**
     * Status of this fulfillment.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Time when the information fulfillment becomes mandatory.
     *
     * @return string
     */
    public function getTimeMandatory()
    {
        return $this->timeMandatory;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $timeMandatory
     */
    public function setTimeMandatory($timeMandatory)
    {
        $this->timeMandatory = $timeMandatory;
    }

    /**
     * The user id this fulfillment is required for.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * The allowed statusses for this fulfillment.
     *
     * @return string[]
     */
    public function getAllStatusAllowed()
    {
        return $this->allStatusAllowed;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string[] $allStatusAllowed
     */
    public function setAllStatusAllowed($allStatusAllowed)
    {
        $this->allStatusAllowed = $allStatusAllowed;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->reason)) {
            return false;
        }

        if (!is_null($this->reasonTranslated)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->timeMandatory)) {
            return false;
        }

        if (!is_null($this->userId)) {
            return false;
        }

        if (!is_null($this->allStatusAllowed)) {
            return false;
        }

        return true;
    }
}
