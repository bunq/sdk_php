<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;

/**
 * Endpoint for the type of chat message that carries text.
 *
 * @generated
 */
class ChatMessageText extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/chat-conversation/%s/message-text';

    /**
     * Field constants.
     */
    const FIELD_TEXT = 'text';

    /**
     * The id of the newly created chat message.
     *
     * @var int
     */
    protected $id;

    /**
     * The textual content of this message. Cannot be empty.
     *
     * @var string
     */
    protected $textFieldForRequest;

    /**
     * @param string $text The textual content of this message. Cannot be empty.
     */
    public function __construct(string $text)
    {
        $this->textFieldForRequest = $text;
    }

    /**
     * Add a new text message to a specific conversation.
     *
     * @param int $chatConversationId
     * @param string $text The textual content of this message. Cannot be empty.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(int $chatConversationId, string $text, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), $chatConversationId]
            ),
            [self::FIELD_TEXT => $text],
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
