<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Schedule;
use bunq\Model\Generated\Object\ScheduleRequestInquiryEntry;

/**
 * Used to schedule request inquiry batches.
 *
 * @generated
 */
class ScheduleRequestInquiryBatch extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_REQUEST_INQUIRIES = 'request_inquiries';
    const FIELD_SCHEDULE = 'schedule';
    const FIELD_TOTAL_AMOUNT_INQUIRED = 'total_amount_inquired';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'ScheduleRequestInquiryBatch';

    /**
     * The request batch details.
     *
     * @var ScheduleRequestInquiryEntry[]
     */
    protected $requestInquiries;

    /**
     * The schedule details.
     *
     * @var Schedule
     */
    protected $schedule;

    /**
     * The total amount originally inquired for this batch.
     *
     * @var Amount
     */
    protected $totalAmountInquired;

    /**
     * The request batch details.
     *
     * @return ScheduleRequestInquiryEntry[]
     */
    public function getRequestInquiries()
    {
        return $this->requestInquiries;
    }

    /**
     * @param ScheduleRequestInquiryEntry[] $requestInquiries
     */
    public function setRequestInquiries(array $requestInquiries)
    {
        $this->requestInquiries = $requestInquiries;
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
    public function setSchedule(Schedule $schedule)
    {
        $this->schedule = $schedule;
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
