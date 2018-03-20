<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;

/**
 * Used to view bunq.me TabResultResponse objects belonging to a tab. A
 * TabResultResponse is an object that holds details on a tab which has been
 * paid from the provided monetary account.
 *
 * @generated
 */
class BunqMeTabResultResponse extends BunqModel
{
    /**
     * The payment made for the bunq.me tab.
     *
     * @var Payment
     */
    protected $payment;

    /**
     * The payment made for the bunq.me tab.
     *
     * @return Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Payment $payment
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
