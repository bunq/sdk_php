<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;

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
     * @var User
     */
    protected $requestedByUser;

    /**
     * The user who granted access.
     *
     * @var User|null
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $id
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $created
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The user who requested access.
     *
     * @return User
     */
    public function getRequestedByUser()
    {
        return $this->requestedByUser;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param User $requestedByUser
     */
    public function setRequestedByUser($requestedByUser)
    {
        $this->requestedByUser = $requestedByUser;
    }

    /**
     * The user who granted access.
     *
     * @return User
     */
    public function getGrantedByUser()
    {
        return $this->grantedByUser;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param User $grantedByUser
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
