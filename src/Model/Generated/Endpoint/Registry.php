<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;

/**
 * Used to manage Slice groups.
 *
 * @generated
 */
class Registry extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/registry';
    const ENDPOINT_URL_UPDATE = 'user/%s/registry/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/registry';
    const ENDPOINT_URL_READ = 'user/%s/registry/%s';
    const ENDPOINT_URL_DELETE = 'user/%s/registry/%s';

    /**
     * Field constants.
     */
    const FIELD_CURRENCY = 'currency';
    const FIELD_TITLE = 'title';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_STATUS = 'status';
    const FIELD_LAST_REGISTRY_ENTRY_SEEN_ID = 'last_registry_entry_seen_id';
    const FIELD_PREVIOUS_UPDATED_TIMESTAMP = 'previous_updated_timestamp';
    const FIELD_MEMBERSHIPS = 'memberships';
    const FIELD_MEMBERSHIPS_PREVIOUS = 'memberships_previous';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'Registry';

    /**
     * The id of the Registry.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the Registry's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the Registry's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The currency for the Registry as an ISO 4217 formatted currency code.
     *
     * @var string
     */
    protected $currency;

    /**
     * The title of the Registry.
     *
     * @var string
     */
    protected $title;

    /**
     * The status of the Registry.
     *
     * @var string
     */
    protected $status;

    /**
     * The number of RegistryEntries in this Registry that the user has not
     * seen.
     *
     * @var int
     */
    protected $unseenEntriesCount;

    /**
     * The total amount spent in this Registry since the last settlement.
     *
     * @var Amount
     */
    protected $totalAmountSpent;

    /**
     * Whether the Registry has previously been settled.
     *
     * @var bool
     */
    protected $isPreviouslySettled;

    /**
     * List of memberships to replace the current one.
     *
     * @var RegistryMembership[]
     */
    protected $memberships;

    /**
     * The settings for this Registry.
     *
     * @var RegistrySetting
     */
    protected $setting;

    /**
     * The ID of the registry that currently has auto_add_card_transaction set
     * to ALL.
     *
     * @var int
     */
    protected $registryAutoAddCardTransactionEnabledId;

    /**
     * The currency for the Registry as an ISO 4217 formatted currency code.
     *
     * @var string
     */
    protected $currencyFieldForRequest;

    /**
     * The title of the Registry.
     *
     * @var string|null
     */
    protected $titleFieldForRequest;

    /**
     * A description about the Registry.
     *
     * @var string|null
     */
    protected $descriptionFieldForRequest;

    /**
     * The status of the Registry.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * The id of the last RegistryEntry that the user has seen.
     *
     * @var int|null
     */
    protected $lastRegistryEntrySeenIdFieldForRequest;

    /**
     * The previous updated timestamp that you received for this Registry.
     *
     * @var string|null
     */
    protected $previousUpdatedTimestampFieldForRequest;

    /**
     * New list of memberships.
     *
     * @var RegistryMembership[]|null
     */
    protected $membershipsFieldForRequest;

    /**
     * Previous list of memberships.
     *
     * @var RegistryMembership[]|null
     */
    protected $membershipsPreviousFieldForRequest;

    /**
     * @param string $currency The currency for the Registry as an ISO 4217
     * formatted currency code.
     * @param string|null $title The title of the Registry.
     * @param string|null $description A description about the Registry.
     * @param string|null $status The status of the Registry.
     * @param int|null $lastRegistryEntrySeenId The id of the last RegistryEntry
     * that the user has seen.
     * @param string|null $previousUpdatedTimestamp The previous updated
     * timestamp that you received for this Registry.
     * @param RegistryMembership[]|null $memberships New list of memberships.
     * @param RegistryMembership[]|null $membershipsPrevious Previous list of
     * memberships.
     */
    public function __construct(
        string $currency,
        string $title = null,
        string $description = null,
        string $status = null,
        int $lastRegistryEntrySeenId = null,
        string $previousUpdatedTimestamp = null,
        array $memberships = null,
        array $membershipsPrevious = null
    ) {
        $this->currencyFieldForRequest = $currency;
        $this->titleFieldForRequest = $title;
        $this->descriptionFieldForRequest = $description;
        $this->statusFieldForRequest = $status;
        $this->lastRegistryEntrySeenIdFieldForRequest = $lastRegistryEntrySeenId;
        $this->previousUpdatedTimestampFieldForRequest = $previousUpdatedTimestamp;
        $this->membershipsFieldForRequest = $memberships;
        $this->membershipsPreviousFieldForRequest = $membershipsPrevious;
    }

    /**
     * Create a new Slice group.
     *
     * @param string $currency The currency for the Registry as an ISO 4217
     * formatted currency code.
     * @param string|null $title The title of the Registry.
     * @param string|null $description A description about the Registry.
     * @param string|null $status The status of the Registry.
     * @param int|null $lastRegistryEntrySeenId The id of the last RegistryEntry
     * that the user has seen.
     * @param string|null $previousUpdatedTimestamp The previous updated
     * timestamp that you received for this Registry.
     * @param RegistryMembership[]|null $memberships New list of memberships.
     * @param RegistryMembership[]|null $membershipsPrevious Previous list of
     * memberships.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        string $currency,
        string $title = null,
        string $description = null,
        string $status = null,
        int $lastRegistryEntrySeenId = null,
        string $previousUpdatedTimestamp = null,
        array $memberships = null,
        array $membershipsPrevious = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [
                self::FIELD_CURRENCY => $currency,
                self::FIELD_TITLE => $title,
                self::FIELD_DESCRIPTION => $description,
                self::FIELD_STATUS => $status,
                self::FIELD_LAST_REGISTRY_ENTRY_SEEN_ID => $lastRegistryEntrySeenId,
                self::FIELD_PREVIOUS_UPDATED_TIMESTAMP => $previousUpdatedTimestamp,
                self::FIELD_MEMBERSHIPS => $memberships,
                self::FIELD_MEMBERSHIPS_PREVIOUS => $membershipsPrevious,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Update a specific Slice group.
     *
     * @param int $registryId
     * @param string|null $title The title of the Registry.
     * @param string|null $description A description about the Registry.
     * @param string|null $status The status of the Registry.
     * @param int|null $lastRegistryEntrySeenId The id of the last RegistryEntry
     * that the user has seen.
     * @param string|null $previousUpdatedTimestamp The previous updated
     * timestamp that you received for this Registry.
     * @param RegistryMembership[]|null $memberships New list of memberships.
     * @param RegistryMembership[]|null $membershipsPrevious Previous list of
     * memberships.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(
        int $registryId,
        string $title = null,
        string $description = null,
        string $status = null,
        int $lastRegistryEntrySeenId = null,
        string $previousUpdatedTimestamp = null,
        array $memberships = null,
        array $membershipsPrevious = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $registryId]
            ),
            [
                self::FIELD_TITLE => $title,
                self::FIELD_DESCRIPTION => $description,
                self::FIELD_STATUS => $status,
                self::FIELD_LAST_REGISTRY_ENTRY_SEEN_ID => $lastRegistryEntrySeenId,
                self::FIELD_PREVIOUS_UPDATED_TIMESTAMP => $previousUpdatedTimestamp,
                self::FIELD_MEMBERSHIPS => $memberships,
                self::FIELD_MEMBERSHIPS_PREVIOUS => $membershipsPrevious,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Get a listing of all Slice groups.
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseRegistryList
     */
    public static function listing(array $params = [], array $customHeaders = []): BunqResponseRegistryList
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

        return BunqResponseRegistryList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Get a specific Slice group.
     *
     * @param int $registryId
     * @param string[] $customHeaders
     *
     * @return BunqResponseRegistry
     */
    public static function get(int $registryId, array $customHeaders = []): BunqResponseRegistry
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $registryId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseRegistry::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Delete a specific Slice group.
     *
     * @param string[] $customHeaders
     * @param int $registryId
     *
     * @return BunqResponseNull
     */
    public static function delete(int $registryId, array $customHeaders = []): BunqResponseNull
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->delete(
            vsprintf(
                self::ENDPOINT_URL_DELETE,
                [static::determineUserId(), $registryId]
            ),
            $customHeaders
        );

        return BunqResponseNull::castFromBunqResponse(
            new BunqResponse(null, $responseRaw->getHeaders())
        );
    }

    /**
     * The id of the Registry.
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
     * The timestamp of the Registry's creation.
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
     * The timestamp of the Registry's last update.
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
     * The currency for the Registry as an ISO 4217 formatted currency code.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * The title of the Registry.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * The status of the Registry.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The number of RegistryEntries in this Registry that the user has not
     * seen.
     *
     * @return int
     */
    public function getUnseenEntriesCount()
    {
        return $this->unseenEntriesCount;
    }

    /**
     * @param int $unseenEntriesCount
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setUnseenEntriesCount($unseenEntriesCount)
    {
        $this->unseenEntriesCount = $unseenEntriesCount;
    }

    /**
     * The total amount spent in this Registry since the last settlement.
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
     * Whether the Registry has previously been settled.
     *
     * @return bool
     */
    public function getIsPreviouslySettled()
    {
        return $this->isPreviouslySettled;
    }

    /**
     * @param bool $isPreviouslySettled
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setIsPreviouslySettled($isPreviouslySettled)
    {
        $this->isPreviouslySettled = $isPreviouslySettled;
    }

    /**
     * List of memberships to replace the current one.
     *
     * @return RegistryMembership[]
     */
    public function getMemberships()
    {
        return $this->memberships;
    }

    /**
     * @param RegistryMembership[] $memberships
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setMemberships($memberships)
    {
        $this->memberships = $memberships;
    }

    /**
     * The settings for this Registry.
     *
     * @return RegistrySetting
     */
    public function getSetting()
    {
        return $this->setting;
    }

    /**
     * @param RegistrySetting $setting
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setSetting($setting)
    {
        $this->setting = $setting;
    }

    /**
     * The ID of the registry that currently has auto_add_card_transaction set
     * to ALL.
     *
     * @return int
     */
    public function getRegistryAutoAddCardTransactionEnabledId()
    {
        return $this->registryAutoAddCardTransactionEnabledId;
    }

    /**
     * @param int $registryAutoAddCardTransactionEnabledId
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setRegistryAutoAddCardTransactionEnabledId($registryAutoAddCardTransactionEnabledId)
    {
        $this->registryAutoAddCardTransactionEnabledId = $registryAutoAddCardTransactionEnabledId;
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

        if (!is_null($this->currency)) {
            return false;
        }

        if (!is_null($this->title)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->unseenEntriesCount)) {
            return false;
        }

        if (!is_null($this->totalAmountSpent)) {
            return false;
        }

        if (!is_null($this->isPreviouslySettled)) {
            return false;
        }

        if (!is_null($this->memberships)) {
            return false;
        }

        if (!is_null($this->setting)) {
            return false;
        }

        if (!is_null($this->registryAutoAddCardTransactionEnabledId)) {
            return false;
        }

        return true;
    }
}
