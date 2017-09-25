<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class MonetaryAccountProfileDrain extends BunqModel
{
    /**
     * The status of the profile.
     *
     * @var string
     */
    protected $status;

    /**
     * The goal balance.
     *
     * @var Amount
     */
    protected $balancePreferred;

    /**
     * The high threshold balance.
     *
     * @var Amount
     */
    protected $balanceThresholdHigh;

    /**
     * The savings monetary account.
     *
     * @var LabelMonetaryAccount
     */
    protected $savingsAccountAlias;

    /**
     * @param string $status
     * @param Amount $balancePreferred
     * @param Amount $balanceThresholdHigh
     * @param Pointer $savingsAccountAlias
     */
    public function __construct($status, Amount $balancePreferred, Amount $balanceThresholdHigh, Pointer $savingsAccountAlias)
    {
        $this->status = $status;
        $this->balancePreferred = $balancePreferred;
        $this->balanceThresholdHigh = $balanceThresholdHigh;
        $this->savingsAccountAlias = $savingsAccountAlias;
    }

    /**
     * The status of the profile.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    /**
     * The goal balance.
     *
     * @return Amount
     */
    public function getBalancePreferred()
    {
        return $this->balancePreferred;
    }

    /**
     * @param Amount $balancePreferred
     */
    public function setBalancePreferred(Amount $balancePreferred)
    {
        $this->balancePreferred = $balancePreferred;
    }

    /**
     * The high threshold balance.
     *
     * @return Amount
     */
    public function getBalanceThresholdHigh()
    {
        return $this->balanceThresholdHigh;
    }

    /**
     * @param Amount $balanceThresholdHigh
     */
    public function setBalanceThresholdHigh(Amount $balanceThresholdHigh)
    {
        $this->balanceThresholdHigh = $balanceThresholdHigh;
    }

    /**
     * The savings monetary account.
     *
     * @return LabelMonetaryAccount
     */
    public function getSavingsAccountAlias()
    {
        return $this->savingsAccountAlias;
    }

    /**
     * @param LabelMonetaryAccount $savingsAccountAlias
     */
    public function setSavingsAccountAlias(LabelMonetaryAccount $savingsAccountAlias)
    {
        $this->savingsAccountAlias = $savingsAccountAlias;
    }
}
