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
     * The status of the card pin assignment.
     *
     * @var string
     */
    protected $status;

    /**
     * Routing type.
     *
     * @var string
     */
    protected $routingType;

    /**
     * PIN type. Can be PRIMARY, SECONDARY or TERTIARY
     *
     * @var string
     */
    protected $typeFieldForRequest;

    /**
     * Routing type. Can be MANUAL or AUTOMATIC
     *
     * @var string|null
     */
    protected $routingTypeFieldForRequest;

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
     * @param string|null $routingType Routing type. Can be MANUAL or AUTOMATIC
     * @param string|null $pinCode The 4 digit PIN to be assigned to this
     * account.
     * @param int|null $monetaryAccountId The ID of the monetary account to
     * assign to this pin for the card.
     */
    public function __construct(string  $type, string  $routingType = null, string  $pinCode = null, int  $monetaryAccountId = null)
    {
        $this->typeFieldForRequest = $type;
        $this->routingTypeFieldForRequest = $routingType;
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
     * The ID of the monetary account to assign to this pin for the card.
     *
     * @return int
     */
    public function getMonetaryAccountId()
    {
        return $this->monetaryAccountId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $monetaryAccountId
     */
    public function setMonetaryAccountId($monetaryAccountId)
    {
        $this->monetaryAccountId = $monetaryAccountId;
    }

    /**
     * The status of the card pin assignment.
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
     * Routing type.
     *
     * @return string
     */
    public function getRoutingType()
    {
        return $this->routingType;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $routingType
     */
    public function setRoutingType($routingType)
    {
        $this->routingType = $routingType;
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

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->routingType)) {
            return false;
        }

        return true;
    }
}
