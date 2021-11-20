<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Address;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Avatar;
use bunq\Model\Generated\Object\NotificationFilter;
use bunq\Model\Generated\Object\Pointer;
use bunq\Model\Generated\Object\TaxResident;

/**
 * With UserPerson you can retrieve information regarding the authenticated
 * UserPerson and update specific fields.<br/><br/>Notification filters can
 * be set on a UserPerson level to receive callbacks. For more information
 * check the <a href="/api/1/page/callbacks">dedicated callbacks page</a>.
 *
 * @generated
 */
class UserPerson extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user-person/%s';
    const ENDPOINT_URL_UPDATE = 'user-person/%s';

    /**
     * Field constants.
     */
    const FIELD_FIRST_NAME = 'first_name';
    const FIELD_MIDDLE_NAME = 'middle_name';
    const FIELD_LAST_NAME = 'last_name';
    const FIELD_PUBLIC_NICK_NAME = 'public_nick_name';
    const FIELD_ADDRESS_MAIN = 'address_main';
    const FIELD_ADDRESS_POSTAL = 'address_postal';
    const FIELD_AVATAR_UUID = 'avatar_uuid';
    const FIELD_TAX_RESIDENT = 'tax_resident';
    const FIELD_DOCUMENT_TYPE = 'document_type';
    const FIELD_DOCUMENT_NUMBER = 'document_number';
    const FIELD_DOCUMENT_COUNTRY_OF_ISSUANCE = 'document_country_of_issuance';
    const FIELD_DOCUMENT_FRONT_ATTACHMENT_ID = 'document_front_attachment_id';
    const FIELD_DOCUMENT_BACK_ATTACHMENT_ID = 'document_back_attachment_id';
    const FIELD_DATE_OF_BIRTH = 'date_of_birth';
    const FIELD_PLACE_OF_BIRTH = 'place_of_birth';
    const FIELD_COUNTRY_OF_BIRTH = 'country_of_birth';
    const FIELD_NATIONALITY = 'nationality';
    const FIELD_LANGUAGE = 'language';
    const FIELD_REGION = 'region';
    const FIELD_GENDER = 'gender';
    const FIELD_STATUS = 'status';
    const FIELD_SUB_STATUS = 'sub_status';
    const FIELD_LEGAL_GUARDIAN_ALIAS = 'legal_guardian_alias';
    const FIELD_SESSION_TIMEOUT = 'session_timeout';
    const FIELD_DAILY_LIMIT_WITHOUT_CONFIRMATION_LOGIN = 'daily_limit_without_confirmation_login';
    const FIELD_DISPLAY_NAME = 'display_name';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'UserPerson';

    /**
     * The id of the modified person object.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the person object's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the person object's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The person's public UUID.
     *
     * @var string
     */
    protected $publicUuid;

    /**
     * The person's first name.
     *
     * @var string
     */
    protected $firstName;

    /**
     * The person's middle name.
     *
     * @var string
     */
    protected $middleName;

    /**
     * The person's last name.
     *
     * @var string
     */
    protected $lastName;

    /**
     * The person's legal name.
     *
     * @var string
     */
    protected $legalName;

    /**
     * The display name for the person.
     *
     * @var string
     */
    protected $displayName;

    /**
     * The public nick name for the person.
     *
     * @var string
     */
    protected $publicNickName;

    /**
     * The aliases of the user.
     *
     * @var Pointer[]
     */
    protected $alias;

    /**
     * The user's tax residence numbers for different countries.
     *
     * @var TaxResident[]
     */
    protected $taxResident;

    /**
     * The person's main address.
     *
     * @var Address
     */
    protected $addressMain;

    /**
     * The person's postal address.
     *
     * @var Address
     */
    protected $addressPostal;

    /**
     * The person's date of birth. Accepts ISO8601 date formats.
     *
     * @var string
     */
    protected $dateOfBirth;

    /**
     * The person's place of birth.
     *
     * @var string
     */
    protected $placeOfBirth;

    /**
     * The person's country of birth. Formatted as a SO 3166-1 alpha-2 country
     * code.
     *
     * @var string
     */
    protected $countryOfBirth;

    /**
     * The person's nationality. Formatted as a SO 3166-1 alpha-2 country code.
     *
     * @var string
     */
    protected $nationality;

    /**
     * The person's preferred language. Formatted as a ISO 639-1 language code
     * plus a ISO 3166-1 alpha-2 country code, seperated by an underscore.
     *
     * @var string
     */
    protected $language;

    /**
     * The person's preferred region. Formatted as a ISO 639-1 language code
     * plus a ISO 3166-1 alpha-2 country code, seperated by an underscore.
     *
     * @var string
     */
    protected $region;

    /**
     * The person's gender. Can be MALE, FEMALE or UNKNOWN.
     *
     * @var string
     */
    protected $gender;

    /**
     * The user's avatar.
     *
     * @var Avatar
     */
    protected $avatar;

    /**
     * The version of the terms of service accepted by the user.
     *
     * @var string
     */
    protected $versionTermsOfService;

    /**
     * The user status. The user status. Can be: ACTIVE, BLOCKED, SIGNUP,
     * RECOVERY, DENIED or ABORTED.
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
     * The setting for the session timeout of the user in seconds.
     *
     * @var int
     */
    protected $sessionTimeout;

    /**
     * The amount the user can pay in the session without asking for
     * credentials.
     *
     * @var Amount
     */
    protected $dailyLimitWithoutConfirmationLogin;

    /**
     * The types of notifications that will result in a push notification or URL
     * callback for this UserPerson.
     *
     * @var NotificationFilter[]
     */
    protected $notificationFilters;

    /**
     * The relations for this user.
     *
     * @var RelationUser[]
     */
    protected $relations;

    /**
     * The person's first name.
     *
     * @var string|null
     */
    protected $firstNameFieldForRequest;

    /**
     * The person's middle name.
     *
     * @var string|null
     */
    protected $middleNameFieldForRequest;

    /**
     * The person's last name.
     *
     * @var string|null
     */
    protected $lastNameFieldForRequest;

    /**
     * The person's public nick name.
     *
     * @var string|null
     */
    protected $publicNickNameFieldForRequest;

    /**
     * The user's main address.
     *
     * @var Address
     */
    protected $addressMainFieldForRequest;

    /**
     * The person's postal address.
     *
     * @var Address|null
     */
    protected $addressPostalFieldForRequest;

    /**
     * The public UUID of the user's avatar.
     *
     * @var string
     */
    protected $avatarUuidFieldForRequest;

    /**
     * The user's tax residence numbers for different countries.
     *
     * @var TaxResident[]|null
     */
    protected $taxResidentFieldForRequest;

    /**
     * The type of identification document the person registered with.
     *
     * @var string
     */
    protected $documentTypeFieldForRequest;

    /**
     * The identification document number the person registered with.
     *
     * @var string
     */
    protected $documentNumberFieldForRequest;

    /**
     * The country which issued the identification document the person
     * registered with.
     *
     * @var string
     */
    protected $documentCountryOfIssuanceFieldForRequest;

    /**
     * The reference to the uploaded picture/scan of the front side of the
     * identification document.
     *
     * @var int
     */
    protected $documentFrontAttachmentIdFieldForRequest;

    /**
     * The reference to the uploaded picture/scan of the back side of the
     * identification document.
     *
     * @var int|null
     */
    protected $documentBackAttachmentIdFieldForRequest;

    /**
     * The person's date of birth. Accepts ISO8601 date formats.
     *
     * @var string
     */
    protected $dateOfBirthFieldForRequest;

    /**
     * The person's place of birth.
     *
     * @var string
     */
    protected $placeOfBirthFieldForRequest;

    /**
     * The person's country of birth. Formatted as a SO 3166-1 alpha-2 country
     * code.
     *
     * @var string
     */
    protected $countryOfBirthFieldForRequest;

    /**
     * The person's nationality. Formatted as a SO 3166-1 alpha-2 country code.
     *
     * @var string
     */
    protected $nationalityFieldForRequest;

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
     * The person's gender. Can be: MALE, FEMALE and UNKNOWN.
     *
     * @var string
     */
    protected $genderFieldForRequest;

    /**
     * The user status. You are not allowed to update the status via PUT.
     *
     * @var string
     */
    protected $statusFieldForRequest;

    /**
     * The user sub-status. Can be updated to SUBMIT if status is RECOVERY.
     *
     * @var string
     */
    protected $subStatusFieldForRequest;

    /**
     * The legal guardian of the user. Required for minors.
     *
     * @var Pointer
     */
    protected $legalGuardianAliasFieldForRequest;

    /**
     * The setting for the session timeout of the user in seconds.
     *
     * @var int
     */
    protected $sessionTimeoutFieldForRequest;

    /**
     * The amount the user can pay in the session without asking for
     * credentials.
     *
     * @var Amount
     */
    protected $dailyLimitWithoutConfirmationLoginFieldForRequest;

    /**
     * The person's legal name. Available legal names can be listed via the
     * 'user/{user_id}/legal-name' endpoint.
     *
     * @var string|null
     */
    protected $displayNameFieldForRequest;

    /**
     * @param Address $addressMain The user's main address.
     * @param string $avatarUuid The public UUID of the user's avatar.
     * @param string $documentType The type of identification document the
     * person registered with.
     * @param string $documentNumber The identification document number the
     * person registered with.
     * @param string $documentCountryOfIssuance The country which issued the
     * identification document the person registered with.
     * @param int $documentFrontAttachmentId The reference to the uploaded
     * picture/scan of the front side of the identification document.
     * @param string $dateOfBirth The person's date of birth. Accepts ISO8601
     * date formats.
     * @param string $placeOfBirth The person's place of birth.
     * @param string $countryOfBirth The person's country of birth. Formatted as
     * a SO 3166-1 alpha-2 country code.
     * @param string $nationality The person's nationality. Formatted as a SO
     * 3166-1 alpha-2 country code.
     * @param string $language The person's preferred language. Formatted as a
     * ISO 639-1 language code plus a ISO 3166-1 alpha-2 country code, seperated
     * by an underscore.
     * @param string $region The person's preferred region. Formatted as a ISO
     * 639-1 language code plus a ISO 3166-1 alpha-2 country code, seperated by
     * an underscore.
     * @param string $gender The person's gender. Can be: MALE, FEMALE and
     * UNKNOWN.
     * @param string $status The user status. You are not allowed to update the
     * status via PUT.
     * @param string $subStatus The user sub-status. Can be updated to SUBMIT if
     * status is RECOVERY.
     * @param Pointer $legalGuardianAlias The legal guardian of the user.
     * Required for minors.
     * @param int $sessionTimeout The setting for the session timeout of the
     * user in seconds.
     * @param Amount $dailyLimitWithoutConfirmationLogin The amount the user can
     * pay in the session without asking for credentials.
     * @param string|null $firstName The person's first name.
     * @param string|null $middleName The person's middle name.
     * @param string|null $lastName The person's last name.
     * @param string|null $publicNickName The person's public nick name.
     * @param Address|null $addressPostal The person's postal address.
     * @param TaxResident[]|null $taxResident The user's tax residence numbers
     * for different countries.
     * @param int|null $documentBackAttachmentId The reference to the uploaded
     * picture/scan of the back side of the identification document.
     * @param string|null $displayName The person's legal name. Available legal
     * names can be listed via the 'user/{user_id}/legal-name' endpoint.
     */
    public function __construct(Address  $addressMain, string  $avatarUuid, string  $documentType, string  $documentNumber, string  $documentCountryOfIssuance, int  $documentFrontAttachmentId, string  $dateOfBirth, string  $placeOfBirth, string  $countryOfBirth, string  $nationality, string  $language, string  $region, string  $gender, string  $status, string  $subStatus, Pointer  $legalGuardianAlias, int  $sessionTimeout, Amount  $dailyLimitWithoutConfirmationLogin, string  $firstName = null, string  $middleName = null, string  $lastName = null, string  $publicNickName = null, Address  $addressPostal = null, array  $taxResident = null, int  $documentBackAttachmentId = null, string  $displayName = null)
    {
        $this->firstNameFieldForRequest = $firstName;
        $this->middleNameFieldForRequest = $middleName;
        $this->lastNameFieldForRequest = $lastName;
        $this->publicNickNameFieldForRequest = $publicNickName;
        $this->addressMainFieldForRequest = $addressMain;
        $this->addressPostalFieldForRequest = $addressPostal;
        $this->avatarUuidFieldForRequest = $avatarUuid;
        $this->taxResidentFieldForRequest = $taxResident;
        $this->documentTypeFieldForRequest = $documentType;
        $this->documentNumberFieldForRequest = $documentNumber;
        $this->documentCountryOfIssuanceFieldForRequest = $documentCountryOfIssuance;
        $this->documentFrontAttachmentIdFieldForRequest = $documentFrontAttachmentId;
        $this->documentBackAttachmentIdFieldForRequest = $documentBackAttachmentId;
        $this->dateOfBirthFieldForRequest = $dateOfBirth;
        $this->placeOfBirthFieldForRequest = $placeOfBirth;
        $this->countryOfBirthFieldForRequest = $countryOfBirth;
        $this->nationalityFieldForRequest = $nationality;
        $this->languageFieldForRequest = $language;
        $this->regionFieldForRequest = $region;
        $this->genderFieldForRequest = $gender;
        $this->statusFieldForRequest = $status;
        $this->subStatusFieldForRequest = $subStatus;
        $this->legalGuardianAliasFieldForRequest = $legalGuardianAlias;
        $this->sessionTimeoutFieldForRequest = $sessionTimeout;
        $this->dailyLimitWithoutConfirmationLoginFieldForRequest = $dailyLimitWithoutConfirmationLogin;
        $this->displayNameFieldForRequest = $displayName;
    }

    /**
     * Get a specific person.
     *
     * @param int $userPersonId
     * @param string[] $customHeaders
     *
     * @return BunqResponseUserPerson
     */
    public static function get( array $customHeaders = []): BunqResponseUserPerson
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

        return BunqResponseUserPerson::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Modify a specific person object's data.
     *
     * @param int $userPersonId
     * @param string|null $firstName The person's first name.
     * @param string|null $middleName The person's middle name.
     * @param string|null $lastName The person's last name.
     * @param string|null $publicNickName The person's public nick name.
     * @param Address|null $addressMain The user's main address.
     * @param Address|null $addressPostal The person's postal address.
     * @param string|null $avatarUuid The public UUID of the user's avatar.
     * @param TaxResident[]|null $taxResident The user's tax residence numbers
     * for different countries.
     * @param string|null $documentType The type of identification document the
     * person registered with.
     * @param string|null $documentNumber The identification document number the
     * person registered with.
     * @param string|null $documentCountryOfIssuance The country which issued
     * the identification document the person registered with.
     * @param int|null $documentFrontAttachmentId The reference to the uploaded
     * picture/scan of the front side of the identification document.
     * @param int|null $documentBackAttachmentId The reference to the uploaded
     * picture/scan of the back side of the identification document.
     * @param string|null $dateOfBirth The person's date of birth. Accepts
     * ISO8601 date formats.
     * @param string|null $placeOfBirth The person's place of birth.
     * @param string|null $countryOfBirth The person's country of birth.
     * Formatted as a SO 3166-1 alpha-2 country code.
     * @param string|null $nationality The person's nationality. Formatted as a
     * SO 3166-1 alpha-2 country code.
     * @param string|null $language The person's preferred language. Formatted
     * as a ISO 639-1 language code plus a ISO 3166-1 alpha-2 country code,
     * seperated by an underscore.
     * @param string|null $region The person's preferred region. Formatted as a
     * ISO 639-1 language code plus a ISO 3166-1 alpha-2 country code, seperated
     * by an underscore.
     * @param string|null $gender The person's gender. Can be: MALE, FEMALE and
     * UNKNOWN.
     * @param string|null $status The user status. You are not allowed to update
     * the status via PUT.
     * @param string|null $subStatus The user sub-status. Can be updated to
     * SUBMIT if status is RECOVERY.
     * @param Pointer|null $legalGuardianAlias The legal guardian of the user.
     * Required for minors.
     * @param int|null $sessionTimeout The setting for the session timeout of
     * the user in seconds.
     * @param Amount|null $dailyLimitWithoutConfirmationLogin The amount the
     * user can pay in the session without asking for credentials.
     * @param string|null $displayName The person's legal name. Available legal
     * names can be listed via the 'user/{user_id}/legal-name' endpoint.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(string  $firstName = null, string  $middleName = null, string  $lastName = null, string  $publicNickName = null, Address  $addressMain = null, Address  $addressPostal = null, string  $avatarUuid = null, array  $taxResident = null, string  $documentType = null, string  $documentNumber = null, string  $documentCountryOfIssuance = null, int  $documentFrontAttachmentId = null, int  $documentBackAttachmentId = null, string  $dateOfBirth = null, string  $placeOfBirth = null, string  $countryOfBirth = null, string  $nationality = null, string  $language = null, string  $region = null, string  $gender = null, string  $status = null, string  $subStatus = null, Pointer  $legalGuardianAlias = null, int  $sessionTimeout = null, Amount  $dailyLimitWithoutConfirmationLogin = null, string  $displayName = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId()]
            ),
            [self::FIELD_FIRST_NAME => $firstName,
self::FIELD_MIDDLE_NAME => $middleName,
self::FIELD_LAST_NAME => $lastName,
self::FIELD_PUBLIC_NICK_NAME => $publicNickName,
self::FIELD_ADDRESS_MAIN => $addressMain,
self::FIELD_ADDRESS_POSTAL => $addressPostal,
self::FIELD_AVATAR_UUID => $avatarUuid,
self::FIELD_TAX_RESIDENT => $taxResident,
self::FIELD_DOCUMENT_TYPE => $documentType,
self::FIELD_DOCUMENT_NUMBER => $documentNumber,
self::FIELD_DOCUMENT_COUNTRY_OF_ISSUANCE => $documentCountryOfIssuance,
self::FIELD_DOCUMENT_FRONT_ATTACHMENT_ID => $documentFrontAttachmentId,
self::FIELD_DOCUMENT_BACK_ATTACHMENT_ID => $documentBackAttachmentId,
self::FIELD_DATE_OF_BIRTH => $dateOfBirth,
self::FIELD_PLACE_OF_BIRTH => $placeOfBirth,
self::FIELD_COUNTRY_OF_BIRTH => $countryOfBirth,
self::FIELD_NATIONALITY => $nationality,
self::FIELD_LANGUAGE => $language,
self::FIELD_REGION => $region,
self::FIELD_GENDER => $gender,
self::FIELD_STATUS => $status,
self::FIELD_SUB_STATUS => $subStatus,
self::FIELD_LEGAL_GUARDIAN_ALIAS => $legalGuardianAlias,
self::FIELD_SESSION_TIMEOUT => $sessionTimeout,
self::FIELD_DAILY_LIMIT_WITHOUT_CONFIRMATION_LOGIN => $dailyLimitWithoutConfirmationLogin,
self::FIELD_DISPLAY_NAME => $displayName],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * The id of the modified person object.
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
     * The timestamp of the person object's creation.
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
     * The timestamp of the person object's last update.
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
     * The person's public UUID.
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
     * The person's first name.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * The person's middle name.
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $middleName
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    /**
     * The person's last name.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * The person's legal name.
     *
     * @return string
     */
    public function getLegalName()
    {
        return $this->legalName;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $legalName
     */
    public function setLegalName($legalName)
    {
        $this->legalName = $legalName;
    }

    /**
     * The display name for the person.
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
     * The public nick name for the person.
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
     * The aliases of the user.
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
     * The person's main address.
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
     * The person's postal address.
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
     * The person's date of birth. Accepts ISO8601 date formats.
     *
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * The person's place of birth.
     *
     * @return string
     */
    public function getPlaceOfBirth()
    {
        return $this->placeOfBirth;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $placeOfBirth
     */
    public function setPlaceOfBirth($placeOfBirth)
    {
        $this->placeOfBirth = $placeOfBirth;
    }

    /**
     * The person's country of birth. Formatted as a SO 3166-1 alpha-2 country
     * code.
     *
     * @return string
     */
    public function getCountryOfBirth()
    {
        return $this->countryOfBirth;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $countryOfBirth
     */
    public function setCountryOfBirth($countryOfBirth)
    {
        $this->countryOfBirth = $countryOfBirth;
    }

    /**
     * The person's nationality. Formatted as a SO 3166-1 alpha-2 country code.
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $nationality
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
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
     * The person's gender. Can be MALE, FEMALE or UNKNOWN.
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * The user's avatar.
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
     * The user status. The user status. Can be: ACTIVE, BLOCKED, SIGNUP,
     * RECOVERY, DENIED or ABORTED.
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
     * The setting for the session timeout of the user in seconds.
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
     * The amount the user can pay in the session without asking for
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
     * callback for this UserPerson.
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

        if (!is_null($this->firstName)) {
            return false;
        }

        if (!is_null($this->middleName)) {
            return false;
        }

        if (!is_null($this->lastName)) {
            return false;
        }

        if (!is_null($this->legalName)) {
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

        if (!is_null($this->taxResident)) {
            return false;
        }

        if (!is_null($this->addressMain)) {
            return false;
        }

        if (!is_null($this->addressPostal)) {
            return false;
        }

        if (!is_null($this->dateOfBirth)) {
            return false;
        }

        if (!is_null($this->placeOfBirth)) {
            return false;
        }

        if (!is_null($this->countryOfBirth)) {
            return false;
        }

        if (!is_null($this->nationality)) {
            return false;
        }

        if (!is_null($this->language)) {
            return false;
        }

        if (!is_null($this->region)) {
            return false;
        }

        if (!is_null($this->gender)) {
            return false;
        }

        if (!is_null($this->avatar)) {
            return false;
        }

        if (!is_null($this->versionTermsOfService)) {
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

        if (!is_null($this->relations)) {
            return false;
        }

        return true;
    }
}
