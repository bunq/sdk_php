<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class NotificationFilterPush extends BunqModel
{
    /**
     * The notification category that will match this notification filter.
     *
     * @var string
     */
    protected $category;

    /**
     * The notification category that will match this notification filter.
     *
     * @var string
     */
    protected $categoryFieldForRequest;

    /**
     * @param string $category The notification category that will match this
     * notification filter.
     */
    public function __construct(string $category)
    {
        $this->categoryFieldForRequest = $category;
    }

    /**
     * The notification category that will match this notification filter.
     *
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
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->category)) {
            return false;
        }

        return true;
    }
}
