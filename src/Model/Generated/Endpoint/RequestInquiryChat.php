<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
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
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/request-inquiry/%s/chat';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/request-inquiry/%s/chat/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/request-inquiry/%s/chat';

    /**
     * Field constants.
     */
    const FIELD_LAST_READ_MESSAGE_ID = 'last_read_message_id';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'RequestInquiryChat';

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
    protected $lastReadMessageId;

    /**
     * @param int|null $lastReadMessageId The id of the last read message.
     */
    public function __construct(int $lastReadMessageId = null)
    {
        $this->lastReadMessageIdFieldForRequest = $lastReadMessageId;
    }

    /**
     * Create a chat for a specific request inquiry.
     *
     * @param int $requestInquiryId
     * @param int|null $monetaryAccountId
     * @param int|null $lastReadMessageId The id of the last read message.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        int $requestInquiryId,
        int $monetaryAccountId = null,
        int $lastReadMessageId = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $requestInquiryId]
            ),
            [self::FIELD_LAST_READ_MESSAGE_ID => $lastReadMessageId],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Update the last read message in the chat of a specific request inquiry.
     *
     * @param int $requestInquiryId
     * @param int $requestInquiryChatId
     * @param int|null $monetaryAccountId
     * @param int|null $lastReadMessageId The id of the last read message.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(
        int $requestInquiryId,
        int $requestInquiryChatId,
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
                    $requestInquiryId,
                    $requestInquiryChatId,
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
     * Get the chat for a specific request inquiry.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $requestInquiryId
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseRequestInquiryChatList
     */
    public static function listing(
        int $requestInquiryId,
        int $monetaryAccountId = null,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseRequestInquiryChatList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $requestInquiryId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseRequestInquiryChatList::castFromBunqResponse(
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
