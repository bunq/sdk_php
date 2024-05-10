<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;

/**
 * Post processor for open banking account to be returned in the monetary
 * account external post processor.
 *
 * @generated
 */
class OpenBankingAccount extends BunqModel
{
    /**
     * The iban of this account.
     *
     * @var string
     */
    protected $iban;

    /**
     * The timestamp of the last time the account was synced with our open
     * banking partner.
     *
     * @var string
     */
    protected $timeSyncedLast;

    /**
     * The bank provider the account comes from.
     *
     * @var OpenBankingProviderBank
     */
    protected $providerBank;

    /**
     * The iban of this account.
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $iban
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
    }

    /**
     * The timestamp of the last time the account was synced with our open
     * banking partner.
     *
     * @return string
     */
    public function getTimeSyncedLast()
    {
        return $this->timeSyncedLast;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $timeSyncedLast
     */
    public function setTimeSyncedLast($timeSyncedLast)
    {
        $this->timeSyncedLast = $timeSyncedLast;
    }

    /**
     * The bank provider the account comes from.
     *
     * @return OpenBankingProviderBank
     */
    public function getProviderBank()
    {
        return $this->providerBank;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param OpenBankingProviderBank $providerBank
     */
    public function setProviderBank($providerBank)
    {
        $this->providerBank = $providerBank;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->iban)) {
            return false;
        }

        if (!is_null($this->timeSyncedLast)) {
            return false;
        }

        if (!is_null($this->providerBank)) {
            return false;
        }

        return true;
    }
}
