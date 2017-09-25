<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\BunqModel;

/**
 * Create a payment batch, or show the payment batches of a monetary
 * account.
 *
 * @generated
 */
class PaymentBatch extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_PAYMENTS = 'payments';
    const FIELD_BUNQTO_STATUS = 'bunqto_status';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/payment-batch';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/payment-batch/%s';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/payment-batch/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/payment-batch';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'PaymentBatch';

    /**
     * The list of mutations that were made.
     *
     * @var Payment[]
     */
    protected $payments;

    /**
     * Create a payment batch by sending an array of single payment objects,
     * that will become part of the batch.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(ApiContext $apiContext, array $requestMap, $userId, $monetaryAccountId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId, $monetaryAccountId]
            ),
            $requestMap,
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
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $paymentBatchId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(ApiContext $apiContext, array $requestMap, $userId, $monetaryAccountId, $paymentBatchId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [$userId, $monetaryAccountId, $paymentBatchId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Return the details of a specific payment batch.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $paymentBatchId
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentBatch
     */
    public static function get(ApiContext $apiContext, $userId, $monetaryAccountId, $paymentBatchId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $monetaryAccountId, $paymentBatchId]
            ),
            [],
            $customHeaders
        );

        return BunqResponsePaymentBatch::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * Return all the payment batches for a monetary account.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentBatchList
     */
    public static function listing(ApiContext $apiContext, $userId, $monetaryAccountId, array $params = [], array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $monetaryAccountId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponsePaymentBatchList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * The list of mutations that were made.
     *
     * @return Payment[]
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @param Payment[] $payments
     */
    public function setPayments(array$payments)
    {
        $this->payments = $payments;
    }
}
