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
     * @var string|null
     */
    protected $expiryTimeFieldForRequest;

    /**
     * @param string|null $expiryTime Expiry time of this rule.
     */
    public function __construct(string $expiryTime = null)
    {
        $this->expiryTimeFieldForRequest = $expiryTime;
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
     *             constructor.
     *
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
        if (!is_null($this->expiryTime)) {
            return false;
        }

        return true;
    }
}
