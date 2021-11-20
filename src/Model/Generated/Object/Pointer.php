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
     * The pointer service. Only required for external counterparties.
     *
     * @var string|null
     */
    protected $serviceFieldForRequest;

    /**
     * @param string $type The alias type, can be: EMAIL|PHONE_NUMBER|IBAN.
     * @param string $value The alias value. Phone number are formatted conform
     * E.123 without spaces (e.g., +314211234567).
     * @param string|null $name The alias name. Only required for IBANs.
     * @param string|null $service The pointer service. Only required for
     * external counterparties.
     */
    public function __construct(string  $type, string  $value, string  $name = null, string  $service = null)
    {
        $this->typeFieldForRequest = $type;
        $this->valueFieldForRequest = $value;
        $this->nameFieldForRequest = $name;
        $this->serviceFieldForRequest = $service;
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
     * The alias value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $value
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
