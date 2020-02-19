<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class Pointer extends BunqModel
{
    /**
     * The alias type, can be: EMAIL|PHONE_NUMBER|IBAN.
     *
     * @var string
     */
    protected $type;

    /**
     * The alias value.
     *
     * @var string
     */
    protected $value;

    /**
     * The alias name.
     *
     * @var string
     */
    protected $name;

    /**
     * The alias type, can be: EMAIL|PHONE_NUMBER|IBAN.
     *
     * @var string
     */
    protected $typeFieldForRequest;

    /**
     * The alias value. Phone number are formatted conform E.123 without spaces
     * (e.g., +314211234567).
     *
     * @var string
     */
    protected $valueFieldForRequest;

    /**
     * The alias name. Only required for IBANs.
     *
     * @var string|null
     */
    protected $nameFieldForRequest;

    /**
     * @param string $type The alias type, can be: EMAIL|PHONE_NUMBER|IBAN.
     * @param string $value The alias value. Phone number are formatted conform
     * E.123 without spaces (e.g., +314211234567).
     * @param string|null $name The alias name. Only required for IBANs.
     */
    public function __construct(string $type, string $value, string $name = null)
    {
        $this->typeFieldForRequest = $type;
        $this->valueFieldForRequest = $value;
        $this->nameFieldForRequest = $name;
    }

    /**
     * The alias type, can be: EMAIL|PHONE_NUMBER|IBAN.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The alias value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * The alias name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->value)) {
            return false;
        }

        if (!is_null($this->name)) {
            return false;
        }

        return true;
    }
}
