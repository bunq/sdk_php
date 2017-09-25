<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\BunqModel;
use bunq\Model\Generated\Object\Address;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Attachment;
use bunq\Model\Generated\Object\Geolocation;
use bunq\Model\Generated\Object\LabelMonetaryAccount;

/**
 * Using this call you create a request for payment from an external token
 * provided with an ideal transaction. Make sure your iDEAL payments are
 * compliant with the iDEAL standards, by following the following manual: <a
 * href="https://www.bunq.com/files/media/legal/en/20170315_ideal_standards_en.pdf">https://www.bunq.com/files/media/legal/en/20170315_ideal_standards_en.pdf</a>.
 * It's very important to keep these points in mind when you are using the
 * endpoint to make iDEAL payments from your application.
 *
 * @generated
 */
class TokenQrRequestIdeal extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_TOKEN = 'token';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/token-qr-request-ideal';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'TokenQrRequestIdeal';

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
     * The description for the RequestResponse provided by the requesting party.
     * Maximum 9000 characters.
     *
     * @var string
     */
    protected $description;

    /**
     * The Attachments attached to the RequestResponse.
     *
     * @var Attachment[]
     */
    protected $attachment;

    /**
     * The status of the created RequestResponse. Can only be PENDING.
     *
     * @var string
     */
    protected $status;

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
     * The Geolocation where the RequestResponse was created.
     *
     * @var Geolocation
     */
    protected $geolocation;

    /**
     * The URL which the user is sent to after accepting or rejecting the
     * Request.
     *
     * @var string
     */
    protected $redirectUrl;

    /**
     * The type of the RequestResponse. Can be only be IDEAL.
     *
     * @var string
     */
    protected $type;

    /**
     * The subtype of the RequestResponse. Can be only be NONE.
     *
     * @var string
     */
    protected $subType;

    /**
     * Whether or not chat messages are allowed.
     *
     * @var bool
     */
    protected $allowChat;

    /**
     * The whitelist id for this action or null.
     *
     * @var int
     */
    protected $eligibleWhitelistId;

    /**
     * Create a request from an ideal transaction.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param string[] $customHeaders
     *
     * @return BunqResponseTokenQrRequestIdeal
     */
    public static function create(ApiContext $apiContext, array $requestMap, $userId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId]
            ),
            $requestMap,
            $customHeaders
        );

        return static::fromJson($responseRaw, self::OBJECT_TYPE);
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
    public function setAmountInquired(Amount $amountInquired)
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
    public function setAmountResponded(Amount $amountResponded)
    {
        $this->amountResponded = $amountResponded;
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
    public function setAlias(LabelMonetaryAccount $alias)
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
    public function setCounterpartyAlias(LabelMonetaryAccount $counterpartyAlias)
    {
        $this->counterpartyAlias = $counterpartyAlias;
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
    public function setAttachment(array$attachment)
    {
        $this->attachment = $attachment;
    }

    /**
     * The status of the created RequestResponse. Can only be PENDING.
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
    public function setGeolocation(Geolocation $geolocation)
    {
        $this->geolocation = $geolocation;
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
     * The type of the RequestResponse. Can be only be IDEAL.
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
     * The subtype of the RequestResponse. Can be only be NONE.
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
