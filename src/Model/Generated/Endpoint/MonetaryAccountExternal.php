<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Avatar;
use bunq\Model\Generated\Object\BunqId;
use bunq\Model\Generated\Object\MonetaryAccountSetting;
use bunq\Model\Generated\Object\Pointer;

/**
 * Endpoint for managing monetary accounts which are connected to external
 * services.
 *
 * @generated
 */
class MonetaryAccountExternal extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account-external';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account-external/%s';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account-external/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account-external';

    /**
     * Field constants.
     */
    const FIELD_CURRENCY = 'currency';
    const FIELD_SERVICE = 'service';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DAILY_LIMIT = 'daily_limit';
    const FIELD_AVATAR_UUID = 'avatar_uuid';
    const FIELD_STATUS = 'status';
    const FIELD_SUB_STATUS = 'sub_status';
    const FIELD_REASON = 'reason';
    const FIELD_REASON_DESCRIPTION = 'reason_description';
    const FIELD_DISPLAY_NAME = 'display_name';
    const FIELD_SETTING = 'setting';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'MonetaryAccountExternal';

    /**
     * The id of the MonetaryAccountExternal.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the MonetaryAccountExternal's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the MonetaryAccountExternal's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The Avatar of the MonetaryAccountExternal.
     *
     * @var Avatar
     */
    protected $avatar;

    /**
     * The currency of the MonetaryAccountExternal as an ISO 4217 formatted
     * currency code.
     *
     * @var string
     */
    protected $currency;

    /**
     * The description of the MonetaryAccountExternal. Defaults to 'bunq
     * account'.
     *
     * @var string
     */
    protected $description;

    /**
     * The daily spending limit Amount of the MonetaryAccountExternal. Defaults
     * to 1000 EUR. Currency must match the MonetaryAccountExternal's currency.
     * Limited to 10000 EUR.
     *
     * @var Amount
     */
    protected $dailyLimit;

    /**
     * The maximum Amount the MonetaryAccountExternal can be 'in the red'.
     *
     * @var Amount
     */
    protected $overdraftLimit;

    /**
     * The current available balance Amount of the MonetaryAccountExternal.
     *
     * @var Amount
     */
    protected $balance;

    /**
     * The Aliases for the MonetaryAccountExternal.
     *
     * @var Pointer[]
     */
    protected $alias;

    /**
     * The MonetaryAccountExternal's public UUID.
     *
     * @var string
     */
    protected $publicUuid;

    /**
     * The status of the MonetaryAccountExternal. Can be: ACTIVE, BLOCKED,
     * CANCELLED or PENDING_REOPEN
     *
     * @var string
     */
    protected $status;

    /**
     * The sub-status of the MonetaryAccountExternal providing extra information
     * regarding the status. Will be NONE for ACTIVE or PENDING_REOPEN,
     * COMPLETELY or ONLY_ACCEPTING_INCOMING for BLOCKED and
     * REDEMPTION_INVOLUNTARY, REDEMPTION_VOLUNTARY or PERMANENT for CANCELLED.
     *
     * @var string
     */
    protected $subStatus;

    /**
     * The reason for voluntarily cancelling (closing) the
     * MonetaryAccountExternal, can only be OTHER.
     *
     * @var string
     */
    protected $reason;

    /**
     * The optional free-form reason for voluntarily cancelling (closing) the
     * MonetaryAccountExternal. Can be any user provided message.
     *
     * @var string
     */
    protected $reasonDescription;

    /**
     * The id of the User who owns the MonetaryAccountExternal.
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
     * The legal name of the user / company using this monetary account.
     *
     * @var string|null
     */
    protected $displayName;

    /**
     * The settings of the MonetaryAccountExternal.
     *
     * @var MonetaryAccountSetting
     */
    protected $setting;

    /**
     * The ids of the AutoSave.
     *
     * @var BunqId[]
     */
    protected $allAutoSaveId;

    /**
     * The external service the Monetary Account is connected with.
     *
     * @var string
     */
    protected $service;

    /**
     * The open banking account for information about the external account.
     *
     * @var OpenBankingAccount
     */
    protected $openBankingAccount;

    /**
     * The currency of the MonetaryAccountExternal as an ISO 4217 formatted
     * currency code.
     *
     * @var string
     */
    protected $currencyFieldForRequest;

    /**
     * The service the MonetaryAccountExternal is connected with.
     *
     * @var string
     */
    protected $serviceFieldForRequest;

    /**
     * The description of the MonetaryAccountExternal. Defaults to 'bunq
     * account'.
     *
     * @var string|null
     */
    protected $descriptionFieldForRequest;

    /**
     * The daily spending limit Amount of the MonetaryAccountExternal. Defaults
     * to 1000 EUR. Currency must match the MonetaryAccountExternal's currency.
     * Limited to 10000 EUR.
     *
     * @var Amount|null
     */
    protected $dailyLimitFieldForRequest;

    /**
     * The UUID of the Avatar of the MonetaryAccountExternal.
     *
     * @var string|null
     */
    protected $avatarUuidFieldForRequest;

    /**
     * The status of the MonetaryAccountExternal. Ignored in POST requests
     * (always set to ACTIVE) can be CANCELLED or PENDING_REOPEN in PUT requests
     * to cancel (close) or reopen the MonetaryAccountExternal. When updating
     * the status and/or sub_status no other fields can be updated in the same
     * request (and vice versa).
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * The sub-status of the MonetaryAccountExternal providing extra information
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
     * The reason for voluntarily cancelling (closing) the
     * MonetaryAccountExternal, can only be OTHER. Should only be specified if
     * updating the status to CANCELLED.
     *
     * @var string|null
     */
    protected $reasonFieldForRequest;

    /**
     * The optional free-form reason for voluntarily cancelling (closing) the
     * MonetaryAccountExternal. Can be any user provided message. Should only be
     * specified if updating the status to CANCELLED.
     *
     * @var string|null
     */
    protected $reasonDescriptionFieldForRequest;

    /**
     * The legal name of the user / company using this monetary account.
     *
     * @var string|null
     */
    protected $displayNameFieldForRequest;

    /**
     * The settings of the MonetaryAccountExternal.
     *
     * @var MonetaryAccountSetting|null
     */
    protected $settingFieldForRequest;

    /**
     * @param string $currency The currency of the MonetaryAccountExternal as an
     * ISO 4217 formatted currency code.
     * @param string $service The service the MonetaryAccountExternal is
     * connected with.
     * @param string|null $description The description of the
     * MonetaryAccountExternal. Defaults to 'bunq account'.
     * @param Amount|null $dailyLimit The daily spending limit Amount of the
     * MonetaryAccountExternal. Defaults to 1000 EUR. Currency must match the
     * MonetaryAccountExternal's currency. Limited to 10000 EUR.
     * @param string|null $avatarUuid The UUID of the Avatar of the
     * MonetaryAccountExternal.
     * @param string|null $status The status of the MonetaryAccountExternal.
     * Ignored in POST requests (always set to ACTIVE) can be CANCELLED or
     * PENDING_REOPEN in PUT requests to cancel (close) or reopen the
     * MonetaryAccountExternal. When updating the status and/or sub_status no
     * other fields can be updated in the same request (and vice versa).
     * @param string|null $subStatus The sub-status of the
     * MonetaryAccountExternal providing extra information regarding the status.
     * Should be ignored for POST requests. In case of PUT requests with status
     * CANCELLED it can only be REDEMPTION_VOLUNTARY, while with status
     * PENDING_REOPEN it can only be NONE. When updating the status and/or
     * sub_status no other fields can be updated in the same request (and vice
     * versa).
     * @param string|null $reason The reason for voluntarily cancelling
     * (closing) the MonetaryAccountExternal, can only be OTHER. Should only be
     * specified if updating the status to CANCELLED.
     * @param string|null $reasonDescription The optional free-form reason for
     * voluntarily cancelling (closing) the MonetaryAccountExternal. Can be any
     * user provided message. Should only be specified if updating the status to
     * CANCELLED.
     * @param string|null $displayName The legal name of the user / company
     * using this monetary account.
     * @param MonetaryAccountSetting|null $setting The settings of the
     * MonetaryAccountExternal.
     */
    public function __construct(string  $currency, string  $service, string  $description = null, Amount  $dailyLimit = null, string  $avatarUuid = null, string  $status = null, string  $subStatus = null, string  $reason = null, string  $reasonDescription = null, string  $displayName = null, MonetaryAccountSetting  $setting = null)
    {
        $this->currencyFieldForRequest = $currency;
        $this->serviceFieldForRequest = $service;
        $this->descriptionFieldForRequest = $description;
        $this->dailyLimitFieldForRequest = $dailyLimit;
        $this->avatarUuidFieldForRequest = $avatarUuid;
        $this->statusFieldForRequest = $status;
        $this->subStatusFieldForRequest = $subStatus;
        $this->reasonFieldForRequest = $reason;
        $this->reasonDescriptionFieldForRequest = $reasonDescription;
        $this->displayNameFieldForRequest = $displayName;
        $this->settingFieldForRequest = $setting;
    }

    /**
     * @param string $currency The currency of the MonetaryAccountExternal as an
     * ISO 4217 formatted currency code.
     * @param string $service The service the MonetaryAccountExternal is
     * connected with.
     * @param string|null $description The description of the
     * MonetaryAccountExternal. Defaults to 'bunq account'.
     * @param Amount|null $dailyLimit The daily spending limit Amount of the
     * MonetaryAccountExternal. Defaults to 1000 EUR. Currency must match the
     * MonetaryAccountExternal's currency. Limited to 10000 EUR.
     * @param string|null $avatarUuid The UUID of the Avatar of the
     * MonetaryAccountExternal.
     * @param string|null $status The status of the MonetaryAccountExternal.
     * Ignored in POST requests (always set to ACTIVE) can be CANCELLED or
     * PENDING_REOPEN in PUT requests to cancel (close) or reopen the
     * MonetaryAccountExternal. When updating the status and/or sub_status no
     * other fields can be updated in the same request (and vice versa).
     * @param string|null $subStatus The sub-status of the
     * MonetaryAccountExternal providing extra information regarding the status.
     * Should be ignored for POST requests. In case of PUT requests with status
     * CANCELLED it can only be REDEMPTION_VOLUNTARY, while with status
     * PENDING_REOPEN it can only be NONE. When updating the status and/or
     * sub_status no other fields can be updated in the same request (and vice
     * versa).
     * @param string|null $reason The reason for voluntarily cancelling
     * (closing) the MonetaryAccountExternal, can only be OTHER. Should only be
     * specified if updating the status to CANCELLED.
     * @param string|null $reasonDescription The optional free-form reason for
     * voluntarily cancelling (closing) the MonetaryAccountExternal. Can be any
     * user provided message. Should only be specified if updating the status to
     * CANCELLED.
     * @param string|null $displayName The legal name of the user / company
     * using this monetary account.
     * @param MonetaryAccountSetting|null $setting The settings of the
     * MonetaryAccountExternal.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(string  $currency, string  $service, string  $description = null, Amount  $dailyLimit = null, string  $avatarUuid = null, string  $status = null, string  $subStatus = null, string  $reason = null, string  $reasonDescription = null, string  $displayName = null, MonetaryAccountSetting  $setting = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [self::FIELD_CURRENCY => $currency,
self::FIELD_SERVICE => $service,
self::FIELD_DESCRIPTION => $description,
self::FIELD_DAILY_LIMIT => $dailyLimit,
self::FIELD_AVATAR_UUID => $avatarUuid,
self::FIELD_STATUS => $status,
self::FIELD_SUB_STATUS => $subStatus,
self::FIELD_REASON => $reason,
self::FIELD_REASON_DESCRIPTION => $reasonDescription,
self::FIELD_DISPLAY_NAME => $displayName,
self::FIELD_SETTING => $setting],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param int $monetaryAccountExternalId
     * @param string[] $customHeaders
     *
     * @return BunqResponseMonetaryAccountExternal
     */
    public static function get(int $monetaryAccountExternalId, array $customHeaders = []): BunqResponseMonetaryAccountExternal
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $monetaryAccountExternalId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseMonetaryAccountExternal::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $monetaryAccountExternalId
     * @param string|null $description The description of the
     * MonetaryAccountExternal. Defaults to 'bunq account'.
     * @param Amount|null $dailyLimit The daily spending limit Amount of the
     * MonetaryAccountExternal. Defaults to 1000 EUR. Currency must match the
     * MonetaryAccountExternal's currency. Limited to 10000 EUR.
     * @param string|null $avatarUuid The UUID of the Avatar of the
     * MonetaryAccountExternal.
     * @param string|null $status The status of the MonetaryAccountExternal.
     * Ignored in POST requests (always set to ACTIVE) can be CANCELLED or
     * PENDING_REOPEN in PUT requests to cancel (close) or reopen the
     * MonetaryAccountExternal. When updating the status and/or sub_status no
     * other fields can be updated in the same request (and vice versa).
     * @param string|null $subStatus The sub-status of the
     * MonetaryAccountExternal providing extra information regarding the status.
     * Should be ignored for POST requests. In case of PUT requests with status
     * CANCELLED it can only be REDEMPTION_VOLUNTARY, while with status
     * PENDING_REOPEN it can only be NONE. When updating the status and/or
     * sub_status no other fields can be updated in the same request (and vice
     * versa).
     * @param string|null $reason The reason for voluntarily cancelling
     * (closing) the MonetaryAccountExternal, can only be OTHER. Should only be
     * specified if updating the status to CANCELLED.
     * @param string|null $reasonDescription The optional free-form reason for
     * voluntarily cancelling (closing) the MonetaryAccountExternal. Can be any
     * user provided message. Should only be specified if updating the status to
     * CANCELLED.
     * @param string|null $displayName The legal name of the user / company
     * using this monetary account.
     * @param MonetaryAccountSetting|null $setting The settings of the
     * MonetaryAccountExternal.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(int $monetaryAccountExternalId, string  $description = null, Amount  $dailyLimit = null, string  $avatarUuid = null, string  $status = null, string  $subStatus = null, string  $reason = null, string  $reasonDescription = null, string  $displayName = null, MonetaryAccountSetting  $setting = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $monetaryAccountExternalId]
            ),
            [self::FIELD_DESCRIPTION => $description,
self::FIELD_DAILY_LIMIT => $dailyLimit,
self::FIELD_AVATAR_UUID => $avatarUuid,
self::FIELD_STATUS => $status,
self::FIELD_SUB_STATUS => $subStatus,
self::FIELD_REASON => $reason,
self::FIELD_REASON_DESCRIPTION => $reasonDescription,
self::FIELD_DISPLAY_NAME => $displayName,
self::FIELD_SETTING => $setting],
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
     * @return BunqResponseMonetaryAccountExternalList
     */
    public static function listing( array $params = [], array $customHeaders = []): BunqResponseMonetaryAccountExternalList
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

        return BunqResponseMonetaryAccountExternalList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the MonetaryAccountExternal.
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
     * The timestamp of the MonetaryAccountExternal's creation.
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
     * The timestamp of the MonetaryAccountExternal's last update.
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
     * The Avatar of the MonetaryAccountExternal.
     *
     * @return Avatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Avatar $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * The currency of the MonetaryAccountExternal as an ISO 4217 formatted
     * currency code.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * The description of the MonetaryAccountExternal. Defaults to 'bunq
     * account'.
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
     * The daily spending limit Amount of the MonetaryAccountExternal. Defaults
     * to 1000 EUR. Currency must match the MonetaryAccountExternal's currency.
     * Limited to 10000 EUR.
     *
     * @return Amount
     */
    public function getDailyLimit()
    {
        return $this->dailyLimit;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $dailyLimit
     */
    public function setDailyLimit($dailyLimit)
    {
        $this->dailyLimit = $dailyLimit;
    }

    /**
     * The maximum Amount the MonetaryAccountExternal can be 'in the red'.
     *
     * @return Amount
     */
    public function getOverdraftLimit()
    {
        return $this->overdraftLimit;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $overdraftLimit
     */
    public function setOverdraftLimit($overdraftLimit)
    {
        $this->overdraftLimit = $overdraftLimit;
    }

    /**
     * The current available balance Amount of the MonetaryAccountExternal.
     *
     * @return Amount
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * The Aliases for the MonetaryAccountExternal.
     *
     * @return Pointer[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Pointer[] $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * The MonetaryAccountExternal's public UUID.
     *
     * @return string
     */
    public function getPublicUuid()
    {
        return $this->publicUuid;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $publicUuid
     */
    public function setPublicUuid($publicUuid)
    {
        $this->publicUuid = $publicUuid;
    }

    /**
     * The status of the MonetaryAccountExternal. Can be: ACTIVE, BLOCKED,
     * CANCELLED or PENDING_REOPEN
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
     * The sub-status of the MonetaryAccountExternal providing extra information
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $subStatus
     */
    public function setSubStatus($subStatus)
    {
        $this->subStatus = $subStatus;
    }

    /**
     * The reason for voluntarily cancelling (closing) the
     * MonetaryAccountExternal, can only be OTHER.
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * The optional free-form reason for voluntarily cancelling (closing) the
     * MonetaryAccountExternal. Can be any user provided message.
     *
     * @return string
     */
    public function getReasonDescription()
    {
        return $this->reasonDescription;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $reasonDescription
     */
    public function setReasonDescription($reasonDescription)
    {
        $this->reasonDescription = $reasonDescription;
    }

    /**
     * The id of the User who owns the MonetaryAccountExternal.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $userId
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param MonetaryAccountProfile $monetaryAccountProfile
     */
    public function setMonetaryAccountProfile($monetaryAccountProfile)
    {
        $this->monetaryAccountProfile = $monetaryAccountProfile;
    }

    /**
     * The legal name of the user / company using this monetary account.
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * The settings of the MonetaryAccountExternal.
     *
     * @return MonetaryAccountSetting
     */
    public function getSetting()
    {
        return $this->setting;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param MonetaryAccountSetting $setting
     */
    public function setSetting($setting)
    {
        $this->setting = $setting;
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param BunqId[] $allAutoSaveId
     */
    public function setAllAutoSaveId($allAutoSaveId)
    {
        $this->allAutoSaveId = $allAutoSaveId;
    }

    /**
     * The external service the Monetary Account is connected with.
     *
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }

    /**
     * The open banking account for information about the external account.
     *
     * @return OpenBankingAccount
     */
    public function getOpenBankingAccount()
    {
        return $this->openBankingAccount;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param OpenBankingAccount $openBankingAccount
     */
    public function setOpenBankingAccount($openBankingAccount)
    {
        $this->openBankingAccount = $openBankingAccount;
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

        if (!is_null($this->userId)) {
            return false;
        }

        if (!is_null($this->monetaryAccountProfile)) {
            return false;
        }

        if (!is_null($this->displayName)) {
            return false;
        }

        if (!is_null($this->setting)) {
            return false;
        }

        if (!is_null($this->allAutoSaveId)) {
            return false;
        }

        if (!is_null($this->service)) {
            return false;
        }

        if (!is_null($this->openBankingAccount)) {
            return false;
        }

        return true;
    }
}
