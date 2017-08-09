<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Model\BunqModel;
use bunq\Model\BunqResponse;
use bunq\Model\Generated\Object\LabelUser;

/**
 * Endpoint for retrieving the messages that are part of a conversation.
 *
 * @generated
 */
class ChatMessage extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/chat-conversation/%s/message';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'ChatMessage';

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
     * The id of the ticket this message is linked with, if any.
     *
     * @var int
     */
    protected $ticketId;

    /**
     * The user who initiated the action that caused this message to appear.
     *
     * @var LabelUser
     */
    protected $creator;

    /**
     * The user displayed as the sender of this message.
     *
     * @var LabelUser
     */
    protected $displayedSender;

    /**
     * The content of this message.
     *
     * @var BunqModel
     */
    protected $content;

    /**
     * Get all the messages that are part of a specific conversation.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $chatConversationId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<BunqModel[]|ChatMessage[]>
     */
    public static function listing(ApiContext $apiContext, $userId, $chatConversationId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $chatConversationId]
            ),
            $customHeaders
        );

        return static::fromJsonList($responseRaw, self::OBJECT_TYPE);
    }

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
     * The id of the ticket this message is linked with, if any.
     *
     * @return int
     */
    public function getTicketId()
    {
        return $this->ticketId;
    }

    /**
     * @param int $ticketId
     */
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;
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
    public function setCreator(LabelUser $creator)
    {
        $this->creator = $creator;
    }

    /**
     * The user displayed as the sender of this message.
     *
     * @return LabelUser
     */
    public function getDisplayedSender()
    {
        return $this->displayedSender;
    }

    /**
     * @param LabelUser $displayedSender
     */
    public function setDisplayedSender(LabelUser $displayedSender)
    {
        $this->displayedSender = $displayedSender;
    }

    /**
     * The content of this message.
     *
     * @return BunqModel
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param BunqModel $content
     */
    public function setContent(BunqModel $content)
    {
        $this->content = $content;
    }
}
