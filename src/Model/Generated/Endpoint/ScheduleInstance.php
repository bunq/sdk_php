<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Error;
use bunq\Model\Generated\Object\RequestInquiryReference;
use bunq\Model\Generated\Object\ScheduleAnchorObject;
use bunq\Model\Generated\Object\ScheduleInstanceAnchorObject;

/**
 * view for reading, updating and listing the scheduled instance.
 *
 * @generated
 */
class ScheduleInstance extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/schedule/%s/schedule-instance/%s';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/schedule/%s/schedule-instance/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/schedule/%s/schedule-instance';

    /**
     * Field constants.
     */
    const FIELD_STATE = 'state';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'ScheduledInstance';

    /**
     * The state of the scheduleInstance. (FINISHED_SUCCESSFULLY, RETRY,
     * FAILED_USER_ERROR)
     *
     * @var string
     */
    protected $state;

    /**
     * The schedule start time (UTC).
     *
     * @var string
     */
    protected $timeStart;

    /**
     * The schedule end time (UTC).
     *
     * @var string
     */
    protected $timeEnd;

    /**
     * The message when the scheduled instance has run and failed due to user
     * error.
     *
     * @var Error[]
     */
    protected $errorMessage;

    /**
     * The scheduled object. (Payment, PaymentBatch)
     *
     * @var ScheduleAnchorObject
     */
    protected $scheduledObject;

    /**
     * The result object of this schedule instance. (Payment, PaymentBatch)
     *
     * @var ScheduleInstanceAnchorObject
     */
    protected $resultObject;

    /**
     * The reference to the object used for split the bill. Can be
     * RequestInquiry or RequestInquiryBatch
     *
     * @var RequestInquiryReference[]
     */
    protected $requestReferenceSplitTheBill;

    /**
     * Change the state of the scheduleInstance from FAILED_USER_ERROR to RETRY.
     *
     * @var string
     */
    protected $stateFieldForRequest;

    /**
     * @param string $state Change the state of the scheduleInstance from
     * FAILED_USER_ERROR to RETRY.
     */
    public function __construct(string $state)
    {
        $this->stateFieldForRequest = $state;
    }

    /**
     * @param int $scheduleId
     * @param int $scheduleInstanceId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseScheduleInstance
     */
    public static function get(
        int $scheduleId,
        int $scheduleInstanceId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseScheduleInstance {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $scheduleId,
                    $scheduleInstanceId,
                ]
            ),
            [],
            $customHeaders
        );

        return BunqResponseScheduleInstance::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $scheduleId
     * @param int $scheduleInstanceId
     * @param int|null $monetaryAccountId
     * @param string|null $state Change the state of the scheduleInstance from
     * FAILED_USER_ERROR to RETRY.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(
        int $scheduleId,
        int $scheduleInstanceId,
        int $monetaryAccountId = null,
        string $state = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $scheduleId,
                    $scheduleInstanceId,
                ]
            ),
            [self::FIELD_STATE => $state],
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
     * @param int $scheduleId
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseScheduleInstanceList
     */
    public static function listing(
        int $scheduleId,
        int $monetaryAccountId = null,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseScheduleInstanceList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $scheduleId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseScheduleInstanceList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The state of the scheduleInstance. (FINISHED_SUCCESSFULLY, RETRY,
     * FAILED_USER_ERROR)
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * The schedule start time (UTC).
     *
     * @return string
     */
    public function getTimeStart()
    {
        return $this->timeStart;
    }

    /**
     * @param string $timeStart
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setTimeStart($timeStart)
    {
        $this->timeStart = $timeStart;
    }

    /**
     * The schedule end time (UTC).
     *
     * @return string
     */
    public function getTimeEnd()
    {
        return $this->timeEnd;
    }

    /**
     * @param string $timeEnd
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setTimeEnd($timeEnd)
    {
        $this->timeEnd = $timeEnd;
    }

    /**
     * The message when the scheduled instance has run and failed due to user
     * error.
     *
     * @return Error[]
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @param Error[] $errorMessage
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    /**
     * The scheduled object. (Payment, PaymentBatch)
     *
     * @return ScheduleAnchorObject
     */
    public function getScheduledObject()
    {
        return $this->scheduledObject;
    }

    /**
     * @param ScheduleAnchorObject $scheduledObject
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setScheduledObject($scheduledObject)
    {
        $this->scheduledObject = $scheduledObject;
    }

    /**
     * The result object of this schedule instance. (Payment, PaymentBatch)
     *
     * @return ScheduleInstanceAnchorObject
     */
    public function getResultObject()
    {
        return $this->resultObject;
    }

    /**
     * @param ScheduleInstanceAnchorObject $resultObject
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setResultObject($resultObject)
    {
        $this->resultObject = $resultObject;
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
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->state)) {
            return false;
        }

        if (!is_null($this->timeStart)) {
            return false;
        }

        if (!is_null($this->timeEnd)) {
            return false;
        }

        if (!is_null($this->errorMessage)) {
            return false;
        }

        if (!is_null($this->scheduledObject)) {
            return false;
        }

        if (!is_null($this->resultObject)) {
            return false;
        }

        if (!is_null($this->requestReferenceSplitTheBill)) {
            return false;
        }

        return true;
    }
}
