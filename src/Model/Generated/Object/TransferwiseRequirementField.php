<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class TransferwiseRequirementField extends BunqModel
{
    /**
     * The descriptive label of the field.
     *
     * @var string
     */
    protected $name;

    /**
     * The field group.
     *
     * @var TransferwiseRequirementFieldGroup
     */
    protected $group;

    /**
     * The name of the required field.
     *
     * @var string
     */
    protected $keyFieldForRequest;

    /**
     * The value of the required field.
     *
     * @var string
     */
    protected $valueFieldForRequest;

    /**
     * @param string $key The name of the required field.
     * @param string $value The value of the required field.
     */
    public function __construct(string $key, string $value)
    {
        $this->keyFieldForRequest = $key;
        $this->valueFieldForRequest = $value;
    }

    /**
     * The descriptive label of the field.
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
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * The field group.
     *
     * @return TransferwiseRequirementFieldGroup
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param TransferwiseRequirementFieldGroup $group
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setGroup($group)
    {
        $this->group = $group;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->name)) {
            return false;
        }

        if (!is_null($this->group)) {
            return false;
        }

        return true;
    }
}
