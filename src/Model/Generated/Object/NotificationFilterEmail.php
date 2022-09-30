<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class NotificationFilterEmail extends BunqModel
{
    /**
     * The notification category that will match this notification filter.
     *
     * @var string
     */
    protected $category;

    /**
     * The users this filter pertains to.
     *
     * @var string[]
     */
    protected $allUserId;

    /**
     * The MAs this filter pertains to.
     *
     * @var string[]
     */
    protected $allMonetaryAccountId;

    /**
     * The notification category that will match this notification filter.
     *
     * @var string
     */
    protected $categoryFieldForRequest;

    /**
     * The users this filter pertains to. OPTIONAL FOR BACKWARD COMPATIBILITY
     *
     * @var string[]|null
     */
    protected $allUserIdFieldForRequest;

    /**
     * The MAs this filter pertains to. OPTIONAL FOR BACKWARD COMPATIBILITY
     *
     * @var string[]|null
     */
    protected $allMonetaryAccountIdFieldForRequest;

    /**
     * @param string $category The notification category that will match this
     * notification filter.
     * @param string[]|null $allUserId The users this filter pertains to.
     * OPTIONAL FOR BACKWARD COMPATIBILITY
     * @param string[]|null $allMonetaryAccountId The MAs this filter pertains
     * to. OPTIONAL FOR BACKWARD COMPATIBILITY
     */
    public function __construct(string  $category, array  $allUserId = null, array  $allMonetaryAccountId = null)
    {
        $this->categoryFieldForRequest = $category;
        $this->allUserIdFieldForRequest = $allUserId;
        $this->allMonetaryAccountIdFieldForRequest = $allMonetaryAccountId;
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * The users this filter pertains to.
     *
     * @return string[]
     */
    public function getAllUserId()
    {
        return $this->allUserId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string[] $allUserId
     */
    public function setAllUserId($allUserId)
    {
        $this->allUserId = $allUserId;
    }

    /**
     * The MAs this filter pertains to.
     *
     * @return string[]
     */
    public function getAllMonetaryAccountId()
    {
        return $this->allMonetaryAccountId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string[] $allMonetaryAccountId
     */
    public function setAllMonetaryAccountId($allMonetaryAccountId)
    {
        $this->allMonetaryAccountId = $allMonetaryAccountId;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->category)) {
            return false;
        }

        if (!is_null($this->allUserId)) {
            return false;
        }

        if (!is_null($this->allMonetaryAccountId)) {
            return false;
        }

        return true;
    }
}
