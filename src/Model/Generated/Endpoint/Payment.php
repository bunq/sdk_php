<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Address;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\AttachmentMonetaryAccountPayment;
use bunq\Model\Generated\Object\Geolocation;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
use bunq\Model\Generated\Object\Pointer;
use bunq\Model\Generated\Object\RequestInquiryReference;

/**
 * Using Payment, you can send payments to bunq and non-bunq users from your
 * bunq MonetaryAccounts. This can be done using bunq Aliases or IBAN
 * Aliases. When transferring money to other bunq MonetaryAccounts you can
 * also refer to Attachments. These will be received by the counter-party as
 * part of the Payment. You can also retrieve a single Payment or all
 * executed Payments of a specific monetary account.
 *
 * @generated
 */
class Payment extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/payment';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/payment/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/payment';

    /**
     * Field constants.
     */
    const FIELD_AMOUNT = 'amount';
    const FIELD_COUNTERPARTY_ALIAS = 'counterparty_alias';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_ATTACHMENT = 'attachment';
    const FIELD_MERCHANT_REFERENCE = 'merchant_reference';
    const FIELD_ALLOW_BUNQTO = 'allow_bunqto';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'Payment';

    /**
     * The id of the created Payment.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp when the Payment was done.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp when the Payment was last updated (will be updated when
     * chat messages are received).
     *
     * @var string
     */
    protected $updated;

    /**
     * The id of the MonetaryAccount the Payment was made to or from (depending
     * on whether this is an incoming or outgoing Payment).
     *
     * @var int
     */
    protected $monetaryAccountId;

    /**
     * The Amount transferred by the Payment. Will be negative for outgoing
     * Payments and positive for incoming Payments (relative to the
     * MonetaryAccount indicated by monetary_account_id).
     *
     * @var Amount
     */
    protected $amount;

    /**
     * The LabelMonetaryAccount containing the public information of 'this'
     * (party) side of the Payment.
     *
     * @var LabelMonetaryAccount
     */
    protected $alias;

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
     * The type of Payment, can be BUNQ, EBA_SCT, EBA_SDD, IDEAL, SWIFT or FIS
     * (card).
     *
     * @var string
     */
    protected $type;

    /**
     * The sub-type of the Payment, can be PAYMENT, WITHDRAWAL, REVERSAL,
     * REQUEST, BILLING, SCT, SDD or NLO.
     *
     * @var string
     */
    protected $subType;

    /**
     * The status of the bunq.to payment.
     *
     * @var string
     */
    protected $bunqtoStatus;

    /**
     * The sub status of the bunq.to payment.
     *
     * @var string
     */
    protected $bunqtoSubStatus;

    /**
     * The status of the bunq.to payment.
     *
     * @var string
     */
    protected $bunqtoShareUrl;

    /**
     * When bunq.to payment is about to expire.
     *
     * @var string
     */
    protected $bunqtoExpiry;

    /**
     * The timestamp of when the bunq.to payment was responded to.
     *
     * @var string
     */
    protected $bunqtoTimeResponded;

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
     * The id of the PaymentBatch if this Payment was part of one.
     *
     * @var int
     */
    protected $batchId;

    /**
     * The id of the JobScheduled if the Payment was scheduled.
     *
     * @var int
     */
    protected $scheduledId;

    /**
     * A shipping Address provided with the Payment, currently unused.
     *
     * @var Address
     */
    protected $addressShipping;

    /**
     * A billing Address provided with the Payment, currently unused.
     *
     * @var Address
     */
    protected $addressBilling;

    /**
     * The Geolocation where the Payment was done from.
     *
     * @var Geolocation
     */
    protected $geolocation;

    /**
     * Whether or not chat messages are allowed.
     *
     * @var bool
     */
    protected $allowChat;

    /**
     * The reference to the object used for split the bill. Can be
     * RequestInquiry or RequestInquiryBatch
     *
     * @var RequestInquiryReference[]
     */
    protected $requestReferenceSplitTheBill;

    /**
     * The new balance of the monetary account after the mutation.
     *
     * @var Amount
     */
    protected $balanceAfterMutation;

    /**
     * The Amount to transfer with the Payment. Must be bigger than 0 and
     * smaller than the MonetaryAccount's balance.
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
     * The description for the Payment. Maximum 140 characters for Payments to
     * external IBANs, 9000 characters for Payments to only other bunq
     * MonetaryAccounts. Field is required but can be an empty string.
     *
     * @var string
     */
    protected $descriptionFieldForRequest;

    /**
     * The Attachments to attach to the Payment.
     *
     * @var AttachmentMonetaryAccountPayment[]|null
     */
    protected $attachmentFieldForRequest;

    /**
     * Optional data to be included with the Payment specific to the merchant.
     *
     * @var string|null
     */
    protected $merchantReferenceFieldForRequest;

    /**
     * Whether or not sending a bunq.to payment is allowed.
     *
     * @var bool|null
     */
    protected $allowBunqtoFieldForRequest;

    /**
     * @param Amount $amount The Amount to transfer with the Payment. Must be
     * bigger than 0 and smaller than the MonetaryAccount's balance.
     * @param Pointer $counterpartyAlias The Alias of the party we are
     * transferring the money to. Can be an Alias of type EMAIL or PHONE_NUMBER
     * (for bunq MonetaryAccounts or bunq.to payments) or IBAN (for external
     * bank account).
     * @param string $description The description for the Payment. Maximum 140
     * characters for Payments to external IBANs, 9000 characters for Payments
     * to only other bunq MonetaryAccounts. Field is required but can be an
     * empty string.
     * @param AttachmentMonetaryAccountPayment[]|null $attachment The
     * Attachments to attach to the Payment.
     * @param string|null $merchantReference Optional data to be included with
     * the Payment specific to the merchant.
     * @param bool|null $allowBunqto Whether or not sending a bunq.to payment is
     * allowed.
     */
    public function __construct(
        Amount $amount,
        Pointer $counterpartyAlias,
        string $description,
        array $attachment = null,
        string $merchantReference = null,
        bool $allowBunqto = null
    ) {
        $this->amountFieldForRequest = $amount;
        $this->counterpartyAliasFieldForRequest = $counterpartyAlias;
        $this->descriptionFieldForRequest = $description;
        $this->attachmentFieldForRequest = $attachment;
        $this->merchantReferenceFieldForRequest = $merchantReference;
        $this->allowBunqtoFieldForRequest = $allowBunqto;
    }

    /**
     * Create a new Payment.
     *
     * @param Amount $amount The Amount to transfer with the Payment. Must be
     * bigger than 0 and smaller than the MonetaryAccount's balance.
     * @param Pointer $counterpartyAlias The Alias of the party we are
     * transferring the money to. Can be an Alias of type EMAIL or PHONE_NUMBER
     * (for bunq MonetaryAccounts or bunq.to payments) or IBAN (for external
     * bank account).
     * @param string $description The description for the Payment. Maximum 140
     * characters for Payments to external IBANs, 9000 characters for Payments
     * to only other bunq MonetaryAccounts. Field is required but can be an
     * empty string.
     * @param int|null $monetaryAccountId
     * @param AttachmentMonetaryAccountPayment[]|null $attachment The
     * Attachments to attach to the Payment.
     * @param string|null $merchantReference Optional data to be included with
     * the Payment specific to the merchant.
     * @param bool|null $allowBunqto Whether or not sending a bunq.to payment is
     * allowed.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        Amount $amount,
        Pointer $counterpartyAlias,
        string $description,
        int $monetaryAccountId = null,
        array $attachment = null,
        string $merchantReference = null,
        bool $allowBunqto = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            [
                self::FIELD_AMOUNT => $amount,
                self::FIELD_COUNTERPARTY_ALIAS => $counterpartyAlias,
                self::FIELD_DESCRIPTION => $description,
                self::FIELD_ATTACHMENT => $attachment,
                self::FIELD_MERCHANT_REFERENCE => $merchantReference,
                self::FIELD_ALLOW_BUNQTO => $allowBunqto,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Get a specific previous Payment.
     *
     * @param int $paymentId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponsePayment
     */
    public static function get(
        int $paymentId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponsePayment {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $paymentId]
            ),
            [],
            $customHeaders
        );

        return BunqResponsePayment::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Get a listing of all Payments performed on a given MonetaryAccount
     * (incoming and outgoing).
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentList
     */
    public static function listing(
        int $monetaryAccountId = null,
        array $params = [],
        array $customHeaders = []
    ): BunqResponsePaymentList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            $params,
            $customHeaders
        );

        return BunqResponsePaymentList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the created Payment.
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
     * The timestamp when the Payment was done.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp when the Payment was last updated (will be updated when
     * chat messages are received).
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The id of the MonetaryAccount the Payment was made to or from (depending
     * on whether this is an incoming or outgoing Payment).
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
     * The type of Payment, can be BUNQ, EBA_SCT, EBA_SDD, IDEAL, SWIFT or FIS
     * (card).
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
     * The sub-type of the Payment, can be PAYMENT, WITHDRAWAL, REVERSAL,
     * REQUEST, BILLING, SCT, SDD or NLO.
     *
     * @return string
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * @param string $subType
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setSubType($subType)
    {
        $this->subType = $subType;
    }

    /**
     * The status of the bunq.to payment.
     *
     * @return string
     */
    public function getBunqtoStatus()
    {
        return $this->bunqtoStatus;
    }

    /**
     * @param string $bunqtoStatus
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setBunqtoStatus($bunqtoStatus)
    {
        $this->bunqtoStatus = $bunqtoStatus;
    }

    /**
     * The sub status of the bunq.to payment.
     *
     * @return string
     */
    public function getBunqtoSubStatus()
    {
        return $this->bunqtoSubStatus;
    }

    /**
     * @param string $bunqtoSubStatus
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setBunqtoSubStatus($bunqtoSubStatus)
    {
        $this->bunqtoSubStatus = $bunqtoSubStatus;
    }

    /**
     * The status of the bunq.to payment.
     *
     * @return string
     */
    public function getBunqtoShareUrl()
    {
        return $this->bunqtoShareUrl;
    }

    /**
     * @param string $bunqtoShareUrl
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setBunqtoShareUrl($bunqtoShareUrl)
    {
        $this->bunqtoShareUrl = $bunqtoShareUrl;
    }

    /**
     * When bunq.to payment is about to expire.
     *
     * @return string
     */
    public function getBunqtoExpiry()
    {
        return $this->bunqtoExpiry;
    }

    /**
     * @param string $bunqtoExpiry
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setBunqtoExpiry($bunqtoExpiry)
    {
        $this->bunqtoExpiry = $bunqtoExpiry;
    }

    /**
     * The timestamp of when the bunq.to payment was responded to.
     *
     * @return string
     */
    public function getBunqtoTimeResponded()
    {
        return $this->bunqtoTimeResponded;
    }

    /**
     * @param string $bunqtoTimeResponded
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setBunqtoTimeResponded($bunqtoTimeResponded)
    {
        $this->bunqtoTimeResponded = $bunqtoTimeResponded;
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
     * The id of the PaymentBatch if this Payment was part of one.
     *
     * @return int
     */
    public function getBatchId()
    {
        return $this->batchId;
    }

    /**
     * @param int $batchId
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setBatchId($batchId)
    {
        $this->batchId = $batchId;
    }

    /**
     * The id of the JobScheduled if the Payment was scheduled.
     *
     * @return int
     */
    public function getScheduledId()
    {
        return $this->scheduledId;
    }

    /**
     * @param int $scheduledId
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setScheduledId($scheduledId)
    {
        $this->scheduledId = $scheduledId;
    }

    /**
     * A shipping Address provided with the Payment, currently unused.
     *
     * @return Address
     */
    public function getAddressShipping()
    {
        return $this->addressShipping;
    }

    /**
     * @param Address $addressShipping
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setAddressShipping($addressShipping)
    {
        $this->addressShipping = $addressShipping;
    }

    /**
     * A billing Address provided with the Payment, currently unused.
     *
     * @return Address
     */
    public function getAddressBilling()
    {
        return $this->addressBilling;
    }

    /**
     * @param Address $addressBilling
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setAddressBilling($addressBilling)
    {
        $this->addressBilling = $addressBilling;
    }

    /**
     * The Geolocation where the Payment was done from.
     *
     * @return Geolocation
     */
    public function getGeolocation()
    {
        return $this->geolocation;
    }

    /**
     * @param Geolocation $geolocation
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setGeolocation($geolocation)
    {
        $this->geolocation = $geolocation;
    }

    /**
     * Whether or not chat messages are allowed.
     *
     * @return bool
     */
    public function getAllowChat()
    {
        return $this->allowChat;
    }

    /**
     * @param bool $allowChat
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setAllowChat($allowChat)
    {
        $this->allowChat = $allowChat;
    }

    /**
     * The reference to the object used for split the bill. Can be
     * RequestInquiry or RequestInquiryBatch
     *
     * @return RequestInquiryReference[]
     */
    public function getRequestReferenceSplitTheBill()
    {
        return $this->requestReferenceSplitTheBill;
    }

    /**
     * @param RequestInquiryReference[] $requestReferenceSplitTheBill
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setRequestReferenceSplitTheBill($requestReferenceSplitTheBill)
    {
        $this->requestReferenceSplitTheBill = $requestReferenceSplitTheBill;
    }

    /**
     * The new balance of the monetary account after the mutation.
     *
     * @return Amount
     */
    public function getBalanceAfterMutation()
    {
        return $this->balanceAfterMutation;
    }

    /**
     * @param Amount $balanceAfterMutation
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setBalanceAfterMutation($balanceAfterMutation)
    {
        $this->balanceAfterMutation = $balanceAfterMutation;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->created)) {
            return false;
        }

        if (!is_null($this->updated)) {
            return false;
        }

        if (!is_null($this->monetaryAccountId)) {
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

        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->subType)) {
            return false;
        }

        if (!is_null($this->bunqtoStatus)) {
            return false;
        }

        if (!is_null($this->bunqtoSubStatus)) {
            return false;
        }

        if (!is_null($this->bunqtoShareUrl)) {
            return false;
        }

        if (!is_null($this->bunqtoExpiry)) {
            return false;
        }

        if (!is_null($this->bunqtoTimeResponded)) {
            return false;
        }

        if (!is_null($this->attachment)) {
            return false;
        }

        if (!is_null($this->merchantReference)) {
            return false;
        }

        if (!is_null($this->batchId)) {
            return false;
        }

        if (!is_null($this->scheduledId)) {
            return false;
        }

        if (!is_null($this->addressShipping)) {
            return false;
        }

        if (!is_null($this->addressBilling)) {
            return false;
        }

        if (!is_null($this->geolocation)) {
            return false;
        }

        if (!is_null($this->allowChat)) {
            return false;
        }

        if (!is_null($this->requestReferenceSplitTheBill)) {
            return false;
        }

        if (!is_null($this->balanceAfterMutation)) {
            return false;
        }

        return true;
    }
}
