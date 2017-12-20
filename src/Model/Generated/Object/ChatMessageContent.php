<?php
namespace bunq\Model\Generated\Object;

use bunq\exception\BunqException;
use bunq\Model\Core\AnchorObjectInterface;
use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class ChatMessageContent extends BunqModel implements AnchorObjectInterface
{
    /**
     * Error constants.
     */
    const ERROR_NULL_FIELDS = 'All fields of an extended model or object are null.';

    /**
     * @var ChatMessageContentAnchorEvent
     */
    protected $chatMessageContentAnchorEvent;

    /**
     * @var ChatMessageContentAttachment
     */
    protected $chatMessageContentAttachment;

    /**
     * @var ChatMessageContentGeolocation
     */
    protected $chatMessageContentGeolocation;

    /**
     * @var ChatMessageContentStatusConversationTitle
     */
    protected $chatMessageContentStatusConversationTitle;

    /**
     * @var ChatMessageContentStatusConversation
     */
    protected $chatMessageContentStatusConversation;

    /**
     * @var ChatMessageContentStatusMembership
     */
    protected $chatMessageContentStatusMembership;

    /**
     * @var ChatMessageContentText
     */
    protected $chatMessageContentText;

    /**
     * @return ChatMessageContentAnchorEvent
     */
    public function getChatMessageContentAnchorEvent()
    {
        return $this->chatMessageContentAnchorEvent;
    }

    /**
     * @param ChatMessageContentAnchorEvent $chatMessageContentAnchorEvent
     */
    public function setChatMessageContentAnchorEvent($chatMessageContentAnchorEvent)
    {
        $this->chatMessageContentAnchorEvent = $chatMessageContentAnchorEvent;
    }

    /**
     * @return ChatMessageContentAttachment
     */
    public function getChatMessageContentAttachment()
    {
        return $this->chatMessageContentAttachment;
    }

    /**
     * @param ChatMessageContentAttachment $chatMessageContentAttachment
     */
    public function setChatMessageContentAttachment($chatMessageContentAttachment)
    {
        $this->chatMessageContentAttachment = $chatMessageContentAttachment;
    }

    /**
     * @return ChatMessageContentGeolocation
     */
    public function getChatMessageContentGeolocation()
    {
        return $this->chatMessageContentGeolocation;
    }

    /**
     * @param ChatMessageContentGeolocation $chatMessageContentGeolocation
     */
    public function setChatMessageContentGeolocation($chatMessageContentGeolocation)
    {
        $this->chatMessageContentGeolocation = $chatMessageContentGeolocation;
    }

    /**
     * @return ChatMessageContentStatusConversationTitle
     */
    public function getChatMessageContentStatusConversationTitle()
    {
        return $this->chatMessageContentStatusConversationTitle;
    }

    /**
     * @param ChatMessageContentStatusConversationTitle
     * $chatMessageContentStatusConversationTitle
     */
    public function setChatMessageContentStatusConversationTitle($chatMessageContentStatusConversationTitle)
    {
        $this->chatMessageContentStatusConversationTitle = $chatMessageContentStatusConversationTitle;
    }

    /**
     * @return ChatMessageContentStatusConversation
     */
    public function getChatMessageContentStatusConversation()
    {
        return $this->chatMessageContentStatusConversation;
    }

    /**
     * @param ChatMessageContentStatusConversation
     * $chatMessageContentStatusConversation
     */
    public function setChatMessageContentStatusConversation($chatMessageContentStatusConversation)
    {
        $this->chatMessageContentStatusConversation = $chatMessageContentStatusConversation;
    }

    /**
     * @return ChatMessageContentStatusMembership
     */
    public function getChatMessageContentStatusMembership()
    {
        return $this->chatMessageContentStatusMembership;
    }

    /**
     * @param ChatMessageContentStatusMembership
     * $chatMessageContentStatusMembership
     */
    public function setChatMessageContentStatusMembership($chatMessageContentStatusMembership)
    {
        $this->chatMessageContentStatusMembership = $chatMessageContentStatusMembership;
    }

    /**
     * @return ChatMessageContentText
     */
    public function getChatMessageContentText()
    {
        return $this->chatMessageContentText;
    }

    /**
     * @param ChatMessageContentText $chatMessageContentText
     */
    public function setChatMessageContentText($chatMessageContentText)
    {
        $this->chatMessageContentText = $chatMessageContentText;
    }

    /**
     * @return BunqModel
     * @throws BunqException
     */
    public function getReferencedObject()
    {
        if (!is_null($this->chatMessageContentAnchorEvent)) {
            return $this->chatMessageContentAnchorEvent;
        }

        if (!is_null($this->chatMessageContentAttachment)) {
            return $this->chatMessageContentAttachment;
        }

        if (!is_null($this->chatMessageContentGeolocation)) {
            return $this->chatMessageContentGeolocation;
        }

        if (!is_null($this->chatMessageContentStatusConversationTitle)) {
            return $this->chatMessageContentStatusConversationTitle;
        }

        if (!is_null($this->chatMessageContentStatusConversation)) {
            return $this->chatMessageContentStatusConversation;
        }

        if (!is_null($this->chatMessageContentStatusMembership)) {
            return $this->chatMessageContentStatusMembership;
        }

        if (!is_null($this->chatMessageContentText)) {
            return $this->chatMessageContentText;
        }

        throw new BunqException(self::ERROR_NULL_FIELDS);
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->chatMessageContentAnchorEvent)) {
            return false;
        }

        if (!is_null($this->chatMessageContentAttachment)) {
            return false;
        }

        if (!is_null($this->chatMessageContentGeolocation)) {
            return false;
        }

        if (!is_null($this->chatMessageContentStatusConversationTitle)) {
            return false;
        }

        if (!is_null($this->chatMessageContentStatusConversation)) {
            return false;
        }

        if (!is_null($this->chatMessageContentStatusMembership)) {
            return false;
        }

        if (!is_null($this->chatMessageContentText)) {
            return false;
        }

        return true;
    }
}
