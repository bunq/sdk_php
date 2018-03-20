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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->action)) {
            return false;
        }

        return true;
    }
}
