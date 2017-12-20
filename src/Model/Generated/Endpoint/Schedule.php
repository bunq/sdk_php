<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\ScheduleAnchorObject;

/**
 * view for reading the scheduled definitions.
 *
 * @generated
 */
class Schedule extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/schedule/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/schedule';

    /**
     * Field constants.
     */
    const FIELD_TIME_START = 'time_start';
    const FIELD_TIME_END = 'time_end';
    const FIELD_RECURRENCE_UNIT = 'recurrence_unit';
    const FIELD_RECURRENCE_SIZE = 'recurrence_size';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'Schedule';

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
     * The schedule recurrence unit, options: ONCE, HOURLY, DAILY, WEEKLY,
     * MONTHLY, YEARLY
     *
     * @var string
     */
    protected $recurrenceUnit;

    /**
     * The schedule recurrence size. For example size 4 and unit WEEKLY means
     * the recurrence is every 4 weeks.
     *
     * @var int
     */
    protected $recurrenceSize;

    /**
     * The schedule status, options: ACTIVE, FINISHED, CANCELLED.
     *
     * @var string
     */
    protected $status;

    /**
     * The scheduled object. (Payment, PaymentBatch)
     *
     * @var ScheduleAnchorObject
     */
    protected $object;

    /**
     * Get a specific schedule definition for a given monetary account.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $scheduleId
     * @param string[] $customHeaders
     *
     * @return BunqResponseSchedule
     */
    public static function get(ApiContext $apiContext, int $userId, int $monetaryAccountId, int $scheduleId, array $customHeaders = []): BunqResponseSchedule
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $monetaryAccountId, $scheduleId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseSchedule::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * Get a collection of scheduled definition for a given monetary account.
     * You can add the parameter type to filter the response. When
     * type={SCHEDULE_DEFINITION_PAYMENT,SCHEDULE_DEFINITION_PAYMENT_BATCH} is
     * provided only schedule definition object that relate to these definitions
     * are returned.
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
     * @return BunqResponseScheduleList
     */
    public static function listing(ApiContext $apiContext, int $userId, int $monetaryAccountId, array $params = [], array $customHeaders = []): BunqResponseScheduleList
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

        return BunqResponseScheduleList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE)
        );
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
     * The schedule recurrence unit, options: ONCE, HOURLY, DAILY, WEEKLY,
     * MONTHLY, YEARLY
     *
     * @return string
     */
    public function getRecurrenceUnit()
    {
        return $this->recurrenceUnit;
    }

    /**
     * @param string $recurrenceUnit
     */
    public function setRecurrenceUnit($recurrenceUnit)
    {
        $this->recurrenceUnit = $recurrenceUnit;
    }

    /**
     * The schedule recurrence size. For example size 4 and unit WEEKLY means
     * the recurrence is every 4 weeks.
     *
     * @return int
     */
    public function getRecurrenceSize()
    {
        return $this->recurrenceSize;
    }

    /**
     * @param int $recurrenceSize
     */
    public function setRecurrenceSize($recurrenceSize)
    {
        $this->recurrenceSize = $recurrenceSize;
    }

    /**
     * The schedule status, options: ACTIVE, FINISHED, CANCELLED.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The scheduled object. (Payment, PaymentBatch)
     *
     * @return ScheduleAnchorObject
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param ScheduleAnchorObject $object
     */
    public function setObject($object)
    {
        $this->object = $object;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->timeStart)) {
            return false;
        }

        if (!is_null($this->timeEnd)) {
            return false;
        }

        if (!is_null($this->recurrenceUnit)) {
            return false;
        }

        if (!is_null($this->recurrenceSize)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->object)) {
            return false;
        }

        return true;
    }
}
