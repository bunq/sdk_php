<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Create a batch of tab items.
 *
 * @generated
 */
class TabItemShopBatch extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/cash-register/%s/tab/%s/tab-item-batch';

    /**
     * Field constants.
     */
    const FIELD_TAB_ITEMS = 'tab_items';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'TabItemShopBatch';

    /**
     * The list of tab items in the batch.
     *
     * @var TabItemShop[]
     */
    protected $tabItems;

    /**
     * Create tab items as a batch.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $cashRegisterId
     * @param string $tabUuid
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(ApiContext $apiContext, array $requestMap, int $userId, int $monetaryAccountId, int $cashRegisterId, string $tabUuid, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId, $monetaryAccountId, $cashRegisterId, $tabUuid]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * The list of tab items in the batch.
     *
     * @return TabItemShop[]
     */
    public function getTabItems()
    {
        return $this->tabItems;
    }

    /**
     * @param TabItemShop[] $tabItems
     */
    public function setTabItems($tabItems)
    {
        $this->tabItems = $tabItems;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->tabItems)) {
            return false;
        }

        return true;
    }
}
