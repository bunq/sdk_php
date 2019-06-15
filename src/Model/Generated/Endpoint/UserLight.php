<?php

namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Address;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Avatar;
use bunq\Model\Generated\Object\NotificationFilter;
use bunq\Model\Generated\Object\Pointer;
use bunq\Model\Generated\Object\TaxResident;

/**
 * Show the authenticated user, if it is a light user.
 *
 * @generated
 */
class UserLight extends BunqModel
{
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
    const FIELD_SOCIAL_SECURITY_NUMBER = 'social_security_number';
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
    const FIELD_NOTIFICATION_FILTERS = 'notification_filters';

    /**
     * The id of the user.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the user object's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the user object's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The user's public UUID.
     *
     * @var string
     */
    protected $publicUuid;

    /**
     * The user's first name.
     *
     * @var string
     */
    protected $firstName;

    /**
     * The user's middle name.
     *
     * @var string
     */
    protected $middleName;

    /**
     * The user's last name.
     *
     * @var string
     */
    protected $lastName;

    /**
     * The user's legal name.
     *
     * @var string
     */
    protected $legalName;

    /**
     * The display name for the user.
     *
     * @var string
     */
    protected $displayName;

    /**
     * The public nick name for the user.
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
     * The user's social security number.
     *
     * @var string
     */
    protected $socialSecurityNumber;

    /**
     * The user's tax residence numbers for different countries.
     *
     * @var TaxResident[]
     */
    protected $taxResident;

    /**
     * The type of identification document the user registered with.
     *
     * @var string
     */
    protected $documentType;

    /**
     * The identification document number the user registered with.
     *
     * @var string
     */
    protected $documentNumber;

    /**
     * The country which issued the identification document the user registered
     * with.
     *
     * @var string
     */
    protected $documentCountryOfIssuance;

    /**
     * The user's main address.
     *
     * @var Address
     */
    protected $addressMain;

    /**
     * The user's postal address.
     *
     * @var Address
     */
    protected $addressPostal;

    /**
     * The user's date of birth. Accepts ISO8601 date formats.
     *
     * @var string
     */
    protected $dateOfBirth;

    /**
     * The user's place of birth.
     *
     * @var string
     */
    protected $placeOfBirth;

    /**
     * The user's country of birth. Formatted as a SO 3166-1 alpha-2 country
     * code.
     *
     * @var string
     */
    protected $countryOfBirth;

    /**
     * The user's nationality. Formatted as a SO 3166-1 alpha-2 country code.
     *
     * @var string
     */
    protected $nationality;

    /**
     * The user's preferred language. Formatted as a ISO 639-1 language code
     * plus a ISO 3166-1 alpha-2 country code, seperated by an underscore.
     *
     * @var string
     */
    protected $language;

    /**
     * The user's preferred region. Formatted as a ISO 639-1 language code plus
     * a ISO 3166-1 alpha-2 country code, seperated by an underscore.
     *
     * @var string
     */
    protected $region;

    /**
     * The user's gender. Can be MALE, FEMALE or UNKNOWN.
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
     * The user status. The user status. Can be: ACTIVE, BLOCKED, SIGNUP, DENIED
     * or ABORTED.
     *
     * @var string
     */
    protected $status;

    /**
     * The user sub-status. Can be: NONE, FACE_RESET, APPROVAL, APPROVAL_PARENT,
     * AWAITING_PARENT, APPROVAL_SUPPORT, COUNTER_IBAN, IDEAL or SUBMIT.
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
     * callback for this UserLight.
     *
     * @var NotificationFilter[]
     */
    protected $notificationFilters;

    /**
     * The user's first name.
     *
     * @var string
     */
    protected $firstNameFieldForRequest;

    /**
     * The user's middle name.
     *
     * @var string|null
     */
    protected $middleNameFieldForRequest;

    /**
     * The user's last name.
     *
     * @var string
     */
    protected $lastNameFieldForRequest;

    /**
     * The user's public nick name.
     *
     * @var string
     */
    protected $publicNickNameFieldForRequest;

    /**
     * The user's main address.
     *
     * @var Address
     */
    protected $addressMainFieldForRequest;

