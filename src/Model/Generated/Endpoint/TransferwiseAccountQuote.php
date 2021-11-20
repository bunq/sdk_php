<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\TransferwiseRequirementField;

/**
 * Used to manage recipient accounts with Transferwise.
 *
 * @generated
 */
class TransferwiseAccountQuote extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/transferwise-quote/%s/transferwise-recipient';
    const ENDPOINT_URL_READ = 'user/%s/transferwise-quote/%s/transferwise-recipient/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/transferwise-quote/%s/transferwise-recipient';
    const ENDPOINT_URL_DELETE = 'user/%s/transferwise-quote/%s/transferwise-recipient/%s';

    /**
     * Field constants.
     */
    const FIELD_COUNTRY = 'country';
    const FIELD_NAME_ACCOUNT_HOLDER = 'name_account_holder';
    const FIELD_TYPE = 'type';
    const FIELD_DETAIL = 'detail';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'TransferwiseRecipient';

    /**
     * Transferwise's id of the account.
     *
     * @var string
     */
    protected $accountId;

    /**
     * The currency the account.
     *
     * @var string
     */
    protected $currency;

    /**
     * The country of the account.
     *
     * @var string
     */
    protected $country;

    /**
     * The name of the account holder.
     *
     * @var string
     */
    protected $nameAccountHolder;

    /**
     * The account number.
     *
     * @var string
     */
    protected $accountNumber;

    /**
     * The bank code.
     *
     * @var string
     */
    protected $bankCode;

    /**
     * The country of the receiving account.
     *
     * @var string|null
     */
    protected $countryFieldForRequest;

    /**
     * The name of the account holder.
     *
     * @var string
     */
    protected $nameAccountHolderFieldForRequest;

    /**
     * The chosen recipient account type. The possible options are provided
     * dynamically in the response endpoint.
     *
     * @var string
     */
    protected $typeFieldForRequest;

    /**
     * The fields which were specified as "required" and have since been filled
     * by the user. Always provide the full list.
     *
     * @var TransferwiseRequirementField[]|null
     */
    protected $detailFieldForRequest;

    /**
     * @param string $nameAccountHolder The name of the account holder.
     * @param string $type The chosen recipient account type. The possible
     * options are provided dynamically in the response endpoint.
     * @param string|null $country The country of the receiving account.
     * @param TransferwiseRequirementField[]|null $detail The fields which were
     * specified as "required" and have since been filled by the user. Always
     * provide the full list.
     */
    public function __construct(string  $nameAccountHolder, string  $type, string  $country = null, array  $detail = null)
    {
        $this->countryFieldForRequest = $country;
        $this->nameAccountHolderFieldForRequest = $nameAccountHolder;
        $this->typeFieldForRequest = $type;
        $this->detailFieldForRequest = $detail;
    }

    /**
     * @param int $transferwiseQuoteId
     * @param string $nameAccountHolder The name of the account holder.
     * @param string $type The chosen recipient account type. The possible
     * options are provided dynamically in the response endpoint.
     * @param string|null $country The country of the receiving account.
     * @param TransferwiseRequirementField[]|null $detail The fields which were
     * specified as "required" and have since been filled by the user. Always
     * provide the full list.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(int $transferwiseQuoteId, string  $nameAccountHolder, string  $type, string  $country = null, array  $detail = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), $transferwiseQuoteId]
            ),
            [self::FIELD_COUNTRY => $country,
self::FIELD_NAME_ACCOUNT_HOLDER => $nameAccountHolder,
self::FIELD_TYPE => $type,
self::FIELD_DETAIL => $detail],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param int $transferwiseQuoteId
     * @param int $transferwiseAccountQuoteId
     * @param string[] $customHeaders
     *
     * @return BunqResponseTransferwiseAccountQuote
     */
    public static function get(int $transferwiseQuoteId, int $transferwiseAccountQuoteId, array $customHeaders = []): BunqResponseTransferwiseAccountQuote
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $transferwiseQuoteId, $transferwiseAccountQuoteId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseTransferwiseAccountQuote::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $transferwiseQuoteId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseTransferwiseAccountQuoteList
     */
    public static function listing(int $transferwiseQuoteId, array $params = [], array $customHeaders = []): BunqResponseTransferwiseAccountQuoteList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), $transferwiseQuoteId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseTransferwiseAccountQuoteList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param string[] $customHeaders
     * @param int $transferwiseQuoteId
     * @param int $transferwiseAccountQuoteId
     *
     * @return BunqResponseNull
     */
    public static function delete(int $transferwiseQuoteId, int $transferwiseAccountQuoteId, array $customHeaders = []): BunqResponseNull
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->delete(
            vsprintf(
                self::ENDPOINT_URL_DELETE,
                [static::determineUserId(), $transferwiseQuoteId, $transferwiseAccountQuoteId]
            ),
            $customHeaders
        );

        return BunqResponseNull::castFromBunqResponse(
            new BunqResponse(null, $responseRaw->getHeaders())
        );
    }

    /**
     * Transferwise's id of the account.
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * The currency the account.
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
     * The country of the account.
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
     * The name of the account holder.
     *
     * @return string
     */
    public function getNameAccountHolder()
    {
        return $this->nameAccountHolder;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $nameAccountHolder
     */
    public function setNameAccountHolder($nameAccountHolder)
    {
        $this->nameAccountHolder = $nameAccountHolder;
    }

    /**
     * The account number.
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
     * The bank code.
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $bankCode
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->accountId)) {
            return false;
        }

        if (!is_null($this->currency)) {
            return false;
        }

        if (!is_null($this->country)) {
            return false;
        }

        if (!is_null($this->nameAccountHolder)) {
            return false;
        }

        if (!is_null($this->accountNumber)) {
            return false;
        }

        if (!is_null($this->bankCode)) {
            return false;
        }

        return true;
    }
}
