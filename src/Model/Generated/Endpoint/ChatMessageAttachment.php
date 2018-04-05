<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\BunqId;

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
    const FIELD_ATTACHMENT = 'attachment';

    /**
     * The id of the newly created chat message.
     *
     * @var int
     */
    protected $id;

    /**
     * The attachment contained in this message.
     *
     * @var BunqId
     */
    protected $attachment;

    /**
     * @param BunqId $attachment The attachment contained in this message.
     */
    public function __construct(BunqId $attachment)
    {
        $this->attachmentFieldForRequest = $attachment;
    }

    /**
     * Create a new message holding a file attachment to a specific
     * conversation.
     *
     * @param int $chatConversationId
     * @param BunqId $attachment The attachment contained in this message.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        int $chatConversationId,
        BunqId $attachment,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), $chatConversationId]
            ),
            [self::FIELD_ATTACHMENT => $attachment],
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
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        return true;
    }
}
