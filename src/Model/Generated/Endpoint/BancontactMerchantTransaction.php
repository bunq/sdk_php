<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\LabelMonetaryAccount;

/**
 * View for requesting Bancontact transactions and polling their status.
 *
 * @generated
 */
class BancontactMerchantTransaction extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/bancontact-merchant-transaction';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/bancontact-merchant-transaction/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/bancontact-merchant-transaction';

    /**
     * Field constants.
     */
    const FIELD_AMOUNT_REQUESTED = 'amount_requested';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'BancontactMerchantTransaction';

    /**
     * The id of the monetary account this bancontact merchant transaction links
     * to.
     *
     * @var int
     */
    protected $monetaryAccountId;

    /**
     * The alias of the monetary account to add money to.
     *
     * @var LabelMonetaryAccount
     */
    protected $alias;

    /**
     * The requested amount of money to add.
     *
     * @var Amount
     */
    protected $amountRequested;

    /**
     * When the transaction will expire.
     *
     * @var string
     */
    protected $expiration;

    /**
     * The URL to visit complete the bancontact transaction.
     *
     * @var string
     */
    protected $urlRedirect;

    /**
     * The deep link to visit complete the bancontact transaction.
     *
     * @var string
     */
    protected $urlDeepLink;

    /**
     * The status of the transaction.
     *
     * @var string
     */
    protected $status;

    /**
     * When the status was last updated.
     *
     * @var string
     */
    protected $statusTimestamp;

    /**
     * The transaction ID of the bancontact transaction.
     *
     * @var string
     */
    protected $transactionId;

    /**
     * The requested amount of money to add.
     *
     * @var Amount
     */
    protected $amountRequestedFieldForRequest;

    /**
     * @param Amount $amountRequested The requested amount of money to add.
     */
    public function __construct(Amount $amountRequested)
    {
        $this->amountRequestedFieldForRequest = $amountRequested;
    }

    /**
     * @param Amount $amountRequested The requested amount of money to add.
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        Amount $amountRequested,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            [self::FIELD_AMOUNT_REQUESTED => $amountRequested],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param int $bancontactMerchantTransactionId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseBancontactMerchantTransaction
     */
    public static function get(
        int $bancontactMerchantTransactionId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseBancontactMerchantTransaction {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $bancontactMerchantTransactionId,
                ]
            ),
            [],
            $customHeaders
        );

        return BunqResponseBancontactMerchantTransaction::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseBancontactMerchantTransactionList
     */
    public static function listing(
        int $monetaryAccountId = null,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseBancontactMerchantTransactionList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseBancontactMerchantTransactionList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the monetary account this bancontact merchant transaction links
     * to.
     *
     * @return int
     */
    public function getMonetaryAccountId()
    {
        return $this->monetaryAccountId;
    }

    /**
     * @param int $monetaryAccountId
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setMonetaryAccountId($monetaryAccountId)
    {
        $this->monetaryAccountId = $monetaryAccountId;
    }

    /**
     * The alias of the monetary account to add money to.
     *
     * @return LabelMonetaryAccount
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param LabelMonetaryAccount $alias
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
     * The requested amount of money to add.
     *
     * @return Amount
     */
    public function getAmountRequested()
    {
        return $this->amountRequested;
    }

    /**
     * @param Amount $amountRequested
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setAmountRequested($amountRequested)
    {
        $this->amountRequested = $amountRequested;
    }

    /**
     * When the transaction will expire.
     *
     * @return string
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * @param string $expiration
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
    }

    /**
     * The URL to visit complete the bancontact transaction.
     *
     * @return string
     */
    public function getUrlRedirect()
    {
        return $this->urlRedirect;
    }

    /**
     * @param string $urlRedirect
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setUrlRedirect($urlRedirect)
    {
        $this->urlRedirect = $urlRedirect;
    }

    /**
     * The deep link to visit complete the bancontact transaction.
     *
     * @return string
     */
    public function getUrlDeepLink()
    {
        return $this->urlDeepLink;
    }

    /**
     * @param string $urlDeepLink
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setUrlDeepLink($urlDeepLink)
    {
        $this->urlDeepLink = $urlDeepLink;
    }

    /**
     * The status of the transaction.
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
     * When the status was last updated.
     *
     * @return string
     */
    public function getStatusTimestamp()
    {
        return $this->statusTimestamp;
    }

    /**
     * @param string $statusTimestamp
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setStatusTimestamp($statusTimestamp)
    {
        $this->statusTimestamp = $statusTimestamp;
    }

    /**
     * The transaction ID of the bancontact transaction.
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->monetaryAccountId)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->amountRequested)) {
            return false;
        }

        if (!is_null($this->expiration)) {
            return false;
        }

        if (!is_null($this->urlRedirect)) {
            return false;
        }

        if (!is_null($this->urlDeepLink)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->statusTimestamp)) {
            return false;
        }

        if (!is_null($this->transactionId)) {
            return false;
        }

        return true;
    }
}
