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
     * Field constants.
     */
    const FIELD_AMOUNT_RESPONDED = 'amount_responded';
    const FIELD_STATUS = 'status';
    const FIELD_ADDRESS_SHIPPING = 'address_shipping';
    const FIELD_ADDRESS_BILLING = 'address_billing';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/request-response/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/request-response';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/request-response/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'RequestResponse';

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
     * The status of the RequestResponse. Can be ACCEPTED, PENDING, REJECTED or
     * REVOKED.
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
     * IDEAL or INTERNAL.
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
     * Whether or not chat messages are allowed.
     *
     * @var bool
     */
    protected $allowChat;

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
     * Update the status to accept or reject the RequestResponse.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $requestResponseId
     * @param string[] $customHeaders
     *
     * @return BunqResponseRequestResponse
     */
    public static function update(ApiContext $apiContext, array $requestMap, int $userId, int $monetaryAccountId, int $requestResponseId, array $customHeaders = []): BunqResponseRequestResponse
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [$userId, $monetaryAccountId, $requestResponseId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseRequestResponse::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * Get all RequestResponses for a MonetaryAccount.
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
     * @return BunqResponseRequestResponseList
     */
    public static function listing(ApiContext $apiContext, int $userId, int $monetaryAccountId, array $params = [], array $customHeaders = []): BunqResponseRequestResponseList
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

        return BunqResponseRequestResponseList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * Get the details for a specific existing RequestResponse.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $requestResponseId
     * @param string[] $customHeaders
     *
     * @return BunqResponseRequestResponse
     */
    public static function get(ApiContext $apiContext, int $userId, int $monetaryAccountId, int $requestResponseId, array $customHeaders = []): BunqResponseRequestResponse
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $monetaryAccountId, $requestResponseId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseRequestResponse::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
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
     * @param string $timeExpiry
     */
    public function setTimeExpiry($timeExpiry)
    {
        $this->timeExpiry = $timeExpiry;
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
     * @param Amount $amountResponded
     */
    public function setAmountResponded($amountResponded)
    {
        $this->amountResponded = $amountResponded;
    }

    /**
     * The status of the RequestResponse. Can be ACCEPTED, PENDING, REJECTED or
     * REVOKED.
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
     * The Geolocation where the RequestResponse was created.
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
     * The type of the RequestInquiry. Can be DIRECT_DEBIT, DIRECT_DEBIT_B2B,
     * IDEAL or INTERNAL.
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
     * @param Address $addressShipping
     */
    public function setAddressShipping($addressShipping)
    {
        $this->addressShipping = $addressShipping;
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
     * @param int $eligibleWhitelistId
     */
    public function setEligibleWhitelistId($eligibleWhitelistId)
    {
        $this->eligibleWhitelistId = $eligibleWhitelistId;
    }
}
