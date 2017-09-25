<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

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
    public function setExpiryTime(string $expiryTime)
    {
        $this->expiryTime = $expiryTime;
    }
}
