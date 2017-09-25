<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\BunqModel;

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
    public function setAttachment(Attachment $attachment)
    {
        $this->attachment = $attachment;
    }
}
