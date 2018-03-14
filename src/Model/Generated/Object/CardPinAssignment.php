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
     * @var int
     */
    protected $monetaryAccountId;

    /**
     * @param string $type
     * @param string $pinCode
     * @param int $monetaryAccountId
     */
    public function __construct($type, $pinCode, $monetaryAccountId)
    {
        $this->type = $type;
        $this->pinCode = $pinCode;
        $this->monetaryAccountId = $monetaryAccountId;
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
     * @return int
     */
    public function getMonetaryAccountId()
    {
        return $this->monetaryAccountId;
    }

    /**
     * @param int $monetaryAccountId
     */
    public function setMonetaryAccountId($monetaryAccountId)
    {
        $this->monetaryAccountId = $monetaryAccountId;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
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
