<?php
namespace bunq\Context;

use bunq\Exception\BunqException;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Endpoint\MonetaryAccountBank;
use bunq\Model\Generated\Endpoint\User;
use bunq\Model\Generated\Endpoint\UserApiKey;
use bunq\Model\Generated\Endpoint\UserCompany;
use bunq\Model\Generated\Endpoint\UserPaymentServiceProvider;
use bunq\Model\Generated\Endpoint\UserPerson;

/**
 */
class UserContext
{
    /**
     * Error constants.
     */
    const ERROR_NO_ACTIVE_MONETARY_ACCOUNT_FOUND = 'No active monetary account found.';
    const ERROR_COULD_NOT_DETERMINE_USER_ID = 'Both userPerson and userCompany are set, could not determine user id.';
    const ERROR_USER_HAS_NOT_BEEN_SET = 'User has not been set.';
    const ERROR_PRIMARY_MONETARY_ACCOUNT_HAS_NOT_BEEN_SET = 'Primary monetaryAccount is not set.';
    const ERROR_UNEXPECTED_USER_INSTANCE = '"%s" is unexpected user instance.';

    /**
     * MonetaryAccount status constants.
     */
    const MONETARY_ACCOUNT_STATUS_ACTIVE = 'ACTIVE';

    /**
     * The index of the first item in an array.
     */
    const INDEX_FIRST = 0;

    /**
     * @var UserCompany
     */
    protected $userCompany;

    /**
     * @var UserPerson
     */
    protected $userPerson;

    /**
     * @var UserApiKey
     */
    protected $userApiKey;

    /**
     * @var UserPaymentServiceProvider
     */
    protected $userPaymentServiceProvider;

    /**
     * @var MonetaryAccountBank
     */
    protected $primaryMonetaryAccount;

    /**
     * @var int
     */
    protected $userId;

    /**
     */
    public function __construct(int $userId)
    {
        $this->setUser($this->getUserObject());
        $this->userId = $userId;
    }

    /**
     * @return BunqModel
     */
    private function getUserObject(): BunqModel
    {
        return User::listing()->getValue()[self::INDEX_FIRST]->getReferencedObject();
    }

    /**
     * @param $user
     *
     * @throws BunqException
     */
    private function setUser($user)
    {
        if ($user instanceof UserPerson) {
            $this->userPerson = $user;
        } elseif ($user instanceof UserCompany) {
            $this->userCompany = $user;
        } elseif ($user instanceof UserApiKey) {
            $this->userApiKey = $user;
        } elseif ($user instanceof UserPaymentServiceProvider) {
            $this->userPaymentServiceProvider = $user;
        } else {
            throw new BunqException(vsprintf(self::ERROR_UNEXPECTED_USER_INSTANCE, [get_class($user)]));
        }
    }

    /**
     * @throws BunqException
     */
    public function initMainMonetaryAccount()
    {
        if (!is_null($this->userPaymentServiceProvider)) {
            return;
        }

        $allMonetaryAccount = MonetaryAccountBank::listing()->getValue();

        foreach ($allMonetaryAccount as $account) {
            if ($account->getStatus() === self::MONETARY_ACCOUNT_STATUS_ACTIVE) {
                $this->primaryMonetaryAccount = $account;

                return;
            }
        }

        throw new BunqException(self::ERROR_NO_ACTIVE_MONETARY_ACCOUNT_FOUND);
    }

    /**
     * @return int
     * @throws BunqException
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return bool
     */
    public function isOnlyUserPersonSet(): bool
    {
        return is_null($this->userCompany) && is_null($this->userApiKey) && !(is_null($this->userPerson));
    }

    /**
     * @return bool
     */
    public function isOnlyUserCompanySet(): bool
    {
        return is_null($this->userPerson) && is_null($this->userApiKey) && !is_null($this->userCompany);
    }

    /**
     * @return bool
     */
    public function isOnlyUserApiKeySet(): bool
    {
        return is_null($this->userApiKey) && is_null($this->userPerson) && !is_null($this->userCompany);
    }

    /**
     * @return bool
     */
    public function areAllUserSet(): bool
    {
        return !is_null($this->userCompany) && !is_null($this->userPerson) && !is_null($this->userApiKey);
    }

    /**
     * @return int
     * @throws BunqException
     */
    public function getMainMonetaryAccountId(): int
    {
        if (is_null($this->primaryMonetaryAccount)) {
            throw new BunqException(self::ERROR_PRIMARY_MONETARY_ACCOUNT_HAS_NOT_BEEN_SET);
        } else {
            return $this->primaryMonetaryAccount->getId();
        }
    }

    /**
     * @return UserCompany
     */
    public function getUserCompany(): UserCompany
    {
        return $this->userCompany;
    }

    /**
     * @return UserPerson
     */
    public function getUserPerson(): UserPerson
    {
        return $this->userPerson;
    }

    /**
     * @return UserApiKey
     */
    public function getUserApiKey(): UserApiKey
    {
        return $this->userApiKey;
    }

    /**
     * @return MonetaryAccountBank
     */
    public function getPrimaryMonetaryAccount(): MonetaryAccountBank
    {
        return $this->primaryMonetaryAccount;
    }

    /**
     */
    public function refreshUserContext()
    {
        $this->setUser($this->getUserObject());
        $this->initMainMonetaryAccount();
    }
}
