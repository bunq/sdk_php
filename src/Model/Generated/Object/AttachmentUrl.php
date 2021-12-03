<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class AttachmentUrl extends BunqModel
{
    /**
     * The file type of attachment.
     *
     * @var string
     */
    protected $type;

    /**
     * The URL where the attachment can be downloaded.
     *
     * @var string
     */
    protected $url;

    /**
     * The file type of attachment.
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
     * The URL where the attachment can be downloaded.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->url)) {
            return false;
        }

        return true;
    }
}
