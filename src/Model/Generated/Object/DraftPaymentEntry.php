<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class DraftPaymentEntry extends BunqModel
{
    /**
     * The id of the draft payment entry.
     *
     * @var int
     */
    protected $id;

    /**
     * The amount of the payment.
     *
     * @var Amount
     */
    protected $amount;

    /**
     * The LabelMonetaryAccount containing the public information of 'this'
     * (party) side of the DraftPayment.
     *
     * @var LabelMonetaryAccount
     */
    protected $alias;

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
     * The type of the draft payment entry.
     *
     * @var string
     */
    protected $type;

    /**
     * The Attachments attached to the DraftPayment.
     *
     * @var AttachmentMonetaryAccountPayment[]
     */
    protected $attachment;

    /**
     * The amount of the payment.
     *
     * @var Amount
     */
    protected $amountFieldForRequest;

    /**
     * The Alias of the party we are transferring the money to. Can be an Alias
     * of type EMAIL or PHONE_NUMBER (for bunq MonetaryAccounts or bunq.to
     * payments) or IBAN (for external bank account).
     *
     * @var Pointer
     */
    protected $counterpartyAliasFieldForRequest;

    /**
     * The description for the DraftPayment. Maximum 140 characters for
     * DraftPayments to external IBANs, 9000 characters for DraftPayments to
     * only other bunq MonetaryAccounts. Field is required but can be an empty
     * string.
     *
     * @var string
     */
    protected $descriptionFieldForRequest;

    /**
     * Optional data to be included with the Payment specific to the merchant.
     *
     * @var string|null
     */
    protected $merchantReferenceFieldForRequest;

    /**
     * The Attachments to attach to the DraftPayment.
     *
     * @var AttachmentMonetaryAccountPayment[]|null
     */
    protected $attachmentFieldForRequest;

    /**
     * @param Amount $amount The amount of the payment.
     * @param Pointer $counterpartyAlias The Alias of the party we are
     * transferring the money to. Can be an Alias of type EMAIL or PHONE_NUMBER
     * (for bunq MonetaryAccounts or bunq.to payments) or IBAN (for external
     * bank account).
     * @param string $description The description for the DraftPayment. Maximum
     * 140 characters for DraftPayments to external IBANs, 9000 characters for
     * DraftPayments to only other bunq MonetaryAccounts. Field is required but
     * can be an empty string.
     * @param string|null $merchantReference Optional data to be included with
     * the Payment specific to the merchant.
     * @param AttachmentMonetaryAccountPayment[]|null $attachment The
     * Attachments to attach to the DraftPayment.
     */
    public function __construct(
        Amount $amount,
        Pointer $counterpartyAlias,
        string $description,
        string $merchantReference = null,
        array $attachment = null
    ) {
        $this->amountFieldForRequest = $amount;
        $this->counterpartyAliasFieldForRequest = $counterpartyAlias;
        $this->descriptionFieldForRequest = $description;
        $this->merchantReferenceFieldForRequest = $merchantReference;
        $this->attachmentFieldForRequest = $attachment;
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

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

        if (!is_null($this->merchantReference)) {
            return false;
        }

        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->attachment)) {
            return false;
        }

        return true;
    }
}
