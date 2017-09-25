<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class ChatMessageContentStatusConversation extends BunqModel
{
    /**
     * Action which occurred over a conversation. Always CONVERSATION_CREATED
     *
     * @var string
     */
    protected $action;

    /**
     * Action which occurred over a conversation. Always CONVERSATION_CREATED
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
    public function setAction(string $action)
    {
        $this->action = $action;
    }
}
