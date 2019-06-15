<?php

namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class BunqMeMerchantAvailable extends BunqModel
{
    /**
     * A merchant type supported by bunq.me.
     *
     * @var string
     */
    protected $merchantType;

    /**
     * Whether or not the merchant is available for the user.
     *
     * @var bool
     */
    protected $available;

    /**
     * A merchant type supported by bunq.me.
     *
     * @return string
     */
    public function getMerchantType()
    {
        return $this->merchantType;
    }

    /**
     * @param string $merchantType
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setMerchantType($merchantType)
    {
        $this->merchantType = $merchantType;
    }

    /**
     * Whether or not the merchant is available for the user.
     *
     * @return bool
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param bool $available
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setAvailable($available)
    {
        $this->available = $available;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->merchantType)) {
            return false;
        }

        if (!is_null($this->available)) {
            return false;
        }

        return true;
    }
}
