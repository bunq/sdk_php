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
     * The ID of the monetary account to assign to this pin for the card.
     *
     * @var int
     */
    protected $monetaryAccountId;

    /**
     * PIN type. Can be PRIMARY, SECONDARY or TERTIARY
     *
     * @var string
     */
    protected $typeFieldForRequest;

    /**
     * The 4 digit PIN to be assigned to this account.
     *
     * @var string|null
     */
    protected $pinCodeFieldForRequest;

    /**
     * The ID of the monetary account to assign to this pin for the card.
     *
     * @var int|null
     */
    protected $monetaryAccountIdFieldForRequest;

    /**
     * @param string $type PIN type. Can be PRIMARY, SECONDARY or TERTIARY
     * @param string|null $pinCode The 4 digit PIN to be assigned to this
     * account.
     * @param int|null $monetaryAccountId The ID of the monetary account to
     * assign to this pin for the card.
     */
    public function __construct(string $type, string $pinCode = null, int $monetaryAccountId = null)
    {
        $this->typeFieldForRequest = $type;
        $this->pinCodeFieldForRequest = $pinCode;
        $this->monetaryAccountIdFieldForRequest = $monetaryAccountId;
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
