<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class AttachmentMasterCardActionRefund extends BunqModel
{
    /**
     * The id of the attached Attachment.
     *
     * @var int
     */
    protected $id;

    /**
     * The id of the Attachment.
     *
     * @var int
     */
    protected $idFieldForRequest;

    /**
     * @param int $id The id of the Attachment.
     */
    public function __construct(int  $id)
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
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        return true;
    }
}
