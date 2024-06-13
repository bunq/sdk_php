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
    const FIELD_ACCOUNT_INFORMATION_SERVICE_STATUS = 'account_information_service_status';
    const FIELD_PAYMENT_INFORMATION_SERVICE_STATUS = 'payment_information_service_status';

    /**
     * The name of the bank provider.
     *
     * @var string
     */
    protected $name;

    /**
     * Whether we support Open Banking budgeting using the bank provider.
     *
     * @var string
     */
    protected $accountInformationServiceStatus;

    /**
     * Whether we support top ups using the bank provider.
     *
     * @var string
     */
    protected $paymentInformationServiceStatus;

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
     * Whether business banking is supported by the provider.
     *
     * @var bool
     */
    protected $audienceBusinessStatus;

    /**
     * Whether personal banking is supported by the provider.
     *
     * @var bool
     */
    protected $audiencePrivateStatus;

    /**
     * The avatar of the bank.
     *
     * @var Avatar
     */
    protected $avatar;

    /**
     * Whether we want to activate the account information service for the bank
     * provider.
     *
     * @var string|null
     */
    protected $accountInformationServiceStatusFieldForRequest;

    /**
     * Whether we want to activate the payment information service for the bank
     * provider.
     *
     * @var string|null
     */
    protected $paymentInformationServiceStatusFieldForRequest;

    /**
     * @param string|null $accountInformationServiceStatus Whether we want to
     * activate the account information service for the bank provider.
     * @param string|null $paymentInformationServiceStatus Whether we want to
     * activate the payment information service for the bank provider.
     */
    public function __construct(string  $accountInformationServiceStatus = null, string  $paymentInformationServiceStatus = null)
    {
        $this->accountInformationServiceStatusFieldForRequest = $accountInformationServiceStatus;
        $this->paymentInformationServiceStatusFieldForRequest = $paymentInformationServiceStatus;
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
     * Whether we support Open Banking budgeting using the bank provider.
     *
     * @return string
     */
    public function getAccountInformationServiceStatus()
    {
        return $this->accountInformationServiceStatus;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $accountInformationServiceStatus
     */
    public function setAccountInformationServiceStatus($accountInformationServiceStatus)
    {
        $this->accountInformationServiceStatus = $accountInformationServiceStatus;
    }

    /**
     * Whether we support top ups using the bank provider.
     *
     * @return string
     */
    public function getPaymentInformationServiceStatus()
    {
        return $this->paymentInformationServiceStatus;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $paymentInformationServiceStatus
     */
    public function setPaymentInformationServiceStatus($paymentInformationServiceStatus)
    {
        $this->paymentInformationServiceStatus = $paymentInformationServiceStatus;
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
     * Whether business banking is supported by the provider.
     *
     * @return bool
     */
    public function getAudienceBusinessStatus()
    {
        return $this->audienceBusinessStatus;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param bool $audienceBusinessStatus
     */
    public function setAudienceBusinessStatus($audienceBusinessStatus)
    {
        $this->audienceBusinessStatus = $audienceBusinessStatus;
    }

    /**
     * Whether personal banking is supported by the provider.
     *
     * @return bool
     */
    public function getAudiencePrivateStatus()
    {
        return $this->audiencePrivateStatus;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param bool $audiencePrivateStatus
     */
    public function setAudiencePrivateStatus($audiencePrivateStatus)
    {
        $this->audiencePrivateStatus = $audiencePrivateStatus;
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

        if (!is_null($this->accountInformationServiceStatus)) {
            return false;
        }

        if (!is_null($this->paymentInformationServiceStatus)) {
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

        if (!is_null($this->audienceBusinessStatus)) {
            return false;
        }

        if (!is_null($this->audiencePrivateStatus)) {
            return false;
        }

        if (!is_null($this->avatar)) {
            return false;
        }

        return true;
    }
}
