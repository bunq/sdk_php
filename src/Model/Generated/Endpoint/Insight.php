<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;

/**
 * Used to get insights about transactions between given time range.
 *
 * @generated
 */
class Insight extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/insights';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'InsightCategory';

    /**
     * The category.
     *
     * @var string
     */
    protected $category;

    /**
     * The translated category.
     *
     * @var string
     */
    protected $categoryTranslated;

    /**
     * The total amount of the transactions in the category.
     *
     * @var Amount
     */
    protected $amountTotal;

    /**
     * The number of the transactions in the category.
     *
     * @var float
     */
    protected $numberOfTransactions;

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseInsightList
     */
    public static function listing(array $params = [], array $customHeaders = []): BunqResponseInsightList
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

        return BunqResponseInsightList::castFromBunqResponse(
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
     * @param string $category
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * The translated category.
     *
     * @return string
     */
    public function getCategoryTranslated()
    {
        return $this->categoryTranslated;
    }

    /**
     * @param string $categoryTranslated
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCategoryTranslated($categoryTranslated)
    {
        $this->categoryTranslated = $categoryTranslated;
    }

    /**
     * The total amount of the transactions in the category.
     *
     * @return Amount
     */
    public function getAmountTotal()
    {
        return $this->amountTotal;
    }

    /**
     * @param Amount $amountTotal
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setAmountTotal($amountTotal)
    {
        $this->amountTotal = $amountTotal;
    }

    /**
     * The number of the transactions in the category.
     *
     * @return float
     */
    public function getNumberOfTransactions()
    {
        return $this->numberOfTransactions;
    }

    /**
     * @param float $numberOfTransactions
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setNumberOfTransactions($numberOfTransactions)
    {
        $this->numberOfTransactions = $numberOfTransactions;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->category)) {
            return false;
        }

        if (!is_null($this->categoryTranslated)) {
            return false;
        }

        if (!is_null($this->amountTotal)) {
            return false;
        }

        if (!is_null($this->numberOfTransactions)) {
            return false;
        }

        return true;
    }
}
