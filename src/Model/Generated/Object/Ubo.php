<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class Ubo extends BunqModel
{
    /**
     * The name of the ultimate beneficiary owner.
     *
     * @var string
     */
    protected $name;

    /**
     * The date of birth of the ultimate beneficiary owner.
     *
     * @var string
     */
    protected $dateOfBirth;

    /**
     * The nationality of the ultimate beneficiary owner.
     *
     * @var string
     */
    protected $nationality;

    /**
     * The name of the ultimate beneficiary owner.
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

    /**
     * The date of birth of the ultimate beneficiary owner.
     *
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param string $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * The nationality of the ultimate beneficiary owner.
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @param string $nationality
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    /**
     * @return bool
     */
    public function areAllFieldsNull()
    {
        if (!is_null($this->name)) {
            return false;
        }

        if (!is_null($this->dateOfBirth)) {
            return false;
        }

        if (!is_null($this->nationality)) {
            return false;
        }

        return true;
    }
}
