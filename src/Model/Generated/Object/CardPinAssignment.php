<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class CardPinAssignment extends BunqModel
{
    /**
     * PIN type. Can be PRIMARY, SECONDARY or TERTIARY
     *
     * @var string
     */
    protected $type;

    /**
     * The 4 digit PIN to be assigned to this account.
     *
     * @var string
     */
    protected $pinCode;

    /**
     * The ID of the monetary account to assign to this pin for the card.
     *
     * @var string
     */
    protected $monetaryAccountId;

    /**
     * @param string $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * PIN type. Can be PRIMARY, SECONDARY or TERTIARY
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The ID of the monetary account to assign to this pin for the card.
     *
     * @return string
     */
    public function getMonetaryAccountId()
    {
        return $this->monetaryAccountId;
    }

    /**
     * @param string $monetaryAccountId
     */
    public function setMonetaryAccountId($monetaryAccountId)
    {
        $this->monetaryAccountId = $monetaryAccountId;
    }

    /**
     * @return bool
     */
    public function areAllFieldsNull()
    {
        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->monetaryAccountId)) {
            return false;
        }

        return true;
    }
}
