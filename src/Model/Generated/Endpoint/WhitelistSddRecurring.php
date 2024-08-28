<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
use bunq\Model\Generated\Object\LabelUser;

/**
 * Whitelist a recurring SDD so that when another recurrence comes in, it is
 * automatically accepted.
 *
 * @generated
 */
class WhitelistSddRecurring extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/whitelist-sdd-recurring/%s';
    const ENDPOINT_URL_CREATE = 'user/%s/whitelist-sdd-recurring';
    const ENDPOINT_URL_UPDATE = 'user/%s/whitelist-sdd-recurring/%s';
    const ENDPOINT_URL_DELETE = 'user/%s/whitelist-sdd-recurring/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/whitelist-sdd-recurring';

    /**
     * Field constants.
     */
    const FIELD_MONETARY_ACCOUNT_PAYING_ID = 'monetary_account_paying_id';
    const FIELD_REQUEST_ID = 'request_id';
    const FIELD_MAXIMUM_AMOUNT_PER_MONTH = 'maximum_amount_per_month';
    const FIELD_MAXIMUM_AMOUNT_PER_PAYMENT = 'maximum_amount_per_payment';
    const FIELD_ROUTING_TYPE = 'routing_type';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'WhitelistSddRecurring';

    /**
     * The ID of the whitelist entry.
     *
     * @var int
     */
    protected $id;

    /**
     * The account to which payments will come in before possibly being
     * 'redirected' by the whitelist.
     *
     * @var int
     */
    protected $monetaryAccountIncomingId;

    /**
     * The account from which payments will be deducted when a transaction is
     * matched with this whitelist.
     *
     * @var int
     */
    protected $monetaryAccountPayingId;

    /**
     * The type of the SDD whitelist, can be CORE or B2B.
     *
     * @var string
     */
    protected $type;

    /**
     * The status of the whitelist.
     *
     * @var string
     */
    protected $status;

    /**
     * The credit scheme ID provided by the counterparty.
     *
     * @var string
     */
    protected $creditSchemeIdentifier;

    /**
     * The mandate ID provided by the counterparty.
     *
     * @var string
     */
    protected $mandateIdentifier;

    /**
     * The account to which payments will be paid.
     *
     * @var LabelMonetaryAccount
     */
    protected $counterpartyAlias;

    /**
     * The monthly maximum amount that can be deducted from the target account.
     *
     * @var Amount
     */
    protected $maximumAmountPerMonth;

    /**
     * The maximum amount per payment that can be deducted from the target
     * account.
     *
     * @var Amount
     */
    protected $maximumAmountPerPayment;

    /**
     * The user who created the whitelist entry.
     *
     * @var LabelUser
     */
    protected $userAliasCreated;

    /**
     * The type of routing for this whitelist.
     *
     * @var string
     */
    protected $routingType;

    /**
     * ID of the monetary account of which you want to pay from.
     *
     * @var int
     */
    protected $monetaryAccountPayingIdFieldForRequest;

    /**
     * ID of the request for which you want to whitelist the originating SDD.
     *
     * @var int
     */
    protected $requestIdFieldForRequest;

    /**
     * The maximum amount of money that is allowed to be deducted per month
     * based on the whitelist.
     *
     * @var Amount|null
     */
    protected $maximumAmountPerMonthFieldForRequest;

    /**
     * The maximum amount of money that is allowed to be deducted per payment
     * based on the whitelist.
     *
     * @var Amount|null
     */
    protected $maximumAmountPerPaymentFieldForRequest;

    /**
     * The type of routing for this whitelist. Should be changed to non-optional
     * CIT/technical#12806.
     *
     * @var string|null
     */
    protected $routingTypeFieldForRequest;

    /**
     * @param int $monetaryAccountPayingId ID of the monetary account of which
     * you want to pay from.
     * @param int $requestId ID of the request for which you want to whitelist
     * the originating SDD.
     * @param Amount|null $maximumAmountPerMonth The maximum amount of money
     * that is allowed to be deducted per month based on the whitelist.
     * @param Amount|null $maximumAmountPerPayment The maximum amount of money
     * that is allowed to be deducted per payment based on the whitelist.
     * @param string|null $routingType The type of routing for this whitelist.
     * Should be changed to non-optional CIT/technical#12806.
     */
    public function __construct(int  $monetaryAccountPayingId, int  $requestId, Amount  $maximumAmountPerMonth = null, Amount  $maximumAmountPerPayment = null, string  $routingType = null)
    {
        $this->monetaryAccountPayingIdFieldForRequest = $monetaryAccountPayingId;
        $this->requestIdFieldForRequest = $requestId;
        $this->maximumAmountPerMonthFieldForRequest = $maximumAmountPerMonth;
        $this->maximumAmountPerPaymentFieldForRequest = $maximumAmountPerPayment;
        $this->routingTypeFieldForRequest = $routingType;
    }

    /**
     * Get a specific recurring SDD whitelist entry.
     *
     * @param int $whitelistSddRecurringId
     * @param string[] $customHeaders
     *
     * @return BunqResponseWhitelistSddRecurring
     */
    public static function get(int $whitelistSddRecurringId, array $customHeaders = []): BunqResponseWhitelistSddRecurring
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $whitelistSddRecurringId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseWhitelistSddRecurring::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Create a new recurring SDD whitelist entry.
     *
     * @param int $monetaryAccountPayingId ID of the monetary account of which
     * you want to pay from.
     * @param int $requestId ID of the request for which you want to whitelist
     * the originating SDD.
     * @param Amount|null $maximumAmountPerMonth The maximum amount of money
     * that is allowed to be deducted per month based on the whitelist.
     * @param Amount|null $maximumAmountPerPayment The maximum amount of money
     * that is allowed to be deducted per payment based on the whitelist.
     * @param string|null $routingType The type of routing for this whitelist.
     * Should be changed to non-optional CIT/technical#12806.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(int  $monetaryAccountPayingId, int  $requestId, Amount  $maximumAmountPerMonth = null, Amount  $maximumAmountPerPayment = null, string  $routingType = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [self::FIELD_MONETARY_ACCOUNT_PAYING_ID => $monetaryAccountPayingId,
