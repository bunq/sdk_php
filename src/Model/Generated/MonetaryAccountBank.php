<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Avatar;
use bunq\Model\Generated\Object\MonetaryAccountSetting;
use bunq\Model\Generated\Object\NotificationFilter;
use bunq\Model\Generated\Object\Pointer;

/**
 * With MonetaryAccountBank you can create a new bank account, retrieve
 * information regarding your existing MonetaryAccountBanks and update
 * specific fields of an existing MonetaryAccountBank. Examples of fields
 * that can be updated are the description, the daily limit and the avatar
 * of the account.<br/><br/>Notification filters can be set on a monetary
 * account level to receive callbacks. For more information check the <a
 * href="/api/2/page/callbacks">dedicated callbacks page</a>.
 *
 * @generated
 */
class MonetaryAccountBank extends BunqModel
{
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
    const FIELD_SHARE = 'share';
    const FIELD_NOTIFICATION_FILTERS = 'notification_filters';
    const FIELD_SETTING = 'setting';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account-bank';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account-bank/%s';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account-bank/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account-bank';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'MonetaryAccountBank';

    /**
     * The id of the MonetaryAccountBank.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the MonetaryAccountBank's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the MonetaryAccountBank's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The Avatar of the MonetaryAccountBank.
     *
     * @var Avatar
     */
    protected $avatar;

    /**
     * The currency of the MonetaryAccountBank as an ISO 4217 formatted currency
     * code.
     *
     * @var string
     */
    protected $currency;

    /**
     * The description of the MonetaryAccountBank. Defaults to 'bunq account'.
     *
     * @var string
     */
    protected $description;

    /**
     * The daily spending limit Amount of the MonetaryAccountBank. Defaults to
     * 1000 EUR. Currency must match the MonetaryAccountBank's currency. Limited
     * to 10000 EUR.
     *
     * @var Amount
     */
    protected $dailyLimit;

    /**
     * Total Amount of money spent today. Timezone aware.
     *
     * @var Amount
     */
    protected $dailySpent;

    /**
     * The maximum Amount the MonetaryAccountBank can be 'in the red'.
     *
     * @var Amount
     */
    protected $overdraftLimit;

    /**
     * The current balance Amount of the MonetaryAccountBank.
     *
     * @var Amount
     */
    protected $balance;

    /**
     * The Aliases for the MonetaryAccountBank.
     *
     * @var Pointer[]
     */
    protected $alias;

    /**
     * The MonetaryAccountBank's public UUID.
     *
     * @var string
     */
    protected $publicUuid;

    /**
     * The status of the MonetaryAccountBank. Can be: ACTIVE, BLOCKED, CANCELLED
     * or PENDING_REOPEN
     *
     * @var string
     */
    protected $status;

    /**
     * The sub-status of the MonetaryAccountBank providing extra information
     * regarding the status. Will be NONE for ACTIVE or PENDING_REOPEN,
     * COMPLETELY or ONLY_ACCEPTING_INCOMING for BLOCKED and
     * REDEMPTION_INVOLUNTARY, REDEMPTION_VOLUNTARY or PERMANENT for CANCELLED.
     *
     * @var string
     */
    protected $subStatus;

    /**
     * The reason for voluntarily cancelling (closing) the MonetaryAccountBank,
     * can only be OTHER.
     *
     * @var string
     */
    protected $reason;

    /**
     * The optional free-form reason for voluntarily cancelling (closing) the
     * MonetaryAccountBank. Can be any user provided message.
     *
     * @var string
     */
    protected $reasonDescription;

    /**
     * The id of the User who owns the MonetaryAccountBank.
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
     * The types of notifications that will result in a push notification or URL
     * callback for this MonetaryAccountBank.
     *
     * @var NotificationFilter[]
     */
    protected $notificationFilters;

    /**
     * The settings of the MonetaryAccountBank.
     *
     * @var MonetaryAccountSetting
     */
    protected $setting;

