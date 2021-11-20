<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class TabAttachment extends BunqModel
{
    /**
     * The ID of the AttachmentTab you want to attach to the TabItem.
     *
     * @var int
     */
    protected $idFieldForRequest;

    /**
     * @param int $id The ID of the AttachmentTab you want to attach to the
     * TabItem.
     */
    public function __construct(int  $id)
    {
        $this->idFieldForRequest = $id;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        return true;
    }
}
