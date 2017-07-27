<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\BunqModel;

/**
 * @generated
 */
class BudgetRestriction extends BunqModel
{
    /**
     * The amount of the budget given to the invited user.
     *
     * @var Amount
     */
    protected $amount;

    /**
     * The duration for a budget restriction. Valid values are DAILY, WEEKLY,
     * MONTHLY, YEARLY.
     *
     * @var string
     */
    protected $frequency;

    /**
     * The amount of the budget given to the invited user.
     *
     * @return Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Amount $amount
     */
    public function setAmount(Amount $amount)
    {
        $this->amount = $amount;
    }

    /**
     * The duration for a budget restriction. Valid values are DAILY, WEEKLY,
     * MONTHLY, YEARLY.
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @param string $frequency
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
    }
}
