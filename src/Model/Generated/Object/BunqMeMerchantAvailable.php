<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\BunqModel;

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
     */
    public function setAvailable($available)
    {
        $this->available = $available;
    }
}
