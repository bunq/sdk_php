<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Error;
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
    const OBJECT_TYPE = 'ScheduledInstance';

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
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $scheduleId
     * @param int $scheduleInstanceId
     * @param string[] $customHeaders
     *
     * @return BunqResponseScheduleInstance
     */
    public static function get(ApiContext $apiContext, int $userId, int $monetaryAccountId, int $scheduleId, int $scheduleInstanceId, array $customHeaders = []): BunqResponseScheduleInstance
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $monetaryAccountId, $scheduleId, $scheduleInstanceId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseScheduleInstance::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $scheduleId
     * @param int $scheduleInstanceId
     * @param string[] $customHeaders
     *
     * @return BunqResponseScheduleInstance
     */
    public static function update(ApiContext $apiContext, array $requestMap, int $userId, int $monetaryAccountId, int $scheduleId, int $scheduleInstanceId, array $customHeaders = []): BunqResponseScheduleInstance
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [$userId, $monetaryAccountId, $scheduleId, $scheduleInstanceId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseScheduleInstance::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $scheduleId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseScheduleInstanceList
     */
    public static function listing(ApiContext $apiContext, int $userId, int $monetaryAccountId, int $scheduleId, array $params = [], array $customHeaders = []): BunqResponseScheduleInstanceList
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $monetaryAccountId, $scheduleId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseScheduleInstanceList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE)
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
     */
    public function setResultObject($resultObject)
    {
        $this->resultObject = $resultObject;
    }
}
