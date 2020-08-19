<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Error;
use bunq\Model\Generated\Object\RequestInquiryReference;
use bunq\Model\Generated\Object\WhitelistResultViewAnchoredObject;

/**
 * Whitelist an SDD so that when one comes in, it is automatically accepted.
 *
 * @generated
 */
class WhitelistResult extends BunqModel
{
    /**
     * The ID of the whitelist entry.
     *
     * @var int
     */
    protected $id;

    /**
     * The account from which payments will be deducted when a transaction is
     * matched with this whitelist.
     *
     * @var int
     */
    protected $monetaryAccountPayingId;

    /**
     * The status of the WhitelistResult.
     *
     * @var string
     */
    protected $status;

    /**
     * The subStatus of the WhitelistResult.
     *
     * @var string
     */
    protected $subStatus;

    /**
     * The message when the whitelist result has failed due to user error.
     *
     * @var Error[]
     */
    protected $errorMessage;

    /**
     * The corresponding whitelist.
     *
     * @var Whitelist
     */
    protected $whitelist;

    /**
     * The details of the external object the event was created for.
     *
     * @var WhitelistResultViewAnchoredObject
     */
    protected $object;

    /**
     * The reference to the object used for split the bill. Can be
     * RequestInquiry or RequestInquiryBatch
     *
     * @var RequestInquiryReference[]
     */
    protected $requestReferenceSplitTheBill;

    /**
     * The ID of the whitelist entry.
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
     * constructor.
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The account from which payments will be deducted when a transaction is
     * matched with this whitelist.
     *
     * @return int
     */
    public function getMonetaryAccountPayingId()
    {
        return $this->monetaryAccountPayingId;
    }

    /**
     * @param int $monetaryAccountPayingId
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setMonetaryAccountPayingId($monetaryAccountPayingId)
    {
        $this->monetaryAccountPayingId = $monetaryAccountPayingId;
    }

    /**
     * The status of the WhitelistResult.
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
     * constructor.
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The subStatus of the WhitelistResult.
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
     * constructor.
     */
    public function setSubStatus($subStatus)
    {
        $this->subStatus = $subStatus;
    }

    /**
     * The message when the whitelist result has failed due to user error.
     *
     * @return Error[]
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @param Error[] $errorMessage
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    /**
     * The corresponding whitelist.
     *
     * @return Whitelist
     */
    public function getWhitelist()
    {
        return $this->whitelist;
    }

    /**
     * @param Whitelist $whitelist
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setWhitelist($whitelist)
    {
        $this->whitelist = $whitelist;
    }

    /**
     * The details of the external object the event was created for.
     *
     * @return WhitelistResultViewAnchoredObject
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param WhitelistResultViewAnchoredObject $object
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setObject($object)
    {
        $this->object = $object;
    }

    /**
     * The reference to the object used for split the bill. Can be
     * RequestInquiry or RequestInquiryBatch
     *
     * @return RequestInquiryReference[]
     */
    public function getRequestReferenceSplitTheBill()
    {
        return $this->requestReferenceSplitTheBill;
    }

    /**
     * @param RequestInquiryReference[] $requestReferenceSplitTheBill
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setRequestReferenceSplitTheBill($requestReferenceSplitTheBill)
    {
        $this->requestReferenceSplitTheBill = $requestReferenceSplitTheBill;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->monetaryAccountPayingId)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->subStatus)) {
            return false;
        }

        if (!is_null($this->errorMessage)) {
            return false;
        }

        if (!is_null($this->whitelist)) {
            return false;
        }

        if (!is_null($this->object)) {
            return false;
        }

        if (!is_null($this->requestReferenceSplitTheBill)) {
            return false;
        }

        return true;
    }
}
