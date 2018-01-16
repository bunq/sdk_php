<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Address;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\AttachmentMonetaryAccountPayment;
use bunq\Model\Generated\Object\Geolocation;
use bunq\Model\Generated\Object\LabelMonetaryAccount;

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
    const FIELD_BUNQTO_STATUS = 'bunqto_status';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET ='Payment';

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
     * Create a new Payment.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(ApiContext $apiContext, array $requestMap, int $userId, int $monetaryAccountId, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId, $monetaryAccountId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Get a specific previous Payment.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $paymentId
     * @param string[] $customHeaders
     *
     * @return BunqResponsePayment
     */
    public static function get(ApiContext $apiContext, int $userId, int $monetaryAccountId, int $paymentId, array $customHeaders = []): BunqResponsePayment
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $monetaryAccountId, $paymentId]
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
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentList
     */
    public static function listing(ApiContext $apiContext, int $userId, int $monetaryAccountId, array $params = [], array $customHeaders = []): BunqResponsePaymentList
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $monetaryAccountId]
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
     */
    public function setAllowChat($allowChat)
    {
        $this->allowChat = $allowChat;
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

        return true;
    }
}
