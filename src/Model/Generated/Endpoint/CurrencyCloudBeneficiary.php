<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Endpoint to manage CurrencyCloud beneficiaries.
 *
 * @generated
 */
class CurrencyCloudBeneficiary extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/currency-cloud-beneficiary';
    const ENDPOINT_URL_READ = 'user/%s/currency-cloud-beneficiary/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/currency-cloud-beneficiary';

    /**
     * Field constants.
     */
    const FIELD_NAME = 'name';
    const FIELD_COUNTRY = 'country';
    const FIELD_CURRENCY = 'currency';
    const FIELD_PAYMENT_TYPE = 'payment_type';
    const FIELD_LEGAL_ENTITY_TYPE = 'legal_entity_type';
    const FIELD_ALL_FIELD = 'all_field';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'CurrencyCloudBeneficiary';

    /**
     * The id of the profile.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the beneficiaries creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the beneficiaries last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The name of the beneficiary.
     *
     * @var string
     */
    protected $name;

    /**
     * The account number to display for the beneficiary.
     *
     * @var string
     */
    protected $accountNumber;

    /**
     * The currency of the beneficiary.
     *
     * @var string
     */
    protected $currency;

    /**
     * The external identifier of the beneficiary.
     *
     * @var string
     */
    protected $externalIdentifier;

    /**
     * The name of the beneficiary.
     *
     * @var string
     */
    protected $nameFieldForRequest;

    /**
     * The country of the beneficiary.
     *
     * @var string
     */
    protected $countryFieldForRequest;

    /**
     * The currency of the beneficiary.
     *
     * @var string
     */
    protected $currencyFieldForRequest;

    /**
     * The payment type this requirement is for.
     *
     * @var string
     */
    protected $paymentTypeFieldForRequest;

    /**
     * The legal entity type of the beneficiary.
     *
     * @var string
     */
    protected $legalEntityTypeFieldForRequest;

    /**
     * All fields that were required by CurrencyCloud. Obtained through the
     * CurrencyCloudBeneficiaryRequirement listing.
     *
     * @var string[]
     */
    protected $allFieldFieldForRequest;

    /**
     * @param string $name The name of the beneficiary.
     * @param string $country The country of the beneficiary.
     * @param string $currency The currency of the beneficiary.
     * @param string $paymentType The payment type this requirement is for.
     * @param string $legalEntityType The legal entity type of the beneficiary.
     * @param string[] $allField All fields that were required by CurrencyCloud.
     * Obtained through the CurrencyCloudBeneficiaryRequirement listing.
     */
    public function __construct(string  $name, string  $country, string  $currency, string  $paymentType, string  $legalEntityType, array  $allField)
    {
        $this->nameFieldForRequest = $name;
        $this->countryFieldForRequest = $country;
        $this->currencyFieldForRequest = $currency;
        $this->paymentTypeFieldForRequest = $paymentType;
        $this->legalEntityTypeFieldForRequest = $legalEntityType;
        $this->allFieldFieldForRequest = $allField;
    }

    /**
     * @param string $name The name of the beneficiary.
     * @param string $country The country of the beneficiary.
     * @param string $currency The currency of the beneficiary.
     * @param string $paymentType The payment type this requirement is for.
     * @param string $legalEntityType The legal entity type of the beneficiary.
     * @param string[] $allField All fields that were required by CurrencyCloud.
     * Obtained through the CurrencyCloudBeneficiaryRequirement listing.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(string  $name, string  $country, string  $currency, string  $paymentType, string  $legalEntityType, array  $allField, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [self::FIELD_NAME => $name,
self::FIELD_COUNTRY => $country,
self::FIELD_CURRENCY => $currency,
self::FIELD_PAYMENT_TYPE => $paymentType,
self::FIELD_LEGAL_ENTITY_TYPE => $legalEntityType,
self::FIELD_ALL_FIELD => $allField],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param int $currencyCloudBeneficiaryId
     * @param string[] $customHeaders
     *
     * @return BunqResponseCurrencyCloudBeneficiary
     */
    public static function get(int $currencyCloudBeneficiaryId, array $customHeaders = []): BunqResponseCurrencyCloudBeneficiary
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $currencyCloudBeneficiaryId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseCurrencyCloudBeneficiary::castFromBunqResponse(
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
     * @return BunqResponseCurrencyCloudBeneficiaryList
     */
    public static function listing( array $params = [], array $customHeaders = []): BunqResponseCurrencyCloudBeneficiaryList
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

        return BunqResponseCurrencyCloudBeneficiaryList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the profile.
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
     * The timestamp of the beneficiaries creation.
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
     * The timestamp of the beneficiaries last update.
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
     * The name of the beneficiary.
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
     * The account number to display for the beneficiary.
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $accountNumber
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * The currency of the beneficiary.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * The external identifier of the beneficiary.
     *
     * @return string
     */
    public function getExternalIdentifier()
    {
        return $this->externalIdentifier;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $externalIdentifier
     */
    public function setExternalIdentifier($externalIdentifier)
    {
        $this->externalIdentifier = $externalIdentifier;
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

        if (!is_null($this->name)) {
            return false;
        }

        if (!is_null($this->accountNumber)) {
            return false;
        }

        if (!is_null($this->currency)) {
            return false;
        }

        if (!is_null($this->externalIdentifier)) {
            return false;
        }

        return true;
    }
}
