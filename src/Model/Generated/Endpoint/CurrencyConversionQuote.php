<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Pointer;

/**
 * Endpoint to create a quote for currency conversions.
 *
 * @generated
 */
class CurrencyConversionQuote extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/currency-conversion-quote';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/currency-conversion-quote/%s';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/currency-conversion-quote/%s';

    /**
     * Field constants.
     */
    const FIELD_AMOUNT = 'amount';
    const FIELD_CURRENCY_SOURCE = 'currency_source';
    const FIELD_CURRENCY_TARGET = 'currency_target';
    const FIELD_ORDER_TYPE = 'order_type';
    const FIELD_COUNTERPARTY_ALIAS = 'counterparty_alias';
    const FIELD_STATUS = 'status';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'CurrencyConversionQuote';
    const OBJECT_TYPE_PUT = '';

    /**
     * The id of the quote.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the quote's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the quote's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The status of the quote.
     *
     * @var string
     */
    protected $status;

    /**
     * The amount to convert.
     *
     * @var Amount
     */
    protected $amountSource;

    /**
     * The amount to convert to.
     *
     * @var Amount
     */
    protected $amountTarget;

    /**
     * The conversion rate.
     *
     * @var string
     */
    protected $rate;

    /**
     * Timestamp for when this quote expires and the user should request a new
     * one.
     *
     * @var string
     */
    protected $timeExpiry;

    /**
     * The amount to convert.
     *
     * @var Amount
     */
    protected $amountFieldForRequest;

    /**
     * The currency we are converting.
     *
     * @var string
     */
    protected $currencySourceFieldForRequest;

    /**
     * The currency we are converting towards.
     *
     * @var string
     */
    protected $currencyTargetFieldForRequest;

    /**
     * The type of the quote, SELL or BUY.
     *
     * @var string
     */
    protected $orderTypeFieldForRequest;

    /**
     * The Alias of the party we are transferring the money to.
     *
     * @var Pointer
     */
    protected $counterpartyAliasFieldForRequest;

    /**
     * The status of the quote.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * @param Amount $amount The amount to convert.
     * @param string $currencySource The currency we are converting.
     * @param string $currencyTarget The currency we are converting towards.
     * @param string $orderType The type of the quote, SELL or BUY.
     * @param Pointer $counterpartyAlias The Alias of the party we are
     * transferring the money to.
     * @param string|null $status The status of the quote.
     */
    public function __construct(Amount  $amount, string  $currencySource, string  $currencyTarget, string  $orderType, Pointer  $counterpartyAlias, string  $status = null)
    {
        $this->amountFieldForRequest = $amount;
        $this->currencySourceFieldForRequest = $currencySource;
        $this->currencyTargetFieldForRequest = $currencyTarget;
        $this->orderTypeFieldForRequest = $orderType;
        $this->counterpartyAliasFieldForRequest = $counterpartyAlias;
        $this->statusFieldForRequest = $status;
    }

    /**
     * @param Amount $amount The amount to convert.
     * @param string $currencySource The currency we are converting.
     * @param string $currencyTarget The currency we are converting towards.
     * @param string $orderType The type of the quote, SELL or BUY.
     * @param Pointer $counterpartyAlias The Alias of the party we are
     * transferring the money to.
     * @param int|null $monetaryAccountId
     * @param string|null $status The status of the quote.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(Amount  $amount, string  $currencySource, string  $currencyTarget, string  $orderType, Pointer  $counterpartyAlias, int $monetaryAccountId = null, string  $status = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            [self::FIELD_AMOUNT => $amount,
self::FIELD_CURRENCY_SOURCE => $currencySource,
self::FIELD_CURRENCY_TARGET => $currencyTarget,
self::FIELD_ORDER_TYPE => $orderType,
self::FIELD_COUNTERPARTY_ALIAS => $counterpartyAlias,
self::FIELD_STATUS => $status],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param int $currencyConversionQuoteId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseCurrencyConversionQuote
     */
    public static function get(int $currencyConversionQuoteId, int $monetaryAccountId = null, array $customHeaders = []): BunqResponseCurrencyConversionQuote
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $currencyConversionQuoteId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseCurrencyConversionQuote::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $currencyConversionQuoteId
     * @param int|null $monetaryAccountId
     * @param string|null $status The status of the quote.
     * @param string[] $customHeaders
     *
     * @return BunqResponseCurrencyConversionQuote
     */
    public static function update(int $currencyConversionQuoteId, int $monetaryAccountId = null, string  $status = null, array $customHeaders = []): BunqResponseCurrencyConversionQuote
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $currencyConversionQuoteId]
            ),
            [self::FIELD_STATUS => $status],
            $customHeaders
        );

        return BunqResponseCurrencyConversionQuote::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_PUT)
        );
    }

    /**
     * The id of the quote.
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
     * The timestamp of the quote's creation.
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
     * The timestamp of the quote's last update.
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
     * The status of the quote.
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
     * The amount to convert.
     *
     * @return Amount
     */
    public function getAmountSource()
    {
        return $this->amountSource;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountSource
     */
    public function setAmountSource($amountSource)
    {
        $this->amountSource = $amountSource;
    }

    /**
     * The amount to convert to.
     *
     * @return Amount
     */
    public function getAmountTarget()
    {
        return $this->amountTarget;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountTarget
     */
    public function setAmountTarget($amountTarget)
    {
        $this->amountTarget = $amountTarget;
    }

    /**
     * The conversion rate.
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
     * Timestamp for when this quote expires and the user should request a new
     * one.
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

        if (!is_null($this->amountSource)) {
            return false;
        }

        if (!is_null($this->amountTarget)) {
            return false;
        }

        if (!is_null($this->rate)) {
            return false;
        }

        if (!is_null($this->timeExpiry)) {
            return false;
        }

        return true;
    }
}
