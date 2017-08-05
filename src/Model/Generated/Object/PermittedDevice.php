<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\BunqModel;

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
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }
}
