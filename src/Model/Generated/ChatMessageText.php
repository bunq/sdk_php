<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\BunqModel;

/**
 * Endpoint for the type of chat message that carries text.
 *
 * @generated
 */
class ChatMessageText extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_CLIENT_MESSAGE_UUID = 'client_message_uuid';
    const FIELD_TEXT = 'text';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/chat-conversation/%s/message-text';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'Id';

    /**
     * The id of the newly created chat message.
     *
     * @var int
     */
    protected $id;

    /**
     * Add a new text message to a specific conversation.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $chatConversationId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(ApiContext $apiContext, array $requestMap, $userId, $chatConversationId, array $customHeaders = [])
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

        return static::processForId($responseRaw);
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
