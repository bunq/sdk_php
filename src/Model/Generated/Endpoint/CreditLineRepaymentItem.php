<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;

/**
 * Line items in a credit line repayment.
 *
 * @generated
 */
class CreditLineRepaymentItem extends BunqModel
{
    /**
     * The amount.
     *
     * @var Amount
     */
    protected $amount;

    /**
     * The amount.
     *
     * @return Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->amount)) {
            return false;
        }

        return true;
    }
}
