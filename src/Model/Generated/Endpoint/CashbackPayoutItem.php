<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;

/**
 * Cashback payout item details.
 *
 * @generated
 */
class CashbackPayoutItem extends BunqModel
{
    /**
     * The status of the cashback payout item.
     *
     * @var string
     */
    protected $status;

    /**
     * The amount of cashback earned.
     *
     * @var Amount
     */
    protected $amount;

    /**
     * The cashback rate.
     *
     * @var string
     */
    protected $rateApplied;

    /**
     * The transaction category that this cashback is for.
     *
     * @var AdditionalTransactionInformationCategory
     */
    protected $transactionCategory;

    /**
     * The ID of the event of the mastercard action that triggered this
     * cashback.
     *
     * @var int
     */
    protected $mastercardActionEventId;

    /**
     * The status of the cashback payout item.
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
     * The amount of cashback earned.
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
     * The cashback rate.
     *
     * @return string
     */
    public function getRateApplied()
    {
        return $this->rateApplied;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $rateApplied
     */
    public function setRateApplied($rateApplied)
    {
        $this->rateApplied = $rateApplied;
    }

    /**
     * The transaction category that this cashback is for.
     *
     * @return AdditionalTransactionInformationCategory
     */
    public function getTransactionCategory()
    {
        return $this->transactionCategory;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param AdditionalTransactionInformationCategory $transactionCategory
     */
    public function setTransactionCategory($transactionCategory)
    {
        $this->transactionCategory = $transactionCategory;
    }

    /**
     * The ID of the event of the mastercard action that triggered this
     * cashback.
     *
     * @return int
     */
    public function getMastercardActionEventId()
    {
        return $this->mastercardActionEventId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $mastercardActionEventId
     */
    public function setMastercardActionEventId($mastercardActionEventId)
    {
        $this->mastercardActionEventId = $mastercardActionEventId;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->amount)) {
            return false;
        }

        if (!is_null($this->rateApplied)) {
            return false;
        }

        if (!is_null($this->transactionCategory)) {
            return false;
        }

        if (!is_null($this->mastercardActionEventId)) {
            return false;
        }

        return true;
    }
}
