<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Avatar;

/**
 * Lists open banking provider banks.
 *
 * @generated
 */
class OpenBankingProviderBank extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_STATUS = 'status';

    /**
     * The name of the bank provider.
     *
     * @var string
     */
    protected $name;

    /**
     * Provider's status.
     *
     * @var string
     */
    protected $status;

    /**
     * The external identifier for this bank.
     *
     * @var string
     */
    protected $aiiaProviderId;

    /**
     * Country of provider
     *
     * @var string
     */
    protected $country;

    /**
     * All payment methods allowed for Sepa payments.
     *
     * @var string[]
     */
    protected $allPaymentMethodAllowedSepa;

    /**
     * All payment methods allowed for Domestic payments.
     *
     * @var string[]
     */
    protected $allPaymentMethodAllowedDomestic;

    /**
     * Whether this provider supports business banking.
     *
     * @var bool
     */
    protected $isAudienceBusinessSupported;

    /**
     * Whether this provider supports brivate banking.
     *
     * @var bool
     */
    protected $isAudiencePrivateSupported;

    /**
     * The avatar of the bank.
     *
     * @var Avatar
     */
    protected $avatar;

    /**
     * Provider's status.
     *
     * @var string
     */
    protected $statusFieldForRequest;

    /**
     * @param string $status Provider's status.
     */
    public function __construct(string  $status)
    {
        $this->statusFieldForRequest = $status;
    }

    /**
     * The name of the bank provider.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Provider's status.
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
     * The external identifier for this bank.
     *
     * @return string
     */
    public function getAiiaProviderId()
    {
        return $this->aiiaProviderId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $aiiaProviderId
     */
    public function setAiiaProviderId($aiiaProviderId)
    {
        $this->aiiaProviderId = $aiiaProviderId;
    }

    /**
     * Country of provider
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * All payment methods allowed for Sepa payments.
     *
     * @return string[]
     */
    public function getAllPaymentMethodAllowedSepa()
    {
        return $this->allPaymentMethodAllowedSepa;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string[] $allPaymentMethodAllowedSepa
     */
    public function setAllPaymentMethodAllowedSepa($allPaymentMethodAllowedSepa)
    {
        $this->allPaymentMethodAllowedSepa = $allPaymentMethodAllowedSepa;
    }

    /**
     * All payment methods allowed for Domestic payments.
     *
     * @return string[]
     */
    public function getAllPaymentMethodAllowedDomestic()
    {
        return $this->allPaymentMethodAllowedDomestic;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string[] $allPaymentMethodAllowedDomestic
     */
    public function setAllPaymentMethodAllowedDomestic($allPaymentMethodAllowedDomestic)
    {
        $this->allPaymentMethodAllowedDomestic = $allPaymentMethodAllowedDomestic;
    }

    /**
     * Whether this provider supports business banking.
     *
     * @return bool
     */
    public function getIsAudienceBusinessSupported()
    {
        return $this->isAudienceBusinessSupported;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param bool $isAudienceBusinessSupported
     */
    public function setIsAudienceBusinessSupported($isAudienceBusinessSupported)
    {
        $this->isAudienceBusinessSupported = $isAudienceBusinessSupported;
    }

    /**
     * Whether this provider supports brivate banking.
     *
     * @return bool
     */
    public function getIsAudiencePrivateSupported()
    {
        return $this->isAudiencePrivateSupported;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param bool $isAudiencePrivateSupported
     */
    public function setIsAudiencePrivateSupported($isAudiencePrivateSupported)
    {
        $this->isAudiencePrivateSupported = $isAudiencePrivateSupported;
    }

    /**
     * The avatar of the bank.
     *
     * @return Avatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Avatar $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->name)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->aiiaProviderId)) {
            return false;
        }

        if (!is_null($this->country)) {
            return false;
        }

        if (!is_null($this->allPaymentMethodAllowedSepa)) {
            return false;
        }

        if (!is_null($this->allPaymentMethodAllowedDomestic)) {
            return false;
        }

        if (!is_null($this->isAudienceBusinessSupported)) {
            return false;
        }

        if (!is_null($this->isAudiencePrivateSupported)) {
            return false;
        }

        if (!is_null($this->avatar)) {
            return false;
        }

        return true;
    }
}
