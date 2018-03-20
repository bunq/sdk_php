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
     * The timestamp of the support conversation's creation.
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
     * The timestamp of the support conversation's last update.
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
     * The last message posted to this conversation if any.
     *
     * @return ChatMessage
     */
    public function getLastMessage()
    {
        return $this->lastMessage;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
