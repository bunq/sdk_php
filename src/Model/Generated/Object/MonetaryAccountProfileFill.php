<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class MonetaryAccountProfileFill extends BunqModel
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
     * The low threshold balance.
     *
     * @var Amount
     */
    protected $balanceThresholdLow;

    /**
     * The method used to fill the monetary account. Currently only iDEAL is
     * supported, and it is the default one.
     *
     * @var string
     */
    protected $methodFill;

    /**
     * The bank the fill is supposed to happen from, with BIC and bank name.
     *
     * @var Issuer
     */
    protected $issuer;

    /**
     * @param string $status
     * @param Amount $balancePreferred
     * @param Amount $balanceThresholdLow
     * @param string $methodFill
     */
    public function __construct($status, Amount $balancePreferred, Amount $balanceThresholdLow, $methodFill)
    {
        $this->status = $status;
        $this->balancePreferred = $balancePreferred;
        $this->balanceThresholdLow = $balanceThresholdLow;
        $this->methodFill = $methodFill;
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
     */
    public function setBalancePreferred(Amount $balancePreferred)
    {
        $this->balancePreferred = $balancePreferred;
    }

    /**
     * The low threshold balance.
     *
     * @return Amount
     */
    public function getBalanceThresholdLow()
    {
        return $this->balanceThresholdLow;
    }

    /**
     * @param Amount $balanceThresholdLow
     */
    public function setBalanceThresholdLow(Amount $balanceThresholdLow)
    {
        $this->balanceThresholdLow = $balanceThresholdLow;
    }

    /**
     * The method used to fill the monetary account. Currently only iDEAL is
     * supported, and it is the default one.
     *
     * @return string
     */
    public function getMethodFill()
    {
        return $this->methodFill;
    }

    /**
     * @param string $methodFill
     */
    public function setMethodFill($methodFill)
    {
        $this->methodFill = $methodFill;
    }

    /**
     * The bank the fill is supposed to happen from, with BIC and bank name.
     *
     * @return Issuer
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * @param Issuer $issuer
     */
    public function setIssuer(Issuer $issuer)
    {
        $this->issuer = $issuer;
    }
}
