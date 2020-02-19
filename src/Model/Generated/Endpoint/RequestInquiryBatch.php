<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\RequestReferenceSplitTheBillAnchorObject;

/**
 * Create a batch of requests for payment, or show the request batches of a
 * monetary account.
 *
 * @generated
 */
class RequestInquiryBatch extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/request-inquiry-batch';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/request-inquiry-batch/%s';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/request-inquiry-batch/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/request-inquiry-batch';

    /**
     * Field constants.
     */
    const FIELD_REQUEST_INQUIRIES = 'request_inquiries';
    const FIELD_STATUS = 'status';
    const FIELD_TOTAL_AMOUNT_INQUIRED = 'total_amount_inquired';
    const FIELD_EVENT_ID = 'event_id';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'RequestInquiryBatch';

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
     * The reference to the object used for split the bill. Can be Payment,
     * PaymentBatch, ScheduleInstance, RequestResponse and MasterCardAction
     *
     * @var RequestReferenceSplitTheBillAnchorObject
     */
    protected $referenceSplitTheBill;

    /**
     * The list of request inquiries we want to send in 1 batch.
     *
     * @var RequestInquiry[]
     */
    protected $requestInquiriesFieldForRequest;

    /**
     * The status of the request.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * The total amount originally inquired for this batch.
     *
     * @var Amount
     */
    protected $totalAmountInquiredFieldForRequest;

    /**
     * The ID of the associated event if the request batch was made using 'split
     * the bill'.
     *
     * @var int|null
     */
    protected $eventIdFieldForRequest;

    /**
     * @param RequestInquiry[] $requestInquiries The list of request inquiries
     * we want to send in 1 batch.
     * @param Amount $totalAmountInquired The total amount originally inquired
     * for this batch.
     * @param string|null $status The status of the request.
     * @param int|null $eventId The ID of the associated event if the request
     * batch was made using 'split the bill'.
     */
    public function __construct(
        array $requestInquiries,
        Amount $totalAmountInquired,
        string $status = null,
        int $eventId = null
    ) {
        $this->requestInquiriesFieldForRequest = $requestInquiries;
        $this->statusFieldForRequest = $status;
        $this->totalAmountInquiredFieldForRequest = $totalAmountInquired;
        $this->eventIdFieldForRequest = $eventId;
    }

    /**
     * Create a request batch by sending an array of single request objects,
     * that will become part of the batch.
     *
     * @param RequestInquiry[] $requestInquiries The list of request inquiries
     * we want to send in 1 batch.
     * @param Amount $totalAmountInquired The total amount originally inquired
     * for this batch.
     * @param int|null $monetaryAccountId
     * @param string|null $status The status of the request.
     * @param int|null $eventId The ID of the associated event if the request
     * batch was made using 'split the bill'.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        array $requestInquiries,
        Amount $totalAmountInquired,
        int $monetaryAccountId = null,
        string $status = null,
        int $eventId = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            [
                self::FIELD_REQUEST_INQUIRIES => $requestInquiries,
                self::FIELD_STATUS => $status,
                self::FIELD_TOTAL_AMOUNT_INQUIRED => $totalAmountInquired,
                self::FIELD_EVENT_ID => $eventId,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Revoke a request batch. The status of all the requests will be set to
     * REVOKED.
     *
     * @param int $requestInquiryBatchId
     * @param int|null $monetaryAccountId
     * @param string|null $status The status of the request.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(
        int $requestInquiryBatchId,
        int $monetaryAccountId = null,
        string $status = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $requestInquiryBatchId,
                ]
            ),
            [self::FIELD_STATUS => $status],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Return the details of a specific request batch.
     *
     * @param int $requestInquiryBatchId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseRequestInquiryBatch
     */
    public static function get(
        int $requestInquiryBatchId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseRequestInquiryBatch {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $requestInquiryBatchId,
                ]
            ),
            [],
            $customHeaders
        );

        return BunqResponseRequestInquiryBatch::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Return all the request batches for a monetary account.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseRequestInquiryBatchList
     */
    public static function listing(
        int $monetaryAccountId = null,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseRequestInquiryBatchList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseRequestInquiryBatchList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setRequestInquiries($requestInquiries)
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setTotalAmountInquired($totalAmountInquired)
    {
        $this->totalAmountInquired = $totalAmountInquired;
    }

    /**
     * The reference to the object used for split the bill. Can be Payment,
     * PaymentBatch, ScheduleInstance, RequestResponse and MasterCardAction
     *
     * @return RequestReferenceSplitTheBillAnchorObject
     */
    public function getReferenceSplitTheBill()
    {
        return $this->referenceSplitTheBill;
    }

    /**
     * @param RequestReferenceSplitTheBillAnchorObject $referenceSplitTheBill
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setReferenceSplitTheBill($referenceSplitTheBill)
    {
        $this->referenceSplitTheBill = $referenceSplitTheBill;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->requestInquiries)) {
            return false;
        }

        if (!is_null($this->totalAmountInquired)) {
            return false;
        }

        if (!is_null($this->referenceSplitTheBill)) {
            return false;
        }

        return true;
    }
}
