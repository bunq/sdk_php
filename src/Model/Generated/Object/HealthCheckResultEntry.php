<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class HealthCheckResultEntry extends BunqModel
{
    /**
     * The type of HealthCheckResultEntry.
     *
     * @var string
     */
    protected $type;

    /**
     * The status of the HealthCheckResultEntry
     *
     * @var string
     */
    protected $status;

    /**
     * The type of HealthCheckResultEntry.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The status of the HealthCheckResultEntry
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
        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        return true;
    }
}
