<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;

/**
 * Used to manage Slice group settings.
 *
 * @generated
 */
class RegistrySetting extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_COLOR = 'color';
    const FIELD_ICON = 'icon';
    const FIELD_DEFAULT_AVATAR_STATUS = 'default_avatar_status';
    const FIELD_SDD_EXPIRATION_ACTION = 'sdd_expiration_action';

    /**
     * The color chosen for the Registry.
     *
     * @var string
     */
    protected $color;

    /**
     * The icon chosen for the Registry.
     *
     * @var string
     */
    protected $icon;

    /**
     * The status of the avatar. Can be either AVATAR_DEFAULT, AVATAR_CUSTOM,
     * AVATAR_ICON or AVATAR_UNDETERMINED.
     *
     * @var string
     */
    protected $defaultAvatarStatus;

    /**
     * The color chosen for the Registry in hexadecimal format.
     *
     * @var string|null
     */
    protected $colorFieldForRequest;

    /**
     * The icon chosen for the Registry.
     *
     * @var string|null
     */
    protected $iconFieldForRequest;

    /**
     * The status of the avatar.
     *
     * @var string|null
     */
    protected $defaultAvatarStatusFieldForRequest;

    /**
     * A monetaryAccountSetting field that should not be here, added for app
     * support.
     *
     * @var string|null
     */
    protected $sddExpirationActionFieldForRequest;

    /**
     * @param string|null $color The color chosen for the Registry in
     * hexadecimal format.
     * @param string|null $icon The icon chosen for the Registry.
     * @param string|null $defaultAvatarStatus The status of the avatar.
     * @param string|null $sddExpirationAction A monetaryAccountSetting field
     * that should not be here, added for app support.
     */
    public function __construct(string  $color = null, string  $icon = null, string  $defaultAvatarStatus = null, string  $sddExpirationAction = null)
    {
        $this->colorFieldForRequest = $color;
        $this->iconFieldForRequest = $icon;
        $this->defaultAvatarStatusFieldForRequest = $defaultAvatarStatus;
        $this->sddExpirationActionFieldForRequest = $sddExpirationAction;
    }

    /**
     * The color chosen for the Registry.
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * The icon chosen for the Registry.
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    /**
     * The status of the avatar. Can be either AVATAR_DEFAULT, AVATAR_CUSTOM,
     * AVATAR_ICON or AVATAR_UNDETERMINED.
     *
     * @return string
     */
    public function getDefaultAvatarStatus()
    {
        return $this->defaultAvatarStatus;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $defaultAvatarStatus
     */
    public function setDefaultAvatarStatus($defaultAvatarStatus)
    {
        $this->defaultAvatarStatus = $defaultAvatarStatus;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->color)) {
            return false;
        }

        if (!is_null($this->icon)) {
            return false;
        }

        if (!is_null($this->defaultAvatarStatus)) {
            return false;
        }

        return true;
    }
}
