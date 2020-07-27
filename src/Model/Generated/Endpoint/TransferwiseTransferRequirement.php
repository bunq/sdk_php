<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\TransferwiseRequirementField;

/**
 * Used to determine the account requirements for Transferwise transfers.
 *
 * @generated
 */
class TransferwiseTransferRequirement extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/transferwise-quote/%s/transferwise-transfer-requirement';

    /**
     * Field constants.
     */
    const FIELD_RECIPIENT_ID = 'recipient_id';
    const FIELD_DETAIL = 'detail';

    /**
     * A possible transfer type.
     *
     * @var string
     */
    protected $type;

    /**
     * The label of the possible transfer type to show to the user.
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
     * The id of the target account.
     *
     * @var string
     */
    protected $recipientIdFieldForRequest;

    /**
     * The fields which were specified as "required" and have since been filled
     * by the user. Always provide the full list.
     *
     * @var TransferwiseRequirementField[]|null
     */
    protected $detailFieldForRequest;

    /**
     * @param string $recipientId The id of the target account.
     * @param TransferwiseRequirementField[]|null $detail The fields which were
     * specified as "required" and have since been filled by the user. Always
     * provide the full list.
     */
    public function __construct(string $recipientId, array $detail = null)
    {
        $this->recipientIdFieldForRequest = $recipientId;
        $this->detailFieldForRequest = $detail;
    }

    /**
     * @param int $transferwiseQuoteId
     * @param string $recipientId The id of the target account.
     * @param TransferwiseRequirementField[]|null $detail The fields which were
     * specified as "required" and have since been filled by the user. Always
     * provide the full list.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        int $transferwiseQuoteId,
        string $recipientId,
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
                self::FIELD_RECIPIENT_ID => $recipientId,
                self::FIELD_DETAIL => $detail,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * A possible transfer type.
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
     * The label of the possible transfer type to show to the user.
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
