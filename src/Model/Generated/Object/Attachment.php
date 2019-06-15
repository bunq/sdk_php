<?php

namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class Attachment extends BunqModel
{
    /**
     * The description of the attachment.
     *
     * @var string
     */
    protected $description;

    /**
     * The content type of the attachment's file.
     *
     * @var string
     */
    protected $contentType;

    /**
     * The description of the attachment.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * The content type of the attachment's file.
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->contentType)) {
            return false;
        }

        return true;
    }
}
