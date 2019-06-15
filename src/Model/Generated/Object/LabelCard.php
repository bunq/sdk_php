<?php

namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class LabelCard extends BunqModel
{
    /**
     * The public UUID.
     *
     * @var string
     */
    protected $uuid;

    /**
     * The type of the card.
     *
     * @var string
     */
    protected $type;

    /**
     * The second line on the card.
     *
     * @var string
     */
    protected $secondLine;

    /**
     * The date this card will expire.
     *
     * @var string
     */
    protected $expiryDate;

    /**
     * The status of the card.
     *
     * @var string
     */
    protected $status;

    /**
     * The owner of this card.
     *
     * @var LabelUser
     */
    protected $labelUser;

    /**
     * The public UUID.
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * The type of the card.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The second line on the card.
     *
     * @return string
     */
    public function getSecondLine()
    {
        return $this->secondLine;
    }

    /**
     * @param string $secondLine
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setSecondLine($secondLine)
    {
        $this->secondLine = $secondLine;
    }

    /**
     * The date this card will expire.
     *
     * @return string
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @param string $expiryDate
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
    }

    /**
     * The status of the card.
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
     *             constructor.
     *
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The owner of this card.
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
     *             constructor.
     *
     */
    public function setLabelUser($labelUser)
    {
        $this->labelUser = $labelUser;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->uuid)) {
            return false;
        }

        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->secondLine)) {
            return false;
        }

        if (!is_null($this->expiryDate)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->labelUser)) {
            return false;
        }

        return true;
    }
}
