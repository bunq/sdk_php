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
     * The list of tab items in the batch.
     *
     * @var TabItemShop[]
     */
    protected $tabItems;

    /**
     * The list of tab items we want to create in a single batch. Limited to 50
     * items per batch.
     *
     * @var TabItemShop[]
     */
    protected $tabItemsFieldForRequest;

    /**
     * @param TabItemShop[] $tabItems The list of tab items we want to create in
     *                                a single batch. Limited to 50 items per batch.
     */
    public function __construct(array $tabItems)
    {
        $this->tabItemsFieldForRequest = $tabItems;
    }

    /**
     * Create tab items as a batch.
     *
     * @param int $cashRegisterId
     * @param string $tabUuid
     * @param TabItemShop[] $tabItems The list of tab items we want to create in
     *                                a single batch. Limited to 50 items per batch.
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        int $cashRegisterId,
        string $tabUuid,
        array $tabItems,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $cashRegisterId,
                    $tabUuid,
                ]
            ),
            [self::FIELD_TAB_ITEMS => $tabItems],
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
