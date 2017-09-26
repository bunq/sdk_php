<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Manage the chat connected to a request inquiry. In the same way a request
 * inquiry and a request response are created together, so that each side of
 * the interaction can work on a different object, also a request inquiry
 * chat and a request response chat are created at the same time. See
 * 'request-response-chat' for the chat endpoint for the responding user.
 *
 * @generated
 */
class RequestInquiryChat extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_LAST_READ_MESSAGE_ID = 'last_read_message_id';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/request-inquiry/%s/chat';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/request-inquiry/%s/chat/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/request-inquiry/%s/chat';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'RequestInquiryChat';

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
     * Create a chat for a specific request inquiry.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $requestInquiryId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(ApiContext $apiContext, array $requestMap, int $userId, int $monetaryAccountId, int $requestInquiryId, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId, $monetaryAccountId, $requestInquiryId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Update the last read message in the chat of a specific request inquiry.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $requestInquiryId
     * @param int $requestInquiryChatId
     * @param string[] $customHeaders
     *
     * @return BunqResponseRequestInquiryChat
     */
    public static function update(ApiContext $apiContext, array $requestMap, int $userId, int $monetaryAccountId, int $requestInquiryId, int $requestInquiryChatId, array $customHeaders = []): BunqResponseRequestInquiryChat
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [$userId, $monetaryAccountId, $requestInquiryId, $requestInquiryChatId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseRequestInquiryChat::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * Get the chat for a specific request inquiry.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $requestInquiryId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseRequestInquiryChatList
     */
    public static function listing(ApiContext $apiContext, int $userId, int $monetaryAccountId, int $requestInquiryId, array $params = [], array $customHeaders = []): BunqResponseRequestInquiryChatList
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $monetaryAccountId, $requestInquiryId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseRequestInquiryChatList::castFromBunqResponse(
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
