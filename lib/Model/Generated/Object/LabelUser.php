<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\BunqModel;

/**
 * @generated
 */
class LabelUser extends BunqModel
{
    /**
     * The public UUID of the label-user.
     *
     * @var string
     */
    protected $uuid;

    /**
     * The name to be displayed for this user, as it was given on the request.
     *
     * @var string
     */
    protected $displayName;

    /**
     * The country of the user. 000 stands for "unknown"
     *
     * @var string
     */
    protected $country;

    /**
     * The current avatar of the user.
     *
     * @var Avatar
     */
    protected $avatar;

    /**
     * The current nickname of the user.
     *
     * @var string
     */
    protected $publicNickName;

    /**
     * @param string $uuid
     * @param string $displayName
     * @param string $country
     */
    public function __construct($uuid, $displayName, $country)
    {
        $this->uuid = $uuid;
        $this->displayName = $displayName;
        $this->country = $country;
    }

    /**
     * The public UUID of the label-user.
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
     * The current avatar of the user.
     *
     * @return Avatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param Avatar $avatar
     */
    public function setAvatar(Avatar $avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * The current nickname of the user.
     *
     * @return string
     */
    public function getPublicNickName()
    {
        return $this->publicNickName;
    }

    /**
     * @param string $publicNickName
     */
    public function setPublicNickName($publicNickName)
    {
        $this->publicNickName = $publicNickName;
    }

    /**
     * The name to be displayed for this user, as it was given on the request.
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * The country of the user. 000 stands for "unknown"
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }
}
