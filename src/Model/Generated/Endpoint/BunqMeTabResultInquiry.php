<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;

/**
 * Used to view bunq.me TabResultInquiry objects belonging to a tab. A
 * TabResultInquiry is an object that holds details on both the tab and a
 * single payment made for that tab.
 *
 * @generated
 */
class BunqMeTabResultInquiry extends BunqModel
{
    /**
     * Object type.
     */
    const OBJECT_TYPE = 'BunqMeTabResultInquiry';

    /**
     * The payment made for the Tab.
     *
     * @var Payment
     */
    protected $payment;

    /**
     * The payment made for the Tab.
     *
     * @return Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
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
