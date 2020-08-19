<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class CardCountryPermission extends BunqModel
{
    /**
     * The id of the card country permission entry.
     *
     * @var int
     */
    protected $id;

    /**
     * The country to allow transactions in (e.g. NL, DE).
     *
     * @var string
     */
    protected $country;

    /**
     * Expiry time of this rule.
     *
     * @var string
     */
    protected $expiryTime;

    /**
     * The country to allow transactions in (e.g. NL, DE).
     *
     * @var string
     */
    protected $countryFieldForRequest;

    /**
     * Expiry time of this rule.
     *
     * @var string|null
     */
    protected $expiryTimeFieldForRequest;

    /**
     * @param string $country The country to allow transactions in (e.g. NL,
     * DE).
     * @param string|null $expiryTime Expiry time of this rule.
     */
    public function __construct(string $country, string $expiryTime = null)
    {
        $this->countryFieldForRequest = $country;
        $this->expiryTimeFieldForRequest = $expiryTime;
    }

    /**
     * The id of the card country permission entry.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The country to allow transactions in (e.g. NL, DE).
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
     * Expiry time of this rule.
     *
     * @return string
     */
    public function getExpiryTime()
    {
        return $this->expiryTime;
    }

    /**
     * @param string $expiryTime
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setExpiryTime($expiryTime)
    {
        $this->expiryTime = $expiryTime;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->country)) {
            return false;
        }

        if (!is_null($this->expiryTime)) {
            return false;
        }

        return true;
    }
}
