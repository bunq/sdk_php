<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;

/**
 * Represents conversation references.
 *
 * @generated
 */
class ChatConversationReference extends BunqModel
{
    /**
     * Object type.
     */
    const OBJECT_TYPE = 'SupportConversationReference';

    /**
     * The id of this conversation.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp the conversation reference was created.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp the conversation reference was last updated.
     *
     * @var string
     */
    protected $updated;

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
     * The timestamp the conversation reference was created.
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
     * The timestamp the conversation reference was last updated.
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
}
