<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\RegistrySettlementItem;

/**
 * Used to settle a Slice group.
 *
 * @generated
 */
class RegistrySettlement extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/registry/%s/registry-settlement';
    const ENDPOINT_URL_READ = 'user/%s/registry/%s/registry-settlement/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/registry/%s/registry-settlement';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'RegistrySettlement';

    /**
     * The id of the RegistrySettlement.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the RegistrySettlement's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the RegistrySettlement's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The timestamp of the Registry's settlement.
     *
     * @var string
     */
    protected $settlementTime;

    /**
     * The total amount spent for the RegistrySettlement.
     *
     * @var Amount
     */
    protected $totalAmountSpent;

    /**
     * The number of RegistryEntry's associated with this RegistrySettlement.
     *
     * @var int
     */
    protected $numberOfEntries;

    /**
     * The membership of the user that settled the Registry.
     *
     * @var RegistryMembership
     */
    protected $settledByAlias;

    /**
     * The membership of the user that has settled the registry.
     *
     * @var RegistryMembership
     */
    protected $membershipSettled;

    /**
     * List of RegistrySettlementItems
     *
     * @var RegistrySettlementItem[]
     */
    protected $items;

    /**
     * Create a new Slice group settlement.
     *
     * @param int $registryId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(int $registryId, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), $registryId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Get a specific Slice group settlement.
     *
     * @param int $registryId
     * @param int $registrySettlementId
     * @param string[] $customHeaders
     *
     * @return BunqResponseRegistrySettlement
     */
    public static function get(
        int $registryId,
        int $registrySettlementId,
        array $customHeaders = []
    ): BunqResponseRegistrySettlement {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $registryId, $registrySettlementId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseRegistrySettlement::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Get a listing of all Slice group settlements.
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $registryId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseRegistrySettlementList
     */
    public static function listing(
        int $registryId,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseRegistrySettlementList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), $registryId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseRegistrySettlementList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the RegistrySettlement.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The timestamp of the RegistrySettlement's creation.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the RegistrySettlement's last update.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The timestamp of the Registry's settlement.
     *
     * @return string
     */
    public function getSettlementTime()
    {
        return $this->settlementTime;
    }

    /**
     * @param string $settlementTime
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setSettlementTime($settlementTime)
    {
        $this->settlementTime = $settlementTime;
    }

    /**
     * The total amount spent for the RegistrySettlement.
     *
     * @return Amount
     */
    public function getTotalAmountSpent()
    {
        return $this->totalAmountSpent;
    }

    /**
     * @param Amount $totalAmountSpent
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setTotalAmountSpent($totalAmountSpent)
    {
        $this->totalAmountSpent = $totalAmountSpent;
    }

    /**
     * The number of RegistryEntry's associated with this RegistrySettlement.
     *
     * @return int
     */
    public function getNumberOfEntries()
    {
        return $this->numberOfEntries;
    }

    /**
     * @param int $numberOfEntries
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setNumberOfEntries($numberOfEntries)
    {
        $this->numberOfEntries = $numberOfEntries;
    }

    /**
     * The membership of the user that settled the Registry.
     *
     * @return RegistryMembership
     */
    public function getSettledByAlias()
    {
        return $this->settledByAlias;
    }

    /**
     * @param RegistryMembership $settledByAlias
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setSettledByAlias($settledByAlias)
    {
        $this->settledByAlias = $settledByAlias;
    }

    /**
     * The membership of the user that has settled the registry.
     *
     * @return RegistryMembership
     */
    public function getMembershipSettled()
    {
        return $this->membershipSettled;
    }

    /**
     * @param RegistryMembership $membershipSettled
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setMembershipSettled($membershipSettled)
    {
        $this->membershipSettled = $membershipSettled;
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
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->created)) {
            return false;
        }

        if (!is_null($this->updated)) {
            return false;
        }

        if (!is_null($this->settlementTime)) {
            return false;
        }

        if (!is_null($this->totalAmountSpent)) {
            return false;
        }

        if (!is_null($this->numberOfEntries)) {
            return false;
        }

        if (!is_null($this->settledByAlias)) {
            return false;
        }

        if (!is_null($this->membershipSettled)) {
            return false;
        }

        if (!is_null($this->items)) {
            return false;
        }

        return true;
    }
}
