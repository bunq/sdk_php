<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\BunqModel;

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
     * @param string $street
     * @param string $houseNumber
     * @param string $postalCode
     * @param string $city
     * @param string $country
     */
    public function __construct($street, $houseNumber, $postalCode, $city, $country)
    {
        $this->street = $street;
        $this->houseNumber = $houseNumber;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->country = $country;
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
     */
    public function setProvince($province)
    {
        $this->province = $province;
    }
}