self::FIELD_REQUEST_ID => $requestId,
self::FIELD_MAXIMUM_AMOUNT_PER_MONTH => $maximumAmountPerMonth,
self::FIELD_MAXIMUM_AMOUNT_PER_PAYMENT => $maximumAmountPerPayment,
self::FIELD_ROUTING_TYPE => $routingType],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param int $whitelistSddRecurringId
     * @param int|null $monetaryAccountPayingId ID of the monetary account of
     * which you want to pay from.
     * @param Amount|null $maximumAmountPerMonth The maximum amount of money
     * that is allowed to be deducted per month based on the whitelist.
     * @param Amount|null $maximumAmountPerPayment The maximum amount of money
     * that is allowed to be deducted per payment based on the whitelist.
     * @param string|null $routingType The type of routing for this whitelist.
     * Should be changed to non-optional CIT/technical#12806.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(int $whitelistSddRecurringId, int  $monetaryAccountPayingId = null, Amount  $maximumAmountPerMonth = null, Amount  $maximumAmountPerPayment = null, string  $routingType = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $whitelistSddRecurringId]
            ),
            [self::FIELD_MONETARY_ACCOUNT_PAYING_ID => $monetaryAccountPayingId,
self::FIELD_MAXIMUM_AMOUNT_PER_MONTH => $maximumAmountPerMonth,
self::FIELD_MAXIMUM_AMOUNT_PER_PAYMENT => $maximumAmountPerPayment,
self::FIELD_ROUTING_TYPE => $routingType],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param string[] $customHeaders
     * @param int $whitelistSddRecurringId
     *
     * @return BunqResponseNull
     */
    public static function delete(int $whitelistSddRecurringId, array $customHeaders = []): BunqResponseNull
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->delete(
            vsprintf(
                self::ENDPOINT_URL_DELETE,
                [static::determineUserId(), $whitelistSddRecurringId]
            ),
            $customHeaders
        );

        return BunqResponseNull::castFromBunqResponse(
            new BunqResponse(null, $responseRaw->getHeaders())
        );
    }

    /**
     * Get a listing of all recurring SDD whitelist entries for a target
     * monetary account.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseWhitelistSddRecurringList
     */
    public static function listing( array $params = [], array $customHeaders = []): BunqResponseWhitelistSddRecurringList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId()]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseWhitelistSddRecurringList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The ID of the whitelist entry.
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
     * The account to which payments will come in before possibly being
     * 'redirected' by the whitelist.
     *
     * @return int
     */
    public function getMonetaryAccountIncomingId()
    {
        return $this->monetaryAccountIncomingId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $monetaryAccountIncomingId
     */
    public function setMonetaryAccountIncomingId($monetaryAccountIncomingId)
    {
        $this->monetaryAccountIncomingId = $monetaryAccountIncomingId;
    }

    /**
     * The account from which payments will be deducted when a transaction is
     * matched with this whitelist.
     *
     * @return int
     */
    public function getMonetaryAccountPayingId()
    {
        return $this->monetaryAccountPayingId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $monetaryAccountPayingId
     */
    public function setMonetaryAccountPayingId($monetaryAccountPayingId)
    {
        $this->monetaryAccountPayingId = $monetaryAccountPayingId;
    }

    /**
     * The type of the SDD whitelist, can be CORE or B2B.
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
     * The status of the whitelist.
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
     * The credit scheme ID provided by the counterparty.
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
     * The mandate ID provided by the counterparty.
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
     * The account to which payments will be paid.
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
     * The monthly maximum amount that can be deducted from the target account.
     *
     * @return Amount
     */
    public function getMaximumAmountPerMonth()
    {
        return $this->maximumAmountPerMonth;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $maximumAmountPerMonth
     */
    public function setMaximumAmountPerMonth($maximumAmountPerMonth)
    {
        $this->maximumAmountPerMonth = $maximumAmountPerMonth;
    }

    /**
     * The maximum amount per payment that can be deducted from the target
     * account.
     *
     * @return Amount
     */
    public function getMaximumAmountPerPayment()
    {
        return $this->maximumAmountPerPayment;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $maximumAmountPerPayment
     */
    public function setMaximumAmountPerPayment($maximumAmountPerPayment)
    {
        $this->maximumAmountPerPayment = $maximumAmountPerPayment;
    }

    /**
     * The user who created the whitelist entry.
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
     * The type of routing for this whitelist.
     *
     * @return string
     */
    public function getRoutingType()
    {
        return $this->routingType;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $routingType
     */
    public function setRoutingType($routingType)
    {
        $this->routingType = $routingType;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->monetaryAccountIncomingId)) {
            return false;
        }

        if (!is_null($this->monetaryAccountPayingId)) {
            return false;
        }

        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->creditSchemeIdentifier)) {
            return false;
        }

        if (!is_null($this->mandateIdentifier)) {
            return false;
        }

        if (!is_null($this->counterpartyAlias)) {
            return false;
        }

        if (!is_null($this->maximumAmountPerMonth)) {
            return false;
        }

        if (!is_null($this->maximumAmountPerPayment)) {
            return false;
        }

        if (!is_null($this->userAliasCreated)) {
            return false;
        }

        if (!is_null($this->routingType)) {
            return false;
        }

        return true;
    }
}
