<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class CurrencyCloudBeneficiaryRequirementField extends BunqModel
{
    /**
     * The label to display for the field.
     *
     * @var string
     */
    protected $label;

    /**
     * The name of the field.
     *
     * @var string
     */
    protected $name;

    /**
     * The expression to validate field input.
     *
     * @var string
     */
    protected $validationExpression;

    /**
     * The type of data to input. Determines the keyboard to display.
     *
     * @var string
     */
    protected $inputType;

    /**
     * The label to display for the field.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * The name of the field.
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
     * The expression to validate field input.
     *
     * @return string
     */
    public function getValidationExpression()
    {
        return $this->validationExpression;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $validationExpression
     */
    public function setValidationExpression($validationExpression)
    {
        $this->validationExpression = $validationExpression;
    }

    /**
     * The type of data to input. Determines the keyboard to display.
     *
     * @return string
     */
    public function getInputType()
    {
        return $this->inputType;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $inputType
     */
    public function setInputType($inputType)
    {
        $this->inputType = $inputType;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->label)) {
            return false;
        }

        if (!is_null($this->name)) {
            return false;
        }

        if (!is_null($this->validationExpression)) {
            return false;
        }

        if (!is_null($this->inputType)) {
            return false;
        }

        return true;
    }
}
