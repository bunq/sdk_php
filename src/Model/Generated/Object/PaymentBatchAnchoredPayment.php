<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Endpoint\Payment;

/**
 * @generated
 */
class PaymentBatchAnchoredPayment extends BunqModel
{
    /**
     * @var Payment[]
     */
    protected $payment;

    /**
     * @return Payment[]
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param Payment[] $payment
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->payment)) {
            return false;
        }

        return true;
    }
}
