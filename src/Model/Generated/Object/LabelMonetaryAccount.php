<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class LabelMonetaryAccount extends BunqModel
{
    /**
     * The IBAN of the monetary account.
     *
     * @var string
     */
    protected $iban;

    /**
     * The name to display with this monetary account.
     *
     * @var string
     */
    protected $displayName;

    /**
     * The avatar of the monetary account.
     *
     * @var Avatar
     */
    protected $avatar;

    /**
     * The user this monetary account belongs to.
     *
     * @var LabelUser
     */
    protected $labelUser;

    /**
     * The country of the user. Formatted as a ISO 3166-1 alpha-2 country code.
     *
     * @var string
     */
    protected $country;

    /**
     * Bunq.me pointer with type and value.
     *
     * @var Pointer
     */
    protected $bunqMe;

    /**
     * Whether or not the monetary account is light.
     *
     * @var bool
     */
    protected $isLight;

    /**
     * The BIC used for a SWIFT payment.
     *
     * @var string
     */
    protected $swiftBic;

    /**
     * The account number used for a SWIFT payment. May or may not be an IBAN.
     *
     * @var string
     */
    protected $swiftAccountNumber;

    /**
     * The account number used for a Transferwise payment. May or may not be an
     * IBAN.
     *
     * @var string
     */
    protected $transferwiseAccountNumber;

    /**
     * The bank code used for a Transferwise payment. May or may not be a BIC.
     *
     * @var string
     */
    protected $transferwiseBankCode;

    /**
     * The merchant category code.
     *
     * @var string
     */
    protected $merchantCategoryCode;

    /**
     * The IBAN of the monetary account.
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param string $iban
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
    }

    /**
     * The name to display with this monetary account.
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * The avatar of the monetary account.
     *
     * @return Avatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param Avatar $avatar
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * The user this monetary account belongs to.
     *
     * @return LabelUser
     */
    public function getLabelUser()
    {
        return $this->labelUser;
    }

    /**
     * @param LabelUser $labelUser
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setLabelUser($labelUser)
    {
        $this->labelUser = $labelUser;
    }

    /**
     * The country of the user. Formatted as a ISO 3166-1 alpha-2 country code.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * Bunq.me pointer with type and value.
     *
     * @return Pointer
     */
    public function getBunqMe()
    {
        return $this->bunqMe;
    }

    /**
     * @param Pointer $bunqMe
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setBunqMe($bunqMe)
    {
        $this->bunqMe = $bunqMe;
    }

    /**
     * Whether or not the monetary account is light.
     *
     * @return bool
     */
    public function getIsLight()
    {
        return $this->isLight;
    }

    /**
     * @param bool $isLight
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setIsLight($isLight)
    {
        $this->isLight = $isLight;
    }

    /**
     * The BIC used for a SWIFT payment.
     *
     * @return string
     */
    public function getSwiftBic()
    {
        return $this->swiftBic;
    }

    /**
     * @param string $swiftBic
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setSwiftBic($swiftBic)
    {
        $this->swiftBic = $swiftBic;
    }

    /**
     * The account number used for a SWIFT payment. May or may not be an IBAN.
     *
     * @return string
     */
    public function getSwiftAccountNumber()
    {
        return $this->swiftAccountNumber;
    }

    /**
     * @param string $swiftAccountNumber
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setSwiftAccountNumber($swiftAccountNumber)
    {
        $this->swiftAccountNumber = $swiftAccountNumber;
    }

    /**
     * The account number used for a Transferwise payment. May or may not be an
     * IBAN.
     *
     * @return string
     */
    public function getTransferwiseAccountNumber()
    {
        return $this->transferwiseAccountNumber;
    }

    /**
     * @param string $transferwiseAccountNumber
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setTransferwiseAccountNumber($transferwiseAccountNumber)
    {
        $this->transferwiseAccountNumber = $transferwiseAccountNumber;
    }

    /**
     * The bank code used for a Transferwise payment. May or may not be a BIC.
     *
     * @return string
     */
    public function getTransferwiseBankCode()
    {
        return $this->transferwiseBankCode;
    }

    /**
     * @param string $transferwiseBankCode
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setTransferwiseBankCode($transferwiseBankCode)
    {
        $this->transferwiseBankCode = $transferwiseBankCode;
    }

    /**
     * The merchant category code.
     *
     * @return string
     */
    public function getMerchantCategoryCode()
    {
        return $this->merchantCategoryCode;
    }

    /**
     * @param string $merchantCategoryCode
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setMerchantCategoryCode($merchantCategoryCode)
    {
        $this->merchantCategoryCode = $merchantCategoryCode;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->iban)) {
            return false;
        }

        if (!is_null($this->displayName)) {
            return false;
        }

        if (!is_null($this->avatar)) {
            return false;
        }

        if (!is_null($this->labelUser)) {
            return false;
        }

        if (!is_null($this->country)) {
            return false;
        }

        if (!is_null($this->bunqMe)) {
            return false;
        }

        if (!is_null($this->isLight)) {
            return false;
        }

        if (!is_null($this->swiftBic)) {
            return false;
        }

        if (!is_null($this->swiftAccountNumber)) {
            return false;
        }

        if (!is_null($this->transferwiseAccountNumber)) {
            return false;
        }

        if (!is_null($this->transferwiseBankCode)) {
            return false;
        }

        if (!is_null($this->merchantCategoryCode)) {
            return false;
        }

        return true;
    }
}
