<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class PaymentArrivalExpected extends BunqModel
{
    /**
     * Indicates when we expect the payment to arrive.
     *
     * @var string
     */
    protected $status;

    /**
     * The time when the payment is expected to arrive.
     *
     * @var string
     */
    protected $time;

    /**
     * Indicates when we expect the payment to arrive.
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
     * The time when the payment is expected to arrive.
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->time)) {
            return false;
        }

        return true;
    }
}
