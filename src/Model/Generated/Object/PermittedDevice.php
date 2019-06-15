<?php

namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class PermittedDevice extends BunqModel
{
    /**
     * The description of the device that may use the credential.
     *
     * @var string
     */
    protected $description;

    /**
     * The IP address of the device that may use the credential.
     *
     * @var string
     */
    protected $ip;

    /**
     * The description of the device that may use the credential.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * The IP address of the device that may use the credential.
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->ip)) {
            return false;
        }

        return true;
    }
}
