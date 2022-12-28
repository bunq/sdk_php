<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class TranslinkTransactionEntry extends BunqModel
{
    /**
     * The id of the payment entry.
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
     * (party) side of the payment.
     *
     * @var LabelMonetaryAccount
     */
    protected $alias;

    /**
     * The LabelMonetaryAccount containing the public information of the other
     * (counterparty) side of the payment.
     *
     * @var LabelMonetaryAccount
     */
    protected $counterpartyAlias;

    /**
     * The description for the payment. Maximum 140 characters for payments to
     * external IBANs, 9000 characters for payments to only other bunq
     * MonetaryAccounts.
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
     * The type of the payment entry.
     *
     * @var string
     */
    protected $type;

    /**
     * The Attachments attached to the payment.
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
     * The description for the payment. Maximum 140 characters for payments to
     * external IBANs, 9000 characters for payments to only other bunq
     * MonetaryAccounts. Field is required but can be an empty string.
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
     * The Attachments to attach to the payment.
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
     * @param string $description The description for the payment. Maximum 140
     * characters for payments to external IBANs, 9000 characters for payments
     * to only other bunq MonetaryAccounts. Field is required but can be an
     * empty string.
     * @param string|null $merchantReference Optional data to be included with
     * the Payment specific to the merchant.
     * @param AttachmentMonetaryAccountPayment[]|null $attachment The
     * Attachments to attach to the payment.
     */
    public function __construct(Amount  $amount, Pointer  $counterpartyAlias, string  $description, string  $merchantReference = null, array  $attachment = null)
    {
        $this->amountFieldForRequest = $amount;
        $this->counterpartyAliasFieldForRequest = $counterpartyAlias;
        $this->descriptionFieldForRequest = $description;
        $this->merchantReferenceFieldForRequest = $merchantReference;
        $this->attachmentFieldForRequest = $attachment;
    }

    /**
     * The id of the payment entry.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * The LabelMonetaryAccount containing the public information of 'this'
     * (party) side of the payment.
     *
     * @return LabelMonetaryAccount
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelMonetaryAccount $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * The LabelMonetaryAccount containing the public information of the other
     * (counterparty) side of the payment.
     *
     * @return LabelMonetaryAccount
     */
    public function getCounterpartyAlias()
    {
        return $this->counterpartyAlias;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelMonetaryAccount $counterpartyAlias
     */
    public function setCounterpartyAlias($counterpartyAlias)
    {
        $this->counterpartyAlias = $counterpartyAlias;
    }

    /**
     * The description for the payment. Maximum 140 characters for payments to
     * external IBANs, 9000 characters for payments to only other bunq
     * MonetaryAccounts.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $merchantReference
     */
    public function setMerchantReference($merchantReference)
    {
        $this->merchantReference = $merchantReference;
    }

    /**
     * The type of the payment entry.
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
     * The Attachments attached to the payment.
     *
     * @return AttachmentMonetaryAccountPayment[]
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param AttachmentMonetaryAccountPayment[] $attachment
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
