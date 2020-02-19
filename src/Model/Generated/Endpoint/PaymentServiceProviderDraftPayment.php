<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;

/**
 * Manage the PaymentServiceProviderDraftPayment's for a PISP.
 *
 * @generated
 */
class PaymentServiceProviderDraftPayment extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/payment-service-provider-draft-payment';
    const ENDPOINT_URL_UPDATE = 'user/%s/payment-service-provider-draft-payment/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/payment-service-provider-draft-payment';
    const ENDPOINT_URL_READ = 'user/%s/payment-service-provider-draft-payment/%s';

    /**
     * Field constants.
     */
    const FIELD_SENDER_IBAN = 'sender_iban';
    const FIELD_SENDER_NAME = 'sender_name';
    const FIELD_COUNTERPARTY_IBAN = 'counterparty_iban';
    const FIELD_COUNTERPARTY_NAME = 'counterparty_name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_AMOUNT = 'amount';
    const FIELD_STATUS = 'status';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'PaymentServiceProviderDraftPayment';

    /**
     * The sender IBAN.
     *
     * @var string
     */
    protected $senderIban;

    /**
     * The sender IBAN.
     *
     * @var string
     */
    protected $receiverIban;

    /**
     * The amount of the draft payment
     *
     * @var Amount
     */
    protected $amount;

    /**
     * The status of the draft payment
     *
     * @var string
     */
    protected $status;

    /**
     * The IBAN of the sender.
     *
     * @var string
     */
    protected $senderIbanFieldForRequest;

    /**
     * The name of the sender.
     *
     * @var string|null
     */
    protected $senderNameFieldForRequest;

    /**
     * The IBAN of the counterparty.
     *
     * @var string
     */
    protected $counterpartyIbanFieldForRequest;

    /**
     * The name of the counterparty.
     *
     * @var string
     */
    protected $counterpartyNameFieldForRequest;

    /**
     * Description of the payment.
     *
     * @var string
     */
    protected $descriptionFieldForRequest;

    /**
     * The Amount to transfer with the Payment. Must be bigger than 0.
     *
     * @var Amount
     */
    protected $amountFieldForRequest;

    /**
     * The new status of the Draft Payment. Can only be set to REJECTED or
     * CANCELLED by update.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * @param string $senderIban The IBAN of the sender.
     * @param string $counterpartyIban The IBAN of the counterparty.
     * @param string $counterpartyName The name of the counterparty.
     * @param string $description Description of the payment.
     * @param Amount $amount The Amount to transfer with the Payment. Must be
     * bigger than 0.
     * @param string|null $senderName The name of the sender.
     * @param string|null $status The new status of the Draft Payment. Can only
     * be set to REJECTED or CANCELLED by update.
     */
    public function __construct(
        string $senderIban,
        string $counterpartyIban,
        string $counterpartyName,
        string $description,
        Amount $amount,
        string $senderName = null,
        string $status = null
    ) {
        $this->senderIbanFieldForRequest = $senderIban;
        $this->senderNameFieldForRequest = $senderName;
        $this->counterpartyIbanFieldForRequest = $counterpartyIban;
        $this->counterpartyNameFieldForRequest = $counterpartyName;
        $this->descriptionFieldForRequest = $description;
        $this->amountFieldForRequest = $amount;
        $this->statusFieldForRequest = $status;
    }

    /**
     * @param string $senderIban The IBAN of the sender.
     * @param string $counterpartyIban The IBAN of the counterparty.
     * @param string $counterpartyName The name of the counterparty.
     * @param string $description Description of the payment.
     * @param Amount $amount The Amount to transfer with the Payment. Must be
     * bigger than 0.
     * @param string|null $senderName The name of the sender.
     * @param string|null $status The new status of the Draft Payment. Can only
     * be set to REJECTED or CANCELLED by update.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        string $senderIban,
        string $counterpartyIban,
        string $counterpartyName,
        string $description,
        Amount $amount,
        string $senderName = null,
        string $status = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [
                self::FIELD_SENDER_IBAN => $senderIban,
                self::FIELD_SENDER_NAME => $senderName,
                self::FIELD_COUNTERPARTY_IBAN => $counterpartyIban,
                self::FIELD_COUNTERPARTY_NAME => $counterpartyName,
                self::FIELD_DESCRIPTION => $description,
                self::FIELD_AMOUNT => $amount,
                self::FIELD_STATUS => $status,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param int $paymentServiceProviderDraftPaymentId
     * @param string|null $status The new status of the Draft Payment. Can only
     * be set to REJECTED or CANCELLED by update.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(
        int $paymentServiceProviderDraftPaymentId,
        string $status = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $paymentServiceProviderDraftPaymentId]
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
     * @return BunqResponsePaymentServiceProviderDraftPaymentList
     */
    public static function listing(
        array $params = [],
        array $customHeaders = []
    ): BunqResponsePaymentServiceProviderDraftPaymentList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId()]
            ),
            $params,
            $customHeaders
        );

        return BunqResponsePaymentServiceProviderDraftPaymentList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $paymentServiceProviderDraftPaymentId
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentServiceProviderDraftPayment
     */
    public static function get(
        int $paymentServiceProviderDraftPaymentId,
        array $customHeaders = []
    ): BunqResponsePaymentServiceProviderDraftPayment {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $paymentServiceProviderDraftPaymentId]
            ),
            [],
            $customHeaders
        );

        return BunqResponsePaymentServiceProviderDraftPayment::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The sender IBAN.
     *
     * @return string
     */
    public function getSenderIban()
    {
        return $this->senderIban;
    }

    /**
     * @param string $senderIban
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setSenderIban($senderIban)
    {
        $this->senderIban = $senderIban;
    }

    /**
     * The sender IBAN.
     *
     * @return string
     */
    public function getReceiverIban()
    {
        return $this->receiverIban;
    }

    /**
     * @param string $receiverIban
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setReceiverIban($receiverIban)
    {
        $this->receiverIban = $receiverIban;
    }

    /**
     * The amount of the draft payment
     *
     * @return Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Amount $amount
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * The status of the draft payment
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
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->senderIban)) {
            return false;
        }

        if (!is_null($this->receiverIban)) {
            return false;
        }

        if (!is_null($this->amount)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        return true;
    }
}
