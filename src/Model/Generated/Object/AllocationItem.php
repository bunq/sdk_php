<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Endpoint\RegistryMembership;

/**
 * @generated
 */
class AllocationItem extends BunqModel
{
    /**
     * The type of the AllocationItem.
     *
     * @var string
     */
    protected $type;

    /**
     * The membership.
     *
     * @var RegistryMembership
     */
    protected $membership;

    /**
     * The Amount of the AllocationItem.
     *
     * @var Amount
     */
    protected $amount;

    /**
     * The share ratio of the AllocationItem.
     *
     * @var int
     */
    protected $shareRatio;

    /**
     * The Alias of the party we are allocating money for.
     *
     * @var Pointer
     */
    protected $aliasFieldForRequest;

    /**
     * The type of the AllocationItem.
     *
     * @var string
     */
    protected $typeFieldForRequest;

    /**
     * The Amount of the AllocationItem.
     *
     * @var Amount
     */
    protected $amountFieldForRequest;

    /**
     * The share ratio of the AllocationItem.
     *
     * @var int|null
     */
    protected $shareRatioFieldForRequest;

    /**
     * @param Pointer $alias The Alias of the party we are allocating money for.
     * @param string $type The type of the AllocationItem.
     * @param Amount $amount The Amount of the AllocationItem.
     * @param int|null $shareRatio The share ratio of the AllocationItem.
     */
    public function __construct(Pointer $alias, string $type, Amount $amount, int $shareRatio = null)
    {
        $this->aliasFieldForRequest = $alias;
        $this->typeFieldForRequest = $type;
        $this->amountFieldForRequest = $amount;
        $this->shareRatioFieldForRequest = $shareRatio;
    }

    /**
     * The type of the AllocationItem.
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
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The membership.
     *
     * @return RegistryMembership
     */
    public function getMembership()
    {
        return $this->membership;
    }

    /**
     * @param RegistryMembership $membership
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setMembership($membership)
    {
        $this->membership = $membership;
    }

    /**
     * The Amount of the AllocationItem.
     *
     * @return Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Amount $amount
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * The share ratio of the AllocationItem.
     *
     * @return int
     */
    public function getShareRatio()
    {
        return $this->shareRatio;
    }

    /**
     * @param int $shareRatio
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setShareRatio($shareRatio)
    {
        $this->shareRatio = $shareRatio;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->membership)) {
            return false;
        }

        if (!is_null($this->amount)) {
            return false;
        }

        if (!is_null($this->shareRatio)) {
            return false;
        }

        return true;
    }
}