    /**
     * The user's postal address.
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
     * The user's social security number.
     *
     * @var string|null
     */
    protected $socialSecurityNumberFieldForRequest;

    /**
     * The user's tax residence numbers for different countries.
     *
     * @var TaxResident[]|null
     */
    protected $taxResidentFieldForRequest;

    /**
     * The type of identification document the user registered with.
     *
     * @var string|null
     */
    protected $documentTypeFieldForRequest;

    /**
     * The identification document number the user registered with.
     *
     * @var string|null
     */
    protected $documentNumberFieldForRequest;

    /**
     * The country which issued the identification document the user registered
     * with.
     *
     * @var string|null
     */
    protected $documentCountryOfIssuanceFieldForRequest;

    /**
     * The reference to the uploaded picture/scan of the front side of the
     * identification document.
     *
     * @var int|null
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
     * The user's date of birth. Accepts ISO8601 date formats.
     *
     * @var string
     */
    protected $dateOfBirthFieldForRequest;

    /**
     * The user's place of birth.
     *
     * @var string|null
     */
    protected $placeOfBirthFieldForRequest;

    /**
     * The user's country of birth. Formatted as a SO 3166-1 alpha-2 country
     * code.
     *
     * @var string|null
     */
    protected $countryOfBirthFieldForRequest;

    /**
     * The user's nationality. Formatted as a SO 3166-1 alpha-2 country code.
     *
     * @var string|null
     */
    protected $nationalityFieldForRequest;

    /**
     * The user's preferred language. Formatted as a ISO 639-1 language code
     * plus a ISO 3166-1 alpha-2 country code, seperated by an underscore.
     *
     * @var string
     */
    protected $languageFieldForRequest;

    /**
     * The user's preferred region. Formatted as a ISO 639-1 language code plus
     * a ISO 3166-1 alpha-2 country code, seperated by an underscore.
     *
     * @var string
     */
    protected $regionFieldForRequest;

    /**
     * The user's gender. Can be: MALE, FEMALE and UNKNOWN.
     *
     * @var string|null
     */
    protected $genderFieldForRequest;

    /**
     * The user status. You are not allowed to update the status via PUT.
     *
     * @var string
     */
    protected $statusFieldForRequest;

    /**
     * The user sub-status. Can be updated to SUBMIT to apply for a full bunq
     * account.
     *
     * @var string
     */
    protected $subStatusFieldForRequest;

    /**
     * The legal guardian of the user. Required for minors.
     *
     * @var Pointer|null
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
     * The types of notifications that will result in a push notification or URL
     * callback for this UserLight.
     *
     * @var NotificationFilter[]|null
     */
    protected $notificationFiltersFieldForRequest;

