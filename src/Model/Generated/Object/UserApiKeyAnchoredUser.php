<?php
namespace bunq\Model\Generated\Object;

use bunq\exception\BunqException;
use bunq\Model\Core\AnchorObjectInterface;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Endpoint\UserCompany;
use bunq\Model\Generated\Endpoint\UserPerson;

/**
 * @generated
 */
class UserApiKeyAnchoredUser extends BunqModel implements AnchorObjectInterface
{
    /**
     * Error constants.
     */
    const ERROR_NULL_FIELDS = 'All fields of an extended model or object are null.';

    /**
     * @var UserPerson
     */
    protected $userPerson;

    /**
     * @var UserCompany
     */
    protected $userCompany;

    /**
     * @return UserPerson
     */
    public function getUserPerson()
    {
        return $this->userPerson;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param UserPerson $userPerson
     */
    public function setUserPerson($userPerson)
    {
        $this->userPerson = $userPerson;
    }

    /**
     * @return UserCompany
     */
    public function getUserCompany()
    {
        return $this->userCompany;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param UserCompany $userCompany
     */
    public function setUserCompany($userCompany)
    {
        $this->userCompany = $userCompany;
    }

    /**
     * @return BunqModel
     * @throws BunqException
     */
    public function getReferencedObject()
    {
        if (!is_null($this->userPerson)) {
            return $this->userPerson;
        }

        if (!is_null($this->userCompany)) {
            return $this->userCompany;
        }

        throw new BunqException(self::ERROR_NULL_FIELDS);
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->userPerson)) {
            return false;
        }

        if (!is_null($this->userCompany)) {
            return false;
        }

        return true;
    }
}
