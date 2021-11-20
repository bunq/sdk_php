<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Address;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\BunqId;
use bunq\Model\Generated\Object\Geolocation;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
use bunq\Model\Generated\Object\LabelUser;
use bunq\Model\Generated\Object\Pointer;
use bunq\Model\Generated\Object\RequestReferenceSplitTheBillAnchorObject;

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
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/request-inquiry';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/request-inquiry/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/request-inquiry';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/request-inquiry/%s';

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
    const FIELD_EVENT_ID = 'event_id';

    /**
     * Object type.
     */
    const OBJECT_TYPE_PUT = 'RequestInquiry';
    const OBJECT_TYPE_GET = 'RequestInquiry';

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
     * The reference to the object used for split the bill. Can be Payment,
     * PaymentBatch, ScheduleInstance, RequestResponse and MasterCardAction
     *
     * @var RequestReferenceSplitTheBillAnchorObject
     */
    protected $referenceSplitTheBill;

    /**
     * The Amount requested to be paid by the person the RequestInquiry is sent
     * to. Must be bigger than 0.
     *
     * @var Amount
     */
    protected $amountInquiredFieldForRequest;

    /**
     * The Alias of the party we are requesting the money from. Can be an Alias
     * of type EMAIL, PHONE_NUMBER or IBAN. In case the EMAIL or PHONE_NUMBER
     * Alias does not refer to a bunq monetary account, 'allow_bunqme' needs to
     * be 'true' in order to trigger the creation of a bunq.me request.
     * Otherwise no request inquiry will be sent.
     *
     * @var Pointer
     */
    protected $counterpartyAliasFieldForRequest;

    /**
     * The description for the RequestInquiry. Maximum 9000 characters. Field is
     * required but can be an empty string.
     *
     * @var string
     */
    protected $descriptionFieldForRequest;

    /**
     * The Attachments to attach to the RequestInquiry.
     *
     * @var BunqId[]|null
     */
    protected $attachmentFieldForRequest;

    /**
     * Optional data to be included with the RequestInquiry specific to the
     * merchant. Has to be unique for the same source MonetaryAccount.
     *
     * @var string|null
     */
    protected $merchantReferenceFieldForRequest;

    /**
     * The status of the RequestInquiry. Ignored in POST requests but can be
     * used for revoking (cancelling) the RequestInquiry by setting REVOKED with
     * a PUT request.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * The minimum age the user accepting the RequestInquiry must have. Defaults
     * to not checking. If set, must be between 12 and 100 inclusive.
     *
     * @var int|null
     */
    protected $minimumAgeFieldForRequest;

    /**
     * Whether a billing and shipping address must be provided when paying the
     * request. Possible values are: BILLING, SHIPPING, BILLING_SHIPPING, NONE,
     * OPTIONAL. Default is NONE.
     *
     * @var string|null
     */
    protected $requireAddressFieldForRequest;

    /**
     * [DEPRECATED] Whether or not the accepting user can give an extra tip on
     * top of the requested Amount. Defaults to false.
     *
     * @var bool|null
     */
    protected $wantTipFieldForRequest;

    /**
     * [DEPRECATED] Whether or not the accepting user can choose to accept with
     * a lower amount than requested. Defaults to false.
     *
     * @var bool|null
     */
    protected $allowAmountLowerFieldForRequest;

    /**
     * [DEPRECATED] Whether or not the accepting user can choose to accept with
     * a higher amount than requested. Defaults to false.
     *
     * @var bool|null
     */
    protected $allowAmountHigherFieldForRequest;

    /**
     * Whether or not sending a bunq.me request is allowed.
     *
     * @var bool
     */
    protected $allowBunqmeFieldForRequest;

    /**
     * The URL which the user is sent to after accepting or rejecting the
     * Request.
     *
     * @var string|null
     */
    protected $redirectUrlFieldForRequest;

    /**
     * The ID of the associated event if the request was made using 'split the
     * bill'.
     *
     * @var int|null
     */
    protected $eventIdFieldForRequest;

    /**
     * @param Amount $amountInquired The Amount requested to be paid by the
     * person the RequestInquiry is sent to. Must be bigger than 0.
     * @param Pointer $counterpartyAlias The Alias of the party we are
     * requesting the money from. Can be an Alias of type EMAIL, PHONE_NUMBER or
     * IBAN. In case the EMAIL or PHONE_NUMBER Alias does not refer to a bunq
     * monetary account, 'allow_bunqme' needs to be 'true' in order to trigger
     * the creation of a bunq.me request. Otherwise no request inquiry will be
     * sent.
     * @param string $description The description for the RequestInquiry.
     * Maximum 9000 characters. Field is required but can be an empty string.
     * @param bool $allowBunqme Whether or not sending a bunq.me request is
     * allowed.
     * @param BunqId[]|null $attachment The Attachments to attach to the
     * RequestInquiry.
     * @param string|null $merchantReference Optional data to be included with
     * the RequestInquiry specific to the merchant. Has to be unique for the
     * same source MonetaryAccount.
     * @param string|null $status The status of the RequestInquiry. Ignored in
     * POST requests but can be used for revoking (cancelling) the
     * RequestInquiry by setting REVOKED with a PUT request.
     * @param int|null $minimumAge The minimum age the user accepting the
     * RequestInquiry must have. Defaults to not checking. If set, must be
     * between 12 and 100 inclusive.
     * @param string|null $requireAddress Whether a billing and shipping address
     * must be provided when paying the request. Possible values are: BILLING,
     * SHIPPING, BILLING_SHIPPING, NONE, OPTIONAL. Default is NONE.
     * @param bool|null $wantTip [DEPRECATED] Whether or not the accepting user
     * can give an extra tip on top of the requested Amount. Defaults to false.
     * @param bool|null $allowAmountLower [DEPRECATED] Whether or not the
     * accepting user can choose to accept with a lower amount than requested.
     * Defaults to false.
     * @param bool|null $allowAmountHigher [DEPRECATED] Whether or not the
     * accepting user can choose to accept with a higher amount than requested.
     * Defaults to false.
     * @param string|null $redirectUrl The URL which the user is sent to after
     * accepting or rejecting the Request.
     * @param int|null $eventId The ID of the associated event if the request
     * was made using 'split the bill'.
     */
    public function __construct(Amount  $amountInquired, Pointer  $counterpartyAlias, string  $description, bool  $allowBunqme, array  $attachment = null, string  $merchantReference = null, string  $status = null, int  $minimumAge = null, string  $requireAddress = null, bool  $wantTip = null, bool  $allowAmountLower = null, bool  $allowAmountHigher = null, string  $redirectUrl = null, int  $eventId = null)
    {
        $this->amountInquiredFieldForRequest = $amountInquired;
        $this->counterpartyAliasFieldForRequest = $counterpartyAlias;
        $this->descriptionFieldForRequest = $description;
        $this->attachmentFieldForRequest = $attachment;
        $this->merchantReferenceFieldForRequest = $merchantReference;
        $this->statusFieldForRequest = $status;
        $this->minimumAgeFieldForRequest = $minimumAge;
        $this->requireAddressFieldForRequest = $requireAddress;
        $this->wantTipFieldForRequest = $wantTip;
        $this->allowAmountLowerFieldForRequest = $allowAmountLower;
        $this->allowAmountHigherFieldForRequest = $allowAmountHigher;
        $this->allowBunqmeFieldForRequest = $allowBunqme;
        $this->redirectUrlFieldForRequest = $redirectUrl;
        $this->eventIdFieldForRequest = $eventId;
    }

    /**
     * Create a new payment request.
     *
     * @param Amount $amountInquired The Amount requested to be paid by the
     * person the RequestInquiry is sent to. Must be bigger than 0.
     * @param Pointer $counterpartyAlias The Alias of the party we are
     * requesting the money from. Can be an Alias of type EMAIL, PHONE_NUMBER or
     * IBAN. In case the EMAIL or PHONE_NUMBER Alias does not refer to a bunq
     * monetary account, 'allow_bunqme' needs to be 'true' in order to trigger
     * the creation of a bunq.me request. Otherwise no request inquiry will be
     * sent.
     * @param string $description The description for the RequestInquiry.
     * Maximum 9000 characters. Field is required but can be an empty string.
     * @param bool $allowBunqme Whether or not sending a bunq.me request is
     * allowed.
     * @param int|null $monetaryAccountId
     * @param BunqId[]|null $attachment The Attachments to attach to the
     * RequestInquiry.
     * @param string|null $merchantReference Optional data to be included with
     * the RequestInquiry specific to the merchant. Has to be unique for the
     * same source MonetaryAccount.
     * @param string|null $status The status of the RequestInquiry. Ignored in
     * POST requests but can be used for revoking (cancelling) the
     * RequestInquiry by setting REVOKED with a PUT request.
     * @param int|null $minimumAge The minimum age the user accepting the
     * RequestInquiry must have. Defaults to not checking. If set, must be
     * between 12 and 100 inclusive.
     * @param string|null $requireAddress Whether a billing and shipping address
     * must be provided when paying the request. Possible values are: BILLING,
     * SHIPPING, BILLING_SHIPPING, NONE, OPTIONAL. Default is NONE.
     * @param bool|null $wantTip [DEPRECATED] Whether or not the accepting user
     * can give an extra tip on top of the requested Amount. Defaults to false.
     * @param bool|null $allowAmountLower [DEPRECATED] Whether or not the
     * accepting user can choose to accept with a lower amount than requested.
     * Defaults to false.
     * @param bool|null $allowAmountHigher [DEPRECATED] Whether or not the
     * accepting user can choose to accept with a higher amount than requested.
     * Defaults to false.
     * @param string|null $redirectUrl The URL which the user is sent to after
     * accepting or rejecting the Request.
     * @param int|null $eventId The ID of the associated event if the request
     * was made using 'split the bill'.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(Amount  $amountInquired, Pointer  $counterpartyAlias, string  $description, bool  $allowBunqme, int $monetaryAccountId = null, array  $attachment = null, string  $merchantReference = null, string  $status = null, int  $minimumAge = null, string  $requireAddress = null, bool  $wantTip = null, bool  $allowAmountLower = null, bool  $allowAmountHigher = null, string  $redirectUrl = null, int  $eventId = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            [self::FIELD_AMOUNT_INQUIRED => $amountInquired,
self::FIELD_COUNTERPARTY_ALIAS => $counterpartyAlias,
self::FIELD_DESCRIPTION => $description,
self::FIELD_ATTACHMENT => $attachment,
self::FIELD_MERCHANT_REFERENCE => $merchantReference,
self::FIELD_STATUS => $status,
self::FIELD_MINIMUM_AGE => $minimumAge,
self::FIELD_REQUIRE_ADDRESS => $requireAddress,
self::FIELD_WANT_TIP => $wantTip,
self::FIELD_ALLOW_AMOUNT_LOWER => $allowAmountLower,
self::FIELD_ALLOW_AMOUNT_HIGHER => $allowAmountHigher,
self::FIELD_ALLOW_BUNQME => $allowBunqme,
self::FIELD_REDIRECT_URL => $redirectUrl,
self::FIELD_EVENT_ID => $eventId],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Revoke a request for payment, by updating the status to REVOKED.
     *
     * @param int $requestInquiryId
     * @param int|null $monetaryAccountId
     * @param string|null $status The status of the RequestInquiry. Ignored in
     * POST requests but can be used for revoking (cancelling) the
     * RequestInquiry by setting REVOKED with a PUT request.
     * @param string[] $customHeaders
     *
     * @return BunqResponseRequestInquiry
     */
    public static function update(int $requestInquiryId, int $monetaryAccountId = null, string  $status = null, array $customHeaders = []): BunqResponseRequestInquiry
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $requestInquiryId]
            ),
            [self::FIELD_STATUS => $status],
            $customHeaders
        );

        return BunqResponseRequestInquiry::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_PUT)
        );
    }

    /**
     * Get all payment requests for a user's monetary account. bunqme_share_url
     * is always null if the counterparty is a bunq user.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseRequestInquiryList
     */
    public static function listing(int $monetaryAccountId = null, array $params = [], array $customHeaders = []): BunqResponseRequestInquiryList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseRequestInquiryList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Get the details of a specific payment request, including its status.
     * bunqme_share_url is always null if the counterparty is a bunq user.
     *
     * @param int $requestInquiryId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseRequestInquiry
     */
    public static function get(int $requestInquiryId, int $monetaryAccountId = null, array $customHeaders = []): BunqResponseRequestInquiry
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $requestInquiryId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseRequestInquiry::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
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
     * The timestamp of the payment request's creation.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountInquired
     */
    public function setAmountInquired($amountInquired)
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountResponded
     */
    public function setAmountResponded($amountResponded)
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelUser $userAliasCreated
     */
    public function setUserAliasCreated($userAliasCreated)
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelUser $userAliasRevoked
     */
    public function setUserAliasRevoked($userAliasRevoked)
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
     * The description of the inquiry.
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
     * The attachments attached to the payment.
     *
     * @return BunqId[]
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param BunqId[] $attachment
     */
    public function setAttachment($attachment)
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Address $addressShipping
     */
    public function setAddressShipping($addressShipping)
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Address $addressBilling
     */
    public function setAddressBilling($addressBilling)
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Geolocation $geolocation
     */
    public function setGeolocation($geolocation)
    {
        $this->geolocation = $geolocation;
    }

    /**
     * The reference to the object used for split the bill. Can be Payment,
     * PaymentBatch, ScheduleInstance, RequestResponse and MasterCardAction
     *
     * @return RequestReferenceSplitTheBillAnchorObject
     */
    public function getReferenceSplitTheBill()
    {
        return $this->referenceSplitTheBill;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param RequestReferenceSplitTheBillAnchorObject $referenceSplitTheBill
     */
    public function setReferenceSplitTheBill($referenceSplitTheBill)
    {
        $this->referenceSplitTheBill = $referenceSplitTheBill;
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

        if (!is_null($this->timeResponded)) {
            return false;
        }

        if (!is_null($this->timeExpiry)) {
            return false;
        }

        if (!is_null($this->monetaryAccountId)) {
            return false;
        }

        if (!is_null($this->amountInquired)) {
            return false;
        }

        if (!is_null($this->amountResponded)) {
            return false;
        }

        if (!is_null($this->userAliasCreated)) {
            return false;
        }

        if (!is_null($this->userAliasRevoked)) {
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

        if (!is_null($this->attachment)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->batchId)) {
            return false;
        }

        if (!is_null($this->scheduledId)) {
            return false;
        }

        if (!is_null($this->minimumAge)) {
            return false;
        }

        if (!is_null($this->requireAddress)) {
            return false;
        }

        if (!is_null($this->bunqmeShareUrl)) {
            return false;
        }

        if (!is_null($this->redirectUrl)) {
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

        if (!is_null($this->referenceSplitTheBill)) {
            return false;
        }

        return true;
    }
}
