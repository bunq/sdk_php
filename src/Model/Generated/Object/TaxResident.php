<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class TaxResident extends BunqModel
{
    /**
     * The country of the tax number.
     *
     * @var string
     */
    protected $country;

    /**
     * The tax number.
     *
     * @var string
     */
    protected $taxNumber;

    /**
     * @param string $country   The country of the tax number.
     * @param string $taxNumber The tax number.
     */
    public function __construct(string $country, string $taxNumber)
    {
        $this->country = $country;
        $this->taxNumber = $taxNumber;
    }

    /**
     * The country of the tax number.
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
     * The tax number.
     *
     * @return string
     */
    public function getTaxNumber()
    {
        return $this->taxNumber;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $taxNumber
     */
    public function setTaxNumber($taxNumber)
    {
        $this->taxNumber = $taxNumber;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->country)) {
            return false;
        }

        if (!is_null($this->taxNumber)) {
            return false;
        }

        return true;
    }
}
