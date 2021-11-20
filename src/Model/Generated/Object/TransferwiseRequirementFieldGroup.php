<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class TransferwiseRequirementFieldGroup extends BunqModel
{
    /**
     * The key of the field. This is the value to send as input.
     *
     * @var string
     */
    protected $key;

    /**
     * The field's input type: "text", "select" or "radio".
     *
     * @var string
     */
    protected $type;

    /**
     * The field name.
     *
     * @var string
     */
    protected $name;

    /**
     * Indicates that any changes in this field affect the requirements, if this
     * field is changed, the requirements endpoint must be called again to
     * recheck if there are any additional requirements.
     *
     * @var bool
     */
    protected $refreshRequirementsOnChange;

    /**
     * Whether or not the field is required.
     *
     * @var bool
     */
    protected $required;

    /**
     * Formatting mask to guide user input.
     *
     * @var string
     */
    protected $displayFormat;

    /**
     * An example value for this field.
     *
     * @var string
     */
    protected $example;

    /**
     * The minimum length of the field's value.
     *
     * @var string
     */
    protected $minLength;

    /**
     * The maximum length of the field's value.
     *
     * @var string
     */
    protected $maxLength;

    /**
     * A regular expression which may be used to validate the user input.
     *
     * @var string
     */
    protected $validationRegexp;

    /**
     * Details of an endpoint which may be used to validate the user input.
     *
     * @var TransferwiseRequirementFieldGroupValidationAsync
     */
    protected $validationAsync;

    /**
     * Shows which values are allowed for fields of type "select" or "radio".
     *
     * @var TransferwiseRequirementFieldGroupValuesAllowed
     */
    protected $valuesAllowed;

    /**
     * The key of the field. This is the value to send as input.
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * The field's input type: "text", "select" or "radio".
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
     * The field name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Indicates that any changes in this field affect the requirements, if this
     * field is changed, the requirements endpoint must be called again to
     * recheck if there are any additional requirements.
     *
     * @return bool
     */
    public function getRefreshRequirementsOnChange()
    {
        return $this->refreshRequirementsOnChange;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param bool $refreshRequirementsOnChange
     */
    public function setRefreshRequirementsOnChange($refreshRequirementsOnChange)
    {
        $this->refreshRequirementsOnChange = $refreshRequirementsOnChange;
    }

    /**
     * Whether or not the field is required.
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param bool $required
     */
    public function setRequired($required)
    {
        $this->required = $required;
    }

    /**
     * Formatting mask to guide user input.
     *
     * @return string
     */
    public function getDisplayFormat()
    {
        return $this->displayFormat;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $displayFormat
     */
    public function setDisplayFormat($displayFormat)
    {
        $this->displayFormat = $displayFormat;
    }

    /**
     * An example value for this field.
     *
     * @return string
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $example
     */
    public function setExample($example)
    {
        $this->example = $example;
    }

    /**
     * The minimum length of the field's value.
     *
     * @return string
     */
    public function getMinLength()
    {
        return $this->minLength;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $minLength
     */
    public function setMinLength($minLength)
    {
        $this->minLength = $minLength;
    }

    /**
     * The maximum length of the field's value.
     *
     * @return string
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $maxLength
     */
    public function setMaxLength($maxLength)
    {
        $this->maxLength = $maxLength;
    }

    /**
     * A regular expression which may be used to validate the user input.
     *
     * @return string
     */
    public function getValidationRegexp()
    {
        return $this->validationRegexp;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $validationRegexp
     */
    public function setValidationRegexp($validationRegexp)
    {
        $this->validationRegexp = $validationRegexp;
    }

    /**
     * Details of an endpoint which may be used to validate the user input.
     *
     * @return TransferwiseRequirementFieldGroupValidationAsync
     */
    public function getValidationAsync()
    {
        return $this->validationAsync;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param TransferwiseRequirementFieldGroupValidationAsync $validationAsync
     */
    public function setValidationAsync($validationAsync)
    {
        $this->validationAsync = $validationAsync;
    }

    /**
     * Shows which values are allowed for fields of type "select" or "radio".
     *
     * @return TransferwiseRequirementFieldGroupValuesAllowed
     */
    public function getValuesAllowed()
    {
        return $this->valuesAllowed;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param TransferwiseRequirementFieldGroupValuesAllowed $valuesAllowed
     */
    public function setValuesAllowed($valuesAllowed)
    {
        $this->valuesAllowed = $valuesAllowed;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->key)) {
            return false;
        }

        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->name)) {
            return false;
        }

        if (!is_null($this->refreshRequirementsOnChange)) {
            return false;
        }

        if (!is_null($this->required)) {
            return false;
        }

        if (!is_null($this->displayFormat)) {
            return false;
        }

        if (!is_null($this->example)) {
            return false;
        }

        if (!is_null($this->minLength)) {
            return false;
        }

        if (!is_null($this->maxLength)) {
            return false;
        }

        if (!is_null($this->validationRegexp)) {
            return false;
        }

        if (!is_null($this->validationAsync)) {
            return false;
        }

        if (!is_null($this->valuesAllowed)) {
            return false;
        }

        return true;
    }
}
