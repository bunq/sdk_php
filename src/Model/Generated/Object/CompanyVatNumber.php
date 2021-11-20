<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class CompanyVatNumber extends BunqModel
{
    /**
     * The country of the VAT identification number.
     *
     * @var string
     */
    protected $country;

    /**
     * The VAT identification number number.
     *
     * @var string
     */
    protected $value;

    /**
     * The country of the VAT identification number.
     *
     * @var string
     */
    protected $countryFieldForRequest;

    /**
     * The VAT identification number number.
     *
     * @var string
     */
    protected $valueFieldForRequest;

    /**
     * @param string $country The country of the VAT identification number.
     * @param string $value The VAT identification number number.
     */
    public function __construct(string  $country, string  $value)
    {
        $this->countryFieldForRequest = $country;
        $this->valueFieldForRequest = $value;
    }

    /**
     * The country of the VAT identification number.
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
     * The VAT identification number number.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->country)) {
            return false;
        }

        if (!is_null($this->value)) {
            return false;
        }

        return true;
    }
}
