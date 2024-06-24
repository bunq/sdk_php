<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;

/**
 * Suspended outgoing payments.
 *
 * @generated
 */
class PaymentSuspendedOutgoing extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_STATUS = 'status';

    /**
     * The ID of the monetary account the payment was sent from.
     *
     * @var string
     */
    protected $monetaryAccountId;

    /**
     * The status of the payment.
     *
     * @var string
     */
    protected $status;

    /**
     * The time this payment should be executed.
     *
     * @var string
     */
    protected $timeExecution;

    /**
     * The status to update to.
     *
     * @var string
     */
    protected $statusFieldForRequest;

    /**
     * @param string $status The status to update to.
     */
    public function __construct(string  $status)
    {
        $this->statusFieldForRequest = $status;
    }

    /**
     * The ID of the monetary account the payment was sent from.
     *
     * @return string
     */
    public function getMonetaryAccountId()
    {
        return $this->monetaryAccountId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $monetaryAccountId
     */
    public function setMonetaryAccountId($monetaryAccountId)
    {
        $this->monetaryAccountId = $monetaryAccountId;
    }

    /**
     * The status of the payment.
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
     * The time this payment should be executed.
     *
     * @return string
     */
    public function getTimeExecution()
    {
        return $this->timeExecution;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $timeExecution
     */
    public function setTimeExecution($timeExecution)
    {
        $this->timeExecution = $timeExecution;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->monetaryAccountId)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->timeExecution)) {
            return false;
        }

        return true;
    }
}
