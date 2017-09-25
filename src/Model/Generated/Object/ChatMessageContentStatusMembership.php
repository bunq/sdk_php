<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\BunqModel;

/**
 * @generated
 */
class ChatMessageContentStatusMembership extends BunqModel
{
    /**
     * Action which occurred over a member. Could be MEMBER_ADDED or
     * MEMBER_REMOVED
     *
     * @var string
     */
    protected $action;

    /**
     * The member over which the action has occurred.
     *
     * @var LabelUser
     */
    protected $member;

    /**
     * Action which occurred over a member. Could be MEMBER_ADDED or
     * MEMBER_REMOVED
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * The member over which the action has occurred.
     *
     * @return LabelUser
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * @param LabelUser $member
     */
    public function setMember(LabelUser $member)
    {
        $this->member = $member;
    }
}