    /**
     * @param string $firstName                              The user's first name.
     * @param string $lastName                               The user's last name.
     * @param string $publicNickName                         The user's public nick name.
     * @param Address $addressMain                           The user's main address.
     * @param string $avatarUuid                             The public UUID of the user's avatar.
     * @param string $dateOfBirth                            The user's date of birth. Accepts ISO8601 date
     *                                                       formats.
     * @param string $language                               The user's preferred language. Formatted as a ISO
     *                                                       639-1 language code plus a ISO 3166-1 alpha-2 country
     *                                                       code, seperated by an underscore.
     * @param string $region                                 The user's preferred region. Formatted as a ISO
     *                                                       639-1 language code plus a ISO 3166-1 alpha-2 country
     *                                                       code, seperated by an underscore.
     * @param string $status                                 The user status. You are not allowed to update the
     *                                                       status via PUT.
     * @param string $subStatus                              The user sub-status. Can be updated to SUBMIT to
     *                                                       apply for a full bunq account.
     * @param int $sessionTimeout                            The setting for the session timeout of the
     *                                                       user in seconds.
     * @param Amount $dailyLimitWithoutConfirmationLogin     The amount the user can
     *                                                       pay in the session without asking for credentials.
     * @param string|null $middleName                        The user's middle name.
     * @param Address|null $addressPostal                    The user's postal address.
     * @param string|null $socialSecurityNumber              The user's social security
     *                                                       number.
     * @param TaxResident[]|null $taxResident                The user's tax residence numbers
     *                                                       for different countries.
     * @param string|null $documentType                      The type of identification document the
     *                                                       user registered with.
     * @param string|null $documentNumber                    The identification document number the
     *                                                       user registered with.
     * @param string|null $documentCountryOfIssuance         The country which issued
     *                                                       the identification document the user registered with.
     * @param int|null $documentFrontAttachmentId            The reference to the uploaded
     *                                                       picture/scan of the front side of the identification
     *                                                       document.
     * @param int|null $documentBackAttachmentId             The reference to the uploaded
     *                                                       picture/scan of the back side of the identification
     *                                                       document.
     * @param string|null $placeOfBirth                      The user's place of birth.
     * @param string|null $countryOfBirth                    The user's country of birth. Formatted
     *                                                       as a SO 3166-1 alpha-2 country code.
     * @param string|null $nationality                       The user's nationality. Formatted as a SO
     *                                                       3166-1 alpha-2 country code.
     * @param string|null $gender                            The user's gender. Can be: MALE, FEMALE and
     *                                                       UNKNOWN.
     * @param Pointer|null $legalGuardianAlias               The legal guardian of the user.
     *                                                       Required for minors.
     * @param NotificationFilter[]|null $notificationFilters The types of
     *                                                       notifications that will result in a push notification or
     *                                                       URL callback for this UserLight.
     */
    public function __construct(
        string $firstName,
        string $lastName,
        string $publicNickName,
        Address $addressMain,
        string $avatarUuid,
        string $dateOfBirth,
        string $language,
        string $region,
        string $status,
        string $subStatus,
        int $sessionTimeout,
        Amount $dailyLimitWithoutConfirmationLogin,
        string $middleName = null,
        Address $addressPostal = null,
        string $socialSecurityNumber = null,
        array $taxResident = null,
        string $documentType = null,
        string $documentNumber = null,
        string $documentCountryOfIssuance = null,
        int $documentFrontAttachmentId = null,
        int $documentBackAttachmentId = null,
        string $placeOfBirth = null,
        string $countryOfBirth = null,
        string $nationality = null,
        string $gender = null,
        Pointer $legalGuardianAlias = null,
        array $notificationFilters = null
    ) {
        $this->firstNameFieldForRequest = $firstName;
        $this->middleNameFieldForRequest = $middleName;
        $this->lastNameFieldForRequest = $lastName;
        $this->publicNickNameFieldForRequest = $publicNickName;
        $this->addressMainFieldForRequest = $addressMain;
        $this->addressPostalFieldForRequest = $addressPostal;
        $this->avatarUuidFieldForRequest = $avatarUuid;
        $this->socialSecurityNumberFieldForRequest = $socialSecurityNumber;
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
        $this->notificationFiltersFieldForRequest = $notificationFilters;
    }

    /**
     * The id of the user.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The timestamp of the user object's creation.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the user object's last update.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The user's public UUID.
     *
     * @return string
     */
    public function getPublicUuid()
    {
        return $this->publicUuid;
    }

    /**
     * @param string $publicUuid
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setPublicUuid($publicUuid)
    {
        $this->publicUuid = $publicUuid;
    }

    /**
     * The user's first name.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * The user's middle name.
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param string $middleName
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    /**
     * The user's last name.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * The user's legal name.
     *
     * @return string
     */
    public function getLegalName()
    {
        return $this->legalName;
    }

    /**
     * @param string $legalName
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setLegalName($legalName)
    {
        $this->legalName = $legalName;
    }

    /**
     * The display name for the user.
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * The public nick name for the user.
     *
     * @return string
     */
    public function getPublicNickName()
    {
        return $this->publicNickName;
    }

    /**
     * @param string $publicNickName
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     * @param Pointer[] $alias
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * The user's social security number.
     *
     * @return string
     */
    public function getSocialSecurityNumber()
    {
        return $this->socialSecurityNumber;
    }

