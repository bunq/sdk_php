<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\AttachmentPublic;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
use bunq\Model\Generated\Object\Pointer;

/**
 * bunq.me public profile of the user.
 *
 * @generated
 */
class BunqMeFundraiserProfile extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_POINTER = 'pointer';

    /**
     * The color chosen for the bunq.me fundraiser profile in hexadecimal
     * format.
     *
     * @var string
     */
    protected $color;

    /**
     * The LabelMonetaryAccount with the public information of the User and the
     * MonetaryAccount that created the bunq.me fundraiser profile.
     *
     * @var LabelMonetaryAccount
     */
    protected $alias;

    /**
     * The description of the bunq.me fundraiser profile.
     *
     * @var string
     */
    protected $description;

    /**
     * The attachment attached to the fundraiser profile.
     *
     * @var AttachmentPublic
     */
    protected $attachment;

    /**
     * The pointer (url) which will be used to access the bunq.me fundraiser
     * profile.
     *
     * @var Pointer
     */
    protected $pointer;

    /**
     * The status of the bunq.me fundraiser profile, can be ACTIVE or
     * DEACTIVATED.
     *
     * @var string
     */
    protected $status;

    /**
     * The URL which the user is sent to when a payment is completed.
     *
     * @var string
     */
    protected $redirectUrl;

    /**
     * Provided if the user has enabled their invite link.
     *
     * @var string
     */
    protected $inviteProfileName;

    /**
     * The pointer (url) which will be used to access the bunq.me fundraiser
     * profile.
     *
     * @var Pointer
     */
    protected $pointerFieldForRequest;

    /**
     * @param Pointer $pointer The pointer (url) which will be used to access
     * the bunq.me fundraiser profile.
     */
    public function __construct(Pointer $pointer)
    {
        $this->pointerFieldForRequest = $pointer;
    }

    /**
     * The color chosen for the bunq.me fundraiser profile in hexadecimal
     * format.
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * The LabelMonetaryAccount with the public information of the User and the
     * MonetaryAccount that created the bunq.me fundraiser profile.
     *
     * @return LabelMonetaryAccount
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param LabelMonetaryAccount $alias
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * The description of the bunq.me fundraiser profile.
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
     * constructor.
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * The attachment attached to the fundraiser profile.
     *
     * @return AttachmentPublic
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @param AttachmentPublic $attachment
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
    }

    /**
     * The pointer (url) which will be used to access the bunq.me fundraiser
     * profile.
     *
     * @return Pointer
     */
    public function getPointer()
    {
        return $this->pointer;
    }

    /**
     * @param Pointer $pointer
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setPointer($pointer)
    {
        $this->pointer = $pointer;
    }

    /**
     * The status of the bunq.me fundraiser profile, can be ACTIVE or
     * DEACTIVATED.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The URL which the user is sent to when a payment is completed.
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param string $redirectUrl
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }

    /**
     * Provided if the user has enabled their invite link.
     *
     * @return string
     */
    public function getInviteProfileName()
    {
        return $this->inviteProfileName;
    }

    /**
     * @param string $inviteProfileName
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setInviteProfileName($inviteProfileName)
    {
        $this->inviteProfileName = $inviteProfileName;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->color)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->attachment)) {
            return false;
        }

        if (!is_null($this->pointer)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->redirectUrl)) {
            return false;
        }

        if (!is_null($this->inviteProfileName)) {
            return false;
        }

        return true;
    }
}
