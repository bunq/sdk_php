<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\BunqModel;

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
     */
    public function setAvatar(Avatar $avatar)
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
     */
    public function setLabelUser(LabelUser $labelUser)
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
     */
    public function setBunqMe(Pointer $bunqMe)
    {
        $this->bunqMe = $bunqMe;
    }
}
