<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\BunqModel;

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
    public function setChatMessageContentAnchorEvent(ChatMessageContentAnchorEvent $chatMessageContentAnchorEvent)
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
    public function setChatMessageContentAttachment(ChatMessageContentAttachment $chatMessageContentAttachment)
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
    public function setChatMessageContentGeolocation(ChatMessageContentGeolocation $chatMessageContentGeolocation)
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
    public function setChatMessageContentStatusConversationTitle(ChatMessageContentStatusConversationTitle $chatMessageContentStatusConversationTitle)
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
    public function setChatMessageContentStatusConversation(ChatMessageContentStatusConversation $chatMessageContentStatusConversation)
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
    public function setChatMessageContentStatusMembership(ChatMessageContentStatusMembership $chatMessageContentStatusMembership)
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
    public function setChatMessageContentText(ChatMessageContentText $chatMessageContentText)
    {
        $this->chatMessageContentText = $chatMessageContentText;
    }
}
