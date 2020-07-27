<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\RegistrySettlementItem;

/**
 * Used to manage pending Slice group settlements.
 *
 * @generated
 */
class RegistrySettlementPending extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/registry/%s/registry-settlement-pending';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'RegistrySettlementPending';

    /**
     * List of RegistrySettlementItems
     *
     * @var RegistrySettlementItem[]
     */
    protected $items;

    /**
     * Get a listing of all pending Slice group settlements.
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $registryId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseRegistrySettlementPendingList
     */
    public static function listing(
        int $registryId,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseRegistrySettlementPendingList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), $registryId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseRegistrySettlementPendingList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * List of RegistrySettlementItems
     *
     * @return RegistrySettlementItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param RegistrySettlementItem[] $items
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->items)) {
            return false;
        }

        return true;
    }
}
