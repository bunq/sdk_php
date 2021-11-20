<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Address;
use bunq\Model\Generated\Object\CompanyVatNumber;
use bunq\Model\Generated\Object\Ubo;

/**
 * Create and manage companies.
 *
 * @generated
 */
class Company extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/company';
    const ENDPOINT_URL_READ = 'user/%s/company/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/company';
    const ENDPOINT_URL_UPDATE = 'user/%s/company/%s';

    /**
     * Field constants.
     */
    const FIELD_NAME = 'name';
    const FIELD_ADDRESS_MAIN = 'address_main';
    const FIELD_ADDRESS_POSTAL = 'address_postal';
    const FIELD_COUNTRY = 'country';
    const FIELD_UBO = 'ubo';
    const FIELD_CHAMBER_OF_COMMERCE_NUMBER = 'chamber_of_commerce_number';
    const FIELD_LEGAL_FORM = 'legal_form';
    const FIELD_SUBSCRIPTION_TYPE = 'subscription_type';
    const FIELD_AVATAR_UUID = 'avatar_uuid';
    const FIELD_VAT_NUMBER = 'vat_number';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'UserCompany';

    /**
     * @var UserCompany
     */
    protected $userCompany;

    /**
     * The company name.
     *
     * @var string
     */
    protected $nameFieldForRequest;

    /**
     * The company's main address.
     *
     * @var Address
     */
    protected $addressMainFieldForRequest;

    /**
     * The company's postal address.
     *
     * @var Address
     */
    protected $addressPostalFieldForRequest;

    /**
     * The country where the company is registered.
     *
     * @var string
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
     * @var string
     */
    protected $legalFormFieldForRequest;

    /**
     * The subscription type for the company.
     *
     * @var string
     */
    protected $subscriptionTypeFieldForRequest;

    /**
     * The public UUID of the company's avatar.
     *
     * @var string|null
     */
    protected $avatarUuidFieldForRequest;

    /**
     * All the vat numbers of the company
     *
     * @var CompanyVatNumber|null
     */
    protected $vatNumberFieldForRequest;

    /**
     * @param string $name The company name.
     * @param Address $addressMain The company's main address.
     * @param Address $addressPostal The company's postal address.
     * @param string $country The country where the company is registered.
     * @param string $legalForm The company's legal form.
     * @param string $subscriptionType The subscription type for the company.
     * @param Ubo[]|null $ubo The names and birth dates of the company's
     * ultimate beneficiary owners. Minimum zero, maximum four.
     * @param string|null $chamberOfCommerceNumber The company's chamber of
     * commerce number.
     * @param string|null $avatarUuid The public UUID of the company's avatar.
     * @param CompanyVatNumber|null $vatNumber All the vat numbers of the
     * company
     */
    public function __construct(string  $name, Address  $addressMain, Address  $addressPostal, string  $country, string  $legalForm, string  $subscriptionType, array  $ubo = null, string  $chamberOfCommerceNumber = null, string  $avatarUuid = null, CompanyVatNumber  $vatNumber = null)
    {
        $this->nameFieldForRequest = $name;
        $this->addressMainFieldForRequest = $addressMain;
        $this->addressPostalFieldForRequest = $addressPostal;
        $this->countryFieldForRequest = $country;
        $this->uboFieldForRequest = $ubo;
        $this->chamberOfCommerceNumberFieldForRequest = $chamberOfCommerceNumber;
        $this->legalFormFieldForRequest = $legalForm;
        $this->subscriptionTypeFieldForRequest = $subscriptionType;
        $this->avatarUuidFieldForRequest = $avatarUuid;
        $this->vatNumberFieldForRequest = $vatNumber;
    }

    /**
     * @param string $name The company name.
     * @param Address $addressMain The company's main address.
     * @param Address $addressPostal The company's postal address.
     * @param string $country The country where the company is registered.
     * @param string $legalForm The company's legal form.
     * @param string $subscriptionType The subscription type for the company.
     * @param Ubo[]|null $ubo The names and birth dates of the company's
     * ultimate beneficiary owners. Minimum zero, maximum four.
     * @param string|null $chamberOfCommerceNumber The company's chamber of
     * commerce number.
     * @param string|null $avatarUuid The public UUID of the company's avatar.
     * @param CompanyVatNumber|null $vatNumber All the vat numbers of the
     * company
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(string  $name, Address  $addressMain, Address  $addressPostal, string  $country, string  $legalForm, string  $subscriptionType, array  $ubo = null, string  $chamberOfCommerceNumber = null, string  $avatarUuid = null, CompanyVatNumber  $vatNumber = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [self::FIELD_NAME => $name,
self::FIELD_ADDRESS_MAIN => $addressMain,
self::FIELD_ADDRESS_POSTAL => $addressPostal,
self::FIELD_COUNTRY => $country,
self::FIELD_UBO => $ubo,
self::FIELD_CHAMBER_OF_COMMERCE_NUMBER => $chamberOfCommerceNumber,
self::FIELD_LEGAL_FORM => $legalForm,
self::FIELD_SUBSCRIPTION_TYPE => $subscriptionType,
self::FIELD_AVATAR_UUID => $avatarUuid,
self::FIELD_VAT_NUMBER => $vatNumber],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param int $companyId
     * @param string[] $customHeaders
     *
     * @return BunqResponseCompany
     */
    public static function get(int $companyId, array $customHeaders = []): BunqResponseCompany
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $companyId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseCompany::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseCompanyList
     */
    public static function listing( array $params = [], array $customHeaders = []): BunqResponseCompanyList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId()]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseCompanyList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $companyId
     * @param string|null $avatarUuid The public UUID of the company's avatar.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(int $companyId, string  $avatarUuid = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $companyId]
            ),
            [self::FIELD_AVATAR_UUID => $avatarUuid],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
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
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->userCompany)) {
            return false;
        }

        return true;
    }
}
