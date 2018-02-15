<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\ChatMessageContent;
use bunq\Model\Generated\Object\LabelUser;

/**
 * Endpoint for retrieving the messages that are part of a conversation.
 *
 * @generated
 */
class ChatMessageAnnouncement extends BunqModel
{
    /**
     * The id of the message.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp when the message was created.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp when the message was last updated.
     *
     * @var string
     */
    protected $updated;

    /**
     * The id of the conversation this message belongs to.
     *
     * @var int
     */
    protected $conversationId;

    /**
     * The user who initiated the action that caused this message to appear.
     *
     * @var LabelUser
     */
    protected $creator;

    /**
     * The content of this message.
     *
     * @var ChatMessageContent
     */
    protected $content;

    /**
     * The id of the message.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The timestamp when the message was created.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp when the message was last updated.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The id of the conversation this message belongs to.
     *
     * @return int
     */
    public function getConversationId()
    {
        return $this->conversationId;
    }

    /**
     * @param int $conversationId
     */
    public function setConversationId($conversationId)
    {
        $this->conversationId = $conversationId;
    }

    /**
     * The user who initiated the action that caused this message to appear.
     *
     * @return LabelUser
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param LabelUser $creator
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;
    }

    /**
     * The content of this message.
     *
     * @return ChatMessageContent
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param ChatMessageContent $content
     */
    public function setContent($content)
    {
        $this->content = $content;
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

        if (!is_null($this->conversationId)) {
            return false;
        }

        if (!is_null($this->creator)) {
            return false;
        }

        if (!is_null($this->content)) {
            return false;
        }

        return true;
    }
}
