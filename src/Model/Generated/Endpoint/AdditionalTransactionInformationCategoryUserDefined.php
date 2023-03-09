<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Manage user-defined categories.
 *
 * @generated
 */
class AdditionalTransactionInformationCategoryUserDefined extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/additional-transaction-information-category-user-defined';

    /**
     * Field constants.
     */
    const FIELD_CATEGORY = 'category';
    const FIELD_STATUS = 'status';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_COLOR = 'color';
    const FIELD_ICON = 'icon';

    /**
     * The category.
     *
     * @var string|null
     */
    protected $categoryFieldForRequest;

    /**
     * Whether this category is active. Only relevant for user-defined
     * categories.
     *
     * @var string
     */
    protected $statusFieldForRequest;

    /**
     * The description of the category.
     *
     * @var string|null
     */
    protected $descriptionFieldForRequest;

    /**
     * The color of the category.
     *
     * @var string|null
     */
    protected $colorFieldForRequest;

    /**
     * The icon of the category.
     *
     * @var string|null
     */
    protected $iconFieldForRequest;

    /**
     * @param string $status Whether this category is active. Only relevant for
     * user-defined categories.
     * @param string|null $category The category.
     * @param string|null $description The description of the category.
     * @param string|null $color The color of the category.
     * @param string|null $icon The icon of the category.
     */
    public function __construct(string  $status, string  $category = null, string  $description = null, string  $color = null, string  $icon = null)
    {
        $this->categoryFieldForRequest = $category;
        $this->statusFieldForRequest = $status;
        $this->descriptionFieldForRequest = $description;
        $this->colorFieldForRequest = $color;
        $this->iconFieldForRequest = $icon;
    }

    /**
     * @param string $status Whether this category is active. Only relevant for
     * user-defined categories.
     * @param string|null $category The category.
     * @param string|null $description The description of the category.
     * @param string|null $color The color of the category.
     * @param string|null $icon The icon of the category.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(string  $status, string  $category = null, string  $description = null, string  $color = null, string  $icon = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [self::FIELD_CATEGORY => $category,
self::FIELD_STATUS => $status,
self::FIELD_DESCRIPTION => $description,
self::FIELD_COLOR => $color,
self::FIELD_ICON => $icon],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        return true;
    }
}
