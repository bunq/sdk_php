<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\SchedulePaymentEntry;

/**
 * Endpoint for schedule payments.
 *
 * @generated
 */
class SchedulePayment extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/schedule-payment';
    const ENDPOINT_URL_DELETE = 'user/%s/monetary-account/%s/schedule-payment/%s';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/schedule-payment/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/schedule-payment';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/schedule-payment/%s';

    /**
     * Field constants.
     */
    const FIELD_PAYMENT = 'payment';
    const FIELD_SCHEDULE = 'schedule';
    const FIELD_PURPOSE = 'purpose';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'ScheduledPayment';
    const OBJECT_TYPE_PUT = 'ScheduledPayment';

    /**
     * The payment details.
     *
     * @var SchedulePaymentEntry
     */
    protected $payment;

    /**
     * The schedule details.
     *
     * @var Schedule
     */
    protected $schedule;

    /**
     * The schedule status, options: ACTIVE, FINISHED, CANCELLED.
     *
     * @var string
     */
    protected $status;

    /**
     * The schedule purpose.
     *
     * @var string
     */
    protected $purpose;

    /**
     * The payment details.
     *
     * @var SchedulePaymentEntry
     */
    protected $paymentFieldForRequest;

    /**
     * The schedule details when creating or updating a scheduled payment.
     *
     * @var Schedule
     */
    protected $scheduleFieldForRequest;

    /**
     * The purpose of this scheduled payment.
     *
     * @var string|null
     */
    protected $purposeFieldForRequest;

    /**
     * @param SchedulePaymentEntry $payment The payment details.
     * @param Schedule $schedule The schedule details when creating or updating
     * a scheduled payment.
     * @param string|null $purpose The purpose of this scheduled payment.
     */
    public function __construct(SchedulePaymentEntry  $payment, Schedule  $schedule, string  $purpose = null)
    {
        $this->paymentFieldForRequest = $payment;
        $this->scheduleFieldForRequest = $schedule;
        $this->purposeFieldForRequest = $purpose;
    }

    /**
     * @param SchedulePaymentEntry $payment The payment details.
     * @param Schedule $schedule The schedule details when creating or updating
     * a scheduled payment.
     * @param int|null $monetaryAccountId
     * @param string|null $purpose The purpose of this scheduled payment.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(SchedulePaymentEntry  $payment, Schedule  $schedule, int $monetaryAccountId = null, string  $purpose = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            [self::FIELD_PAYMENT => $payment,
self::FIELD_SCHEDULE => $schedule,
self::FIELD_PURPOSE => $purpose],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param string[] $customHeaders
     * @param int $schedulePaymentId
     *
     * @return BunqResponseNull
     */
    public static function delete(int $schedulePaymentId, int $monetaryAccountId = null, array $customHeaders = []): BunqResponseNull
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->delete(
            vsprintf(
                self::ENDPOINT_URL_DELETE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $schedulePaymentId]
            ),
            $customHeaders
        );

        return BunqResponseNull::castFromBunqResponse(
            new BunqResponse(null, $responseRaw->getHeaders())
        );
    }

    /**
     * @param int $schedulePaymentId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseSchedulePayment
     */
    public static function get(int $schedulePaymentId, int $monetaryAccountId = null, array $customHeaders = []): BunqResponseSchedulePayment
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $schedulePaymentId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseSchedulePayment::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseSchedulePaymentList
     */
    public static function listing(int $monetaryAccountId = null, array $params = [], array $customHeaders = []): BunqResponseSchedulePaymentList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseSchedulePaymentList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $schedulePaymentId
     * @param int|null $monetaryAccountId
     * @param SchedulePaymentEntry|null $payment The payment details.
     * @param Schedule|null $schedule The schedule details when creating or
     * updating a scheduled payment.
     * @param string[] $customHeaders
     *
     * @return BunqResponseSchedulePayment
     */
    public static function update(int $schedulePaymentId, int $monetaryAccountId = null, SchedulePaymentEntry  $payment = null, Schedule  $schedule = null, array $customHeaders = []): BunqResponseSchedulePayment
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $schedulePaymentId]
            ),
            [self::FIELD_PAYMENT => $payment,
self::FIELD_SCHEDULE => $schedule],
            $customHeaders
        );

        return BunqResponseSchedulePayment::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_PUT)
        );
    }

    /**
     * The payment details.
     *
     * @return SchedulePaymentEntry
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param SchedulePaymentEntry $payment
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Schedule $schedule
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The schedule purpose.
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $purpose
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->payment)) {
            return false;
        }

        if (!is_null($this->schedule)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->purpose)) {
            return false;
        }

        return true;
    }
}
