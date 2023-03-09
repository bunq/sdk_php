<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Address;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Attachment;
use bunq\Model\Generated\Object\Geolocation;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
use bunq\Model\Generated\Object\LabelUser;
use bunq\Model\Generated\Object\RequestInquiryReference;

/**
 * A RequestResponse is what a user on the other side of a RequestInquiry
 * gets when he is sent one. So a RequestInquiry is the initiator and
 * visible for the user that sent it and that wants to receive the money. A
 * RequestResponse is what the other side sees, i.e. the user that pays the
 * money to accept the request. The content is almost identical.
 *
 * @generated
 */
class RequestResponse extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/request-response/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/request-response';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/request-response/%s';

    /**
     * Field constants.
     */
    const FIELD_AMOUNT_RESPONDED = 'amount_responded';
    const FIELD_STATUS = 'status';
    const FIELD_ADDRESS_SHIPPING = 'address_shipping';
    const FIELD_ADDRESS_BILLING = 'address_billing';
    const FIELD_CURRENCY_CONVERSION_QUOTE_ID = 'currency_conversion_quote_id';

    /**
     * Object type.
     */
    const OBJECT_TYPE_PUT = 'RequestResponse';
    const OBJECT_TYPE_GET = 'RequestResponse';

    /**
     * The id of the Request Response.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp when the Request Response was created.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp when the Request Response was last updated (will be updated
     * when chat messages are received).
     *
     * @var string
     */
    protected $updated;

    /**
     * The timestamp of when the RequestResponse was responded to.
     *
     * @var string
     */
    protected $timeResponded;

    /**
     * The timestamp of when the RequestResponse expired or will expire.
     *
     * @var string
     */
    protected $timeExpiry;

    /**
     * The timestamp of when a refund request for the RequestResponse was
     * claimed.
     *
     * @var string
     */
    protected $timeRefundRequested;

    /**
     * The timestamp of when the RequestResponse was refunded.
     *
     * @var string
     */
    protected $timeRefunded;

    /**
     * The label of the user that requested the refund.
     *
     * @var LabelUser
     */
    protected $userRefundRequested;

    /**
     * The id of the MonetaryAccount the RequestResponse was received on.
     *
     * @var int
     */
    protected $monetaryAccountId;

    /**
     * The requested Amount.
     *
     * @var Amount
     */
    protected $amountInquired;

    /**
     * The Amount the RequestResponse was accepted with.
     *
     * @var Amount
     */
    protected $amountResponded;

    /**
     * The status of the RequestResponse. Can be ACCEPTED, PENDING, REJECTED,
     * REFUND_REQUESTED, REFUNDED or REVOKED.
     *
     * @var string
     */
    protected $status;

    /**
     * The description for the RequestResponse provided by the requesting party.
     * Maximum 9000 characters.
     *
     * @var string
     */
    protected $description;

    /**
     * The LabelMonetaryAccount with the public information of the
     * MonetaryAccount this RequestResponse was received on.
     *
     * @var LabelMonetaryAccount
     */
    protected $alias;

    /**
     * The LabelMonetaryAccount with the public information of the
     * MonetaryAccount that is requesting money with this RequestResponse.
     *
     * @var LabelMonetaryAccount
     */
    protected $counterpartyAlias;

    /**
     * The Attachments attached to the RequestResponse.
     *
     * @var Attachment[]
     */
    protected $attachment;

    /**
     * The minimum age the user accepting the RequestResponse must have.
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
     * The Geolocation where the RequestResponse was created.
     *
     * @var Geolocation
     */
    protected $geolocation;

    /**
     * The type of the RequestInquiry. Can be DIRECT_DEBIT, DIRECT_DEBIT_B2B,
     * IDEAL, SOFORT or INTERNAL.
     *
     * @var string
     */
    protected $type;

    /**
     * The subtype of the RequestInquiry. Can be ONCE or RECURRING for
     * DIRECT_DEBIT RequestInquiries and NONE for all other.
     *
     * @var string
     */
    protected $subType;

    /**
     * The URL which the user is sent to after accepting or rejecting the
     * Request.
     *
     * @var string
     */
    protected $redirectUrl;

    /**
     * The billing address provided by the accepting user if an address was
     * requested.
     *
     * @var Address
     */
    protected $addressBilling;

    /**
     * The shipping address provided by the accepting user if an address was
     * requested.
     *
     * @var Address
     */
    protected $addressShipping;

    /**
     * The credit scheme id provided by the counterparty for DIRECT_DEBIT
     * inquiries.
     *
     * @var string
     */
    protected $creditSchemeIdentifier;

    /**
     * The mandate id provided by the counterparty for DIRECT_DEBIT inquiries.
     *
     * @var string
     */
    protected $mandateIdentifier;

    /**
     * The whitelist id for this action or null.
     *
     * @var int
     */
    protected $eligibleWhitelistId;

    /**
     * The reference to the object used for split the bill. Can be
     * RequestInquiry or RequestInquiryBatch
     *
     * @var RequestInquiryReference[]
     */
    protected $requestReferenceSplitTheBill;

    /**
     * The ID of the latest event for the request.
     *
     * @var int
     */
    protected $eventId;

    /**
     * The ID of the monetary account this user prefers to pay the request from.
     *
     * @var int
     */
    protected $monetaryAccountPreferredId;

    /**
     * The Amount the user decides to pay.
     *
     * @var Amount|null
     */
    protected $amountRespondedFieldForRequest;

    /**
     * The responding status of the RequestResponse. Can be ACCEPTED or
     * REJECTED.
     *
     * @var string
     */
    protected $statusFieldForRequest;

    /**
     * The shipping Address to return to the user who created the
     * RequestInquiry. Should only be provided if 'require_address' is set to
     * SHIPPING, BILLING_SHIPPING or OPTIONAL.
     *
     * @var Address|null
     */
    protected $addressShippingFieldForRequest;

    /**
     * The billing Address to return to the user who created the RequestInquiry.
     * Should only be provided if 'require_address' is set to BILLING,
     * BILLING_SHIPPING or OPTIONAL.
     *
     * @var Address|null
     */
    protected $addressBillingFieldForRequest;

    /**
     * When the request is accepted on a monetary account with a different
     * currency, a quote is expected to convert.
     *
     * @var int|null
     */
    protected $currencyConversionQuoteIdFieldForRequest;

    /**
     * @param string $status The responding status of the RequestResponse. Can
     * be ACCEPTED or REJECTED.
     * @param Amount|null $amountResponded The Amount the user decides to pay.
     * @param Address|null $addressShipping The shipping Address to return to
     * the user who created the RequestInquiry. Should only be provided if
     * 'require_address' is set to SHIPPING, BILLING_SHIPPING or OPTIONAL.
     * @param Address|null $addressBilling The billing Address to return to the
     * user who created the RequestInquiry. Should only be provided if
     * 'require_address' is set to BILLING, BILLING_SHIPPING or OPTIONAL.
     * @param int|null $currencyConversionQuoteId When the request is accepted
     * on a monetary account with a different currency, a quote is expected to
     * convert.
     */
    public function __construct(string  $status, Amount  $amountResponded = null, Address  $addressShipping = null, Address  $addressBilling = null, int  $currencyConversionQuoteId = null)
    {
        $this->amountRespondedFieldForRequest = $amountResponded;
        $this->statusFieldForRequest = $status;
        $this->addressShippingFieldForRequest = $addressShipping;
        $this->addressBillingFieldForRequest = $addressBilling;
        $this->currencyConversionQuoteIdFieldForRequest = $currencyConversionQuoteId;
    }

    /**
     * Update the status to accept or reject the RequestResponse.
     *
     * @param int $requestResponseId
     * @param int|null $monetaryAccountId
     * @param Amount|null $amountResponded The Amount the user decides to pay.
     * @param string|null $status The responding status of the RequestResponse.
     * Can be ACCEPTED or REJECTED.
     * @param Address|null $addressShipping The shipping Address to return to
     * the user who created the RequestInquiry. Should only be provided if
     * 'require_address' is set to SHIPPING, BILLING_SHIPPING or OPTIONAL.
     * @param Address|null $addressBilling The billing Address to return to the
     * user who created the RequestInquiry. Should only be provided if
     * 'require_address' is set to BILLING, BILLING_SHIPPING or OPTIONAL.
     * @param int|null $currencyConversionQuoteId When the request is accepted
     * on a monetary account with a different currency, a quote is expected to
     * convert.
     * @param string[] $customHeaders
     *
     * @return BunqResponseRequestResponse
     */
    public static function update(int $requestResponseId, int $monetaryAccountId = null, Amount  $amountResponded = null, string  $status = null, Address  $addressShipping = null, Address  $addressBilling = null, int  $currencyConversionQuoteId = null, array $customHeaders = []): BunqResponseRequestResponse
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $requestResponseId]
            ),
            [self::FIELD_AMOUNT_RESPONDED => $amountResponded,
self::FIELD_STATUS => $status,
self::FIELD_ADDRESS_SHIPPING => $addressShipping,
self::FIELD_ADDRESS_BILLING => $addressBilling,
self::FIELD_CURRENCY_CONVERSION_QUOTE_ID => $currencyConversionQuoteId],
            $customHeaders
        );

        return BunqResponseRequestResponse::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_PUT)
        );
    }

    /**
     * Get all RequestResponses for a MonetaryAccount.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseRequestResponseList
     */
    public static function listing(int $monetaryAccountId = null, array $params = [], array $customHeaders = []): BunqResponseRequestResponseList
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

        return BunqResponseRequestResponseList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Get the details for a specific existing RequestResponse.
     *
     * @param int $requestResponseId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseRequestResponse
     */
    public static function get(int $requestResponseId, int $monetaryAccountId = null, array $customHeaders = []): BunqResponseRequestResponse
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $requestResponseId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseRequestResponse::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the Request Response.
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
     * The timestamp when the Request Response was created.
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
     * The timestamp when the Request Response was last updated (will be updated
     * when chat messages are received).
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
     * The timestamp of when the RequestResponse was responded to.
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
     * The timestamp of when the RequestResponse expired or will expire.
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
     * The timestamp of when a refund request for the RequestResponse was
     * claimed.
     *
     * @return string
     */
    public function getTimeRefundRequested()
    {
        return $this->timeRefundRequested;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $timeRefundRequested
     */
    public function setTimeRefundRequested($timeRefundRequested)
    {
        $this->timeRefundRequested = $timeRefundRequested;
    }

    /**
     * The timestamp of when the RequestResponse was refunded.
     *
     * @return string
     */
    public function getTimeRefunded()
    {
        return $this->timeRefunded;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $timeRefunded
     */
    public function setTimeRefunded($timeRefunded)
    {
        $this->timeRefunded = $timeRefunded;
    }

    /**
     * The label of the user that requested the refund.
     *
     * @return LabelUser
     */
    public function getUserRefundRequested()
    {
        return $this->userRefundRequested;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelUser $userRefundRequested
     */
    public function setUserRefundRequested($userRefundRequested)
    {
        $this->userRefundRequested = $userRefundRequested;
    }

    /**
     * The id of the MonetaryAccount the RequestResponse was received on.
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
     * The requested Amount.
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
     * The Amount the RequestResponse was accepted with.
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
     * The status of the RequestResponse. Can be ACCEPTED, PENDING, REJECTED,
     * REFUND_REQUESTED, REFUNDED or REVOKED.
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
     * The description for the RequestResponse provided by the requesting party.
     * Maximum 9000 characters.
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
     * The LabelMonetaryAccount with the public information of the
     * MonetaryAccount this RequestResponse was received on.
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
     * The LabelMonetaryAccount with the public information of the
     * MonetaryAccount that is requesting money with this RequestResponse.
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
     * The Attachments attached to the RequestResponse.
     *
     * @return Attachment[]
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Attachment[] $attachment
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
    }

    /**
     * The minimum age the user accepting the RequestResponse must have.
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
     * The Geolocation where the RequestResponse was created.
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
     * The type of the RequestInquiry. Can be DIRECT_DEBIT, DIRECT_DEBIT_B2B,
     * IDEAL, SOFORT or INTERNAL.
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
     * The subtype of the RequestInquiry. Can be ONCE or RECURRING for
     * DIRECT_DEBIT RequestInquiries and NONE for all other.
     *
     * @return string
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $subType
     */
    public function setSubType($subType)
    {
        $this->subType = $subType;
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
     * The credit scheme id provided by the counterparty for DIRECT_DEBIT
     * inquiries.
     *
     * @return string
     */
    public function getCreditSchemeIdentifier()
    {
        return $this->creditSchemeIdentifier;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $creditSchemeIdentifier
     */
    public function setCreditSchemeIdentifier($creditSchemeIdentifier)
    {
        $this->creditSchemeIdentifier = $creditSchemeIdentifier;
    }

    /**
     * The mandate id provided by the counterparty for DIRECT_DEBIT inquiries.
     *
     * @return string
     */
    public function getMandateIdentifier()
    {
        return $this->mandateIdentifier;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $mandateIdentifier
     */
    public function setMandateIdentifier($mandateIdentifier)
    {
        $this->mandateIdentifier = $mandateIdentifier;
    }

    /**
     * The whitelist id for this action or null.
     *
     * @return int
     */
    public function getEligibleWhitelistId()
    {
        return $this->eligibleWhitelistId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $eligibleWhitelistId
     */
    public function setEligibleWhitelistId($eligibleWhitelistId)
    {
        $this->eligibleWhitelistId = $eligibleWhitelistId;
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param RequestInquiryReference[] $requestReferenceSplitTheBill
     */
    public function setRequestReferenceSplitTheBill($requestReferenceSplitTheBill)
    {
        $this->requestReferenceSplitTheBill = $requestReferenceSplitTheBill;
    }

    /**
     * The ID of the latest event for the request.
     *
     * @return int
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $eventId
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    /**
     * The ID of the monetary account this user prefers to pay the request from.
     *
     * @return int
     */
    public function getMonetaryAccountPreferredId()
    {
        return $this->monetaryAccountPreferredId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $monetaryAccountPreferredId
     */
    public function setMonetaryAccountPreferredId($monetaryAccountPreferredId)
    {
        $this->monetaryAccountPreferredId = $monetaryAccountPreferredId;
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

        if (!is_null($this->timeRefundRequested)) {
            return false;
        }

        if (!is_null($this->timeRefunded)) {
            return false;
        }

        if (!is_null($this->userRefundRequested)) {
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

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->counterpartyAlias)) {
            return false;
        }

        if (!is_null($this->attachment)) {
            return false;
        }

        if (!is_null($this->minimumAge)) {
            return false;
        }

        if (!is_null($this->requireAddress)) {
            return false;
        }

        if (!is_null($this->geolocation)) {
            return false;
        }

        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->subType)) {
            return false;
        }

        if (!is_null($this->redirectUrl)) {
            return false;
        }

        if (!is_null($this->addressBilling)) {
            return false;
        }

        if (!is_null($this->addressShipping)) {
            return false;
        }

        if (!is_null($this->creditSchemeIdentifier)) {
            return false;
        }

        if (!is_null($this->mandateIdentifier)) {
            return false;
        }

        if (!is_null($this->eligibleWhitelistId)) {
            return false;
        }

        if (!is_null($this->requestReferenceSplitTheBill)) {
            return false;
        }

        if (!is_null($this->eventId)) {
            return false;
        }

        if (!is_null($this->monetaryAccountPreferredId)) {
            return false;
        }

        return true;
    }
}
