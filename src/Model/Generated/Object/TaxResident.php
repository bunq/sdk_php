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
     * @param string $country
     * @param string $taxNumber
     */
    public function __construct($country, $taxNumber)
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
     * @param string $country
     */
    public function setCountry(string $country)
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
     * @param string $taxNumber
     */
    public function setTaxNumber(string $taxNumber)
    {
        $this->taxNumber = $taxNumber;
    }
}
