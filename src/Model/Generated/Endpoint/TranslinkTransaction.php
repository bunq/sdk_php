<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Error;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
use bunq\Model\Generated\Object\PaymentBatchAnchoredPayment;
use bunq\Model\Generated\Object\TranslinkTransactionEntry;

/**
 * Used to create translink transactions.
 *
 * @generated
 */
class TranslinkTransaction extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/translink-transaction';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/translink-transaction/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/translink-transaction';

    /**
     * Field constants.
     */
    const FIELD_TYPE = 'type';
    const FIELD_REFERENCE = 'reference';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_PAYMENTS = 'payments';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'TranslinkTransaction';

    /**
     * Type of transaction, can be TRIP, REFUND, WITHDRAWAL or TOP_UP.
     *
     * @var string
     */
    protected $type;

    /**
     * The status of the transaction. Can be CREATED, SETTLED or FAILED.
     *
     * @var string
     */
    protected $status;

    /**
     * The reason why the transaction FAILED processing.
     *
     * @var Error[]
     */
    protected $failureReason;

    /**
     * The list of mutations that were made.
     *
     * @var PaymentBatchAnchoredPayment
     */
    protected $payments;

    /**
     * The list of entries in the transaction.
     *
     * @var TranslinkTransactionEntry[]
     */
    protected $entries;

    /**
     * The total amount of the transaction.
     *
     * @var Amount
     */
    protected $amount;

    /**
     * The LabelMonetaryAccount containing the public information of 'this'
     * (party) side of the Payment.
     *
     * @var LabelMonetaryAccount
     */
    protected $alias;

    /**
     * The request reference.
     *
     * @var string
     */
    protected $reference;

    /**
     * Description of the payment request.
     *
     * @var string
     */
    protected $description;

    /**
     * Type of transaction, can be TRIP, REFUND, WITHDRAWAL or TOP_UP.
     *
     * @var string
     */
    protected $typeFieldForRequest;

    /**
     * The request reference.
     *
     * @var string
     */
    protected $referenceFieldForRequest;

    /**
     * Description of the payment request.
     *
     * @var string
     */
    protected $descriptionFieldForRequest;

    /**
     * The list of payments we want to send in a single transaction.
     *
     * @var Payment[]
     */
    protected $paymentsFieldForRequest;

    /**
     * @param string $type Type of transaction, can be TRIP, REFUND, WITHDRAWAL
     * or TOP_UP.
     * @param string $reference The request reference.
     * @param string $description Description of the payment request.
     * @param Payment[] $payments The list of payments we want to send in a
     * single transaction.
     */
    public function __construct(string  $type, string  $reference, string  $description, array  $payments)
    {
        $this->typeFieldForRequest = $type;
        $this->referenceFieldForRequest = $reference;
        $this->descriptionFieldForRequest = $description;
        $this->paymentsFieldForRequest = $payments;
    }

    /**
     * @param string $type Type of transaction, can be TRIP, REFUND, WITHDRAWAL
     * or TOP_UP.
     * @param string $reference The request reference.
     * @param string $description Description of the payment request.
     * @param Payment[] $payments The list of payments we want to send in a
     * single transaction.
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(string  $type, string  $reference, string  $description, array  $payments, int $monetaryAccountId = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            [self::FIELD_TYPE => $type,
self::FIELD_REFERENCE => $reference,
self::FIELD_DESCRIPTION => $description,
self::FIELD_PAYMENTS => $payments],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param int $translinkTransactionId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseTranslinkTransaction
     */
    public static function get(int $translinkTransactionId, int $monetaryAccountId = null, array $customHeaders = []): BunqResponseTranslinkTransaction
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $translinkTransactionId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseTranslinkTransaction::castFromBunqResponse(
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
     * @return BunqResponseTranslinkTransactionList
     */
    public static function listing(int $monetaryAccountId = null, array $params = [], array $customHeaders = []): BunqResponseTranslinkTransactionList
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

        return BunqResponseTranslinkTransactionList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Type of transaction, can be TRIP, REFUND, WITHDRAWAL or TOP_UP.
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
     * The status of the transaction. Can be CREATED, SETTLED or FAILED.
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
     * The reason why the transaction FAILED processing.
     *
     * @return Error[]
     */
    public function getFailureReason()
    {
        return $this->failureReason;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Error[] $failureReason
     */
    public function setFailureReason($failureReason)
    {
        $this->failureReason = $failureReason;
    }

    /**
     * The list of mutations that were made.
     *
     * @return PaymentBatchAnchoredPayment
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param PaymentBatchAnchoredPayment $payments
     */
    public function setPayments($payments)
    {
        $this->payments = $payments;
    }

    /**
     * The list of entries in the transaction.
     *
     * @return TranslinkTransactionEntry[]
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param TranslinkTransactionEntry[] $entries
     */
    public function setEntries($entries)
    {
        $this->entries = $entries;
    }

    /**
     * The total amount of the transaction.
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
     * The LabelMonetaryAccount containing the public information of 'this'
     * (party) side of the Payment.
     *
     * @return LabelMonetaryAccount
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelMonetaryAccount $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * The request reference.
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * Description of the payment request.
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
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->failureReason)) {
            return false;
        }

        if (!is_null($this->payments)) {
            return false;
        }

        if (!is_null($this->entries)) {
            return false;
        }

        if (!is_null($this->amount)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->reference)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        return true;
    }
}
