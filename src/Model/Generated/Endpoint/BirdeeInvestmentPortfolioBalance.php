<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;

/**
 * Endpoint for interacting with the birdee investment portfolio balance..
 *
 * @generated
 */
class BirdeeInvestmentPortfolioBalance extends BunqModel
{
    /**
     * The current valuation of the portfolio, minus any amount pending
     * withdrawal.
     *
     * @var Amount
     */
    protected $amountAvailable;

    /**
     * The total amount deposited.
     *
     * @var Amount
     */
    protected $amountDepositTotal;

    /**
     * The total amount withdrawn.
     *
     * @var Amount
     */
    protected $amountWithdrawalTotal;

    /**
     * The total fee amount.
     *
     * @var Amount
     */
    protected $amountFeeTotal;

    /**
     * The difference between the netto deposited amount and the current
     * valuation.
     *
     * @var Amount
     */
    protected $amountProfit;

    /**
     * The amount that's sent to Birdee, but pending investment on the
     * portfolio.
     *
     * @var Amount
     */
    protected $amountDepositPending;

    /**
     * The amount that's sent to Birdee, but pending withdrawal.
     *
     * @var Amount
     */
    protected $amountWithdrawalPending;

    /**
     * The current valuation of the portfolio, minus any amount pending
     * withdrawal.
     *
     * @return Amount
     */
    public function getAmountAvailable()
    {
        return $this->amountAvailable;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountAvailable
     */
    public function setAmountAvailable($amountAvailable)
    {
        $this->amountAvailable = $amountAvailable;
    }

    /**
     * The total amount deposited.
     *
     * @return Amount
     */
    public function getAmountDepositTotal()
    {
        return $this->amountDepositTotal;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountDepositTotal
     */
    public function setAmountDepositTotal($amountDepositTotal)
    {
        $this->amountDepositTotal = $amountDepositTotal;
    }

    /**
     * The total amount withdrawn.
     *
     * @return Amount
     */
    public function getAmountWithdrawalTotal()
    {
        return $this->amountWithdrawalTotal;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountWithdrawalTotal
     */
    public function setAmountWithdrawalTotal($amountWithdrawalTotal)
    {
        $this->amountWithdrawalTotal = $amountWithdrawalTotal;
    }

    /**
     * The total fee amount.
     *
     * @return Amount
     */
    public function getAmountFeeTotal()
    {
        return $this->amountFeeTotal;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountFeeTotal
     */
    public function setAmountFeeTotal($amountFeeTotal)
    {
        $this->amountFeeTotal = $amountFeeTotal;
    }

    /**
     * The difference between the netto deposited amount and the current
     * valuation.
     *
     * @return Amount
     */
    public function getAmountProfit()
    {
        return $this->amountProfit;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountProfit
     */
    public function setAmountProfit($amountProfit)
    {
        $this->amountProfit = $amountProfit;
    }

    /**
     * The amount that's sent to Birdee, but pending investment on the
     * portfolio.
     *
     * @return Amount
     */
    public function getAmountDepositPending()
    {
        return $this->amountDepositPending;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountDepositPending
     */
    public function setAmountDepositPending($amountDepositPending)
    {
        $this->amountDepositPending = $amountDepositPending;
    }

    /**
     * The amount that's sent to Birdee, but pending withdrawal.
     *
     * @return Amount
     */
    public function getAmountWithdrawalPending()
    {
        return $this->amountWithdrawalPending;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountWithdrawalPending
     */
    public function setAmountWithdrawalPending($amountWithdrawalPending)
    {
        $this->amountWithdrawalPending = $amountWithdrawalPending;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->amountAvailable)) {
            return false;
        }

        if (!is_null($this->amountDepositTotal)) {
            return false;
        }

        if (!is_null($this->amountWithdrawalTotal)) {
            return false;
        }

        if (!is_null($this->amountFeeTotal)) {
            return false;
        }

        if (!is_null($this->amountProfit)) {
            return false;
        }

        if (!is_null($this->amountDepositPending)) {
            return false;
        }

        if (!is_null($this->amountWithdrawalPending)) {
            return false;
        }

        return true;
    }
}
