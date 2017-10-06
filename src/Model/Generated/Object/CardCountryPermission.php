<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class CardCountryPermission extends BunqModel
{
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
     * The id of the card country permission entry.
     *
     * @var int
     */
    protected $id;

    /**
     * @param string $country
     */
    public function __construct($country)
    {
        $this->country = $country;
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
     */
    public function setExpiryTime($expiryTime)
    {
        $this->expiryTime = $expiryTime;
    }
}
