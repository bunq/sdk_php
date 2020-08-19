<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\UserApiKeyAnchoredUser;

/**
 * Used to view OAuth request detais in events.
 *
 * @generated
 */
class UserApiKey extends BunqModel
{
    /**
     * The id of the user.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the user object's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the user object's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The user who requested access.
     *
     * @var UserApiKeyAnchoredUser
     */
    protected $requestedByUser;

    /**
     * The user who granted access.
     *
     * @var UserApiKeyAnchoredUser|null
     */
    protected $grantedByUser;

    /**
     * The id of the user.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The timestamp of the user object's creation.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the user object's last update.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The user who requested access.
     *
     * @return UserApiKeyAnchoredUser
     */
    public function getRequestedByUser()
    {
        return $this->requestedByUser;
    }

    /**
     * @param UserApiKeyAnchoredUser $requestedByUser
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setRequestedByUser($requestedByUser)
    {
        $this->requestedByUser = $requestedByUser;
    }

    /**
     * The user who granted access.
     *
     * @return UserApiKeyAnchoredUser
     */
    public function getGrantedByUser()
    {
        return $this->grantedByUser;
    }

    /**
     * @param UserApiKeyAnchoredUser $grantedByUser
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setGrantedByUser($grantedByUser)
    {
        $this->grantedByUser = $grantedByUser;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->created)) {
            return false;
        }

        if (!is_null($this->updated)) {
            return false;
        }

        if (!is_null($this->requestedByUser)) {
            return false;
        }

        if (!is_null($this->grantedByUser)) {
            return false;
        }

        return true;
    }
}
