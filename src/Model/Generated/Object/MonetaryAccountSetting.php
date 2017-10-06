<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class MonetaryAccountSetting extends BunqModel
{
    /**
     * The color chosen for the MonetaryAccount.
     *
     * @var string
     */
    protected $color;

    /**
     * The status of the avatar. Can be either AVATAR_DEFAULT, AVATAR_CUSTOM or
     * AVATAR_UNDETERMINED.
     *
     * @var string
     */
    protected $defaultAvatarStatus;

    /**
     * The chat restriction. Possible values are ALLOW_INCOMING or
     * BLOCK_INCOMING
     *
     * @var string
     */
    protected $restrictionChat;

    /**
     * The color chosen for the MonetaryAccount.
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * The status of the avatar. Can be either AVATAR_DEFAULT, AVATAR_CUSTOM or
     * AVATAR_UNDETERMINED.
     *
     * @return string
     */
    public function getDefaultAvatarStatus()
    {
        return $this->defaultAvatarStatus;
    }

    /**
     * @param string $defaultAvatarStatus
     */
    public function setDefaultAvatarStatus($defaultAvatarStatus)
    {
        $this->defaultAvatarStatus = $defaultAvatarStatus;
    }

    /**
     * The chat restriction. Possible values are ALLOW_INCOMING or
     * BLOCK_INCOMING
     *
     * @return string
     */
    public function getRestrictionChat()
    {
        return $this->restrictionChat;
    }

    /**
     * @param string $restrictionChat
     */
    public function setRestrictionChat($restrictionChat)
    {
        $this->restrictionChat = $restrictionChat;
    }
}
