<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class DraftPaymentEntry extends BunqModel
{
    /**
     * The amount of the payment.
     *
     * @var Amount
     */
    protected $amount;

    /**
     * The LabelMonetaryAccount containing the public information of the other
     * (counterparty) side of the DraftPayment.
     *
     * @var LabelMonetaryAccount
     */
    protected $counterpartyAlias;

    /**
     * The description for the DraftPayment. Maximum 140 characters for
     * DraftPayments to external IBANs, 9000 characters for DraftPayments to
     * only other bunq MonetaryAccounts.
     *
     * @var string
     */
    protected $description;

    /**
     * Optional data to be included with the Payment specific to the merchant.
     *
     * @var string
     */
    protected $merchantReference;

    /**
     * The Attachments attached to the DraftPayment.
     *
     * @var AttachmentMonetaryAccountPayment[]
     */
    protected $attachment;

    /**
     * Whether or not sending a bunq.to payment is allowed.
     *
     * @var bool
     */
    protected $allowBunqto;

    /**
     * The id of the draft payment entry.
     *
     * @var int
     */
    protected $id;

    /**
     * The LabelMonetaryAccount containing the public information of 'this'
     * (party) side of the DraftPayment.
     *
     * @var LabelMonetaryAccount
     */
    protected $alias;

    /**
     * The type of the draft payment entry.
     *
     * @var string
     */
    protected $type;

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
     * The id of the draft payment entry.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The amount of the payment.
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
     * (party) side of the DraftPayment.
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
     * (counterparty) side of the DraftPayment.
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
     * The description for the DraftPayment. Maximum 140 characters for
     * DraftPayments to external IBANs, 9000 characters for DraftPayments to
     * only other bunq MonetaryAccounts.
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
     * Optional data to be included with the Payment specific to the merchant.
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
     * The type of the draft payment entry.
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
     * The Attachments attached to the DraftPayment.
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
}
