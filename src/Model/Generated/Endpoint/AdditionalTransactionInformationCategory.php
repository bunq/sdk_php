<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Get the available categories.
 *
 * @generated
 */
class AdditionalTransactionInformationCategory extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/additional-transaction-information-category';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'AdditionalTransactionInformationCategory';

    /**
     * The category.
     *
     * @var string
     */
    protected $category;

    /**
     * Who created this category.
     *
     * @var string
     */
    protected $type;

    /**
     * Whether this category is active. Only relevant for user-defined
     * categories.
     *
     * @var string
     */
    protected $status;

    /**
     * The sort order of the category.
     *
     * @var int
     */
    protected $order;

    /**
     * The description of the category.
     *
     * @var string
     */
    protected $description;

    /**
     * The translation of the description of the category.
     *
     * @var string
     */
    protected $descriptionTranslated;

    /**
     * The color of the category.
     *
     * @var string
     */
    protected $color;

    /**
     * The icon of the category.
     *
     * @var string
     */
    protected $icon;

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseAdditionalTransactionInformationCategoryList
     */
    public static function listing( array $params = [], array $customHeaders = []): BunqResponseAdditionalTransactionInformationCategoryList
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

        return BunqResponseAdditionalTransactionInformationCategoryList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The category.
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
     * Who created this category.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Whether this category is active. Only relevant for user-defined
     * categories.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The sort order of the category.
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * The description of the category.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * The translation of the description of the category.
     *
     * @return string
     */
    public function getDescriptionTranslated()
    {
        return $this->descriptionTranslated;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $descriptionTranslated
     */
    public function setDescriptionTranslated($descriptionTranslated)
    {
        $this->descriptionTranslated = $descriptionTranslated;
    }

    /**
     * The color of the category.
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * The icon of the category.
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->category)) {
            return false;
        }

        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->order)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->descriptionTranslated)) {
            return false;
        }

        if (!is_null($this->color)) {
            return false;
        }

        if (!is_null($this->icon)) {
            return false;
        }

        return true;
    }
}