    /**
     * @param string $socialSecurityNumber
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setSocialSecurityNumber($socialSecurityNumber)
    {
        $this->socialSecurityNumber = $socialSecurityNumber;
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
     * @param TaxResident[] $taxResident
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setTaxResident($taxResident)
    {
        $this->taxResident = $taxResident;
    }

    /**
     * The type of identification document the user registered with.
     *
     * @return string
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * @param string $documentType
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setDocumentType($documentType)
    {
        $this->documentType = $documentType;
    }

    /**
     * The identification document number the user registered with.
     *
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }

    /**
     * @param string $documentNumber
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setDocumentNumber($documentNumber)
    {
        $this->documentNumber = $documentNumber;
    }

    /**
     * The country which issued the identification document the user registered
     * with.
     *
     * @return string
     */
    public function getDocumentCountryOfIssuance()
    {
        return $this->documentCountryOfIssuance;
    }

    /**
     * @param string $documentCountryOfIssuance
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setDocumentCountryOfIssuance($documentCountryOfIssuance)
    {
        $this->documentCountryOfIssuance = $documentCountryOfIssuance;
    }

    /**
     * The user's main address.
     *
     * @return Address
     */
    public function getAddressMain()
    {
        return $this->addressMain;
    }

    /**
     * @param Address $addressMain
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setAddressMain($addressMain)
    {
        $this->addressMain = $addressMain;
    }

    /**
     * The user's postal address.
     *
     * @return Address
     */
    public function getAddressPostal()
    {
        return $this->addressPostal;
    }

    /**
     * @param Address $addressPostal
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setAddressPostal($addressPostal)
    {
        $this->addressPostal = $addressPostal;
    }

    /**
     * The user's date of birth. Accepts ISO8601 date formats.
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
     * The user's place of birth.
     *
     * @return string
     */
    public function getPlaceOfBirth()
    {
        return $this->placeOfBirth;
    }

    /**
     * @param string $placeOfBirth
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setPlaceOfBirth($placeOfBirth)
    {
        $this->placeOfBirth = $placeOfBirth;
    }

    /**
     * The user's country of birth. Formatted as a SO 3166-1 alpha-2 country
     * code.
     *
     * @return string
     */
    public function getCountryOfBirth()
    {
        return $this->countryOfBirth;
    }

    /**
     * @param string $countryOfBirth
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setCountryOfBirth($countryOfBirth)
    {
        $this->countryOfBirth = $countryOfBirth;
    }

    /**
     * The user's nationality. Formatted as a SO 3166-1 alpha-2 country code.
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
     * The user's preferred language. Formatted as a ISO 639-1 language code
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * The user's preferred region. Formatted as a ISO 639-1 language code plus
     * a ISO 3166-1 alpha-2 country code, seperated by an underscore.
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * The user's gender. Can be MALE, FEMALE or UNKNOWN.
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     * @param Avatar $avatar
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     * @param string $versionTermsOfService
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setVersionTermsOfService($versionTermsOfService)
    {
        $this->versionTermsOfService = $versionTermsOfService;
    }

    /**
     * The user status. The user status. Can be: ACTIVE, BLOCKED, SIGNUP, DENIED
     * or ABORTED.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The user sub-status. Can be: NONE, FACE_RESET, APPROVAL, APPROVAL_PARENT,
     * AWAITING_PARENT, APPROVAL_SUPPORT, COUNTER_IBAN, IDEAL or SUBMIT.
     *
     * @return string
     */
    public function getSubStatus()
    {
        return $this->subStatus;
    }

    /**
     * @param string $subStatus
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     * @param int $sessionTimeout
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     * @param Amount $dailyLimitWithoutConfirmationLogin
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setDailyLimitWithoutConfirmationLogin($dailyLimitWithoutConfirmationLogin)
    {
        $this->dailyLimitWithoutConfirmationLogin = $dailyLimitWithoutConfirmationLogin;
    }

    /**
     * The types of notifications that will result in a push notification or URL
     * callback for this UserLight.
     *
     * @return NotificationFilter[]
     */
    public function getNotificationFilters()
    {
        return $this->notificationFilters;
    }

    /**
     * @param NotificationFilter[] $notificationFilters
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setNotificationFilters($notificationFilters)
    {
        $this->notificationFilters = $notificationFilters;
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

        if (!is_null($this->socialSecurityNumber)) {
            return false;
        }

        if (!is_null($this->taxResident)) {
            return false;
        }

        if (!is_null($this->documentType)) {
            return false;
        }

        if (!is_null($this->documentNumber)) {
            return false;
        }

        if (!is_null($this->documentCountryOfIssuance)) {
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

        return true;
    }
}
