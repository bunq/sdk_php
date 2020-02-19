<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class NotificationUrl extends BunqModel
{
    /**
     * @var string
     */
    protected $targetUrl;

    /**
     * @var string
     */
    protected $category;

    /**
     * @var string
     */
    protected $eventType;

    /**
     * @var NotificationAnchorObject
     */
    protected $object;

    /**
     * @return string
     */
    public function getTargetUrl()
    {
        return $this->targetUrl;
    }

    /**
     * @param string $targetUrl
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setTargetUrl($targetUrl)
    {
        $this->targetUrl = $targetUrl;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @param string $eventType
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    }

    /**
     * @return NotificationAnchorObject
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param NotificationAnchorObject $object
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setObject($object)
    {
        $this->object = $object;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->targetUrl)) {
            return false;
        }

        if (!is_null($this->category)) {
            return false;
        }

        if (!is_null($this->eventType)) {
            return false;
        }

        if (!is_null($this->object)) {
            return false;
        }

        return true;
    }
}
