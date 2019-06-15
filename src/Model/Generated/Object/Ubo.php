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
     * @var string|null
     */
    protected $nameFieldForRequest;

    /**
     * The date of birth of the ultimate beneficiary owner. Accepts ISO8601 date
     * formats.
     *
     * @var string|null
     */
    protected $dateOfBirthFieldForRequest;

    /**
     * The nationality of the ultimate beneficiary owner. Accepts ISO8601 date
     * formats.
     *
     * @var string|null
     */
    protected $nationalityFieldForRequest;

    /**
     * @param string|null $name        The name of the ultimate beneficiary owner.
     * @param string|null $dateOfBirth The date of birth of the ultimate
     *                                 beneficiary owner. Accepts ISO8601 date formats.
     * @param string|null $nationality The nationality of the ultimate
     *                                 beneficiary owner. Accepts ISO8601 date formats.
     */
    public function __construct(string $name = null, string $dateOfBirth = null, string $nationality = null)
    {
        $this->nameFieldForRequest = $name;
        $this->dateOfBirthFieldForRequest = $dateOfBirth;
        $this->nationalityFieldForRequest = $nationality;
    }

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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
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
