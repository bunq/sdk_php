<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class Avatar extends BunqModel
{
    /**
     * The public UUID of the avatar.
     *
     * @var string
     */
    protected $uuid;

    /**
     * The public UUID of object this avatar is anchored to.
     *
     * @var string
     */
    protected $anchorUuid;

    /**
     * The actual image information of this avatar.
     *
     * @var Image[]
     */
    protected $image;

    /**
     * @param string $uuid
     */
    public function __construct($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * The public UUID of the avatar.
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * The public UUID of object this avatar is anchored to.
     *
     * @return string
     */
    public function getAnchorUuid()
    {
        return $this->anchorUuid;
    }

    /**
     * @param string $anchorUuid
     */
    public function setAnchorUuid($anchorUuid)
    {
        $this->anchorUuid = $anchorUuid;
    }

    /**
     * The actual image information of this avatar.
     *
     * @return Image[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param Image[] $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->uuid)) {
            return false;
        }

        if (!is_null($this->anchorUuid)) {
            return false;
        }

        if (!is_null($this->image)) {
            return false;
        }

        return true;
    }
}
