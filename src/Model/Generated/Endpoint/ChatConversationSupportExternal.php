<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;

/**
 * Manages user's support conversation.
 *
 * @generated
 */
class ChatConversationSupportExternal extends BunqModel
{
    /**
     * Object type.
     */

    /**
     * The id of this conversation.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the support conversation's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the support conversation's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The last message posted to this conversation if any.
     *
     * @var ChatMessage
     */
    protected $lastMessage;

    /**
     * The id of this conversation.
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
     * The timestamp of the support conversation's creation.
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
     * The timestamp of the support conversation's last update.
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
     * The last message posted to this conversation if any.
     *
     * @return ChatMessage
     */
    public function getLastMessage()
    {
        return $this->lastMessage;
    }

    /**
     * @param ChatMessage $lastMessage
     */
    public function setLastMessage($lastMessage)
    {
        $this->lastMessage = $lastMessage;
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

        if (!is_null($this->lastMessage)) {
            return false;
        }

        return true;
    }
}
