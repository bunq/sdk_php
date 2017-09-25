<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

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
     * @var ChatMessageAnnouncement
     */
    protected $chatMessageAnnouncement;

    /**
     * @var ChatMessageStatus
     */
    protected $chatMessageStatus;

    /**
     * @var ChatMessageUser
     */
    protected $chatMessageUser;

    /**
     * Get all the messages that are part of a specific conversation.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $chatConversationId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseChatMessageList
     */
    public static function listing(ApiContext $apiContext, $userId, $chatConversationId, array $params = [], array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $chatConversationId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseChatMessageList::castFromBunqResponse(
            static::fromJsonList($responseRaw)
        );
    }

    /**
     * @return ChatMessageAnnouncement
     */
    public function getChatMessageAnnouncement()
    {
        return $this->chatMessageAnnouncement;
    }

    /**
     * @param ChatMessageAnnouncement $chatMessageAnnouncement
     */
    public function setChatMessageAnnouncement(ChatMessageAnnouncement $chatMessageAnnouncement)
    {
        $this->chatMessageAnnouncement = $chatMessageAnnouncement;
    }

    /**
     * @return ChatMessageStatus
     */
    public function getChatMessageStatus()
    {
        return $this->chatMessageStatus;
    }

    /**
     * @param ChatMessageStatus $chatMessageStatus
     */
    public function setChatMessageStatus(ChatMessageStatus $chatMessageStatus)
    {
        $this->chatMessageStatus = $chatMessageStatus;
    }

    /**
     * @return ChatMessageUser
     */
    public function getChatMessageUser()
    {
        return $this->chatMessageUser;
    }

    /**
     * @param ChatMessageUser $chatMessageUser
     */
    public function setChatMessageUser(ChatMessageUser $chatMessageUser)
    {
        $this->chatMessageUser = $chatMessageUser;
    }
}
