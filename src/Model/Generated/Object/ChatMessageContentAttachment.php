<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class ChatMessageContentAttachment extends BunqModel
{
    /**
     * An attachment.
     *
     * @var Attachment
     */
    protected $attachment;

    /**
     * An attachment.
     *
     * @return Attachment
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @param Attachment $attachment
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->attachment)) {
            return false;
        }

        return true;
    }
}
