<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\BunqModel;

/**
 * @generated
 */
class CardMagStripePermission extends BunqModel
{
    /**
     * Expiry time of this rule.
     *
     * @var string
     */
    protected $expiryTime;

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
