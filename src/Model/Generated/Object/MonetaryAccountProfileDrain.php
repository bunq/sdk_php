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
     * The status of the profile.
     *
     * @var string
     */
    protected $statusFieldForRequest;

    /**
     * The goal balance.
     *
     * @var Amount
     */
    protected $balancePreferredFieldForRequest;

    /**
     * The high threshold balance.
     *
     * @var Amount
     */
    protected $balanceThresholdHighFieldForRequest;

    /**
     * The savings monetary account.
     *
     * @var Pointer
     */
    protected $savingsAccountAliasFieldForRequest;

    /**
     * @param string $status The status of the profile.
     * @param Amount $balancePreferred The goal balance.
     * @param Amount $balanceThresholdHigh The high threshold balance.
     * @param Pointer $savingsAccountAlias The savings monetary account.
     */
    public function __construct(
        string $status,
        Amount $balancePreferred,
        Amount $balanceThresholdHigh,
        Pointer $savingsAccountAlias
    ) {
        $this->statusFieldForRequest = $status;
        $this->balancePreferredFieldForRequest = $balancePreferred;
        $this->balanceThresholdHighFieldForRequest = $balanceThresholdHigh;
        $this->savingsAccountAliasFieldForRequest = $savingsAccountAlias;
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setStatus($status)
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setBalancePreferred($balancePreferred)
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setBalanceThresholdHigh($balanceThresholdHigh)
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setSavingsAccountAlias($savingsAccountAlias)
    {
        $this->savingsAccountAlias = $savingsAccountAlias;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->balancePreferred)) {
            return false;
        }

        if (!is_null($this->balanceThresholdHigh)) {
            return false;
        }

        if (!is_null($this->savingsAccountAlias)) {
            return false;
        }

        return true;
    }
}
