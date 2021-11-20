<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

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
     * @var Amount|null
     */
    protected $amountFieldForRequest;

    /**
     * The duration for a budget restriction. Valid values are DAILY, WEEKLY,
     * MONTHLY, YEARLY.
     *
     * @var string|null
     */
    protected $frequencyFieldForRequest;

    /**
     * @param Amount|null $amount The amount of the budget given to the invited
     * user.
     * @param string|null $frequency The duration for a budget restriction.
     * Valid values are DAILY, WEEKLY, MONTHLY, YEARLY.
     */
    public function __construct(Amount  $amount = null, string  $frequency = null)
    {
        $this->amountFieldForRequest = $amount;
        $this->frequencyFieldForRequest = $frequency;
    }

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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $frequency
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->amount)) {
            return false;
        }

        if (!is_null($this->frequency)) {
            return false;
        }

        return true;
    }
}
