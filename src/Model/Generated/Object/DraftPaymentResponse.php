<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\BunqModel;

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
     */
    public function setUserAliasCreated(LabelUser $userAliasCreated)
    {
        $this->userAliasCreated = $userAliasCreated;
    }
}
