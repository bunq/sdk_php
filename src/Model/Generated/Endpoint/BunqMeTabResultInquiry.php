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
     * The payment made for the Tab.
     *
     * @var Payment
     */
    protected $payment;

    /**
     * The Id of the bunq.me tab that this BunqMeTabResultInquiry belongs to.
     *
     * @var int
     */
    protected $bunqMeTabId;

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
     * The Id of the bunq.me tab that this BunqMeTabResultInquiry belongs to.
     *
     * @return int
     */
    public function getBunqMeTabId()
    {
        return $this->bunqMeTabId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $bunqMeTabId
     */
    public function setBunqMeTabId($bunqMeTabId)
    {
        $this->bunqMeTabId = $bunqMeTabId;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->payment)) {
            return false;
        }

        if (!is_null($this->bunqMeTabId)) {
            return false;
        }

        return true;
    }
}
