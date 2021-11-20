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
use bunq\Model\Generated\Object\TaxResident;
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
    const FIELD_LEGAL_FORM = 'legal_form';
    const FIELD_STATUS = 'status';
    const FIELD_SUB_STATUS = 'sub_status';
    const FIELD_SESSION_TIMEOUT = 'session_timeout';
    const FIELD_DAILY_LIMIT_WITHOUT_CONFIRMATION_LOGIN = 'daily_limit_without_confirmation_login';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'UserCompany';

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
     * The company's legal form.
     *
     * @var string
     */
    protected $legalForm;

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
     * The existing bunq aliases for the company's directors.
     *
     * @var LabelUser[]
     */
    protected $directors;

    /**
     * The person's preferred language. Formatted as a ISO 639-1 language code
     * plus a ISO 3166-1 alpha-2 country code, seperated by an underscore.
     *
     * @var string
     */
    protected $language;

    /**
     * The country as an ISO 3166-1 alpha-2 country code.
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
     * The user deny reason.
     *
     * @var string
     */
    protected $denyReason;

    /**
     * The relations for this user.
     *
     * @var RelationUser[]
     */
    protected $relations;

    /**
     * The user's tax residence numbers for different countries.
     *
     * @var TaxResident[]
     */
    protected $taxResident;

    /**
     * The company name.
     *
     * @var string|null
     */
    protected $nameFieldForRequest;

    /**
     * The company's nick name.
     *
     * @var string|null
     */
    protected $publicNickNameFieldForRequest;

    /**
     * The public UUID of the company's avatar.
     *
     * @var string|null
     */
    protected $avatarUuidFieldForRequest;

    /**
     * The user's main address.
     *
     * @var Address
     */
    protected $addressMainFieldForRequest;

    /**
     * The company's postal address.
     *
     * @var Address|null
     */
    protected $addressPostalFieldForRequest;

    /**
     * The person's preferred language. Formatted as a ISO 639-1 language code
     * plus a ISO 3166-1 alpha-2 country code, seperated by an underscore.
     *
     * @var string
     */
    protected $languageFieldForRequest;

    /**
     * The person's preferred region. Formatted as a ISO 639-1 language code
     * plus a ISO 3166-1 alpha-2 country code, seperated by an underscore.
     *
     * @var string
     */
    protected $regionFieldForRequest;

    /**
     * The country where the company is registered.
     *
     * @var string|null
     */
    protected $countryFieldForRequest;

    /**
     * The names and birth dates of the company's ultimate beneficiary owners.
     * Minimum zero, maximum four.
     *
     * @var Ubo[]|null
     */
    protected $uboFieldForRequest;

    /**
     * The company's chamber of commerce number.
     *
     * @var string|null
     */
    protected $chamberOfCommerceNumberFieldForRequest;

    /**
     * The company's legal form.
     *
     * @var string|null
     */
    protected $legalFormFieldForRequest;

    /**
     * The user status. Can be: ACTIVE, SIGNUP, RECOVERY.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * The user sub-status. Can be: NONE, FACE_RESET, APPROVAL,
     * APPROVAL_DIRECTOR, APPROVAL_PARENT, APPROVAL_SUPPORT, COUNTER_IBAN, IDEAL
     * or SUBMIT.
     *
     * @var string|null
     */
    protected $subStatusFieldForRequest;

    /**
     * The setting for the session timeout of the company in seconds.
     *
     * @var int|null
     */
    protected $sessionTimeoutFieldForRequest;

    /**
     * The amount the company can pay in the session without asking for
     * credentials.
     *
     * @var Amount|null
     */
    protected $dailyLimitWithoutConfirmationLoginFieldForRequest;

    /**
     * @param Address $addressMain The user's main address.
     * @param string $language The person's preferred language. Formatted as a
     * ISO 639-1 language code plus a ISO 3166-1 alpha-2 country code, seperated
     * by an underscore.
     * @param string $region The person's preferred region. Formatted as a ISO
     * 639-1 language code plus a ISO 3166-1 alpha-2 country code, seperated by
     * an underscore.
     * @param string|null $name The company name.
     * @param string|null $publicNickName The company's nick name.
     * @param string|null $avatarUuid The public UUID of the company's avatar.
     * @param Address|null $addressPostal The company's postal address.
     * @param string|null $country The country where the company is registered.
     * @param Ubo[]|null $ubo The names and birth dates of the company's
     * ultimate beneficiary owners. Minimum zero, maximum four.
     * @param string|null $chamberOfCommerceNumber The company's chamber of
     * commerce number.
     * @param string|null $legalForm The company's legal form.
     * @param string|null $status The user status. Can be: ACTIVE, SIGNUP,
     * RECOVERY.
     * @param string|null $subStatus The user sub-status. Can be: NONE,
     * FACE_RESET, APPROVAL, APPROVAL_DIRECTOR, APPROVAL_PARENT,
     * APPROVAL_SUPPORT, COUNTER_IBAN, IDEAL or SUBMIT.
     * @param int|null $sessionTimeout The setting for the session timeout of
     * the company in seconds.
     * @param Amount|null $dailyLimitWithoutConfirmationLogin The amount the
     * company can pay in the session without asking for credentials.
     */
    public function __construct(Address  $addressMain, string  $language, string  $region, string  $name = null, string  $publicNickName = null, string  $avatarUuid = null, Address  $addressPostal = null, string  $country = null, array  $ubo = null, string  $chamberOfCommerceNumber = null, string  $legalForm = null, string  $status = null, string  $subStatus = null, int  $sessionTimeout = null, Amount  $dailyLimitWithoutConfirmationLogin = null)
    {
        $this->nameFieldForRequest = $name;
        $this->publicNickNameFieldForRequest = $publicNickName;
        $this->avatarUuidFieldForRequest = $avatarUuid;
        $this->addressMainFieldForRequest = $addressMain;
        $this->addressPostalFieldForRequest = $addressPostal;
        $this->languageFieldForRequest = $language;
        $this->regionFieldForRequest = $region;
        $this->countryFieldForRequest = $country;
        $this->uboFieldForRequest = $ubo;
        $this->chamberOfCommerceNumberFieldForRequest = $chamberOfCommerceNumber;
        $this->legalFormFieldForRequest = $legalForm;
        $this->statusFieldForRequest = $status;
        $this->subStatusFieldForRequest = $subStatus;
        $this->sessionTimeoutFieldForRequest = $sessionTimeout;
        $this->dailyLimitWithoutConfirmationLoginFieldForRequest = $dailyLimitWithoutConfirmationLogin;
    }

    /**
     * Get a specific company.
     *
     * @param int $userCompanyId
     * @param string[] $customHeaders
     *
     * @return BunqResponseUserCompany
     */
    public static function get( array $customHeaders = []): BunqResponseUserCompany
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId()]
            ),
            [],
            $customHeaders
        );

        return BunqResponseUserCompany::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Modify a specific company's data.
     *
     * @param int $userCompanyId
     * @param string|null $name The company name.
     * @param string|null $publicNickName The company's nick name.
     * @param string|null $avatarUuid The public UUID of the company's avatar.
     * @param Address|null $addressMain The user's main address.
     * @param Address|null $addressPostal The company's postal address.
     * @param string|null $language The person's preferred language. Formatted
     * as a ISO 639-1 language code plus a ISO 3166-1 alpha-2 country code,
     * seperated by an underscore.
     * @param string|null $region The person's preferred region. Formatted as a
     * ISO 639-1 language code plus a ISO 3166-1 alpha-2 country code, seperated
     * by an underscore.
     * @param string|null $country The country where the company is registered.
     * @param Ubo[]|null $ubo The names and birth dates of the company's
     * ultimate beneficiary owners. Minimum zero, maximum four.
     * @param string|null $chamberOfCommerceNumber The company's chamber of
     * commerce number.
     * @param string|null $legalForm The company's legal form.
     * @param string|null $status The user status. Can be: ACTIVE, SIGNUP,
     * RECOVERY.
     * @param string|null $subStatus The user sub-status. Can be: NONE,
     * FACE_RESET, APPROVAL, APPROVAL_DIRECTOR, APPROVAL_PARENT,
     * APPROVAL_SUPPORT, COUNTER_IBAN, IDEAL or SUBMIT.
     * @param int|null $sessionTimeout The setting for the session timeout of
     * the company in seconds.
     * @param Amount|null $dailyLimitWithoutConfirmationLogin The amount the
     * company can pay in the session without asking for credentials.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(string  $name = null, string  $publicNickName = null, string  $avatarUuid = null, Address  $addressMain = null, Address  $addressPostal = null, string  $language = null, string  $region = null, string  $country = null, array  $ubo = null, string  $chamberOfCommerceNumber = null, string  $legalForm = null, string  $status = null, string  $subStatus = null, int  $sessionTimeout = null, Amount  $dailyLimitWithoutConfirmationLogin = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId()]
            ),
            [self::FIELD_NAME => $name,
self::FIELD_PUBLIC_NICK_NAME => $publicNickName,
self::FIELD_AVATAR_UUID => $avatarUuid,
self::FIELD_ADDRESS_MAIN => $addressMain,
self::FIELD_ADDRESS_POSTAL => $addressPostal,
self::FIELD_LANGUAGE => $language,
self::FIELD_REGION => $region,
self::FIELD_COUNTRY => $country,
self::FIELD_UBO => $ubo,
self::FIELD_CHAMBER_OF_COMMERCE_NUMBER => $chamberOfCommerceNumber,
self::FIELD_LEGAL_FORM => $legalForm,
self::FIELD_STATUS => $status,
self::FIELD_SUB_STATUS => $subStatus,
self::FIELD_SESSION_TIMEOUT => $sessionTimeout,
self::FIELD_DAILY_LIMIT_WITHOUT_CONFIRMATION_LOGIN => $dailyLimitWithoutConfirmationLogin],
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * The company's display name.
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $chamberOfCommerceNumber
     */
    public function setChamberOfCommerceNumber($chamberOfCommerceNumber)
    {
        $this->chamberOfCommerceNumber = $chamberOfCommerceNumber;
    }

    /**
     * The company's legal form.
     *
     * @return string
     */
    public function getLegalForm()
    {
        return $this->legalForm;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $legalForm
     */
    public function setLegalForm($legalForm)
    {
        $this->legalForm = $legalForm;
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $versionTermsOfService
     */
    public function setVersionTermsOfService($versionTermsOfService)
    {
        $this->versionTermsOfService = $versionTermsOfService;
    }

    /**
     * The existing bunq aliases for the company's directors.
     *
     * @return LabelUser[]
     */
    public function getDirectors()
    {
        return $this->directors;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelUser[] $directors
     */
    public function setDirectors($directors)
    {
        $this->directors = $directors;
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * The country as an ISO 3166-1 alpha-2 country code.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param BillingContractSubscription[] $billingContract
     */
    public function setBillingContract($billingContract)
    {
        $this->billingContract = $billingContract;
    }

    /**
     * The user deny reason.
     *
     * @return string
     */
    public function getDenyReason()
    {
        return $this->denyReason;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $denyReason
     */
    public function setDenyReason($denyReason)
    {
        $this->denyReason = $denyReason;
    }

    /**
     * The relations for this user.
     *
     * @return RelationUser[]
     */
    public function getRelations()
    {
        return $this->relations;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param RelationUser[] $relations
     */
    public function setRelations($relations)
    {
        $this->relations = $relations;
    }

    /**
     * The user's tax residence numbers for different countries.
     *
     * @return TaxResident[]
     */
    public function getTaxResident()
    {
        return $this->taxResident;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param TaxResident[] $taxResident
     */
    public function setTaxResident($taxResident)
    {
        $this->taxResident = $taxResident;
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

        if (!is_null($this->legalForm)) {
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

        if (!is_null($this->directors)) {
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

        if (!is_null($this->denyReason)) {
            return false;
        }

        if (!is_null($this->relations)) {
            return false;
        }

        if (!is_null($this->taxResident)) {
            return false;
        }

        return true;
    }
}
