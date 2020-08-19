<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Avatar;
use bunq\Model\Generated\Object\MonetaryAccountSetting;
use bunq\Model\Generated\Object\Pointer;

/**
 * With MonetaryAccountLight is a monetary account for bunq light users.
 * Through this endpoint you can retrieve information regarding your
 * existing MonetaryAccountLights and update specific fields of an existing
 * MonetaryAccountLight. Examples of fields that can be updated are the
 * description, the daily limit and the avatar of the account.
 *
 * @generated
 */
class MonetaryAccountLight extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_CURRENCY = 'currency';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DAILY_LIMIT = 'daily_limit';
    const FIELD_AVATAR_UUID = 'avatar_uuid';
    const FIELD_STATUS = 'status';
    const FIELD_SUB_STATUS = 'sub_status';
    const FIELD_REASON = 'reason';
    const FIELD_REASON_DESCRIPTION = 'reason_description';
    const FIELD_SETTING = 'setting';

    /**
     * The id of the MonetaryAccountLight.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the MonetaryAccountLight's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the MonetaryAccountLight's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The Avatar of the MonetaryAccountLight.
     *
     * @var Avatar
     */
    protected $avatar;

    /**
     * The currency of the MonetaryAccountLight as an ISO 4217 formatted
     * currency code.
     *
     * @var string
     */
    protected $currency;

    /**
     * The description of the MonetaryAccountLight. Defaults to 'bunq account'.
     *
     * @var string
     */
    protected $description;

    /**
     * The daily spending limit Amount of the MonetaryAccountLight. Defaults to
     * 1000 EUR. Currency must match the MonetaryAccountLight's currency.
     * Limited to 10000 EUR.
     *
     * @var Amount
     */
    protected $dailyLimit;

    /**
     * The current available balance Amount of the MonetaryAccountLight.
     *
     * @var Amount
     */
    protected $balance;

    /**
     * The Aliases for the MonetaryAccountLight.
     *
     * @var Pointer[]
     */
    protected $alias;

    /**
     * The MonetaryAccountLight's public UUID.
     *
     * @var string
     */
    protected $publicUuid;

    /**
     * The status of the MonetaryAccountLight. Can be: ACTIVE, BLOCKED,
     * CANCELLED or PENDING_REOPEN
     *
     * @var string
     */
    protected $status;

    /**
     * The sub-status of the MonetaryAccountLight providing extra information
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
     * The id of the User who owns the MonetaryAccountLight.
     *
     * @var int
     */
    protected $userId;

    /**
     * The maximum balance Amount of the MonetaryAccountLight.
     *
     * @var Amount
     */
    protected $balanceMaximum;

    /**
     * The amount of the monthly budget used.
     *
     * @var Amount
     */
    protected $budgetMonthUsed;

    /**
     * The total amount of the monthly budget.
     *
     * @var Amount
     */
    protected $budgetMonthMaximum;

    /**
     * The amount of the yearly budget used.
     *
     * @var Amount
     */
    protected $budgetYearUsed;

    /**
     * The total amount of the yearly budget.
     *
     * @var Amount
     */
    protected $budgetYearMaximum;

    /**
     * The amount of the yearly withdrawal budget used.
     *
     * @var Amount
     */
    protected $budgetWithdrawalYearUsed;

    /**
     * The total amount of the yearly withdrawal budget.
     *
     * @var Amount
     */
    protected $budgetWithdrawalYearMaximum;

    /**
     * The settings of the MonetaryAccountLight.
     *
     * @var MonetaryAccountSetting
     */
    protected $setting;

    /**
     * The currency of the MonetaryAccountLight as an ISO 4217 formatted
     * currency code.
     *
     * @var string
     */
    protected $currencyFieldForRequest;

    /**
     * The description of the MonetaryAccountLight. Defaults to 'bunq account'.
     *
     * @var string|null
     */
    protected $descriptionFieldForRequest;

    /**
     * The daily spending limit Amount of the MonetaryAccountLight. Defaults to
     * 1000 EUR. Currency must match the MonetaryAccountLight's currency.
     * Limited to 10000 EUR.
     *
     * @var Amount|null
     */
    protected $dailyLimitFieldForRequest;

    /**
     * The UUID of the Avatar of the MonetaryAccountLight.
     *
     * @var string|null
     */
    protected $avatarUuidFieldForRequest;

    /**
     * The status of the MonetaryAccountLight. Ignored in POST requests (always
     * set to ACTIVE) can be CANCELLED or PENDING_REOPEN in PUT requests to
     * cancel (close) or reopen the MonetaryAccountLight. When updating the
     * status and/or sub_status no other fields can be updated in the same
     * request (and vice versa).
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * The sub-status of the MonetaryAccountLight providing extra information
     * regarding the status. Should be ignored for POST requests and can only be
     * REDEMPTION_VOLUNTARY for PUT requests with status CANCELLED. When
     * updating the status and/or sub_status no other fields can be updated in
     * the same request (and vice versa).
     *
     * @var string|null
     */
    protected $subStatusFieldForRequest;

    /**
     * The reason for voluntarily cancelling (closing) the MonetaryAccountBank,
     * can only be OTHER. Should only be specified if updating the status to
     * CANCELLED.
     *
     * @var string|null
     */
    protected $reasonFieldForRequest;

    /**
     * The optional free-form reason for voluntarily cancelling (closing) the
     * MonetaryAccountBank. Can be any user provided message. Should only be
     * specified if updating the status to CANCELLED.
     *
     * @var string|null
     */
    protected $reasonDescriptionFieldForRequest;

    /**
     * The settings of the MonetaryAccountLight.
     *
     * @var MonetaryAccountSetting|null
     */
    protected $settingFieldForRequest;

    /**
     * @param string $currency The currency of the MonetaryAccountLight as an
     * ISO 4217 formatted currency code.
     * @param string|null $description The description of the
     * MonetaryAccountLight. Defaults to 'bunq account'.
     * @param Amount|null $dailyLimit The daily spending limit Amount of the
     * MonetaryAccountLight. Defaults to 1000 EUR. Currency must match the
     * MonetaryAccountLight's currency. Limited to 10000 EUR.
     * @param string|null $avatarUuid The UUID of the Avatar of the
     * MonetaryAccountLight.
     * @param string|null $status The status of the MonetaryAccountLight.
     * Ignored in POST requests (always set to ACTIVE) can be CANCELLED or
     * PENDING_REOPEN in PUT requests to cancel (close) or reopen the
     * MonetaryAccountLight. When updating the status and/or sub_status no other
     * fields can be updated in the same request (and vice versa).
     * @param string|null $subStatus The sub-status of the MonetaryAccountLight
     * providing extra information regarding the status. Should be ignored for
     * POST requests and can only be REDEMPTION_VOLUNTARY for PUT requests with
     * status CANCELLED. When updating the status and/or sub_status no other
     * fields can be updated in the same request (and vice versa).
     * @param string|null $reason The reason for voluntarily cancelling
     * (closing) the MonetaryAccountBank, can only be OTHER. Should only be
     * specified if updating the status to CANCELLED.
     * @param string|null $reasonDescription The optional free-form reason for
     * voluntarily cancelling (closing) the MonetaryAccountBank. Can be any user
     * provided message. Should only be specified if updating the status to
     * CANCELLED.
     * @param MonetaryAccountSetting|null $setting The settings of the
     * MonetaryAccountLight.
     */
    public function __construct(
        string $currency,
        string $description = null,
        Amount $dailyLimit = null,
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
        $this->avatarUuidFieldForRequest = $avatarUuid;
        $this->statusFieldForRequest = $status;
        $this->subStatusFieldForRequest = $subStatus;
        $this->reasonFieldForRequest = $reason;
        $this->reasonDescriptionFieldForRequest = $reasonDescription;
        $this->settingFieldForRequest = $setting;
    }

    /**
     * The id of the MonetaryAccountLight.
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
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The timestamp of the MonetaryAccountLight's creation.
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
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the MonetaryAccountLight's last update.
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
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The Avatar of the MonetaryAccountLight.
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
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * The currency of the MonetaryAccountLight as an ISO 4217 formatted
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
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * The description of the MonetaryAccountLight. Defaults to 'bunq account'.
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
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * The daily spending limit Amount of the MonetaryAccountLight. Defaults to
     * 1000 EUR. Currency must match the MonetaryAccountLight's currency.
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
     */
    public function setDailyLimit($dailyLimit)
    {
        $this->dailyLimit = $dailyLimit;
    }

    /**
     * The current available balance Amount of the MonetaryAccountLight.
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
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * The Aliases for the MonetaryAccountLight.
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
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * The MonetaryAccountLight's public UUID.
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
     */
    public function setPublicUuid($publicUuid)
    {
        $this->publicUuid = $publicUuid;
    }

    /**
     * The status of the MonetaryAccountLight. Can be: ACTIVE, BLOCKED,
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
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The sub-status of the MonetaryAccountLight providing extra information
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setReasonDescription($reasonDescription)
    {
        $this->reasonDescription = $reasonDescription;
    }

    /**
     * The id of the User who owns the MonetaryAccountLight.
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
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * The maximum balance Amount of the MonetaryAccountLight.
     *
     * @return Amount
     */
    public function getBalanceMaximum()
    {
        return $this->balanceMaximum;
    }

    /**
     * @param Amount $balanceMaximum
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setBalanceMaximum($balanceMaximum)
    {
        $this->balanceMaximum = $balanceMaximum;
    }

    /**
     * The amount of the monthly budget used.
     *
     * @return Amount
     */
    public function getBudgetMonthUsed()
    {
        return $this->budgetMonthUsed;
    }

    /**
     * @param Amount $budgetMonthUsed
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setBudgetMonthUsed($budgetMonthUsed)
    {
        $this->budgetMonthUsed = $budgetMonthUsed;
    }

    /**
     * The total amount of the monthly budget.
     *
     * @return Amount
     */
    public function getBudgetMonthMaximum()
    {
        return $this->budgetMonthMaximum;
    }

    /**
     * @param Amount $budgetMonthMaximum
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setBudgetMonthMaximum($budgetMonthMaximum)
    {
        $this->budgetMonthMaximum = $budgetMonthMaximum;
    }

    /**
     * The amount of the yearly budget used.
     *
     * @return Amount
     */
    public function getBudgetYearUsed()
    {
        return $this->budgetYearUsed;
    }

    /**
     * @param Amount $budgetYearUsed
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setBudgetYearUsed($budgetYearUsed)
    {
        $this->budgetYearUsed = $budgetYearUsed;
    }

    /**
     * The total amount of the yearly budget.
     *
     * @return Amount
     */
    public function getBudgetYearMaximum()
    {
        return $this->budgetYearMaximum;
    }

    /**
     * @param Amount $budgetYearMaximum
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setBudgetYearMaximum($budgetYearMaximum)
    {
        $this->budgetYearMaximum = $budgetYearMaximum;
    }

    /**
     * The amount of the yearly withdrawal budget used.
     *
     * @return Amount
     */
    public function getBudgetWithdrawalYearUsed()
    {
        return $this->budgetWithdrawalYearUsed;
    }

    /**
     * @param Amount $budgetWithdrawalYearUsed
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setBudgetWithdrawalYearUsed($budgetWithdrawalYearUsed)
    {
        $this->budgetWithdrawalYearUsed = $budgetWithdrawalYearUsed;
    }

    /**
     * The total amount of the yearly withdrawal budget.
     *
     * @return Amount
     */
    public function getBudgetWithdrawalYearMaximum()
    {
        return $this->budgetWithdrawalYearMaximum;
    }

    /**
     * @param Amount $budgetWithdrawalYearMaximum
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setBudgetWithdrawalYearMaximum($budgetWithdrawalYearMaximum)
    {
        $this->budgetWithdrawalYearMaximum = $budgetWithdrawalYearMaximum;
    }

    /**
     * The settings of the MonetaryAccountLight.
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
     */
    public function setSetting($setting)
    {
        $this->setting = $setting;
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

        if (!is_null($this->balanceMaximum)) {
            return false;
        }

        if (!is_null($this->budgetMonthUsed)) {
            return false;
        }

        if (!is_null($this->budgetMonthMaximum)) {
            return false;
        }

        if (!is_null($this->budgetYearUsed)) {
            return false;
        }

        if (!is_null($this->budgetYearMaximum)) {
            return false;
        }

        if (!is_null($this->budgetWithdrawalYearUsed)) {
            return false;
        }

        if (!is_null($this->budgetWithdrawalYearMaximum)) {
            return false;
        }

        if (!is_null($this->setting)) {
            return false;
        }

        return true;
    }
}