    /**
     * Create new MonetaryAccountBank.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<int>
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

        return static::processForId($responseRaw);
    }

    /**
     * Get a specific MonetaryAccountBank.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountBankId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<MonetaryAccountBank>
     */
    public static function get(ApiContext $apiContext, $userId, $monetaryAccountBankId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $monetaryAccountBankId]
            ),
            [],
            $customHeaders
        );

        return static::fromJson($responseRaw);
    }

    /**
     * Update a specific existing MonetaryAccountBank.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountBankId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<int>
     */
    public static function update(ApiContext $apiContext, array $requestMap, $userId, $monetaryAccountBankId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [$userId, $monetaryAccountBankId]
            ),
            $requestMap,
            $customHeaders
        );

        return static::processForId($responseRaw);
    }

    /**
     * Gets a listing of all MonetaryAccountBanks of a given user.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponse<BunqModel[]|MonetaryAccountBank[]>
     */
    public static function listing(ApiContext $apiContext, $userId, array $params = [], array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId]
            ),
            $params,
            $customHeaders
        );

        return static::fromJsonList($responseRaw, self::OBJECT_TYPE);
    }

    /**
     * The id of the MonetaryAccountBank.
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
     * The timestamp of the MonetaryAccountBank's creation.
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
     * The timestamp of the MonetaryAccountBank's last update.
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
     * The Avatar of the MonetaryAccountBank.
     *
     * @return Avatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param Avatar $avatar
     */
    public function setAvatar(Avatar $avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * The currency of the MonetaryAccountBank as an ISO 4217 formatted currency
     * code.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * The description of the MonetaryAccountBank. Defaults to 'bunq account'.
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
     * The daily spending limit Amount of the MonetaryAccountBank. Defaults to
     * 1000 EUR. Currency must match the MonetaryAccountBank's currency. Limited
     * to 10000 EUR.
     *
     * @return Amount
     */
    public function getDailyLimit()
    {
        return $this->dailyLimit;
    }

    /**
     * @param Amount $dailyLimit
     */
    public function setDailyLimit(Amount $dailyLimit)
    {
        $this->dailyLimit = $dailyLimit;
    }

    /**
     * Total Amount of money spent today. Timezone aware.
     *
     * @return Amount
     */
    public function getDailySpent()
    {
        return $this->dailySpent;
    }

    /**
     * @param Amount $dailySpent
     */
    public function setDailySpent(Amount $dailySpent)
    {
        $this->dailySpent = $dailySpent;
    }

    /**
     * The maximum Amount the MonetaryAccountBank can be 'in the red'.
     *
     * @return Amount
     */
    public function getOverdraftLimit()
    {
        return $this->overdraftLimit;
    }

    /**
     * @param Amount $overdraftLimit
     */
    public function setOverdraftLimit(Amount $overdraftLimit)
    {
        $this->overdraftLimit = $overdraftLimit;
    }

    /**
     * The current balance Amount of the MonetaryAccountBank.
     *
     * @return Amount
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param Amount $balance
     */
    public function setBalance(Amount $balance)
    {
        $this->balance = $balance;
    }

    /**
     * The Aliases for the MonetaryAccountBank.
     *
     * @return Pointer[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param Pointer[] $alias
     */
    public function setAlias(array$alias)
    {
        $this->alias = $alias;
    }

    /**
     * The MonetaryAccountBank's public UUID.
     *
     * @return string
     */
    public function getPublicUuid()
    {
        return $this->publicUuid;
    }

    /**
     * @param string $publicUuid
     */
    public function setPublicUuid($publicUuid)
    {
        $this->publicUuid = $publicUuid;
    }

    /**
     * The status of the MonetaryAccountBank. Can be: ACTIVE, BLOCKED, CANCELLED
     * or PENDING_REOPEN
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
     * The sub-status of the MonetaryAccountBank providing extra information
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
     */
    public function setSubStatus($subStatus)
    {
        $this->subStatus = $subStatus;
    }

    /**
     * The reason for voluntarily cancelling (closing) the MonetaryAccountBank,
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
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * The optional free-form reason for voluntarily cancelling (closing) the
     * MonetaryAccountBank. Can be any user provided message.
     *
     * @return string
     */
    public function getReasonDescription()
    {
        return $this->reasonDescription;
    }

    /**
     * @param string $reasonDescription
     */
    public function setReasonDescription($reasonDescription)
    {
        $this->reasonDescription = $reasonDescription;
    }

    /**
     * The id of the User who owns the MonetaryAccountBank.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
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
     * @param MonetaryAccountProfile $monetaryAccountProfile
     */
    public function setMonetaryAccountProfile(MonetaryAccountProfile $monetaryAccountProfile)
    {
        $this->monetaryAccountProfile = $monetaryAccountProfile;
    }

    /**
     * The types of notifications that will result in a push notification or URL
     * callback for this MonetaryAccountBank.
     *
     * @return NotificationFilter[]
     */
    public function getNotificationFilters()
    {
        return $this->notificationFilters;
    }

    /**
     * @param NotificationFilter[] $notificationFilters
     */
    public function setNotificationFilters(array$notificationFilters)
    {
        $this->notificationFilters = $notificationFilters;
    }

    /**
     * The settings of the MonetaryAccountBank.
     *
     * @return MonetaryAccountSetting
     */
    public function getSetting()
    {
        return $this->setting;
    }

    /**
     * @param MonetaryAccountSetting $setting
     */
    public function setSetting(MonetaryAccountSetting $setting)
    {
        $this->setting = $setting;
    }
}
