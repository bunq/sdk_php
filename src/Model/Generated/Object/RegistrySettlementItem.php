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
     * The status of the RequestInquiry or DraftPayment for this settlement
     * item.
     *
     * @var string
     */
    protected $paymentStatus;

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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amount
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param RegistryMembership $membershipPaying
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param RegistryMembership $membershipReceiving
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelMonetaryAccount $payingUserAlias
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelMonetaryAccount $receivingUserAlias
     */
    public function setReceivingUserAlias($receivingUserAlias)
    {
        $this->receivingUserAlias = $receivingUserAlias;
    }

    /**
     * The status of the RequestInquiry or DraftPayment for this settlement
     * item.
     *
     * @return string
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $paymentStatus
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;
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

        if (!is_null($this->paymentStatus)) {
            return false;
        }

        return true;
    }
}
