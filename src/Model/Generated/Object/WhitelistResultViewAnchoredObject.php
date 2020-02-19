<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Endpoint\DraftPayment;
use bunq\Model\Generated\Endpoint\RequestResponse;

/**
 * @generated
 */
class WhitelistResultViewAnchoredObject extends BunqModel
{
    /**
     * The ID of the whitelist entry.
     *
     * @var int
     */
    protected $id;

    /**
     * The RequestResponse object
     *
     * @var RequestResponse
     */
    protected $requestResponse;

    /**
     * The DraftPayment object
     *
     * @var DraftPayment
     */
    protected $draftPayment;

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
     *
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The RequestResponse object
     *
     * @return RequestResponse
     */
    public function getRequestResponse()
    {
        return $this->requestResponse;
    }

    /**
     * @param RequestResponse $requestResponse
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setRequestResponse($requestResponse)
    {
        $this->requestResponse = $requestResponse;
    }

    /**
     * The DraftPayment object
     *
     * @return DraftPayment
     */
    public function getDraftPayment()
    {
        return $this->draftPayment;
    }

    /**
     * @param DraftPayment $draftPayment
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setDraftPayment($draftPayment)
    {
        $this->draftPayment = $draftPayment;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->requestResponse)) {
            return false;
        }

        if (!is_null($this->draftPayment)) {
            return false;
        }

        return true;
    }
}
