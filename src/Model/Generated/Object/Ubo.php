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
    public function setName(string $name)
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
    public function setDateOfBirth(string $dateOfBirth)
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
    public function setNationality(string $nationality)
    {
        $this->nationality = $nationality;
    }
}
