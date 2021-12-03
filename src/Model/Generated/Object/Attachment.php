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
     * The URLs where the file can be downloaded.
     *
     * @var AttachmentUrl[]
     */
    protected $urls;

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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $description
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $contentType
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * The URLs where the file can be downloaded.
     *
     * @return AttachmentUrl[]
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param AttachmentUrl[] $urls
     */
    public function setUrls($urls)
    {
        $this->urls = $urls;
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

        if (!is_null($this->urls)) {
            return false;
        }

        return true;
    }
}
