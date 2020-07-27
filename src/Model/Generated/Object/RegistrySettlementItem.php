<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Endpoint\RegistryMembership;

/**
 * @generated
 */
class RegistrySettlementItem extends BunqModel
{
    /**
     * The amount of the RegistrySettlementItem.
     *
     * @var Amount
     */
    protected $amount;

    /**
     * The membership of the user that has to pay.
     *
     * @var RegistryMembership
     */
    protected $membershipPaying;

    /**
     * The membership of the user that will receive money.
     *
     * @var RegistryMembership
     */
    protected $membershipReceiving;

    /**
     * The LabelMonetaryAccount of the user that has to pay the request.
     *
     * @var LabelMonetaryAccount
     */
    protected $payingUserAlias;

    /**
     * The LabelMonetaryAccount of the user that will receive the amount.
     *
     * @var LabelMonetaryAccount
     */
    protected $receivingUserAlias;

    /**
     * The amount of the RegistrySettlementItem.
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
     * The membership of the user that has to pay.
     *
     * @return RegistryMembership
     */
    public function getMembershipPaying()
    {
        return $this->membershipPaying;
    }

    /**
     * @param RegistryMembership $membershipPaying
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setMembershipPaying($membershipPaying)
    {
        $this->membershipPaying = $membershipPaying;
    }

    /**
     * The membership of the user that will receive money.
     *
     * @return RegistryMembership
     */
    public function getMembershipReceiving()
    {
        return $this->membershipReceiving;
    }

    /**
     * @param RegistryMembership $membershipReceiving
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setMembershipReceiving($membershipReceiving)
    {
        $this->membershipReceiving = $membershipReceiving;
    }

    /**
     * The LabelMonetaryAccount of the user that has to pay the request.
     *
     * @return LabelMonetaryAccount
     */
    public function getPayingUserAlias()
    {
        return $this->payingUserAlias;
    }

    /**
     * @param LabelMonetaryAccount $payingUserAlias
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setPayingUserAlias($payingUserAlias)
    {
        $this->payingUserAlias = $payingUserAlias;
    }

    /**
     * The LabelMonetaryAccount of the user that will receive the amount.
     *
     * @return LabelMonetaryAccount
     */
    public function getReceivingUserAlias()
    {
        return $this->receivingUserAlias;
    }

    /**
     * @param LabelMonetaryAccount $receivingUserAlias
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setReceivingUserAlias($receivingUserAlias)
    {
        $this->receivingUserAlias = $receivingUserAlias;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->amount)) {
            return false;
        }

        if (!is_null($this->membershipPaying)) {
            return false;
        }

        if (!is_null($this->membershipReceiving)) {
            return false;
        }

        if (!is_null($this->payingUserAlias)) {
            return false;
        }

        if (!is_null($this->receivingUserAlias)) {
            return false;
        }

        return true;
    }
}
