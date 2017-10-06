<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Schedule;
use bunq\Model\Generated\Object\ScheduleRequestInquiryEntry;

/**
 * Used to schedule request inquiry.
 *
 * @generated
 */
class ScheduleRequestInquiry extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_REQUEST_INQUIRY = 'request_inquiry';
    const FIELD_SCHEDULE = 'schedule';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'ScheduleRequestInquiry';

    /**
     * The request inquiry.
     *
     * @var ScheduleRequestInquiryEntry
     */
    protected $requestInquiry;

    /**
     * The schedule details.
     *
     * @var Schedule
     */
    protected $schedule;

    /**
     * The request inquiry.
     *
     * @return ScheduleRequestInquiryEntry
     */
    public function getRequestInquiry()
    {
        return $this->requestInquiry;
    }

    /**
     * @param ScheduleRequestInquiryEntry $requestInquiry
     */
    public function setRequestInquiry($requestInquiry)
    {
        $this->requestInquiry = $requestInquiry;
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
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;
    }
}
