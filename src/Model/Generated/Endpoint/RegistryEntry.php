<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\AllocationItem;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\LabelUser;
use bunq\Model\Generated\Object\Pointer;
use bunq\Model\Generated\Object\RegistryEntryAttachment;
use bunq\Model\Generated\Object\RegistryEntryReference;

/**
 * Used to manage Slice group payment.
 *
 * @generated
 */
class RegistryEntry extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/registry/%s/registry-entry';
    const ENDPOINT_URL_UPDATE = 'user/%s/registry/%s/registry-entry/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/registry/%s/registry-entry';
    const ENDPOINT_URL_READ = 'user/%s/registry/%s/registry-entry/%s';
    const ENDPOINT_URL_DELETE = 'user/%s/registry/%s/registry-entry/%s';

    /**
     * Field constants.
     */
    const FIELD_ALIAS_OWNER = 'alias_owner';
    const FIELD_AMOUNT = 'amount';
    const FIELD_OBJECT_REFERENCE = 'object_reference';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_ALLOCATIONS = 'allocations';
    const FIELD_ATTACHMENT = 'attachment';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'RegistryEntry';

    /**
     * The id of the RegistryEntry.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the MonetaryAccountBank's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the MonetaryAccountBank's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The id of the Registry.
     *
     * @var int
     */
    protected $registryId;

    /**
     * The status of the RegistryEntry.
     *
     * @var string
     */
    protected $status;

    /**
     * The Amount of the RegistryEntry.
     *
     * @var Amount
     */
    protected $amount;

    /**
     * A description about the RegistryEntry.
     *
     * @var string
     */
    protected $description;

    /**
     * The RegistryEntry type. AUTO if created by Auto Slice, MANUAL for
     * manually added entries.
     *
     * @var string
     */
    protected $type;

    /**
     * The LabelUser with the public information of the party of this
     * RegistryEntry.
     *
     * @var LabelUser
     */
    protected $alias;

    /**
     * The LabelUser with the public information of the counter party of this
     * RegistryEntry.
     *
     * @var LabelUser
     */
    protected $counterpartyAlias;

    /**
     * The LabelUser with the public information of the User that created the
     * RegistryEntry.
     *
     * @var LabelUser
     */
    protected $userAliasCreated;

    /**
     * The membership of the creator.
     *
     * @var RegistryMembership
     */
    protected $membershipCreated;

    /**
     * The membership of the owner.
     *
     * @var RegistryMembership
     */
    protected $membershipOwned;

    /**
     * An array of AllocationItems.
     *
     * @var AllocationItem[]
     */
    protected $allocations;

    /**
     * The attachments attached to the payment.
     *
     * @var RegistryEntryAttachment[]
     */
    protected $attachment;

    /**
     * The Alias of the party we are allocating money for.
     *
     * @var Pointer|null
     */
    protected $aliasOwnerFieldForRequest;

    /**
     * The Amount of the RegistryEntry.
     *
     * @var Amount
     */
    protected $amountFieldForRequest;

    /**
     * The object linked to the RegistryEntry.
     *
     * @var RegistryEntryReference|null
     */
    protected $objectReferenceFieldForRequest;

    /**
     * A description about the RegistryEntry.
     *
     * @var string|null
     */
    protected $descriptionFieldForRequest;

    /**
     * An array of AllocationItems.
     *
     * @var AllocationItem[]
     */
    protected $allocationsFieldForRequest;

    /**
     * The attachments attached to the payment.
     *
     * @var RegistryEntryAttachment[]|null
     */
    protected $attachmentFieldForRequest;

    /**
     * @param Amount $amount The Amount of the RegistryEntry.
     * @param AllocationItem[] $allocations An array of AllocationItems.
     * @param Pointer|null $aliasOwner The Alias of the party we are allocating
     * money for.
     * @param RegistryEntryReference|null $objectReference The object linked to
     * the RegistryEntry.
     * @param string|null $description A description about the RegistryEntry.
     * @param RegistryEntryAttachment[]|null $attachment The attachments
     * attached to the payment.
     */
    public function __construct(
        Amount $amount,
        array $allocations,
        Pointer $aliasOwner = null,
        RegistryEntryReference $objectReference = null,
        string $description = null,
        array $attachment = null
    ) {
        $this->aliasOwnerFieldForRequest = $aliasOwner;
        $this->amountFieldForRequest = $amount;
        $this->objectReferenceFieldForRequest = $objectReference;
        $this->descriptionFieldForRequest = $description;
        $this->allocationsFieldForRequest = $allocations;
        $this->attachmentFieldForRequest = $attachment;
    }

    /**
     * Create a new Slice group payment.
     *
     * @param int $registryId
     * @param Amount $amount The Amount of the RegistryEntry.
     * @param AllocationItem[] $allocations An array of AllocationItems.
     * @param Pointer|null $aliasOwner The Alias of the party we are allocating
     * money for.
     * @param RegistryEntryReference|null $objectReference The object linked to
     * the RegistryEntry.
     * @param string|null $description A description about the RegistryEntry.
     * @param RegistryEntryAttachment[]|null $attachment The attachments
     * attached to the payment.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        int $registryId,
        Amount $amount,
        array $allocations,
        Pointer $aliasOwner = null,
        RegistryEntryReference $objectReference = null,
        string $description = null,
        array $attachment = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), $registryId]
            ),
            [
                self::FIELD_ALIAS_OWNER => $aliasOwner,
                self::FIELD_AMOUNT => $amount,
                self::FIELD_OBJECT_REFERENCE => $objectReference,
                self::FIELD_DESCRIPTION => $description,
                self::FIELD_ALLOCATIONS => $allocations,
                self::FIELD_ATTACHMENT => $attachment,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Update a specific Slice group payment.
     *
     * @param int $registryId
     * @param int $registryEntryId
     * @param string|null $description A description about the RegistryEntry.
     * @param AllocationItem[]|null $allocations An array of AllocationItems.
     * @param RegistryEntryAttachment[]|null $attachment The attachments
     * attached to the payment.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(
        int $registryId,
        int $registryEntryId,
        string $description = null,
        array $allocations = null,
        array $attachment = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $registryId, $registryEntryId]
            ),
            [
                self::FIELD_DESCRIPTION => $description,
                self::FIELD_ALLOCATIONS => $allocations,
                self::FIELD_ATTACHMENT => $attachment,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Get a listing of all Slice group payments.
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $registryId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseRegistryEntryList
     */
    public static function listing(
        int $registryId,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseRegistryEntryList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), $registryId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseRegistryEntryList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Get a specific Slice group payment.
     *
     * @param int $registryId
     * @param int $registryEntryId
     * @param string[] $customHeaders
     *
     * @return BunqResponseRegistryEntry
     */
    public static function get(
        int $registryId,
        int $registryEntryId,
        array $customHeaders = []
    ): BunqResponseRegistryEntry {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $registryId, $registryEntryId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseRegistryEntry::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Delete a specific Slice group payment.
     *
     * @param string[] $customHeaders
     * @param int $registryId
     * @param int $registryEntryId
     *
     * @return BunqResponseNull
     */
    public static function delete(int $registryId, int $registryEntryId, array $customHeaders = []): BunqResponseNull
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->delete(
            vsprintf(
                self::ENDPOINT_URL_DELETE,
                [static::determineUserId(), $registryId, $registryEntryId]
            ),
            $customHeaders
        );

        return BunqResponseNull::castFromBunqResponse(
            new BunqResponse(null, $responseRaw->getHeaders())
        );
    }

    /**
     * The id of the RegistryEntry.
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
     * The timestamp of the MonetaryAccountBank's creation.
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
     * The timestamp of the MonetaryAccountBank's last update.
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
     * The id of the Registry.
     *
     * @return int
     */
    public function getRegistryId()
    {
        return $this->registryId;
    }

    /**
     * @param int $registryId
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setRegistryId($registryId)
    {
        $this->registryId = $registryId;
    }

    /**
     * The status of the RegistryEntry.
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
     * The Amount of the RegistryEntry.
     *
     * @return Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Amount $amount
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * A description about the RegistryEntry.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * The RegistryEntry type. AUTO if created by Auto Slice, MANUAL for
     * manually added entries.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The LabelUser with the public information of the party of this
     * RegistryEntry.
     *
     * @return LabelUser
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param LabelUser $alias
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * The LabelUser with the public information of the counter party of this
     * RegistryEntry.
     *
     * @return LabelUser
     */
    public function getCounterpartyAlias()
    {
        return $this->counterpartyAlias;
    }

    /**
     * @param LabelUser $counterpartyAlias
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCounterpartyAlias($counterpartyAlias)
    {
        $this->counterpartyAlias = $counterpartyAlias;
    }

    /**
     * The LabelUser with the public information of the User that created the
     * RegistryEntry.
     *
     * @return LabelUser
     */
    public function getUserAliasCreated()
    {
        return $this->userAliasCreated;
    }

    /**
     * @param LabelUser $userAliasCreated
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setUserAliasCreated($userAliasCreated)
    {
        $this->userAliasCreated = $userAliasCreated;
    }

    /**
     * The membership of the creator.
     *
     * @return RegistryMembership
     */
    public function getMembershipCreated()
    {
        return $this->membershipCreated;
    }

    /**
     * @param RegistryMembership $membershipCreated
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setMembershipCreated($membershipCreated)
    {
        $this->membershipCreated = $membershipCreated;
    }

    /**
     * The membership of the owner.
     *
     * @return RegistryMembership
     */
    public function getMembershipOwned()
    {
        return $this->membershipOwned;
    }

    /**
     * @param RegistryMembership $membershipOwned
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setMembershipOwned($membershipOwned)
    {
        $this->membershipOwned = $membershipOwned;
    }

    /**
     * An array of AllocationItems.
     *
     * @return AllocationItem[]
     */
    public function getAllocations()
    {
        return $this->allocations;
    }

    /**
     * @param AllocationItem[] $allocations
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setAllocations($allocations)
    {
        $this->allocations = $allocations;
    }

    /**
     * The attachments attached to the payment.
     *
     * @return RegistryEntryAttachment[]
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @param RegistryEntryAttachment[] $attachment
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
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

        if (!is_null($this->registryId)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->amount)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->counterpartyAlias)) {
            return false;
        }

        if (!is_null($this->userAliasCreated)) {
            return false;
        }

        if (!is_null($this->membershipCreated)) {
            return false;
        }

        if (!is_null($this->membershipOwned)) {
            return false;
        }

        if (!is_null($this->allocations)) {
            return false;
        }

        if (!is_null($this->attachment)) {
            return false;
        }

        return true;
    }
}
