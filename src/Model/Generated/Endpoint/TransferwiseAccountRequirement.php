<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\TransferwiseRequirementField;

/**
 * Used to determine the recipient account requirements for Transferwise
 * transfers.
 *
 * @generated
 */
class TransferwiseAccountRequirement extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/transferwise-quote/%s/transferwise-recipient-requirement';
    const ENDPOINT_URL_LISTING = 'user/%s/transferwise-quote/%s/transferwise-recipient-requirement';

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
    const OBJECT_TYPE_GET = 'TransferwiseRequirement';

    /**
     * A possible recipient account type.
     *
     * @var string
     */
    protected $type;

    /**
     * The label of the possible recipient account type to show to the user.
     *
     * @var string
     */
    protected $label;

    /**
     * The fields which the user needs to fill.
     *
     * @var TransferwiseRequirementField[]|null
     */
    protected $fields;

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
    public function __construct(string $nameAccountHolder, string $type, string $country = null, array $detail = null)
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
    public static function create(
        int $transferwiseQuoteId,
        string $nameAccountHolder,
        string $type,
        string $country = null,
        array $detail = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), $transferwiseQuoteId]
            ),
            [
                self::FIELD_COUNTRY => $country,
                self::FIELD_NAME_ACCOUNT_HOLDER => $nameAccountHolder,
                self::FIELD_TYPE => $type,
                self::FIELD_DETAIL => $detail,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
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
     * @return BunqResponseTransferwiseAccountRequirementList
     */
    public static function listing(
        int $transferwiseQuoteId,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseTransferwiseAccountRequirementList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), $transferwiseQuoteId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseTransferwiseAccountRequirementList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * A possible recipient account type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The label of the possible recipient account type to show to the user.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * The fields which the user needs to fill.
     *
     * @return TransferwiseRequirementField[]
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param TransferwiseRequirementField[] $fields
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->label)) {
            return false;
        }

        if (!is_null($this->fields)) {
            return false;
        }

        return true;
    }
}
