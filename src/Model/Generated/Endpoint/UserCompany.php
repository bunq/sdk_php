<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Address;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Avatar;
use bunq\Model\Generated\Object\LabelUser;
use bunq\Model\Generated\Object\NotificationFilter;
use bunq\Model\Generated\Object\Pointer;
use bunq\Model\Generated\Object\Ubo;

/**
 * With UserCompany you can retrieve information regarding the authenticated
 * UserCompany and update specific fields.<br/><br/>Notification filters can
 * be set on a UserCompany level to receive callbacks. For more information
 * check the <a href="/api/1/page/callbacks">dedicated callbacks page</a>.
 *
 * @generated
 */
class UserCompany extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user-company/%s';
    const ENDPOINT_URL_UPDATE = 'user-company/%s';

    /**
     * Field constants.
     */
    const FIELD_NAME = 'name';
    const FIELD_PUBLIC_NICK_NAME = 'public_nick_name';
    const FIELD_AVATAR_UUID = 'avatar_uuid';
    const FIELD_ADDRESS_MAIN = 'address_main';
    const FIELD_ADDRESS_POSTAL = 'address_postal';
    const FIELD_LANGUAGE = 'language';
    const FIELD_REGION = 'region';
    const FIELD_COUNTRY = 'country';
    const FIELD_UBO = 'ubo';
    const FIELD_CHAMBER_OF_COMMERCE_NUMBER = 'chamber_of_commerce_number';
    const FIELD_STATUS = 'status';
    const FIELD_SUB_STATUS = 'sub_status';
    const FIELD_SESSION_TIMEOUT = 'session_timeout';
    const FIELD_DAILY_LIMIT_WITHOUT_CONFIRMATION_LOGIN = 'daily_limit_without_confirmation_login';
    const FIELD_COUNTER_BANK_IBAN = 'counter_bank_iban';
    const FIELD_NOTIFICATION_FILTERS = 'notification_filters';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'UserCompany';

    /**
     * The id of the modified company.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the company object's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the company object's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The company's public UUID.
     *
     * @var string
     */
    protected $publicUuid;

    /**
     * The company name.
     *
     * @var string
     */
    protected $name;

    /**
     * The company's display name.
     *
     * @var string
     */
    protected $displayName;

    /**
     * The company's public nick name.
     *
     * @var string
     */
    protected $publicNickName;

    /**
     * The aliases of the account.
     *
     * @var Pointer[]
     */
    protected $alias;

    /**
     * The company's chamber of commerce number.
     *
     * @var string
     */
    protected $chamberOfCommerceNumber;

    /**
     * The type of business entity.
     *
     * @var string
     */
    protected $typeOfBusinessEntity;

    /**
     * The sector of industry.
     *
     * @var string
     */
    protected $sectorOfIndustry;

    /**
     * The company's other bank account IBAN, through which we verify it.
     *
     * @var string
     */
    protected $counterBankIban;

    /**
     * The company's avatar.
     *
     * @var Avatar
     */
    protected $avatar;

    /**
     * The company's main address.
     *
     * @var Address
     */
    protected $addressMain;

    /**
     * The company's postal address.
     *
     * @var Address
     */
    protected $addressPostal;

    /**
     * The version of the terms of service accepted by the user.
     *
     * @var string
     */
    protected $versionTermsOfService;

    /**
     * The existing bunq user alias for the company's director.
     *
     * @var LabelUser
     */
    protected $directorAlias;

    /**
     * The person's preferred language. Formatted as a ISO 639-1 language code
     * plus a ISO 3166-1 alpha-2 country code, seperated by an underscore.
     *
     * @var string
     */
    protected $language;

    /**
     * The country as an ISO 3166-1 alpha-2 country code..
     *
     * @var string
     */
    protected $country;

    /**
     * The person's preferred region. Formatted as a ISO 639-1 language code
     * plus a ISO 3166-1 alpha-2 country code, seperated by an underscore.
     *
     * @var string
     */
    protected $region;

    /**
     * The names of the company's ultimate beneficiary owners. Minimum zero,
     * maximum four.
     *
     * @var Ubo[]
     */
    protected $ubo;

    /**
     * The user status. Can be: ACTIVE, SIGNUP, RECOVERY.
     *
     * @var string
     */
    protected $status;

    /**
     * The user sub-status. Can be: NONE, FACE_RESET, APPROVAL,
     * APPROVAL_DIRECTOR, APPROVAL_PARENT, APPROVAL_SUPPORT, COUNTER_IBAN, IDEAL
     * or SUBMIT.
     *
     * @var string
     */
    protected $subStatus;

    /**
     * The setting for the session timeout of the company in seconds.
     *
     * @var int
     */
    protected $sessionTimeout;

    /**
     * The amount the company can pay in the session without asking for
     * credentials.
     *
     * @var Amount
     */
    protected $dailyLimitWithoutConfirmationLogin;

    /**
     * The types of notifications that will result in a push notification or URL
     * callback for this UserCompany.
     *
     * @var NotificationFilter[]
     */
    protected $notificationFilters;

    /**
     * The customer profile of the company.
     *
     * @var Customer
     */
    protected $customer;

    /**
     * The customer limits of the company.
     *
     * @var CustomerLimit
     */
    protected $customerLimit;

    /**
     * The subscription of the company.
     *
     * @var BillingContractSubscription[]
     */
    protected $billingContract;

    /**
     * Get a specific company.
     *
     * @param ApiContext $apiContext
     * @param int $userCompanyId
     * @param string[] $customHeaders
     *
     * @return BunqResponseUserCompany
     */
    public static function get(ApiContext $apiContext, int $userCompanyId, array $customHeaders = []): BunqResponseUserCompany
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userCompanyId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseUserCompany::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * Modify a specific company's data.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userCompanyId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(ApiContext $apiContext, array $requestMap, int $userCompanyId, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [$userCompanyId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * The id of the modified company.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The timestamp of the company object's creation.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the company object's last update.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The company's public UUID.
     *
     * @return string
     */
    public function getPublicUuid()
    {
        return $this->publicUuid;
    }

    /**
     * @param string $publicUuid
     */
    public function setPublicUuid($publicUuid)
    {
        $this->publicUuid = $publicUuid;
    }

    /**
     * The company name.
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
     * The company's display name.
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * The company's public nick name.
     *
     * @return string
     */
    public function getPublicNickName()
    {
        return $this->publicNickName;
    }

    /**
     * @param string $publicNickName
     */
    public function setPublicNickName($publicNickName)
    {
        $this->publicNickName = $publicNickName;
    }

    /**
     * The aliases of the account.
     *
     * @return Pointer[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param Pointer[] $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * The company's chamber of commerce number.
     *
     * @return string
     */
    public function getChamberOfCommerceNumber()
    {
        return $this->chamberOfCommerceNumber;
    }

    /**
     * @param string $chamberOfCommerceNumber
     */
    public function setChamberOfCommerceNumber($chamberOfCommerceNumber)
    {
        $this->chamberOfCommerceNumber = $chamberOfCommerceNumber;
    }

    /**
     * The type of business entity.
     *
     * @return string
     */
    public function getTypeOfBusinessEntity()
    {
        return $this->typeOfBusinessEntity;
    }

    /**
     * @param string $typeOfBusinessEntity
     */
    public function setTypeOfBusinessEntity($typeOfBusinessEntity)
    {
        $this->typeOfBusinessEntity = $typeOfBusinessEntity;
    }

    /**
     * The sector of industry.
     *
     * @return string
     */
    public function getSectorOfIndustry()
    {
        return $this->sectorOfIndustry;
    }

    /**
     * @param string $sectorOfIndustry
     */
    public function setSectorOfIndustry($sectorOfIndustry)
    {
        $this->sectorOfIndustry = $sectorOfIndustry;
    }

    /**
     * The company's other bank account IBAN, through which we verify it.
     *
     * @return string
     */
    public function getCounterBankIban()
    {
        return $this->counterBankIban;
    }

    /**
     * @param string $counterBankIban
     */
    public function setCounterBankIban($counterBankIban)
    {
        $this->counterBankIban = $counterBankIban;
    }

    /**
     * The company's avatar.
     *
     * @return Avatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param Avatar $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * The company's main address.
     *
     * @return Address
     */
    public function getAddressMain()
    {
        return $this->addressMain;
    }

    /**
     * @param Address $addressMain
     */
    public function setAddressMain($addressMain)
    {
        $this->addressMain = $addressMain;
    }

    /**
     * The company's postal address.
     *
     * @return Address
     */
    public function getAddressPostal()
    {
        return $this->addressPostal;
    }

    /**
     * @param Address $addressPostal
     */
    public function setAddressPostal($addressPostal)
    {
        $this->addressPostal = $addressPostal;
    }

    /**
     * The version of the terms of service accepted by the user.
     *
     * @return string
     */
    public function getVersionTermsOfService()
    {
        return $this->versionTermsOfService;
    }

    /**
     * @param string $versionTermsOfService
     */
    public function setVersionTermsOfService($versionTermsOfService)
    {
        $this->versionTermsOfService = $versionTermsOfService;
    }

    /**
     * The existing bunq user alias for the company's director.
     *
     * @return LabelUser
     */
    public function getDirectorAlias()
    {
        return $this->directorAlias;
    }

    /**
     * @param LabelUser $directorAlias
     */
    public function setDirectorAlias($directorAlias)
    {
        $this->directorAlias = $directorAlias;
    }

    /**
     * The person's preferred language. Formatted as a ISO 639-1 language code
     * plus a ISO 3166-1 alpha-2 country code, seperated by an underscore.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * The country as an ISO 3166-1 alpha-2 country code..
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * The person's preferred region. Formatted as a ISO 639-1 language code
     * plus a ISO 3166-1 alpha-2 country code, seperated by an underscore.
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * The names of the company's ultimate beneficiary owners. Minimum zero,
     * maximum four.
     *
     * @return Ubo[]
     */
    public function getUbo()
    {
        return $this->ubo;
    }

    /**
     * @param Ubo[] $ubo
     */
    public function setUbo($ubo)
    {
        $this->ubo = $ubo;
    }

    /**
     * The user status. Can be: ACTIVE, SIGNUP, RECOVERY.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The user sub-status. Can be: NONE, FACE_RESET, APPROVAL,
     * APPROVAL_DIRECTOR, APPROVAL_PARENT, APPROVAL_SUPPORT, COUNTER_IBAN, IDEAL
     * or SUBMIT.
     *
     * @return string
     */
    public function getSubStatus()
    {
        return $this->subStatus;
    }

    /**
     * @param string $subStatus
     */
    public function setSubStatus($subStatus)
    {
        $this->subStatus = $subStatus;
    }

    /**
     * The setting for the session timeout of the company in seconds.
     *
     * @return int
     */
    public function getSessionTimeout()
    {
        return $this->sessionTimeout;
    }

    /**
     * @param int $sessionTimeout
     */
    public function setSessionTimeout($sessionTimeout)
    {
        $this->sessionTimeout = $sessionTimeout;
    }

    /**
     * The amount the company can pay in the session without asking for
     * credentials.
     *
     * @return Amount
     */
    public function getDailyLimitWithoutConfirmationLogin()
    {
        return $this->dailyLimitWithoutConfirmationLogin;
    }

    /**
     * @param Amount $dailyLimitWithoutConfirmationLogin
     */
    public function setDailyLimitWithoutConfirmationLogin($dailyLimitWithoutConfirmationLogin)
    {
        $this->dailyLimitWithoutConfirmationLogin = $dailyLimitWithoutConfirmationLogin;
    }

    /**
     * The types of notifications that will result in a push notification or URL
     * callback for this UserCompany.
     *
     * @return NotificationFilter[]
     */
    public function getNotificationFilters()
    {
        return $this->notificationFilters;
    }

    /**
     * @param NotificationFilter[] $notificationFilters
     */
    public function setNotificationFilters($notificationFilters)
    {
        $this->notificationFilters = $notificationFilters;
    }

    /**
     * The customer profile of the company.
     *
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * The customer limits of the company.
     *
     * @return CustomerLimit
     */
    public function getCustomerLimit()
    {
        return $this->customerLimit;
    }

    /**
     * @param CustomerLimit $customerLimit
     */
    public function setCustomerLimit($customerLimit)
    {
        $this->customerLimit = $customerLimit;
    }

    /**
     * The subscription of the company.
     *
     * @return BillingContractSubscription[]
     */
    public function getBillingContract()
    {
        return $this->billingContract;
    }

    /**
     * @param BillingContractSubscription[] $billingContract
     */
    public function setBillingContract($billingContract)
    {
        $this->billingContract = $billingContract;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->created)) {
            return false;
        }

        if (!is_null($this->updated)) {
            return false;
        }

        if (!is_null($this->publicUuid)) {
            return false;
        }

        if (!is_null($this->name)) {
            return false;
        }

        if (!is_null($this->displayName)) {
            return false;
        }

        if (!is_null($this->publicNickName)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->chamberOfCommerceNumber)) {
            return false;
        }

        if (!is_null($this->typeOfBusinessEntity)) {
            return false;
        }

        if (!is_null($this->sectorOfIndustry)) {
            return false;
        }

        if (!is_null($this->counterBankIban)) {
            return false;
        }

        if (!is_null($this->avatar)) {
            return false;
        }

        if (!is_null($this->addressMain)) {
            return false;
        }

        if (!is_null($this->addressPostal)) {
            return false;
        }

        if (!is_null($this->versionTermsOfService)) {
            return false;
        }

        if (!is_null($this->directorAlias)) {
            return false;
        }

        if (!is_null($this->language)) {
            return false;
        }

        if (!is_null($this->country)) {
            return false;
        }

        if (!is_null($this->region)) {
            return false;
        }

        if (!is_null($this->ubo)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->subStatus)) {
            return false;
        }

        if (!is_null($this->sessionTimeout)) {
            return false;
        }

        if (!is_null($this->dailyLimitWithoutConfirmationLogin)) {
            return false;
        }

        if (!is_null($this->notificationFilters)) {
            return false;
        }

        if (!is_null($this->customer)) {
            return false;
        }

        if (!is_null($this->customerLimit)) {
            return false;
        }

        if (!is_null($this->billingContract)) {
            return false;
        }

        return true;
    }
}
