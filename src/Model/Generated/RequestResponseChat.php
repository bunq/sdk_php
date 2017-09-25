<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\BunqModel;

/**
 * Manage the chat connected to a request response. In the same way a
 * request inquiry and a request response are created together, so that each
 * side of the interaction can work on a different object, also a request
 * inquiry chat and a request response chat are created at the same time.
 * See 'request-inquiry-chat' for the chat endpoint for the inquiring user.
 *
 * @generated
 */
class RequestResponseChat extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_LAST_READ_MESSAGE_ID = 'last_read_message_id';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/request-response/%s/chat';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/request-response/%s/chat/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/request-response/%s/chat';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'RequestResponseChat';

    /**
     * The id of the newly created chat conversation.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp when the chat was created.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp when the chat was last updated.
     *
     * @var string
     */
    protected $updated;

    /**
     * The total number of messages in this conversation.
     *
     * @var int
     */
    protected $unreadMessageCount;

    /**
     * Create a chat for a specific request response.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $requestResponseId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(ApiContext $apiContext, array $requestMap, $userId, $monetaryAccountId, $requestResponseId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId, $monetaryAccountId, $requestResponseId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Update the last read message in the chat of a specific request response.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $requestResponseId
     * @param int $requestResponseChatId
     * @param string[] $customHeaders
     *
     * @return BunqResponseRequestResponseChat
     */
    public static function update(ApiContext $apiContext, array $requestMap, $userId, $monetaryAccountId, $requestResponseId, $requestResponseChatId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [$userId, $monetaryAccountId, $requestResponseId, $requestResponseChatId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseRequestResponseChat::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * Get the chat for a specific request response.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $requestResponseId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseRequestResponseChatList
     */
    public static function listing(ApiContext $apiContext, $userId, $monetaryAccountId, $requestResponseId, array $params = [], array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $monetaryAccountId, $requestResponseId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseRequestResponseChatList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * The id of the newly created chat conversation.
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
     * The timestamp when the chat was created.
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
     * The timestamp when the chat was last updated.
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
     * The total number of messages in this conversation.
     *
     * @return int
     */
    public function getUnreadMessageCount()
    {
        return $this->unreadMessageCount;
    }

    /**
     * @param int $unreadMessageCount
     */
    public function setUnreadMessageCount($unreadMessageCount)
    {
        $this->unreadMessageCount = $unreadMessageCount;
    }
}
