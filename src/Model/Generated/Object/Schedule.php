<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class Schedule extends BunqModel
{
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
     * @param string $timeStart
     * @param string $recurrenceUnit
     * @param int $recurrenceSize
     */
    public function __construct($timeStart, $recurrenceUnit, $recurrenceSize)
    {
        $this->timeStart = $timeStart;
        $this->recurrenceUnit = $recurrenceUnit;
        $this->recurrenceSize = $recurrenceSize;
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
}
