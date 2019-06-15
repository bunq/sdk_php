<?php

namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class CoOwner extends BunqModel
{
    /**
     * The Alias of the co-owner.
     *
     * @var LabelUser
     */
    protected $alias;

    /**
     * Can be: ACCEPTED, REJECTED, PENDING or REVOKED
     *
     * @var string
     */
    protected $status;

    /**
     * The users the account will be joint with.
     *
     * @var Pointer
     */
    protected $aliasFieldForRequest;

    /**
     * @param Pointer $alias The users the account will be joint with.
     */
    public function __construct(Pointer $alias)
    {
        $this->aliasFieldForRequest = $alias;
    }

    /**
     * The Alias of the co-owner.
     *
     * @return LabelUser
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param LabelUser $alias
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * Can be: ACCEPTED, REJECTED, PENDING or REVOKED
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
     *             constructor.
     *
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        return true;
    }
}
