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
     * The bank the fill is supposed to happen from, with BIC and bank name.
     *
     * @var Issuer
     */
    protected $issuer;

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
     * The low threshold balance.
     *
     * @var Amount
     */
    protected $balanceThresholdLowFieldForRequest;

    /**
     * The bank the fill is supposed to happen from, with BIC and bank name.
     *
     * @var Issuer|null
     */
    protected $issuerFieldForRequest;

    /**
     * @param string $status The status of the profile.
     * @param Amount $balancePreferred The goal balance.
     * @param Amount $balanceThresholdLow The low threshold balance.
     * @param Issuer|null $issuer The bank the fill is supposed to happen from,
     * with BIC and bank name.
     */
    public function __construct(string  $status, Amount  $balancePreferred, Amount  $balanceThresholdLow, Issuer  $issuer = null)
    {
        $this->statusFieldForRequest = $status;
        $this->balancePreferredFieldForRequest = $balancePreferred;
        $this->balanceThresholdLowFieldForRequest = $balanceThresholdLow;
        $this->issuerFieldForRequest = $issuer;
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
     * The goal balance.
     *
     * @return Amount
     */
    public function getBalancePreferred()
    {
        return $this->balancePreferred;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $balancePreferred
     */
    public function setBalancePreferred($balancePreferred)
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $balanceThresholdLow
     */
    public function setBalanceThresholdLow($balanceThresholdLow)
    {
        $this->balanceThresholdLow = $balanceThresholdLow;
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Issuer $issuer
     */
    public function setIssuer($issuer)
    {
        $this->issuer = $issuer;
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

        if (!is_null($this->balanceThresholdLow)) {
            return false;
        }

        if (!is_null($this->issuer)) {
            return false;
        }

        return true;
    }
}
