<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Avatar;
use bunq\Model\Generated\Object\BunqId;
use bunq\Model\Generated\Object\CoOwner;
use bunq\Model\Generated\Object\MonetaryAccountSetting;
use bunq\Model\Generated\Object\Pointer;

/**
 * The endpoint for joint monetary accounts.
 *
 * @generated
 */
class MonetaryAccountJoint extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account-joint';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account-joint/%s';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account-joint/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account-joint';

    /**
     * Field constants.
     */
    const FIELD_CURRENCY = 'currency';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DAILY_LIMIT = 'daily_limit';
    const FIELD_OVERDRAFT_LIMIT = 'overdraft_limit';
    const FIELD_ALIAS = 'alias';
    const FIELD_AVATAR_UUID = 'avatar_uuid';
    const FIELD_STATUS = 'status';
    const FIELD_SUB_STATUS = 'sub_status';
    const FIELD_REASON = 'reason';
    const FIELD_REASON_DESCRIPTION = 'reason_description';
    const FIELD_ALL_CO_OWNER = 'all_co_owner';
    const FIELD_SETTING = 'setting';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'MonetaryAccountJoint';

    /**
     * The id of the MonetaryAccountJoint.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the MonetaryAccountJoint's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the MonetaryAccountJoint's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The Avatar of the MonetaryAccountJoint.
     *
     * @var Avatar
     */
    protected $avatar;

    /**
     * The currency of the MonetaryAccountJoint as an ISO 4217 formatted
     * currency code.
     *
     * @var string
     */
    protected $currency;

    /**
     * The description of the MonetaryAccountJoint. Defaults to 'bunq account'.
     *
     * @var string
     */
    protected $description;

    /**
     * The daily spending limit Amount of the MonetaryAccountJoint. Defaults to
     * 1000 EUR. Currency must match the MonetaryAccountJoint's currency.
     * Limited to 10000 EUR.
     *
     * @var Amount
     */
    protected $dailyLimit;

    /**
     * The maximum Amount the MonetaryAccountJoint can be 'in the red'.
     *
     * @var Amount
     */
    protected $overdraftLimit;

    /**
     * The current available balance Amount of the MonetaryAccountJoint.
     *
     * @var Amount
     */
    protected $balance;

    /**
     * The Aliases for the MonetaryAccountJoint.
     *
     * @var Pointer[]
     */
    protected $alias;

    /**
     * The MonetaryAccountJoint's public UUID.
     *
     * @var string
     */
    protected $publicUuid;

    /**
     * The status of the MonetaryAccountJoint. Can be: ACTIVE, BLOCKED,
     * CANCELLED or PENDING_REOPEN
     *
     * @var string
     */
    protected $status;

    /**
     * The sub-status of the MonetaryAccountJoint providing extra information
     * regarding the status. Will be NONE for ACTIVE or PENDING_REOPEN,
     * COMPLETELY or ONLY_ACCEPTING_INCOMING for BLOCKED and
     * REDEMPTION_INVOLUNTARY, REDEMPTION_VOLUNTARY or PERMANENT for CANCELLED.
     *
     * @var string
     */
    protected $subStatus;

    /**
     * The reason for voluntarily cancelling (closing) the MonetaryAccountJoint,
     * can only be OTHER.
     *
     * @var string
     */
    protected $reason;

    /**
     * The optional free-form reason for voluntarily cancelling (closing) the
     * MonetaryAccountJoint. Can be any user provided message.
     *
     * @var string
     */
    protected $reasonDescription;

    /**
     * The users the account will be joint with.
     *
     * @var CoOwner[]
     */
    protected $allCoOwner;

    /**
     * The id of the User who owns the MonetaryAccountJoint.
     *
     * @var int
     */
    protected $userId;

    /**
     * The profile of the account.
     *
     * @var MonetaryAccountProfile
     */
    protected $monetaryAccountProfile;

    /**
     * The settings of the MonetaryAccountJoint.
     *
     * @var MonetaryAccountSetting
     */
    protected $setting;

    /**
     * The id of the AutoSave.
     *
     * @var int
     */
    protected $autoSaveId;

    /**
     * The ids of the AutoSave.
     *
     * @var BunqId[]
     */
    protected $allAutoSaveId;

    /**
     * The currency of the MonetaryAccountJoint as an ISO 4217 formatted
     * currency code.
     *
     * @var string
     */
    protected $currencyFieldForRequest;

    /**
     * The description of the MonetaryAccountJoint. Defaults to 'bunq account'.
     *
     * @var string|null
     */
    protected $descriptionFieldForRequest;

    /**
     * The daily spending limit Amount of the MonetaryAccountJoint. Defaults to
     * 1000 EUR. Currency must match the MonetaryAccountJoint's currency.
     * Limited to 10000 EUR.
     *
     * @var Amount|null
     */
    protected $dailyLimitFieldForRequest;

    /**
     * The maximum Amount the MonetaryAccountJoint can be 'in the red'. Must be
     * 0 EUR or omitted.
     *
     * @var Amount|null
     */
    protected $overdraftLimitFieldForRequest;

    /**
     * The Aliases to add to MonetaryAccountJoint. Must all be confirmed first.
     * Can mostly be ignored.
     *
     * @var Pointer[]|null
     */
    protected $aliasFieldForRequest;

    /**
     * The UUID of the Avatar of the MonetaryAccountJoint.
     *
     * @var string|null
     */
    protected $avatarUuidFieldForRequest;

    /**
     * The status of the MonetaryAccountJoint. Ignored in POST requests (always
     * set to ACTIVE) can be CANCELLED or PENDING_REOPEN in PUT requests to
     * cancel (close) or reopen the MonetaryAccountJoint. When updating the
     * status and/or sub_status no other fields can be updated in the same
     * request (and vice versa).
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * The sub-status of the MonetaryAccountJoint providing extra information
     * regarding the status. Should be ignored for POST requests. In case of PUT
     * requests with status CANCELLED it can only be REDEMPTION_VOLUNTARY, while
     * with status PENDING_REOPEN it can only be NONE. When updating the status
     * and/or sub_status no other fields can be updated in the same request (and
     * vice versa).
     *
     * @var string|null
     */
    protected $subStatusFieldForRequest;

    /**
     * The reason for voluntarily cancelling (closing) the MonetaryAccountJoint,
     * can only be OTHER. Should only be specified if updating the status to
     * CANCELLED.
     *
     * @var string|null
     */
    protected $reasonFieldForRequest;

    /**
     * The optional free-form reason for voluntarily cancelling (closing) the
     * MonetaryAccountJoint. Can be any user provided message. Should only be
     * specified if updating the status to CANCELLED.
     *
     * @var string|null
     */
    protected $reasonDescriptionFieldForRequest;

    /**
     * The users the account will be joint with.
     *
     * @var CoOwner[]
     */
    protected $allCoOwnerFieldForRequest;

    /**
     * The settings of the MonetaryAccountJoint.
     *
     * @var MonetaryAccountSetting|null
     */
    protected $settingFieldForRequest;

    /**
     * @param string $currency The currency of the MonetaryAccountJoint as an
     * ISO 4217 formatted currency code.
     * @param CoOwner[] $allCoOwner The users the account will be joint with.
     * @param string|null $description The description of the
     * MonetaryAccountJoint. Defaults to 'bunq account'.
     * @param Amount|null $dailyLimit The daily spending limit Amount of the
     * MonetaryAccountJoint. Defaults to 1000 EUR. Currency must match the
     * MonetaryAccountJoint's currency. Limited to 10000 EUR.
     * @param Amount|null $overdraftLimit The maximum Amount the
     * MonetaryAccountJoint can be 'in the red'. Must be 0 EUR or omitted.
     * @param Pointer[]|null $alias The Aliases to add to MonetaryAccountJoint.
     * Must all be confirmed first. Can mostly be ignored.
     * @param string|null $avatarUuid The UUID of the Avatar of the
     * MonetaryAccountJoint.
     * @param string|null $status The status of the MonetaryAccountJoint.
     * Ignored in POST requests (always set to ACTIVE) can be CANCELLED or
     * PENDING_REOPEN in PUT requests to cancel (close) or reopen the
     * MonetaryAccountJoint. When updating the status and/or sub_status no other
     * fields can be updated in the same request (and vice versa).
     * @param string|null $subStatus The sub-status of the MonetaryAccountJoint
     * providing extra information regarding the status. Should be ignored for
     * POST requests. In case of PUT requests with status CANCELLED it can only
     * be REDEMPTION_VOLUNTARY, while with status PENDING_REOPEN it can only be
     * NONE. When updating the status and/or sub_status no other fields can be
     * updated in the same request (and vice versa).
     * @param string|null $reason The reason for voluntarily cancelling
     * (closing) the MonetaryAccountJoint, can only be OTHER. Should only be
     * specified if updating the status to CANCELLED.
     * @param string|null $reasonDescription The optional free-form reason for
     * voluntarily cancelling (closing) the MonetaryAccountJoint. Can be any
     * user provided message. Should only be specified if updating the status to
     * CANCELLED.
     * @param MonetaryAccountSetting|null $setting The settings of the
     * MonetaryAccountJoint.
     */
    public function __construct(
        string $currency,
        array $allCoOwner,
        string $description = null,
        Amount $dailyLimit = null,
        Amount $overdraftLimit = null,
        array $alias = null,
        string $avatarUuid = null,
        string $status = null,
        string $subStatus = null,
        string $reason = null,
        string $reasonDescription = null,
        MonetaryAccountSetting $setting = null
    ) {
        $this->currencyFieldForRequest = $currency;
        $this->descriptionFieldForRequest = $description;
        $this->dailyLimitFieldForRequest = $dailyLimit;
        $this->overdraftLimitFieldForRequest = $overdraftLimit;
        $this->aliasFieldForRequest = $alias;
        $this->avatarUuidFieldForRequest = $avatarUuid;
        $this->statusFieldForRequest = $status;
        $this->subStatusFieldForRequest = $subStatus;
        $this->reasonFieldForRequest = $reason;
        $this->reasonDescriptionFieldForRequest = $reasonDescription;
        $this->allCoOwnerFieldForRequest = $allCoOwner;
        $this->settingFieldForRequest = $setting;
    }

    /**
     * @param string $currency The currency of the MonetaryAccountJoint as an
     * ISO 4217 formatted currency code.
     * @param CoOwner[] $allCoOwner The users the account will be joint with.
     * @param string|null $description The description of the
     * MonetaryAccountJoint. Defaults to 'bunq account'.
     * @param Amount|null $dailyLimit The daily spending limit Amount of the
     * MonetaryAccountJoint. Defaults to 1000 EUR. Currency must match the
     * MonetaryAccountJoint's currency. Limited to 10000 EUR.
     * @param Amount|null $overdraftLimit The maximum Amount the
     * MonetaryAccountJoint can be 'in the red'. Must be 0 EUR or omitted.
     * @param Pointer[]|null $alias The Aliases to add to MonetaryAccountJoint.
     * Must all be confirmed first. Can mostly be ignored.
     * @param string|null $avatarUuid The UUID of the Avatar of the
     * MonetaryAccountJoint.
     * @param string|null $status The status of the MonetaryAccountJoint.
     * Ignored in POST requests (always set to ACTIVE) can be CANCELLED or
     * PENDING_REOPEN in PUT requests to cancel (close) or reopen the
     * MonetaryAccountJoint. When updating the status and/or sub_status no other
     * fields can be updated in the same request (and vice versa).
     * @param string|null $subStatus The sub-status of the MonetaryAccountJoint
     * providing extra information regarding the status. Should be ignored for
     * POST requests. In case of PUT requests with status CANCELLED it can only
     * be REDEMPTION_VOLUNTARY, while with status PENDING_REOPEN it can only be
     * NONE. When updating the status and/or sub_status no other fields can be
     * updated in the same request (and vice versa).
     * @param string|null $reason The reason for voluntarily cancelling
     * (closing) the MonetaryAccountJoint, can only be OTHER. Should only be
     * specified if updating the status to CANCELLED.
     * @param string|null $reasonDescription The optional free-form reason for
     * voluntarily cancelling (closing) the MonetaryAccountJoint. Can be any
     * user provided message. Should only be specified if updating the status to
     * CANCELLED.
     * @param MonetaryAccountSetting|null $setting The settings of the
     * MonetaryAccountJoint.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        string $currency,
        array $allCoOwner,
        string $description = null,
        Amount $dailyLimit = null,
        Amount $overdraftLimit = null,
        array $alias = null,
        string $avatarUuid = null,
        string $status = null,
        string $subStatus = null,
        string $reason = null,
        string $reasonDescription = null,
        MonetaryAccountSetting $setting = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [
                self::FIELD_CURRENCY => $currency,
                self::FIELD_DESCRIPTION => $description,
                self::FIELD_DAILY_LIMIT => $dailyLimit,
                self::FIELD_OVERDRAFT_LIMIT => $overdraftLimit,
                self::FIELD_ALIAS => $alias,
                self::FIELD_AVATAR_UUID => $avatarUuid,
                self::FIELD_STATUS => $status,
                self::FIELD_SUB_STATUS => $subStatus,
                self::FIELD_REASON => $reason,
                self::FIELD_REASON_DESCRIPTION => $reasonDescription,
                self::FIELD_ALL_CO_OWNER => $allCoOwner,
                self::FIELD_SETTING => $setting,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param int $monetaryAccountJointId
     * @param string[] $customHeaders
     *
     * @return BunqResponseMonetaryAccountJoint
     */
    public static function get(int $monetaryAccountJointId, array $customHeaders = []): BunqResponseMonetaryAccountJoint
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $monetaryAccountJointId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseMonetaryAccountJoint::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $monetaryAccountJointId
     * @param string|null $description The description of the
     * MonetaryAccountJoint. Defaults to 'bunq account'.
     * @param Amount|null $dailyLimit The daily spending limit Amount of the
     * MonetaryAccountJoint. Defaults to 1000 EUR. Currency must match the
     * MonetaryAccountJoint's currency. Limited to 10000 EUR.
     * @param string|null $avatarUuid The UUID of the Avatar of the
     * MonetaryAccountJoint.
     * @param string|null $status The status of the MonetaryAccountJoint.
     * Ignored in POST requests (always set to ACTIVE) can be CANCELLED or
     * PENDING_REOPEN in PUT requests to cancel (close) or reopen the
     * MonetaryAccountJoint. When updating the status and/or sub_status no other
     * fields can be updated in the same request (and vice versa).
     * @param string|null $subStatus The sub-status of the MonetaryAccountJoint
     * providing extra information regarding the status. Should be ignored for
     * POST requests. In case of PUT requests with status CANCELLED it can only
     * be REDEMPTION_VOLUNTARY, while with status PENDING_REOPEN it can only be
     * NONE. When updating the status and/or sub_status no other fields can be
     * updated in the same request (and vice versa).
     * @param string|null $reason The reason for voluntarily cancelling
     * (closing) the MonetaryAccountJoint, can only be OTHER. Should only be
     * specified if updating the status to CANCELLED.
     * @param string|null $reasonDescription The optional free-form reason for
     * voluntarily cancelling (closing) the MonetaryAccountJoint. Can be any
     * user provided message. Should only be specified if updating the status to
     * CANCELLED.
     * @param MonetaryAccountSetting|null $setting The settings of the
     * MonetaryAccountJoint.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(
        int $monetaryAccountJointId,
        string $description = null,
        Amount $dailyLimit = null,
        string $avatarUuid = null,
        string $status = null,
        string $subStatus = null,
        string $reason = null,
        string $reasonDescription = null,
        MonetaryAccountSetting $setting = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $monetaryAccountJointId]
            ),
            [
                self::FIELD_DESCRIPTION => $description,
                self::FIELD_DAILY_LIMIT => $dailyLimit,
                self::FIELD_AVATAR_UUID => $avatarUuid,
                self::FIELD_STATUS => $status,
                self::FIELD_SUB_STATUS => $subStatus,
                self::FIELD_REASON => $reason,
                self::FIELD_REASON_DESCRIPTION => $reasonDescription,
                self::FIELD_SETTING => $setting,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseMonetaryAccountJointList
     */
    public static function listing(array $params = [], array $customHeaders = []): BunqResponseMonetaryAccountJointList
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

        return BunqResponseMonetaryAccountJointList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the MonetaryAccountJoint.
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
     * The timestamp of the MonetaryAccountJoint's creation.
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
     * The timestamp of the MonetaryAccountJoint's last update.
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
     * The Avatar of the MonetaryAccountJoint.
     *
     * @return Avatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param Avatar $avatar
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * The currency of the MonetaryAccountJoint as an ISO 4217 formatted
     * currency code.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * The description of the MonetaryAccountJoint. Defaults to 'bunq account'.
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
     * The daily spending limit Amount of the MonetaryAccountJoint. Defaults to
     * 1000 EUR. Currency must match the MonetaryAccountJoint's currency.
     * Limited to 10000 EUR.
     *
     * @return Amount
     */
    public function getDailyLimit()
    {
        return $this->dailyLimit;
    }

    /**
     * @param Amount $dailyLimit
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setDailyLimit($dailyLimit)
    {
        $this->dailyLimit = $dailyLimit;
    }

    /**
     * The maximum Amount the MonetaryAccountJoint can be 'in the red'.
     *
     * @return Amount
     */
    public function getOverdraftLimit()
    {
        return $this->overdraftLimit;
    }

    /**
     * @param Amount $overdraftLimit
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setOverdraftLimit($overdraftLimit)
    {
        $this->overdraftLimit = $overdraftLimit;
    }

    /**
     * The current available balance Amount of the MonetaryAccountJoint.
     *
     * @return Amount
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param Amount $balance
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * The Aliases for the MonetaryAccountJoint.
     *
     * @return Pointer[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param Pointer[] $alias
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
     * The MonetaryAccountJoint's public UUID.
     *
     * @return string
     */
    public function getPublicUuid()
    {
        return $this->publicUuid;
    }

    /**
     * @param string $publicUuid
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setPublicUuid($publicUuid)
    {
        $this->publicUuid = $publicUuid;
    }

    /**
     * The status of the MonetaryAccountJoint. Can be: ACTIVE, BLOCKED,
     * CANCELLED or PENDING_REOPEN
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The sub-status of the MonetaryAccountJoint providing extra information
     * regarding the status. Will be NONE for ACTIVE or PENDING_REOPEN,
     * COMPLETELY or ONLY_ACCEPTING_INCOMING for BLOCKED and
     * REDEMPTION_INVOLUNTARY, REDEMPTION_VOLUNTARY or PERMANENT for CANCELLED.
     *
     * @return string
     */
    public function getSubStatus()
    {
        return $this->subStatus;
    }

    /**
     * @param string $subStatus
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setSubStatus($subStatus)
    {
        $this->subStatus = $subStatus;
    }

    /**
     * The reason for voluntarily cancelling (closing) the MonetaryAccountJoint,
     * can only be OTHER.
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * The optional free-form reason for voluntarily cancelling (closing) the
     * MonetaryAccountJoint. Can be any user provided message.
     *
     * @return string
     */
    public function getReasonDescription()
    {
        return $this->reasonDescription;
    }

    /**
     * @param string $reasonDescription
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setReasonDescription($reasonDescription)
    {
        $this->reasonDescription = $reasonDescription;
    }

    /**
     * The users the account will be joint with.
     *
     * @return CoOwner[]
     */
    public function getAllCoOwner()
    {
        return $this->allCoOwner;
    }

    /**
     * @param CoOwner[] $allCoOwner
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setAllCoOwner($allCoOwner)
    {
        $this->allCoOwner = $allCoOwner;
    }

    /**
     * The id of the User who owns the MonetaryAccountJoint.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * The profile of the account.
     *
     * @return MonetaryAccountProfile
     */
    public function getMonetaryAccountProfile()
    {
        return $this->monetaryAccountProfile;
    }

    /**
     * @param MonetaryAccountProfile $monetaryAccountProfile
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setMonetaryAccountProfile($monetaryAccountProfile)
    {
        $this->monetaryAccountProfile = $monetaryAccountProfile;
    }

    /**
     * The settings of the MonetaryAccountJoint.
     *
     * @return MonetaryAccountSetting
     */
    public function getSetting()
    {
        return $this->setting;
    }

    /**
     * @param MonetaryAccountSetting $setting
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setSetting($setting)
    {
        $this->setting = $setting;
    }

    /**
     * The id of the AutoSave.
     *
     * @return int
     */
    public function getAutoSaveId()
    {
        return $this->autoSaveId;
    }

    /**
     * @param int $autoSaveId
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setAutoSaveId($autoSaveId)
    {
        $this->autoSaveId = $autoSaveId;
    }

    /**
     * The ids of the AutoSave.
     *
     * @return BunqId[]
     */
    public function getAllAutoSaveId()
    {
        return $this->allAutoSaveId;
    }

    /**
     * @param BunqId[] $allAutoSaveId
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setAllAutoSaveId($allAutoSaveId)
    {
        $this->allAutoSaveId = $allAutoSaveId;
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

        if (!is_null($this->avatar)) {
            return false;
        }

        if (!is_null($this->currency)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->dailyLimit)) {
            return false;
        }

        if (!is_null($this->overdraftLimit)) {
            return false;
        }

        if (!is_null($this->balance)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->publicUuid)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->subStatus)) {
            return false;
        }

        if (!is_null($this->reason)) {
            return false;
        }

        if (!is_null($this->reasonDescription)) {
            return false;
        }

        if (!is_null($this->allCoOwner)) {
            return false;
        }

        if (!is_null($this->userId)) {
            return false;
        }

        if (!is_null($this->monetaryAccountProfile)) {
            return false;
        }

        if (!is_null($this->setting)) {
            return false;
        }

        if (!is_null($this->autoSaveId)) {
            return false;
        }

        if (!is_null($this->allAutoSaveId)) {
            return false;
        }

        return true;
    }
}
