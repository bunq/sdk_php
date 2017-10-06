<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class ChatMessageContent extends BunqModel
{
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
}
