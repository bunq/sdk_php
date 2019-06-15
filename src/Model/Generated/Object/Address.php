<?php

namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class Address extends BunqModel
{
    /**
     * The street.
     *
     * @var string
     */
    protected $street;

    /**
     * The house number.
     *
     * @var string
     */
    protected $houseNumber;

    /**
     * The PO box.
     *
     * @var string
     */
    protected $poBox;

    /**
     * The postal code.
     *
     * @var string
     */
    protected $postalCode;

    /**
     * The city.
     *
     * @var string
     */
    protected $city;

    /**
     * The country as an ISO 3166-1 alpha-2 country code..
     *
     * @var string
     */
    protected $country;

    /**
     * The province according to local standard.
     *
     * @var string
     */
    protected $province;

    /**
     * The appartment, building or other extra information for addresses.
     *
     * @var string
     */
    protected $extra;

    /**
     * The name on the mailbox (only used for Postal addresses).
     *
     * @var string
     */
    protected $mailboxName;

    /**
     * The street.
     *
     * @var string
     */
    protected $streetFieldForRequest;

    /**
     * The house number.
     *
     * @var string
     */
    protected $houseNumberFieldForRequest;

    /**
     * The PO box.
     *
     * @var string|null
     */
    protected $poBoxFieldForRequest;

    /**
     * The postal code.
     *
     * @var string
     */
    protected $postalCodeFieldForRequest;

    /**
     * The city.
     *
     * @var string
     */
    protected $cityFieldForRequest;

    /**
     * The country as an ISO 3166-1 alpha-2 country code.
     *
     * @var string
     */
    protected $countryFieldForRequest;

    /**
     * The appartment, building or other extra information for addresses.
     *
     * @var string|null
     */
    protected $extraFieldForRequest;

    /**
     * The name on the mailbox (only used for Postal addresses).
     *
     * @var string|null
     */
    protected $mailboxNameFieldForRequest;

    /**
     * @param string $street           The street.
     * @param string $houseNumber      The house number.
     * @param string $postalCode       The postal code.
     * @param string $city             The city.
     * @param string $country          The country as an ISO 3166-1 alpha-2 country code.
     * @param string|null $poBox       The PO box.
     * @param string|null $extra       The appartment, building or other extra
     *                                 information for addresses.
     * @param string|null $mailboxName The name on the mailbox (only used for
     *                                 Postal addresses).
     */
    public function __construct(
        string $street,
        string $houseNumber,
        string $postalCode,
        string $city,
        string $country,
        string $poBox = null,
        string $extra = null,
        string $mailboxName = null
    ) {
        $this->streetFieldForRequest = $street;
        $this->houseNumberFieldForRequest = $houseNumber;
        $this->poBoxFieldForRequest = $poBox;
        $this->postalCodeFieldForRequest = $postalCode;
        $this->cityFieldForRequest = $city;
        $this->countryFieldForRequest = $country;
        $this->extraFieldForRequest = $extra;
        $this->mailboxNameFieldForRequest = $mailboxName;
    }

    /**
     * The street.
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * The house number.
     *
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    /**
     * @param string $houseNumber
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;
    }

    /**
     * The PO box.
     *
     * @return string
     */
    public function getPoBox()
    {
        return $this->poBox;
    }

    /**
     * @param string $poBox
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setPoBox($poBox)
    {
        $this->poBox = $poBox;
    }

    /**
     * The postal code.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * The city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * The country as an ISO 3166-1 alpha-2 country code..
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
     *             constructor.
     *
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * The province according to local standard.
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param string $province
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setProvince($province)
    {
        $this->province = $province;
    }

    /**
     * The appartment, building or other extra information for addresses.
     *
     * @return string
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * @param string $extra
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;
    }

    /**
     * The name on the mailbox (only used for Postal addresses).
     *
     * @return string
     */
    public function getMailboxName()
    {
        return $this->mailboxName;
    }

    /**
     * @param string $mailboxName
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setMailboxName($mailboxName)
    {
        $this->mailboxName = $mailboxName;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->street)) {
            return false;
        }

        if (!is_null($this->houseNumber)) {
            return false;
        }

        if (!is_null($this->poBox)) {
            return false;
        }

        if (!is_null($this->postalCode)) {
            return false;
        }

        if (!is_null($this->city)) {
            return false;
        }

        if (!is_null($this->country)) {
            return false;
        }

        if (!is_null($this->province)) {
            return false;
        }

        if (!is_null($this->extra)) {
            return false;
        }

        if (!is_null($this->mailboxName)) {
            return false;
        }

        return true;
    }
}
