<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class AttachmentMonetaryAccountPayment extends BunqModel
{
    /**
     * The id of the attached Attachment.
     *
     * @var int
     */
    protected $id;

    /**
     * The id of the MonetaryAccount this Attachment is attached from.
     *
     * @var int
     */
    protected $monetaryAccountId;

    /**
     * The id of the Attachment to attach to the MonetaryAccount.
     *
     * @var int
     */
    protected $idFieldForRequest;

    /**
     * @param int $id The id of the Attachment to attach to the MonetaryAccount.
     */
    public function __construct(int $id)
    {
        $this->idFieldForRequest = $id;
    }

    /**
     * The id of the attached Attachment.
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
     * The id of the MonetaryAccount this Attachment is attached from.
     *
     * @return int
     */
    public function getMonetaryAccountId()
    {
        return $this->monetaryAccountId;
    }

    /**
     * @param int $monetaryAccountId
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setMonetaryAccountId($monetaryAccountId)
    {
        $this->monetaryAccountId = $monetaryAccountId;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->monetaryAccountId)) {
            return false;
        }

        return true;
    }
}
