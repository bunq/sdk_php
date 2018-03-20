<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\exception\BunqException;
use bunq\Http\ApiClient;
use bunq\Model\Core\AnchorObjectInterface;
use bunq\Model\Core\BunqModel;

/**
 * Manages user's conversations.
 *
 * @generated
 */
class ChatConversation extends BunqModel implements AnchorObjectInterface
{
    /**
     * Error constants.
     */
    const ERROR_NULL_FIELDS = 'All fields of an extended model or object are null.';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/chat-conversation';
    const ENDPOINT_URL_READ = 'user/%s/chat-conversation/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'ChatConversation';

    /**
     * @var ChatConversationSupportExternal
     */
    protected $supportConversationExternal;

    /**
     * @var ChatConversationReference
     */
    protected $chatConversationReference;

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseChatConversationList
     */
    public static function listing(array $params = [], array $customHeaders = []): BunqResponseChatConversationList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId()]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseChatConversationList::castFromBunqResponse(
            static::fromJsonList($responseRaw)
        );
    }

    /**
     * @param int $chatConversationId
     * @param string[] $customHeaders
     *
     * @return BunqResponseChatConversation
     */
    public static function get(int $chatConversationId, array $customHeaders = []): BunqResponseChatConversation
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $chatConversationId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseChatConversation::castFromBunqResponse(
            static::fromJson($responseRaw)
        );
    }

    /**
     * @return ChatConversationSupportExternal
     */
    public function getSupportConversationExternal()
    {
        return $this->supportConversationExternal;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param ChatConversationSupportExternal $supportConversationExternal
     */
    public function setSupportConversationExternal($supportConversationExternal)
    {
        $this->supportConversationExternal = $supportConversationExternal;
    }

    /**
     * @return ChatConversationReference
     */
    public function getChatConversationReference()
    {
        return $this->chatConversationReference;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param ChatConversationReference $chatConversationReference
     */
    public function setChatConversationReference($chatConversationReference)
    {
        $this->chatConversationReference = $chatConversationReference;
    }

    /**
     * @return BunqModel
     * @throws BunqException
     */
    public function getReferencedObject()
    {
        if (!is_null($this->supportConversationExternal)) {
            return $this->supportConversationExternal;
        }

        if (!is_null($this->chatConversationReference)) {
            return $this->chatConversationReference;
        }

        throw new BunqException(self::ERROR_NULL_FIELDS);
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->supportConversationExternal)) {
            return false;
        }

        if (!is_null($this->chatConversationReference)) {
            return false;
        }

        return true;
    }
}
