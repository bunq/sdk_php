<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
use bunq\Model\Generated\Object\Pointer;

/**
 * The endpoint for payment service provider issuer transactions
 *
 * @generated
 */
class PaymentServiceProviderIssuerTransaction extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/payment-service-provider-issuer-transaction';
    const ENDPOINT_URL_READ = 'user/%s/payment-service-provider-issuer-transaction/%s';
    const ENDPOINT_URL_UPDATE = 'user/%s/payment-service-provider-issuer-transaction/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/payment-service-provider-issuer-transaction';

    /**
     * Field constants.
     */
    const FIELD_COUNTERPARTY_ALIAS = 'counterparty_alias';
    const FIELD_AMOUNT = 'amount';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_URL_REDIRECT = 'url_redirect';
    const FIELD_TIME_EXPIRY = 'time_expiry';
    const FIELD_STATUS = 'status';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'PaymentServiceProviderIssuerTransaction';

    /**
     * The id of this transaction.
     *
     * @var int
     */
    protected $id;

    /**
     * The time this transaction was created.
     *
     * @var string
     */
    protected $created;

    /**
     * The time this transaction was last updated.
     *
     * @var string
     */
    protected $updated;

    /**
     * The public uuid used to identify this transaction.
     *
     * @var string
     */
    protected $publicUuid;

    /**
     * The counter party this transaction should be sent to.
     *
     * @var LabelMonetaryAccount
     */
    protected $counterpartyAlias;

    /**
     * The money amount of this transaction
     *
     * @var Amount
     */
    protected $amount;

    /**
     * The description of this transaction, to be shown to the user and to the
     * counter party.
     *
     * @var string
     */
    protected $description;

    /**
     * The url to which the user should be redirected once the transaction is
     * accepted or rejected.
     *
     * @var string
     */
    protected $urlRedirect;

    /**
     * The (optional) expiration time of the transaction. Defaults to 10
     * minutes.
     *
     * @var string
     */
    protected $timeExpiry;

    /**
     * The status of the transaction. Can only be used for cancelling the
     * transaction.
     *
     * @var string
     */
    protected $status;

    /**
     * The counter party this transaction should be sent to.
     *
     * @var Pointer
     */
    protected $counterpartyAliasFieldForRequest;

    /**
     * The money amount of this transaction
     *
     * @var Amount
     */
    protected $amountFieldForRequest;

    /**
     * The description of this transaction, to be shown to the user and to the
     * counter party.
     *
     * @var string
     */
    protected $descriptionFieldForRequest;

    /**
     * The url to which the user should be redirected once the transaction is
     * accepted or rejected.
     *
     * @var string
     */
    protected $urlRedirectFieldForRequest;

    /**
     * The (optional) expiration time of the transaction. Defaults to 10
     * minutes.
     *
     * @var string|null
     */
    protected $timeExpiryFieldForRequest;

    /**
     * The status of the transaction. Can only be used for cancelling the
     * transaction.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * @param Pointer $counterpartyAlias The counter party this transaction
     * should be sent to.
     * @param Amount $amount The money amount of this transaction
     * @param string $description The description of this transaction, to be
     * shown to the user and to the counter party.
     * @param string $urlRedirect The url to which the user should be redirected
     * once the transaction is accepted or rejected.
     * @param string|null $timeExpiry The (optional) expiration time of the
     * transaction. Defaults to 10 minutes.
     * @param string|null $status The status of the transaction. Can only be
     * used for cancelling the transaction.
     */
    public function __construct(Pointer  $counterpartyAlias, Amount  $amount, string  $description, string  $urlRedirect, string  $timeExpiry = null, string  $status = null)
    {
        $this->counterpartyAliasFieldForRequest = $counterpartyAlias;
        $this->amountFieldForRequest = $amount;
        $this->descriptionFieldForRequest = $description;
        $this->urlRedirectFieldForRequest = $urlRedirect;
        $this->timeExpiryFieldForRequest = $timeExpiry;
        $this->statusFieldForRequest = $status;
    }

    /**
     * @param Pointer $counterpartyAlias The counter party this transaction
     * should be sent to.
     * @param Amount $amount The money amount of this transaction
     * @param string $description The description of this transaction, to be
     * shown to the user and to the counter party.
     * @param string $urlRedirect The url to which the user should be redirected
     * once the transaction is accepted or rejected.
     * @param string|null $timeExpiry The (optional) expiration time of the
     * transaction. Defaults to 10 minutes.
     * @param string|null $status The status of the transaction. Can only be
     * used for cancelling the transaction.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(Pointer  $counterpartyAlias, Amount  $amount, string  $description, string  $urlRedirect, string  $timeExpiry = null, string  $status = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [self::FIELD_COUNTERPARTY_ALIAS => $counterpartyAlias,
self::FIELD_AMOUNT => $amount,
self::FIELD_DESCRIPTION => $description,
self::FIELD_URL_REDIRECT => $urlRedirect,
self::FIELD_TIME_EXPIRY => $timeExpiry,
self::FIELD_STATUS => $status],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param int $paymentServiceProviderIssuerTransactionId
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentServiceProviderIssuerTransaction
     */
    public static function get(int $paymentServiceProviderIssuerTransactionId, array $customHeaders = []): BunqResponsePaymentServiceProviderIssuerTransaction
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $paymentServiceProviderIssuerTransactionId]
            ),
            [],
            $customHeaders
        );

        return BunqResponsePaymentServiceProviderIssuerTransaction::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $paymentServiceProviderIssuerTransactionId
     * @param string|null $status The status of the transaction. Can only be
     * used for cancelling the transaction.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(int $paymentServiceProviderIssuerTransactionId, string  $status = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $paymentServiceProviderIssuerTransactionId]
            ),
            [self::FIELD_STATUS => $status],
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
     * @return BunqResponsePaymentServiceProviderIssuerTransactionList
     */
    public static function listing( array $params = [], array $customHeaders = []): BunqResponsePaymentServiceProviderIssuerTransactionList
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

        return BunqResponsePaymentServiceProviderIssuerTransactionList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of this transaction.
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
     * The time this transaction was created.
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
     * The time this transaction was last updated.
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
     * The public uuid used to identify this transaction.
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
     * The counter party this transaction should be sent to.
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
     * The money amount of this transaction
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
     * The description of this transaction, to be shown to the user and to the
     * counter party.
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
     * The url to which the user should be redirected once the transaction is
     * accepted or rejected.
     *
     * @return string
     */
    public function getUrlRedirect()
    {
        return $this->urlRedirect;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $urlRedirect
     */
    public function setUrlRedirect($urlRedirect)
    {
        $this->urlRedirect = $urlRedirect;
    }

    /**
     * The (optional) expiration time of the transaction. Defaults to 10
     * minutes.
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
     * The status of the transaction. Can only be used for cancelling the
     * transaction.
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

        if (!is_null($this->publicUuid)) {
            return false;
        }

        if (!is_null($this->counterpartyAlias)) {
            return false;
        }

        if (!is_null($this->amount)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->urlRedirect)) {
            return false;
        }

        if (!is_null($this->timeExpiry)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        return true;
    }
}
