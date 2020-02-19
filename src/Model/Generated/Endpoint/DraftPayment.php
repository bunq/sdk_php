<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\DraftPaymentAnchorObject;
use bunq\Model\Generated\Object\DraftPaymentEntry;
use bunq\Model\Generated\Object\DraftPaymentResponse;
use bunq\Model\Generated\Object\LabelUser;
use bunq\Model\Generated\Object\RequestInquiryReference;

/**
 * A DraftPayment is like a regular Payment, but it needs to be accepted by
 * the sending party before the actual Payment is done.
 *
 * @generated
 */
class DraftPayment extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/draft-payment';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/draft-payment/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/draft-payment';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/draft-payment/%s';

    /**
     * Field constants.
     */
    const FIELD_STATUS = 'status';
    const FIELD_ENTRIES = 'entries';
    const FIELD_PREVIOUS_UPDATED_TIMESTAMP = 'previous_updated_timestamp';
    const FIELD_NUMBER_OF_REQUIRED_ACCEPTS = 'number_of_required_accepts';
    const FIELD_SCHEDULE = 'schedule';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'DraftPayment';

    /**
     * The id of the created DrafPayment.
     *
     * @var int
     */
    protected $id;

    /**
     * The id of the MonetaryAccount the DraftPayment applies to.
     *
     * @var int
     */
    protected $monetaryAccountId;

    /**
     * The label of the User who created the DraftPayment.
     *
     * @var LabelUser
     */
    protected $userAliasCreated;

    /**
     * All responses to this draft payment.
     *
     * @var DraftPaymentResponse[]
     */
    protected $responses;

    /**
     * The status of the DraftPayment.
     *
     * @var string
     */
    protected $status;

    /**
     * The type of the DraftPayment.
     *
     * @var string
     */
    protected $type;

    /**
     * The entries in the DraftPayment.
     *
     * @var DraftPaymentEntry[]
     */
    protected $entries;

    /**
     * The Payment or PaymentBatch. This will only be present after the
     * DraftPayment has been accepted.
     *
     * @var DraftPaymentAnchorObject|null
     */
    protected $object;

    /**
     * The reference to the object used for split the bill. Can be
     * RequestInquiry or RequestInquiryBatch
     *
     * @var RequestInquiryReference[]
     */
    protected $requestReferenceSplitTheBill;

    /**
     * The schedule details.
     *
     * @var Schedule
     */
    protected $schedule;

    /**
     * The status of the DraftPayment.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * The list of entries in the DraftPayment. Each entry will result in a
     * payment when the DraftPayment is accepted.
     *
     * @var DraftPaymentEntry[]
     */
    protected $entriesFieldForRequest;

    /**
     * The last updated_timestamp that you received for this DraftPayment. This
     * needs to be provided to prevent race conditions.
     *
     * @var string|null
     */
    protected $previousUpdatedTimestampFieldForRequest;

    /**
     * The number of accepts that are required for the draft payment to receive
     * status ACCEPTED. Currently only 1 is valid.
     *
     * @var int
     */
    protected $numberOfRequiredAcceptsFieldForRequest;

    /**
     * The schedule details when creating or updating a scheduled payment.
     *
     * @var Schedule|null
     */
    protected $scheduleFieldForRequest;

    /**
     * @param DraftPaymentEntry[] $entries The list of entries in the
     * DraftPayment. Each entry will result in a payment when the DraftPayment
     * is accepted.
     * @param int $numberOfRequiredAccepts The number of accepts that are
     * required for the draft payment to receive status ACCEPTED. Currently only
     * 1 is valid.
     * @param string|null $status The status of the DraftPayment.
     * @param string|null $previousUpdatedTimestamp The last updated_timestamp
     * that you received for this DraftPayment. This needs to be provided to
     * prevent race conditions.
     * @param Schedule|null $schedule The schedule details when creating or
     * updating a scheduled payment.
     */
    public function __construct(
        array $entries,
        int $numberOfRequiredAccepts,
        string $status = null,
        string $previousUpdatedTimestamp = null,
        Schedule $schedule = null
    ) {
        $this->statusFieldForRequest = $status;
        $this->entriesFieldForRequest = $entries;
        $this->previousUpdatedTimestampFieldForRequest = $previousUpdatedTimestamp;
        $this->numberOfRequiredAcceptsFieldForRequest = $numberOfRequiredAccepts;
        $this->scheduleFieldForRequest = $schedule;
    }

    /**
     * Create a new DraftPayment.
     *
     * @param DraftPaymentEntry[] $entries The list of entries in the
     * DraftPayment. Each entry will result in a payment when the DraftPayment
     * is accepted.
     * @param int $numberOfRequiredAccepts The number of accepts that are
     * required for the draft payment to receive status ACCEPTED. Currently only
     * 1 is valid.
     * @param int|null $monetaryAccountId
     * @param string|null $status The status of the DraftPayment.
     * @param string|null $previousUpdatedTimestamp The last updated_timestamp
     * that you received for this DraftPayment. This needs to be provided to
     * prevent race conditions.
     * @param Schedule|null $schedule The schedule details when creating or
     * updating a scheduled payment.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        array $entries,
        int $numberOfRequiredAccepts,
        int $monetaryAccountId = null,
        string $status = null,
        string $previousUpdatedTimestamp = null,
        Schedule $schedule = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            [
                self::FIELD_STATUS => $status,
                self::FIELD_ENTRIES => $entries,
                self::FIELD_PREVIOUS_UPDATED_TIMESTAMP => $previousUpdatedTimestamp,
                self::FIELD_NUMBER_OF_REQUIRED_ACCEPTS => $numberOfRequiredAccepts,
                self::FIELD_SCHEDULE => $schedule,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Update a DraftPayment.
     *
     * @param int $draftPaymentId
     * @param int|null $monetaryAccountId
     * @param string|null $status The status of the DraftPayment.
     * @param DraftPaymentEntry[]|null $entries The list of entries in the
     * DraftPayment. Each entry will result in a payment when the DraftPayment
     * is accepted.
     * @param string|null $previousUpdatedTimestamp The last updated_timestamp
     * that you received for this DraftPayment. This needs to be provided to
     * prevent race conditions.
     * @param Schedule|null $schedule The schedule details when creating or
     * updating a scheduled payment.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(
        int $draftPaymentId,
        int $monetaryAccountId = null,
        string $status = null,
        array $entries = null,
        string $previousUpdatedTimestamp = null,
        Schedule $schedule = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $draftPaymentId]
            ),
            [
                self::FIELD_STATUS => $status,
                self::FIELD_ENTRIES => $entries,
                self::FIELD_PREVIOUS_UPDATED_TIMESTAMP => $previousUpdatedTimestamp,
                self::FIELD_SCHEDULE => $schedule,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Get a listing of all DraftPayments from a given MonetaryAccount.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseDraftPaymentList
     */
    public static function listing(
        int $monetaryAccountId = null,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseDraftPaymentList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseDraftPaymentList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Get a specific DraftPayment.
     *
     * @param int $draftPaymentId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseDraftPayment
     */
    public static function get(
        int $draftPaymentId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseDraftPayment {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $draftPaymentId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseDraftPayment::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the created DrafPayment.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The id of the MonetaryAccount the DraftPayment applies to.
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
     * The label of the User who created the DraftPayment.
     *
     * @return LabelUser
     */
    public function getUserAliasCreated()
    {
        return $this->userAliasCreated;
    }

    /**
     * @param LabelUser $userAliasCreated
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setUserAliasCreated($userAliasCreated)
    {
        $this->userAliasCreated = $userAliasCreated;
    }

    /**
     * All responses to this draft payment.
     *
     * @return DraftPaymentResponse[]
     */
    public function getResponses()
    {
        return $this->responses;
    }

    /**
     * @param DraftPaymentResponse[] $responses
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setResponses($responses)
    {
        $this->responses = $responses;
    }

    /**
     * The status of the DraftPayment.
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
     * The type of the DraftPayment.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The entries in the DraftPayment.
     *
     * @return DraftPaymentEntry[]
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * @param DraftPaymentEntry[] $entries
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setEntries($entries)
    {
        $this->entries = $entries;
    }

    /**
     * The Payment or PaymentBatch. This will only be present after the
     * DraftPayment has been accepted.
     *
     * @return DraftPaymentAnchorObject
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param DraftPaymentAnchorObject $object
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setObject($object)
    {
        $this->object = $object;
    }

    /**
     * The reference to the object used for split the bill. Can be
     * RequestInquiry or RequestInquiryBatch
     *
     * @return RequestInquiryReference[]
     */
    public function getRequestReferenceSplitTheBill()
    {
        return $this->requestReferenceSplitTheBill;
    }

    /**
     * @param RequestInquiryReference[] $requestReferenceSplitTheBill
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setRequestReferenceSplitTheBill($requestReferenceSplitTheBill)
    {
        $this->requestReferenceSplitTheBill = $requestReferenceSplitTheBill;
    }

    /**
     * The schedule details.
     *
     * @return Schedule
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * @param Schedule $schedule
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->monetaryAccountId)) {
            return false;
        }

        if (!is_null($this->userAliasCreated)) {
            return false;
        }

        if (!is_null($this->responses)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->entries)) {
            return false;
        }

        if (!is_null($this->object)) {
            return false;
        }

        if (!is_null($this->requestReferenceSplitTheBill)) {
            return false;
        }

        if (!is_null($this->schedule)) {
            return false;
        }

        return true;
    }
}
