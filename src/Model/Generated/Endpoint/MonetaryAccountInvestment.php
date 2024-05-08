<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Avatar;
use bunq\Model\Generated\Object\BunqId;
use bunq\Model\Generated\Object\MonetaryAccountSetting;
use bunq\Model\Generated\Object\Pointer;

/**
 * Endpoint for managing investment monetary accounts.
 *
 * @generated
 */
class MonetaryAccountInvestment extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_CURRENCY = 'currency';
    const FIELD_PROVIDER = 'provider';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DAILY_LIMIT = 'daily_limit';
    const FIELD_AVATAR_UUID = 'avatar_uuid';
    const FIELD_STATUS = 'status';
    const FIELD_SUB_STATUS = 'sub_status';
    const FIELD_REASON = 'reason';
    const FIELD_REASON_DESCRIPTION = 'reason_description';
    const FIELD_DISPLAY_NAME = 'display_name';
    const FIELD_SETTING = 'setting';
    const FIELD_BIRDEE_INVESTMENT_PORTFOLIO = 'birdee_investment_portfolio';
    const FIELD_MONETARY_ACCOUNT_DEPOSIT_INITIAL_ID = 'monetary_account_deposit_initial_id';
    const FIELD_AMOUNT_DEPOSIT_INITIAL = 'amount_deposit_initial';

    /**
     * The id of the MonetaryAccountInvestment.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the MonetaryAccountInvestment's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the MonetaryAccountInvestment's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The Avatar of the MonetaryAccountInvestment.
     *
     * @var Avatar
     */
    protected $avatar;

    /**
     * The currency of the MonetaryAccountInvestment as an ISO 4217 formatted
     * currency code.
     *
     * @var string
     */
    protected $currency;

    /**
     * The description of the MonetaryAccountInvestment. Defaults to 'bunq
     * account'.
     *
     * @var string
     */
    protected $description;

    /**
     * The daily spending limit Amount of the MonetaryAccountInvestment.
     * Defaults to 1000 EUR. Currency must match the MonetaryAccountInvestment's
     * currency. Limited to 10000 EUR.
     *
     * @var Amount
     */
    protected $dailyLimit;

    /**
     * The current available balance Amount of the MonetaryAccountInvestment.
     *
     * @var Amount
     */
    protected $balance;

    /**
     * The Aliases for the MonetaryAccountInvestment.
     *
     * @var Pointer[]
     */
    protected $alias;

    /**
     * The MonetaryAccountInvestment's public UUID.
     *
     * @var string
     */
    protected $publicUuid;

    /**
     * The status of the MonetaryAccountInvestment. Can be: ACTIVE, BLOCKED,
     * CANCELLED or PENDING_REOPEN
     *
     * @var string
     */
    protected $status;

    /**
     * The sub-status of the MonetaryAccountInvestment providing extra
     * information regarding the status. Will be NONE for ACTIVE or
     * PENDING_REOPEN, COMPLETELY or ONLY_ACCEPTING_INCOMING for BLOCKED and
     * REDEMPTION_INVOLUNTARY, REDEMPTION_VOLUNTARY or PERMANENT for CANCELLED.
     *
     * @var string
     */
    protected $subStatus;

    /**
     * The reason for voluntarily cancelling (closing) the
     * MonetaryAccountInvestment, can only be OTHER.
     *
     * @var string
     */
    protected $reason;

    /**
     * The optional free-form reason for voluntarily cancelling (closing) the
     * MonetaryAccountInvestment. Can be any user provided message.
     *
     * @var string
     */
    protected $reasonDescription;

    /**
     * The id of the User who owns the MonetaryAccountInvestment.
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
     * The settings of the MonetaryAccountInvestment.
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
     * The currency of the MonetaryAccountInvestment as an ISO 4217 formatted
     * currency code.
     *
     * @var string
     */
    protected $currencyFieldForRequest;

    /**
     * The provider of the investment service.
     *
     * @var string
     */
    protected $providerFieldForRequest;

    /**
     * The description of the MonetaryAccountInvestment. Defaults to 'bunq
     * account'.
     *
     * @var string|null
     */
    protected $descriptionFieldForRequest;

    /**
     * The daily spending limit Amount of the MonetaryAccountInvestment.
     * Defaults to 1000 EUR. Currency must match the MonetaryAccountInvestment's
     * currency. Limited to 10000 EUR.
     *
     * @var Amount|null
     */
    protected $dailyLimitFieldForRequest;

    /**
     * The UUID of the Avatar of the MonetaryAccountInvestment.
     *
     * @var string|null
     */
    protected $avatarUuidFieldForRequest;

    /**
     * The status of the MonetaryAccountInvestment. Ignored in POST requests
     * (always set to ACTIVE) can be CANCELLED or PENDING_REOPEN in PUT requests
     * to cancel (close) or reopen the MonetaryAccountInvestment. When updating
     * the status and/or sub_status no other fields can be updated in the same
     * request (and vice versa).
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * The sub-status of the MonetaryAccountInvestment providing extra
     * information regarding the status. Should be ignored for POST requests. In
     * case of PUT requests with status CANCELLED it can only be
     * REDEMPTION_VOLUNTARY, while with status PENDING_REOPEN it can only be
     * NONE. When updating the status and/or sub_status no other fields can be
     * updated in the same request (and vice versa).
     *
     * @var string|null
     */
    protected $subStatusFieldForRequest;

    /**
     * The reason for voluntarily cancelling (closing) the
     * MonetaryAccountInvestment, can only be OTHER. Should only be specified if
     * updating the status to CANCELLED.
     *
     * @var string|null
     */
    protected $reasonFieldForRequest;

    /**
     * The optional free-form reason for voluntarily cancelling (closing) the
     * MonetaryAccountInvestment. Can be any user provided message. Should only
     * be specified if updating the status to CANCELLED.
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
     * The settings of the MonetaryAccountInvestment.
     *
     * @var MonetaryAccountSetting|null
     */
    protected $settingFieldForRequest;

    /**
     * The Birdee investment portfolio.
     *
     * @var BirdeeInvestmentPortfolio|null
     */
    protected $birdeeInvestmentPortfolioFieldForRequest;

    /**
     * ID of the MA to be used for the initial deposit to the investment
     * account.
     *
     * @var int|null
     */
    protected $monetaryAccountDepositInitialIdFieldForRequest;

    /**
     * The amount to be transferred to the investment account as the initial
     * deposit.
     *
     * @var Amount|null
     */
    protected $amountDepositInitialFieldForRequest;

    /**
     * @param string $currency The currency of the MonetaryAccountInvestment as
     * an ISO 4217 formatted currency code.
     * @param string $provider The provider of the investment service.
     * @param string|null $description The description of the
     * MonetaryAccountInvestment. Defaults to 'bunq account'.
     * @param Amount|null $dailyLimit The daily spending limit Amount of the
     * MonetaryAccountInvestment. Defaults to 1000 EUR. Currency must match the
     * MonetaryAccountInvestment's currency. Limited to 10000 EUR.
     * @param string|null $avatarUuid The UUID of the Avatar of the
     * MonetaryAccountInvestment.
     * @param string|null $status The status of the MonetaryAccountInvestment.
     * Ignored in POST requests (always set to ACTIVE) can be CANCELLED or
     * PENDING_REOPEN in PUT requests to cancel (close) or reopen the
     * MonetaryAccountInvestment. When updating the status and/or sub_status no
     * other fields can be updated in the same request (and vice versa).
     * @param string|null $subStatus The sub-status of the
     * MonetaryAccountInvestment providing extra information regarding the
     * status. Should be ignored for POST requests. In case of PUT requests with
     * status CANCELLED it can only be REDEMPTION_VOLUNTARY, while with status
     * PENDING_REOPEN it can only be NONE. When updating the status and/or
     * sub_status no other fields can be updated in the same request (and vice
     * versa).
     * @param string|null $reason The reason for voluntarily cancelling
     * (closing) the MonetaryAccountInvestment, can only be OTHER. Should only
     * be specified if updating the status to CANCELLED.
     * @param string|null $reasonDescription The optional free-form reason for
     * voluntarily cancelling (closing) the MonetaryAccountInvestment. Can be
     * any user provided message. Should only be specified if updating the
     * status to CANCELLED.
     * @param string|null $displayName The legal name of the user / company
     * using this monetary account.
     * @param MonetaryAccountSetting|null $setting The settings of the
     * MonetaryAccountInvestment.
     * @param BirdeeInvestmentPortfolio|null $birdeeInvestmentPortfolio The
     * Birdee investment portfolio.
     * @param int|null $monetaryAccountDepositInitialId ID of the MA to be used
     * for the initial deposit to the investment account.
     * @param Amount|null $amountDepositInitial The amount to be transferred to
     * the investment account as the initial deposit.
     */
    public function __construct(string  $currency, string  $provider, string  $description = null, Amount  $dailyLimit = null, string  $avatarUuid = null, string  $status = null, string  $subStatus = null, string  $reason = null, string  $reasonDescription = null, string  $displayName = null, MonetaryAccountSetting  $setting = null, BirdeeInvestmentPortfolio  $birdeeInvestmentPortfolio = null, int  $monetaryAccountDepositInitialId = null, Amount  $amountDepositInitial = null)
    {
        $this->currencyFieldForRequest = $currency;
        $this->providerFieldForRequest = $provider;
        $this->descriptionFieldForRequest = $description;
        $this->dailyLimitFieldForRequest = $dailyLimit;
        $this->avatarUuidFieldForRequest = $avatarUuid;
        $this->statusFieldForRequest = $status;
        $this->subStatusFieldForRequest = $subStatus;
        $this->reasonFieldForRequest = $reason;
        $this->reasonDescriptionFieldForRequest = $reasonDescription;
        $this->displayNameFieldForRequest = $displayName;
        $this->settingFieldForRequest = $setting;
        $this->birdeeInvestmentPortfolioFieldForRequest = $birdeeInvestmentPortfolio;
        $this->monetaryAccountDepositInitialIdFieldForRequest = $monetaryAccountDepositInitialId;
        $this->amountDepositInitialFieldForRequest = $amountDepositInitial;
    }

    /**
     * The id of the MonetaryAccountInvestment.
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
     * The timestamp of the MonetaryAccountInvestment's creation.
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
     * The timestamp of the MonetaryAccountInvestment's last update.
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
     * The Avatar of the MonetaryAccountInvestment.
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
     * The currency of the MonetaryAccountInvestment as an ISO 4217 formatted
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
     * The description of the MonetaryAccountInvestment. Defaults to 'bunq
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
     * The daily spending limit Amount of the MonetaryAccountInvestment.
     * Defaults to 1000 EUR. Currency must match the MonetaryAccountInvestment's
     * currency. Limited to 10000 EUR.
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
     * The current available balance Amount of the MonetaryAccountInvestment.
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
     * The Aliases for the MonetaryAccountInvestment.
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
     * The MonetaryAccountInvestment's public UUID.
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
     * The status of the MonetaryAccountInvestment. Can be: ACTIVE, BLOCKED,
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
     * The sub-status of the MonetaryAccountInvestment providing extra
     * information regarding the status. Will be NONE for ACTIVE or
     * PENDING_REOPEN, COMPLETELY or ONLY_ACCEPTING_INCOMING for BLOCKED and
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
     * MonetaryAccountInvestment, can only be OTHER.
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
     * MonetaryAccountInvestment. Can be any user provided message.
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
     * The id of the User who owns the MonetaryAccountInvestment.
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
     * The settings of the MonetaryAccountInvestment.
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

        return true;
    }
}
