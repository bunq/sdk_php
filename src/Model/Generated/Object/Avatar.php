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
     * The style (if applicable) for this Avatar.
     *
     * @var string
     */
    protected $style;

    /**
     * The public UUID of the avatar.
     *
     * @var string
     */
    protected $uuidFieldForRequest;

    /**
     * @param string $uuid The public UUID of the avatar.
     */
    public function __construct(string  $uuid)
    {
        $this->uuidFieldForRequest = $uuid;
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Image[] $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * The style (if applicable) for this Avatar.
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $style
     */
    public function setStyle($style)
    {
        $this->style = $style;
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

        if (!is_null($this->style)) {
            return false;
        }

        return true;
    }
}
