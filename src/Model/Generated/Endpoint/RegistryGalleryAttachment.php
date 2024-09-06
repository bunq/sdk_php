<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Attachment;

/**
 * This call is used to upload an photo that is accessible by all members of
 * a registry.
 *
 * @generated
 */
class RegistryGalleryAttachment extends BunqModel
{
    /**
     * The id of the user owner.
     *
     * @var int
     */
    protected $userId;

    /**
     * The attachment.
     *
     * @var Attachment
     */
    protected $attachment;

    /**
     * The membership of the owner uuid.
     *
     * @var string
     */
    protected $membershipUuid;

    /**
     * The id of the user owner.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * The attachment.
     *
     * @return Attachment
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Attachment $attachment
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
    }

    /**
     * The membership of the owner uuid.
     *
     * @return string
     */
    public function getMembershipUuid()
    {
        return $this->membershipUuid;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $membershipUuid
     */
    public function setMembershipUuid($membershipUuid)
    {
        $this->membershipUuid = $membershipUuid;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->userId)) {
            return false;
        }

        if (!is_null($this->attachment)) {
            return false;
        }

        if (!is_null($this->membershipUuid)) {
            return false;
        }

        return true;
    }
}
