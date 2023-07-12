<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\LabelMonetaryAccount;

/**
 * MasterCard report view.
 *
 * @generated
 */
class MasterCardActionReport extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_MASTERCARD_ACTION_ID = 'mastercard_action_id';
    const FIELD_TYPE = 'type';
    const FIELD_STATUS = 'status';

    /**
     * The id of mastercard action being reported.
     *
     * @var int
     */
    protected $mastercardActionId;

    /**
     * The id of mastercard action being reported.
     *
     * @var string
     */
    protected $type;

    /**
     * The id of mastercard action being reported.
     *
     * @var string
     */
    protected $status;

    /**
     * The reported merchant.
     *
     * @var string
     */
    protected $merchantId;

    /**
     * The name of the merchant.
     *
     * @var string
     */
    protected $merchantName;

    /**
     * The monetary account label of the merchant.
     *
     * @var LabelMonetaryAccount
     */
    protected $counterpartyAlias;

    /**
     * The id of mastercard action being reported.
     *
     * @var int
     */
    protected $mastercardActionIdFieldForRequest;

    /**
     * The type of report. Can be 'FRAUD' or 'MERCHANT_BLOCKED'.
     *
     * @var string
     */
    protected $typeFieldForRequest;

    /**
     * The id of mastercard action being reported.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * @param int $mastercardActionId The id of mastercard action being
     * reported.
     * @param string $type The type of report. Can be 'FRAUD' or
     * 'MERCHANT_BLOCKED'.
     * @param string|null $status The id of mastercard action being reported.
     */
    public function __construct(int  $mastercardActionId, string  $type, string  $status = null)
    {
        $this->mastercardActionIdFieldForRequest = $mastercardActionId;
        $this->typeFieldForRequest = $type;
        $this->statusFieldForRequest = $status;
    }

    /**
     * The id of mastercard action being reported.
     *
     * @return int
     */
    public function getMastercardActionId()
    {
        return $this->mastercardActionId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $mastercardActionId
     */
    public function setMastercardActionId($mastercardActionId)
    {
        $this->mastercardActionId = $mastercardActionId;
    }

    /**
     * The id of mastercard action being reported.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The id of mastercard action being reported.
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
     * The reported merchant.
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $merchantId
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
    }

    /**
     * The name of the merchant.
     *
     * @return string
     */
    public function getMerchantName()
    {
        return $this->merchantName;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $merchantName
     */
    public function setMerchantName($merchantName)
    {
        $this->merchantName = $merchantName;
    }

    /**
     * The monetary account label of the merchant.
     *
     * @return LabelMonetaryAccount
     */
    public function getCounterpartyAlias()
    {
        return $this->counterpartyAlias;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelMonetaryAccount $counterpartyAlias
     */
    public function setCounterpartyAlias($counterpartyAlias)
    {
        $this->counterpartyAlias = $counterpartyAlias;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->mastercardActionId)) {
            return false;
        }

        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->merchantId)) {
            return false;
        }

        if (!is_null($this->merchantName)) {
            return false;
        }

        if (!is_null($this->counterpartyAlias)) {
            return false;
        }

        return true;
    }
}
