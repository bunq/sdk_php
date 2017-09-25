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
     * @param string $type
     * @param string $value
     */
    public function __construct($type, $value)
    {
        $this->type = $type;
        $this->value = $value;
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
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
