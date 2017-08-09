<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Model\BunqModel;
use bunq\Model\BunqResponse;
use bunq\Model\Generated\Object\Amount;

/**
 * Create a batch of requests for payment, or show the request batches of a
 * monetary account.
 *
 * @generated
 */
class RequestInquiryBatch extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_REQUEST_INQUIRIES = 'request_inquiries';
    const FIELD_STATUS = 'status';
    const FIELD_TOTAL_AMOUNT_INQUIRED = 'total_amount_inquired';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/request-inquiry-batch';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/request-inquiry-batch/%s';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/request-inquiry-batch/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/request-inquiry-batch';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'RequestInquiryBatch';

    /**
     * The list of requests that were made.
     *
     * @var RequestInquiry[]
     */
    protected $requestInquiries;

    /**
     * The total amount originally inquired for this batch.
     *
     * @var Amount
     */
    protected $totalAmountInquired;

    /**
     * Create a request batch by sending an array of single request objects,
     * that will become part of the batch.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<int>
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

        return static::processForId($responseRaw);
    }

    /**
     * Revoke a request batch. The status of all the requests will be set to
     * REVOKED.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $requestInquiryBatchId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<int>
     */
    public static function update(ApiContext $apiContext, array $requestMap, $userId, $monetaryAccountId, $requestInquiryBatchId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [$userId, $monetaryAccountId, $requestInquiryBatchId]
            ),
            $requestMap,
            $customHeaders
        );

        return static::processForId($responseRaw);
    }

    /**
     * Return the details of a specific request batch.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $requestInquiryBatchId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<RequestInquiryBatch>
     */
    public static function get(ApiContext $apiContext, $userId, $monetaryAccountId, $requestInquiryBatchId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $monetaryAccountId, $requestInquiryBatchId]
            ),
            $customHeaders
        );

        return static::fromJson($responseRaw);
    }

    /**
     * Return all the request batches for a monetary account.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<BunqModel[]|RequestInquiryBatch[]>
     */
    public static function listing(ApiContext $apiContext, $userId, $monetaryAccountId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $monetaryAccountId]
            ),
            $customHeaders
        );

        return static::fromJsonList($responseRaw, self::OBJECT_TYPE);
    }

    /**
     * The list of requests that were made.
     *
     * @return RequestInquiry[]
     */
    public function getRequestInquiries()
    {
        return $this->requestInquiries;
    }

    /**
     * @param RequestInquiry[] $requestInquiries
     */
    public function setRequestInquiries(array$requestInquiries)
    {
        $this->requestInquiries = $requestInquiries;
    }

    /**
     * The total amount originally inquired for this batch.
     *
     * @return Amount
     */
    public function getTotalAmountInquired()
    {
        return $this->totalAmountInquired;
    }

    /**
     * @param Amount $totalAmountInquired
     */
    public function setTotalAmountInquired(Amount $totalAmountInquired)
    {
        $this->totalAmountInquired = $totalAmountInquired;
    }
}
