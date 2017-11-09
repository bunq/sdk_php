<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Create new messages holding file attachments.
 *
 * @generated
 */
class ChatMessageAttachment extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/chat-conversation/%s/message-attachment';

    /**
     * Field constants.
     */
    const FIELD_CLIENT_MESSAGE_UUID = 'client_message_uuid';
    const FIELD_ATTACHMENT = 'attachment';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'ChatMessageAttachment';

    /**
     * The id of the newly created chat message.
     *
     * @var int
     */
    protected $id;

    /**
     * Create a new message holding a file attachment to a specific
     * conversation.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $chatConversationId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(ApiContext $apiContext, array $requestMap, int $userId, int $chatConversationId, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId, $chatConversationId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * The id of the newly created chat message.
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
}
