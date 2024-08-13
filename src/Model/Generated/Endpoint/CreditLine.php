<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;

/**
 * Manage credit lines for a user.
 *
 * @generated
 */
class CreditLine extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_CREDIT_LINE_OFFER_ID = 'credit_line_offer_id';
    const FIELD_MONETARY_ACCOUNT_REPAYMENT_ID = 'monetary_account_repayment_id';

    /**
     * The ID of the user this credit line belongs to.
     *
     * @var int
     */
    protected $userId;

    /**
     * The ID of the monetary account this credit line withdraws credit from.
     *
     * @var int
     */
    protected $monetaryAccountId;

    /**
     * The ID of the monetary account this credit line repays from.
     *
     * @var int
     */
    protected $monetaryAccountRepaymentId;

    /**
     * The status of the credit line.
     *
     * @var string
     */
    protected $status;

    /**
     * The amount of the credit line.
     *
     * @var Amount
     */
    protected $amount;

    /**
     * The interest rate on overdue repayments of the credit line.
     *
     * @var string
     */
    protected $interestRate;

    /**
     * The next time a repayment will be made.
     *
     * @var string
     */
    protected $timeRepaymentNext;

    /**
     * The pending repayments for this credit line.
     *
     * @var CreditLineRepayment[]
     */
    protected $pendingRepayments;

    /**
     * The ID of the pending credit line offer extended to the user.
     *
     * @var int
     */
    protected $creditLineOfferIdFieldForRequest;

    /**
     * The ID of the monetary account to repay the credit line from.
     *
     * @var int
     */
    protected $monetaryAccountRepaymentIdFieldForRequest;

    /**
     * @param int $creditLineOfferId The ID of the pending credit line offer
     * extended to the user.
     * @param int $monetaryAccountRepaymentId The ID of the monetary account to
     * repay the credit line from.
     */
    public function __construct(int  $creditLineOfferId, int  $monetaryAccountRepaymentId)
    {
        $this->creditLineOfferIdFieldForRequest = $creditLineOfferId;
        $this->monetaryAccountRepaymentIdFieldForRequest = $monetaryAccountRepaymentId;
    }

    /**
     * The ID of the user this credit line belongs to.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * The ID of the monetary account this credit line withdraws credit from.
     *
     * @return int
     */
    public function getMonetaryAccountId()
    {
        return $this->monetaryAccountId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $monetaryAccountId
     */
    public function setMonetaryAccountId($monetaryAccountId)
    {
        $this->monetaryAccountId = $monetaryAccountId;
    }

    /**
     * The ID of the monetary account this credit line repays from.
     *
     * @return int
     */
    public function getMonetaryAccountRepaymentId()
    {
        return $this->monetaryAccountRepaymentId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $monetaryAccountRepaymentId
     */
    public function setMonetaryAccountRepaymentId($monetaryAccountRepaymentId)
    {
        $this->monetaryAccountRepaymentId = $monetaryAccountRepaymentId;
    }

    /**
     * The status of the credit line.
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
     * The amount of the credit line.
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
     * The interest rate on overdue repayments of the credit line.
     *
     * @return string
     */
    public function getInterestRate()
    {
        return $this->interestRate;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $interestRate
     */
    public function setInterestRate($interestRate)
    {
        $this->interestRate = $interestRate;
    }

    /**
     * The next time a repayment will be made.
     *
     * @return string
     */
    public function getTimeRepaymentNext()
    {
        return $this->timeRepaymentNext;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $timeRepaymentNext
     */
    public function setTimeRepaymentNext($timeRepaymentNext)
    {
        $this->timeRepaymentNext = $timeRepaymentNext;
    }

    /**
     * The pending repayments for this credit line.
     *
     * @return CreditLineRepayment[]
     */
    public function getPendingRepayments()
    {
        return $this->pendingRepayments;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param CreditLineRepayment[] $pendingRepayments
     */
    public function setPendingRepayments($pendingRepayments)
    {
        $this->pendingRepayments = $pendingRepayments;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->userId)) {
            return false;
        }

        if (!is_null($this->monetaryAccountId)) {
            return false;
        }

        if (!is_null($this->monetaryAccountRepaymentId)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->amount)) {
            return false;
        }

        if (!is_null($this->interestRate)) {
            return false;
        }

        if (!is_null($this->timeRepaymentNext)) {
            return false;
        }

        if (!is_null($this->pendingRepayments)) {
            return false;
        }

        return true;
    }
}
