<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\BunqModel;

/**
 * Manage the chat connected to a payment.
 *
 * @generated
 */
class PaymentChat extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_LAST_READ_MESSAGE_ID = 'last_read_message_id';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/payment/%s/chat';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/payment/%s/chat/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/payment/%s/chat';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'ChatConversationPayment';

    /**
     * The id of the chat conversation.
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
     * The total number of unread messages in this conversation.
     *
     * @var int
     */
    protected $unreadMessageCount;

    /**
     * Create a chat for a specific payment.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $paymentId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(ApiContext $apiContext, array $requestMap, $userId, $monetaryAccountId, $paymentId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId, $monetaryAccountId, $paymentId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Update the last read message in the chat of a specific payment.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $paymentId
     * @param int $paymentChatId
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentChat
     */
    public static function update(ApiContext $apiContext, array $requestMap, $userId, $monetaryAccountId, $paymentId, $paymentChatId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [$userId, $monetaryAccountId, $paymentId, $paymentChatId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponsePaymentChat::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * Get the chat for a specific payment.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $paymentId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentChatList
     */
    public static function listing(ApiContext $apiContext, $userId, $monetaryAccountId, $paymentId, array $params = [], array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $monetaryAccountId, $paymentId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponsePaymentChatList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * The id of the chat conversation.
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
     * The total number of unread messages in this conversation.
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
