<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class TransferwiseRequirementFieldGroupValidationAsyncParams extends BunqModel
{
    /**
     * The parameter key.
     *
     * @var string
     */
    protected $key;

    /**
     * The parameter label.
     *
     * @var string
     */
    protected $parameterName;

    /**
     * Shows whether the parameter is required or not.
     *
     * @var bool
     */
    protected $required;

    /**
     * The parameter key.
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * The parameter label.
     *
     * @return string
     */
    public function getParameterName()
    {
        return $this->parameterName;
    }

    /**
     * @param string $parameterName
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setParameterName($parameterName)
    {
        $this->parameterName = $parameterName;
    }

    /**
     * Shows whether the parameter is required or not.
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param bool $required
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setRequired($required)
    {
        $this->required = $required;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->key)) {
            return false;
        }

        if (!is_null($this->parameterName)) {
            return false;
        }

        if (!is_null($this->required)) {
            return false;
        }

        return true;
    }
}
