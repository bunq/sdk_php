<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class SchedulePaymentEntry extends BunqModel
{
    /**
     * The Amount transferred by the Payment. Will be negative for outgoing
     * Payments and positive for incoming Payments (relative to the
     * MonetaryAccount indicated by monetary_account_id).
     *
     * @var Amount
     */
    protected $amount;

    /**
     * The LabelMonetaryAccount containing the public information of the other
     * (counterparty) side of the Payment.
     *
     * @var LabelMonetaryAccount
     */
    protected $counterpartyAlias;

    /**
     * The description for the Payment. Maximum 140 characters for Payments to
     * external IBANs, 9000 characters for Payments to only other bunq
     * MonetaryAccounts.
     *
     * @var string
     */
    protected $description;

    /**
     * The Attachments attached to the Payment.
     *
     * @var AttachmentMonetaryAccountPayment[]
     */
    protected $attachment;

    /**
     * Optional data included with the Payment specific to the merchant.
     *
     * @var string
     */
    protected $merchantReference;

    /**
     * Whether or not sending a bunq.to payment is allowed. Mandatory for
     * publicApi.
     *
     * @var bool
     */
    protected $allowBunqto;

    /**
     * The LabelMonetaryAccount containing the public information of 'this'
     * (party) side of the Payment.
     *
     * @var LabelMonetaryAccount
     */
    protected $alias;

    /**
     * @param Amount $amount
     * @param Pointer $counterpartyAlias
     * @param string $description
     */
    public function __construct(Amount $amount, Pointer $counterpartyAlias, $description)
    {
        $this->amount = $amount;
        $this->counterpartyAlias = $counterpartyAlias;
        $this->description = $description;
    }

    /**
     * The Amount transferred by the Payment. Will be negative for outgoing
     * Payments and positive for incoming Payments (relative to the
     * MonetaryAccount indicated by monetary_account_id).
     *
     * @return Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Amount $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * The LabelMonetaryAccount containing the public information of 'this'
     * (party) side of the Payment.
     *
     * @return LabelMonetaryAccount
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param LabelMonetaryAccount $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * The LabelMonetaryAccount containing the public information of the other
     * (counterparty) side of the Payment.
     *
     * @return LabelMonetaryAccount
     */
    public function getCounterpartyAlias()
    {
        return $this->counterpartyAlias;
    }

    /**
     * @param LabelMonetaryAccount $counterpartyAlias
     */
    public function setCounterpartyAlias($counterpartyAlias)
    {
        $this->counterpartyAlias = $counterpartyAlias;
    }

    /**
     * The description for the Payment. Maximum 140 characters for Payments to
     * external IBANs, 9000 characters for Payments to only other bunq
     * MonetaryAccounts.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * The Attachments attached to the Payment.
     *
     * @return AttachmentMonetaryAccountPayment[]
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @param AttachmentMonetaryAccountPayment[] $attachment
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
    }

    /**
     * Optional data included with the Payment specific to the merchant.
     *
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->merchantReference;
    }

    /**
     * @param string $merchantReference
     */
    public function setMerchantReference($merchantReference)
    {
        $this->merchantReference = $merchantReference;
    }

    /**
     * @return bool
     */
    public function areAllFieldsNull()
    {
        if (!is_null($this->amount)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->counterpartyAlias)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->attachment)) {
            return false;
        }

        if (!is_null($this->merchantReference)) {
            return false;
        }

        return true;
    }
}
