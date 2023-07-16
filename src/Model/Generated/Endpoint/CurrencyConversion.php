<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\LabelMonetaryAccount;

/**
 * Endpoint for managing currency conversions.
 *
 * @generated
 */
class CurrencyConversion extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/currency-conversion';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/currency-conversion/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'CurrencyConversion';

    /**
     * The id of the conversion.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the conversion's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the conversion's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The status of the conversion.
     *
     * @var string
     */
    protected $status;

    /**
     * The expected delivery date of the conversion.
     *
     * @var string
     */
    protected $dateDeliveryExpected;

    /**
     * The rate of the conversion.
     *
     * @var string
     */
    protected $rate;

    /**
     * The amount of the conversion.
     *
     * @var Amount
     */
    protected $amount;

    /**
     * The amount of the counter conversion.
     *
     * @var Amount
     */
    protected $counterAmount;

    /**
     * The group uuid of the conversion.
     *
     * @var string
     */
    protected $groupUuid;

    /**
     * The type of this conversion.
     *
     * @var string
     */
    protected $type;

    /**
     * The order type, buying or selling.
     *
     * @var string
     */
    protected $orderType;

    /**
     * The label of the monetary account.
     *
     * @var LabelMonetaryAccount
     */
    protected $labelMonetaryAccount;

    /**
     * The label of the counter monetary account.
     *
     * @var LabelMonetaryAccount
     */
    protected $counterLabelMonetaryAccount;

    /**
     * The payment associated with this conversion.
     *
     * @var Payment
     */
    protected $payment;

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseCurrencyConversionList
     */
    public static function listing(int $monetaryAccountId = null, array $params = [], array $customHeaders = []): BunqResponseCurrencyConversionList
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

        return BunqResponseCurrencyConversionList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $currencyConversionId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseCurrencyConversion
     */
    public static function get(int $currencyConversionId, int $monetaryAccountId = null, array $customHeaders = []): BunqResponseCurrencyConversion
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $currencyConversionId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseCurrencyConversion::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the conversion.
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
     * The timestamp of the conversion's creation.
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
     * The timestamp of the conversion's last update.
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
     * The status of the conversion.
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
     * The expected delivery date of the conversion.
     *
     * @return string
     */
    public function getDateDeliveryExpected()
    {
        return $this->dateDeliveryExpected;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $dateDeliveryExpected
     */
    public function setDateDeliveryExpected($dateDeliveryExpected)
    {
        $this->dateDeliveryExpected = $dateDeliveryExpected;
    }

    /**
     * The rate of the conversion.
     *
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * The amount of the conversion.
     *
     * @return Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * The amount of the counter conversion.
     *
     * @return Amount
     */
    public function getCounterAmount()
    {
        return $this->counterAmount;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $counterAmount
     */
    public function setCounterAmount($counterAmount)
    {
        $this->counterAmount = $counterAmount;
    }

    /**
     * The group uuid of the conversion.
     *
     * @return string
     */
    public function getGroupUuid()
    {
        return $this->groupUuid;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $groupUuid
     */
    public function setGroupUuid($groupUuid)
    {
        $this->groupUuid = $groupUuid;
    }

    /**
     * The type of this conversion.
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
     * The order type, buying or selling.
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $orderType
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
    }

    /**
     * The label of the monetary account.
     *
     * @return LabelMonetaryAccount
     */
    public function getLabelMonetaryAccount()
    {
        return $this->labelMonetaryAccount;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelMonetaryAccount $labelMonetaryAccount
     */
    public function setLabelMonetaryAccount($labelMonetaryAccount)
    {
        $this->labelMonetaryAccount = $labelMonetaryAccount;
    }

    /**
     * The label of the counter monetary account.
     *
     * @return LabelMonetaryAccount
     */
    public function getCounterLabelMonetaryAccount()
    {
        return $this->counterLabelMonetaryAccount;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelMonetaryAccount $counterLabelMonetaryAccount
     */
    public function setCounterLabelMonetaryAccount($counterLabelMonetaryAccount)
    {
        $this->counterLabelMonetaryAccount = $counterLabelMonetaryAccount;
    }

    /**
     * The payment associated with this conversion.
     *
     * @return Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Payment $payment
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
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

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->dateDeliveryExpected)) {
            return false;
        }

        if (!is_null($this->rate)) {
            return false;
        }

        if (!is_null($this->amount)) {
            return false;
        }

        if (!is_null($this->counterAmount)) {
            return false;
        }

        if (!is_null($this->groupUuid)) {
            return false;
        }

        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->orderType)) {
            return false;
        }

        if (!is_null($this->labelMonetaryAccount)) {
            return false;
        }

        if (!is_null($this->counterLabelMonetaryAccount)) {
            return false;
        }

        if (!is_null($this->payment)) {
            return false;
        }

        return true;
    }
}
