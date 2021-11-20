<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\PaymentBatchAnchoredPayment;

/**
 * Create a payment batch, or show the payment batches of a monetary
 * account.
 *
 * @generated
 */
class PaymentBatch extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/payment-batch';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/payment-batch/%s';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/payment-batch/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/payment-batch';

    /**
     * Field constants.
     */
    const FIELD_PAYMENTS = 'payments';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'PaymentBatch';

    /**
     * The list of mutations that were made.
     *
     * @var PaymentBatchAnchoredPayment
     */
    protected $payments;

    /**
     * The list of payments we want to send in a single batch.
     *
     * @var Payment[]
     */
    protected $paymentsFieldForRequest;

    /**
     * @param Payment[] $payments The list of payments we want to send in a
     * single batch.
     */
    public function __construct(array  $payments)
    {
        $this->paymentsFieldForRequest = $payments;
    }

    /**
     * Create a payment batch by sending an array of single payment objects,
     * that will become part of the batch.
     *
     * @param Payment[] $payments The list of payments we want to send in a
     * single batch.
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(array  $payments, int $monetaryAccountId = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            [self::FIELD_PAYMENTS => $payments],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Revoke a bunq.to payment batch. The status of all the payments will be
     * set to REVOKED.
     *
     * @param int $paymentBatchId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(int $paymentBatchId, int $monetaryAccountId = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $paymentBatchId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Return the details of a specific payment batch.
     *
     * @param int $paymentBatchId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentBatch
     */
    public static function get(int $paymentBatchId, int $monetaryAccountId = null, array $customHeaders = []): BunqResponsePaymentBatch
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $paymentBatchId]
            ),
            [],
            $customHeaders
        );

        return BunqResponsePaymentBatch::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Return all the payment batches for a monetary account.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentBatchList
     */
    public static function listing(int $monetaryAccountId = null, array $params = [], array $customHeaders = []): BunqResponsePaymentBatchList
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

        return BunqResponsePaymentBatchList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
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
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->payments)) {
            return false;
        }

        return true;
    }
}
