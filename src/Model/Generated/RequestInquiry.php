<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Model\BunqModel;
use bunq\Model\Generated\Object\Address;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\BunqId;
use bunq\Model\Generated\Object\Geolocation;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
use bunq\Model\Generated\Object\LabelUser;

/**
 * RequestInquiry, aka 'RFP' (Request for Payment), is one of the innovative
 * features that bunq offers. To request payment from another bunq account a
 * new Request Inquiry is created. As with payments you can add attachments
 * to a RFP. Requests for Payment are the foundation for a number of
 * consumer features like 'Split the bill' and 'Request forwarding'. We
 * invite you to invent your own based on the bunq api!
 *
 * @generated
 */
class RequestInquiry extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_AMOUNT_INQUIRED = 'amount_inquired';
    const FIELD_COUNTERPARTY_ALIAS = 'counterparty_alias';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_ATTACHMENT = 'attachment';
    const FIELD_MERCHANT_REFERENCE = 'merchant_reference';
    const FIELD_STATUS = 'status';
    const FIELD_MINIMUM_AGE = 'minimum_age';
    const FIELD_REQUIRE_ADDRESS = 'require_address';
    const FIELD_WANT_TIP = 'want_tip';
    const FIELD_ALLOW_AMOUNT_LOWER = 'allow_amount_lower';
    const FIELD_ALLOW_AMOUNT_HIGHER = 'allow_amount_higher';
    const FIELD_ALLOW_BUNQME = 'allow_bunqme';
    const FIELD_REDIRECT_URL = 'redirect_url';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/request-inquiry';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/request-inquiry/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/request-inquiry';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/request-inquiry/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'RequestInquiry';

    /**
     * The id of the created RequestInquiry.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the payment request's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the payment request's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The timestamp of when the payment request was responded to.
     *
     * @var string
     */
    protected $timeResponded;

    /**
     * The timestamp of when the payment request expired.
     *
     * @var string
     */
    protected $timeExpiry;

    /**
     * The id of the monetary account the request response applies to.
     *
     * @var int
     */
    protected $monetaryAccountId;

    /**
     * The requested amount.
     *
     * @var Amount
     */
    protected $amountInquired;

    /**
     * The responded amount.
     *
     * @var Amount
     */
    protected $amountResponded;

    /**
     * The label that's displayed to the counterparty with the mutation.
     * Includes user.
     *
     * @var LabelUser
     */
    protected $userAliasCreated;

    /**
     * The label that's displayed to the counterparty with the mutation.
     * Includes user.
     *
     * @var LabelUser
     */
    protected $userAliasRevoked;

    /**
     * The LabelMonetaryAccount with the public information of the
     * MonetaryAccount the money was requested from.
     *
     * @var LabelMonetaryAccount
     */
    protected $counterpartyAlias;

    /**
     * The description of the inquiry.
     *
     * @var string
     */
    protected $description;

    /**
     * The client's custom reference that was attached to the request and the
     * mutation.
     *
     * @var string
     */
    protected $merchantReference;

    /**
     * The attachments attached to the payment.
     *
     * @var BunqId[]
     */
    protected $attachment;

    /**
     * The status of the request.
     *
     * @var string
     */
    protected $status;

    /**
     * The id of the batch if the request was part of a batch.
     *
     * @var int
     */
    protected $batchId;

    /**
     * The id of the scheduled job if the request was scheduled.
     *
     * @var int
     */
    protected $scheduledId;

    /**
     * The minimum age the user accepting the RequestInquiry must have.
     *
     * @var int
     */
    protected $minimumAge;

    /**
     * Whether or not an address must be provided on accept.
     *
     * @var string
     */
    protected $requireAddress;

    /**
     * The url that points to the bunq.me request.
     *
     * @var string
     */
    protected $bunqmeShareUrl;

    /**
     * The URL which the user is sent to after accepting or rejecting the
     * Request.
     *
     * @var string
     */
    protected $redirectUrl;

    /**
     * The shipping address provided by the accepting user if an address was
     * requested.
     *
     * @var Address
     */
    protected $addressShipping;

    /**
     * The billing address provided by the accepting user if an address was
     * requested.
     *
     * @var Address
     */
    protected $addressBilling;

    /**
     * The geolocation where the payment was done.
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
     * Create a new payment request.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return int
     */
    public static function create(ApiContext $apiContext, array $requestMap, $userId, $monetaryAccountId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $response = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId, $monetaryAccountId]
            ),
            $requestMap,
            $customHeaders
        );

        return static::processForId($response);
    }

    /**
     * Revoke a request for payment, by updating the status to REVOKED.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $requestInquiryId
     * @param string[] $customHeaders
     *
     * @return BunqModel|RequestInquiry
     */
    public static function update(ApiContext $apiContext, array $requestMap, $userId, $monetaryAccountId, $requestInquiryId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $response = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [$userId, $monetaryAccountId, $requestInquiryId]
            ),
            $requestMap,
            $customHeaders
        );

        return static::fromJson($response);
    }

    /**
     * Get all payment requests for a user's monetary account.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqModel[]|RequestInquiry[]
     */
    public static function listing(ApiContext $apiContext, $userId, $monetaryAccountId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $response = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $monetaryAccountId]
            ),
            $customHeaders
        );

        return static::fromJsonList($response, self::OBJECT_TYPE);
    }

    /**
     * Get the details of a specific payment request, including its status.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $requestInquiryId
     * @param string[] $customHeaders
     *
     * @return BunqModel|RequestInquiry
     */
    public static function get(ApiContext $apiContext, $userId, $monetaryAccountId, $requestInquiryId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $response = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $monetaryAccountId, $requestInquiryId]
            ),
            $customHeaders
        );

        return static::fromJson($response);
    }

    /**
     * The id of the created RequestInquiry.
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
     * The timestamp of the payment request's creation.
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
     * The timestamp of the payment request's last update.
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
     * The timestamp of when the payment request was responded to.
     *
     * @return string
     */
    public function getTimeResponded()
    {
        return $this->timeResponded;
    }

    /**
     * @param string $timeResponded
     */
    public function setTimeResponded($timeResponded)
    {
        $this->timeResponded = $timeResponded;
    }

    /**
     * The timestamp of when the payment request expired.
     *
     * @return string
     */
    public function getTimeExpiry()
    {
        return $this->timeExpiry;
    }

    /**
     * @param string $timeExpiry
     */
    public function setTimeExpiry($timeExpiry)
    {
        $this->timeExpiry = $timeExpiry;
    }

    /**
     * The id of the monetary account the request response applies to.
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
     * The requested amount.
     *
     * @return Amount
     */
    public function getAmountInquired()
    {
        return $this->amountInquired;
    }

    /**
     * @param Amount $amountInquired
     */
    public function setAmountInquired(Amount $amountInquired)
    {
        $this->amountInquired = $amountInquired;
    }

    /**
     * The responded amount.
     *
     * @return Amount
     */
    public function getAmountResponded()
    {
        return $this->amountResponded;
    }

    /**
     * @param Amount $amountResponded
     */
    public function setAmountResponded(Amount $amountResponded)
    {
        $this->amountResponded = $amountResponded;
    }

    /**
     * The label that's displayed to the counterparty with the mutation.
     * Includes user.
     *
     * @return LabelUser
     */
    public function getUserAliasCreated()
    {
        return $this->userAliasCreated;
    }

    /**
     * @param LabelUser $userAliasCreated
     */
    public function setUserAliasCreated(LabelUser $userAliasCreated)
    {
        $this->userAliasCreated = $userAliasCreated;
    }

    /**
     * The label that's displayed to the counterparty with the mutation.
     * Includes user.
     *
     * @return LabelUser
     */
    public function getUserAliasRevoked()
    {
        return $this->userAliasRevoked;
    }

    /**
     * @param LabelUser $userAliasRevoked
     */
    public function setUserAliasRevoked(LabelUser $userAliasRevoked)
    {
        $this->userAliasRevoked = $userAliasRevoked;
    }

    /**
     * The LabelMonetaryAccount with the public information of the
     * MonetaryAccount the money was requested from.
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
    public function setCounterpartyAlias(LabelMonetaryAccount $counterpartyAlias)
    {
        $this->counterpartyAlias = $counterpartyAlias;
    }

    /**
     * The description of the inquiry.
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
     * The client's custom reference that was attached to the request and the
     * mutation.
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
     * The attachments attached to the payment.
     *
     * @return BunqId[]
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @param BunqId[] $attachment
     */
    public function setAttachment(array$attachment)
    {
        $this->attachment = $attachment;
    }

    /**
     * The status of the request.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The id of the batch if the request was part of a batch.
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
     * The id of the scheduled job if the request was scheduled.
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
     * The minimum age the user accepting the RequestInquiry must have.
     *
     * @return int
     */
    public function getMinimumAge()
    {
        return $this->minimumAge;
    }

    /**
     * @param int $minimumAge
     */
    public function setMinimumAge($minimumAge)
    {
        $this->minimumAge = $minimumAge;
    }

    /**
     * Whether or not an address must be provided on accept.
     *
     * @return string
     */
    public function getRequireAddress()
    {
        return $this->requireAddress;
    }

    /**
     * @param string $requireAddress
     */
    public function setRequireAddress($requireAddress)
    {
        $this->requireAddress = $requireAddress;
    }

    /**
     * The url that points to the bunq.me request.
     *
     * @return string
     */
    public function getBunqmeShareUrl()
    {
        return $this->bunqmeShareUrl;
    }

    /**
     * @param string $bunqmeShareUrl
     */
    public function setBunqmeShareUrl($bunqmeShareUrl)
    {
        $this->bunqmeShareUrl = $bunqmeShareUrl;
    }

    /**
     * The URL which the user is sent to after accepting or rejecting the
     * Request.
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param string $redirectUrl
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }

    /**
     * The shipping address provided by the accepting user if an address was
     * requested.
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
    public function setAddressShipping(Address $addressShipping)
    {
        $this->addressShipping = $addressShipping;
    }

    /**
     * The billing address provided by the accepting user if an address was
     * requested.
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
    public function setAddressBilling(Address $addressBilling)
    {
        $this->addressBilling = $addressBilling;
    }

    /**
     * The geolocation where the payment was done.
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
    public function setGeolocation(Geolocation $geolocation)
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
}
