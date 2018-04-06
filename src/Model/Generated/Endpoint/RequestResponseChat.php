<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;

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
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/request-response/%s/chat';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/request-response/%s/chat/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/request-response/%s/chat';

    /**
     * Field constants.
     */
    const FIELD_LAST_READ_MESSAGE_ID = 'last_read_message_id';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'RequestResponseChat';

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
     * The id of the last read message.
     *
     * @var int|null
     */
    protected $lastReadMessageIdFieldForRequest;

    /**
     * @param int|null $lastReadMessageId The id of the last read message.
     */
    public function __construct(int $lastReadMessageId = null)
    {
        $this->lastReadMessageIdFieldForRequest = $lastReadMessageId;
    }

    /**
     * Create a chat for a specific request response.
     *
     * @param int $requestResponseId
     * @param int|null $monetaryAccountId
     * @param int|null $lastReadMessageId The id of the last read message.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        int $requestResponseId,
        int $monetaryAccountId = null,
        int $lastReadMessageId = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $requestResponseId]
            ),
            [self::FIELD_LAST_READ_MESSAGE_ID => $lastReadMessageId],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Update the last read message in the chat of a specific request response.
     *
     * @param int $requestResponseId
     * @param int $requestResponseChatId
     * @param int|null $monetaryAccountId
     * @param int|null $lastReadMessageId The id of the last read message.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(
        int $requestResponseId,
        int $requestResponseChatId,
        int $monetaryAccountId = null,
        int $lastReadMessageId = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $requestResponseId,
                    $requestResponseChatId,
                ]
            ),
            [self::FIELD_LAST_READ_MESSAGE_ID => $lastReadMessageId],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Get the chat for a specific request response.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $requestResponseId
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseRequestResponseChatList
     */
    public static function listing(
        int $requestResponseId,
        int $monetaryAccountId = null,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseRequestResponseChatList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $requestResponseId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseRequestResponseChatList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
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
     * The timestamp when the chat was created.
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
     * The timestamp when the chat was last updated.
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
     * The total number of messages in this conversation.
     *
     * @return int
     */
    public function getUnreadMessageCount()
    {
        return $this->unreadMessageCount;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $unreadMessageCount
     */
    public function setUnreadMessageCount($unreadMessageCount)
    {
        $this->unreadMessageCount = $unreadMessageCount;
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

        if (!is_null($this->unreadMessageCount)) {
            return false;
        }

        return true;
    }
}
