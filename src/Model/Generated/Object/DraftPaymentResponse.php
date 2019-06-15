<?php

namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class DraftPaymentResponse extends BunqModel
{
    /**
     * The status with which was responded.
     *
     * @var string
     */
    protected $status;

    /**
     * The user that responded to the DraftPayment.
     *
     * @var LabelUser
     */
    protected $userAliasCreated;

    /**
     * The status with which was responded.
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
     * The user that responded to the DraftPayment.
     *
     * @return LabelUser
     */
    public function getUserAliasCreated()
    {
        return $this->userAliasCreated;
    }

    /**
     * @param LabelUser $userAliasCreated
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setUserAliasCreated($userAliasCreated)
    {
        $this->userAliasCreated = $userAliasCreated;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->userAliasCreated)) {
            return false;
        }

        return true;
    }
}
