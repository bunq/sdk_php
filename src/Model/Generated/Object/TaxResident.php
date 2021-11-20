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
     * The status of the tax number. Either CONFIRMED or UNCONFIRMED.
     *
     * @var string
     */
    protected $status;

    /**
     * The country of the tax number.
     *
     * @var string
     */
    protected $countryFieldForRequest;

    /**
     * The tax number.
     *
     * @var string
     */
    protected $taxNumberFieldForRequest;

    /**
     * The status of the tax number. Either CONFIRMED or UNCONFIRMED.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * @param string $country The country of the tax number.
     * @param string $taxNumber The tax number.
     * @param string|null $status The status of the tax number. Either CONFIRMED
     * or UNCONFIRMED.
     */
    public function __construct(string  $country, string  $taxNumber, string  $status = null)
    {
        $this->countryFieldForRequest = $country;
        $this->taxNumberFieldForRequest = $taxNumber;
        $this->statusFieldForRequest = $status;
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
     * The status of the tax number. Either CONFIRMED or UNCONFIRMED.
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

        if (!is_null($this->status)) {
            return false;
        }

        return true;
    }
}
