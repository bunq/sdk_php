<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;

/**
 * Manage repayments for a credit line.
 *
 * @generated
 */
class CreditLineRepayment extends BunqModel
{
    /**
     * The ID of the monetary account the repayment is made on.
     *
     * @var int
     */
    protected $monetaryAccountCreditLineId;

    /**
     * The original balance that was due, regardless of how much has been paid
     * or how much interest has accrued.
     *
     * @var Amount
     */
    protected $amountBalanceDueOriginal;

    /**
     * The total amount due.
     *
     * @var Amount
     */
    protected $amountDue;

    /**
     * The current balance due.
     *
     * @var Amount
     */
    protected $amountBalanceDue;

    /**
     * The amount of interest due.
     *
     * @var Amount
     */
    protected $amountInterestDue;

    /**
     * The amount of the fee due.
     *
     * @var Amount
     */
    protected $amountFeeDue;

    /**
     * The status of the repayment.
     *
     * @var string
     */
    protected $status;

    /**
     * The items of the repayment.
     *
     * @var CreditLineRepaymentItem[]
     */
    protected $items;

    /**
     * The ID of the monetary account the repayment is made on.
     *
     * @return int
     */
    public function getMonetaryAccountCreditLineId()
    {
        return $this->monetaryAccountCreditLineId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $monetaryAccountCreditLineId
     */
    public function setMonetaryAccountCreditLineId($monetaryAccountCreditLineId)
    {
        $this->monetaryAccountCreditLineId = $monetaryAccountCreditLineId;
    }

    /**
     * The original balance that was due, regardless of how much has been paid
     * or how much interest has accrued.
     *
     * @return Amount
     */
    public function getAmountBalanceDueOriginal()
    {
        return $this->amountBalanceDueOriginal;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountBalanceDueOriginal
     */
    public function setAmountBalanceDueOriginal($amountBalanceDueOriginal)
    {
        $this->amountBalanceDueOriginal = $amountBalanceDueOriginal;
    }

    /**
     * The total amount due.
     *
     * @return Amount
     */
    public function getAmountDue()
    {
        return $this->amountDue;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountDue
     */
    public function setAmountDue($amountDue)
    {
        $this->amountDue = $amountDue;
    }

    /**
     * The current balance due.
     *
     * @return Amount
     */
    public function getAmountBalanceDue()
    {
        return $this->amountBalanceDue;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountBalanceDue
     */
    public function setAmountBalanceDue($amountBalanceDue)
    {
        $this->amountBalanceDue = $amountBalanceDue;
    }

    /**
     * The amount of interest due.
     *
     * @return Amount
     */
    public function getAmountInterestDue()
    {
        return $this->amountInterestDue;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountInterestDue
     */
    public function setAmountInterestDue($amountInterestDue)
    {
        $this->amountInterestDue = $amountInterestDue;
    }

    /**
     * The amount of the fee due.
     *
     * @return Amount
     */
    public function getAmountFeeDue()
    {
        return $this->amountFeeDue;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountFeeDue
     */
    public function setAmountFeeDue($amountFeeDue)
    {
        $this->amountFeeDue = $amountFeeDue;
    }

    /**
     * The status of the repayment.
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
     * The items of the repayment.
     *
     * @return CreditLineRepaymentItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param CreditLineRepaymentItem[] $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->monetaryAccountCreditLineId)) {
            return false;
        }

        if (!is_null($this->amountBalanceDueOriginal)) {
            return false;
        }

        if (!is_null($this->amountDue)) {
            return false;
        }

        if (!is_null($this->amountBalanceDue)) {
            return false;
        }

        if (!is_null($this->amountInterestDue)) {
            return false;
        }

        if (!is_null($this->amountFeeDue)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->items)) {
            return false;
        }

        return true;
    }
}
