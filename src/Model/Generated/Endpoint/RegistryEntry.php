<?php
namespace bunq\Model\Generated\Endpoint;

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
     * Field constants.
     */
    const FIELD_ID = 'id';
    const FIELD_UUID = 'uuid';
    const FIELD_UPDATED = 'updated';
    const FIELD_STATUS = 'status';
    const FIELD_MEMBERSHIP_UUID_OWNER = 'membership_uuid_owner';
    const FIELD_MEMBERSHIP_TRICOUNT_ID_OWNER = 'membership_tricount_id_owner';
    const FIELD_ALIAS_OWNER = 'alias_owner';
    const FIELD_AMOUNT = 'amount';
    const FIELD_AMOUNT_LOCAL = 'amount_local';
    const FIELD_EXCHANGE_RATE = 'exchange_rate';
    const FIELD_OBJECT_REFERENCE = 'object_reference';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_ALLOCATIONS = 'allocations';
    const FIELD_ATTACHMENT = 'attachment';
    const FIELD_CATEGORY = 'category';
    const FIELD_CATEGORY_CUSTOM = 'category_custom';
    const FIELD_DATE = 'date';
    const FIELD_TYPE_TRANSACTION = 'type_transaction';
    const FIELD_TRICOUNT_ID = 'tricount_id';

    /**
     * The id of the RegistryEntry.
     *
     * @var int
     */
    protected $id;

    /**
     * The uuid of the RegistryEntry. If it was provided by the client on
     * creation, then the client can use it to match the returned RegistryEntry
     * to the row stored locally.
     *
     * @var string
     */
    protected $uuid;

    /**
     * The timestamp of the RegistryEntry's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the RegistryEntry's last update.
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
     * The Amount of the RegistryEntry in a local currency.
     *
     * @var Amount
     */
    protected $amountLocal;

    /**
     * The exchange rate used to convert between amount and amount_local.
     *
     * @var string
     */
    protected $exchangeRate;

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
     * The RegistryEntry transaction type. NORMAL, INCOME, or BALANCE.
     *
     * @var string
     */
    protected $typeTransaction;

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
     * The category of this RegistryEntry. Supported values: UNCATEGORIZED,
     * OTHER, ACCOMODATION, ENTERTAINMENT, GROCERIES, HEALTHCARE, INSURANCE,
     * RENT, RESTAURANTS, SHOPPING, TRANSPORT
     *
     * @var string|null
     */
    protected $category;

    /**
     * A custom user-provided category description for this RegistryEntry. Only
     * allowed if `category` is set to "OTHER".
     *
     * @var string|null
     */
    protected $categoryCustom;

    /**
     * A user provided date for this RegistryEntry. Returns a full timestamp to
     * allow apps to also use this to sort transactions client-side.
     *
     * @var string|null
     */
    protected $date;

    /**
     * An optional id of the RegistryEntry. Only relevant when doing a batch
     * update of RegistryEntries when updating a Registry.
     *
     * @var int|null
     */
    protected $idFieldForRequest;

    /**
     * An optional uuid of the RegistryEntry. Can be provided by the client on
     * POST to allow clients to later match returned RegistryEntries to the row
     * stored locally. If none is provided, the backend will generate it.
     *
     * @var string|null
     */
    protected $uuidFieldForRequest;

    /**
     * An optional updated timestamp of the RegistryEntry. Used during sync to
     * determine if the version on the client or server is newest.
     *
     * @var string|null
     */
    protected $updatedFieldForRequest;

    /**
     * The status of the RegistryEntry.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * The UUID of the RegistryMembership of the party we are allocating money
     * for. Can be provided instead of the "alias_owner" field.
     *
     * @var string|null
     */
    protected $membershipUuidOwnerFieldForRequest;

    /**
     * The original tricount id of the membership for backwards compatibility,
     * to ensure clients are able to sync updates to transactions made offline
     * before the Tricount migration to the bunq backend.
     *
     * @var int|null
     */
    protected $membershipTricountIdOwnerFieldForRequest;

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
     * The Amount of the RegistryEntry in a local currency.
     *
     * @var Amount|null
     */
    protected $amountLocalFieldForRequest;

    /**
     * The exchange rate used to convert between amount and amount_local.
     *
     * @var string|null
     */
    protected $exchangeRateFieldForRequest;

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
     * The category of this RegistryEntry. Supported values: UNCATEGORIZED,
     * OTHER, ACCOMODATION, ENTERTAINMENT, GROCERIES, HEALTHCARE, INSURANCE,
     * RENT, RESTAURANTS, SHOPPING, TRANSPORT
     *
     * @var string|null
     */
    protected $categoryFieldForRequest;

    /**
     * A custom user-provided category description for this RegistryEntry. Only
     * allowed if `category` is set to "OTHER".
     *
     * @var string|null
     */
    protected $categoryCustomFieldForRequest;

    /**
     * A user provided date for this RegistryEntry. Accepts full timestamps to
     * assist with client-side sorting of transactions created while the app was
     * offline.
     *
     * @var string|null
     */
    protected $dateFieldForRequest;

    /**
     * The RegistryEntry transaction type. NORMAL, INCOME, or BALANCE.
     *
     * @var string|null
     */
    protected $typeTransactionFieldForRequest;

    /**
     * The original tricount id for backwards compatibility, to ensure clients
     * are able to sync updates to transactions made offline before the Tricount
     * migration to the bunq backend.
     *
     * @var int|null
     */
    protected $tricountIdFieldForRequest;

    /**
     * @param Amount $amount The Amount of the RegistryEntry.
     * @param AllocationItem[] $allocations An array of AllocationItems.
     * @param int|null $id An optional id of the RegistryEntry. Only relevant
     * when doing a batch update of RegistryEntries when updating a Registry.
     * @param string|null $uuid An optional uuid of the RegistryEntry. Can be
     * provided by the client on POST to allow clients to later match returned
     * RegistryEntries to the row stored locally. If none is provided, the
     * backend will generate it.
     * @param string|null $updated An optional updated timestamp of the
     * RegistryEntry. Used during sync to determine if the version on the client
     * or server is newest.
     * @param string|null $status The status of the RegistryEntry.
     * @param string|null $membershipUuidOwner The UUID of the
     * RegistryMembership of the party we are allocating money for. Can be
     * provided instead of the "alias_owner" field.
     * @param int|null $membershipTricountIdOwner The original tricount id of
     * the membership for backwards compatibility, to ensure clients are able to
     * sync updates to transactions made offline before the Tricount migration
     * to the bunq backend.
     * @param Pointer|null $aliasOwner The Alias of the party we are allocating
     * money for.
     * @param Amount|null $amountLocal The Amount of the RegistryEntry in a
     * local currency.
     * @param string|null $exchangeRate The exchange rate used to convert
     * between amount and amount_local.
     * @param RegistryEntryReference|null $objectReference The object linked to
     * the RegistryEntry.
     * @param string|null $description A description about the RegistryEntry.
     * @param RegistryEntryAttachment[]|null $attachment The attachments
     * attached to the payment.
     * @param string|null $category The category of this RegistryEntry.
     * Supported values: UNCATEGORIZED, OTHER, ACCOMODATION, ENTERTAINMENT,
     * GROCERIES, HEALTHCARE, INSURANCE, RENT, RESTAURANTS, SHOPPING, TRANSPORT
     * @param string|null $categoryCustom A custom user-provided category
     * description for this RegistryEntry. Only allowed if `category` is set to
     * "OTHER".
     * @param string|null $date A user provided date for this RegistryEntry.
     * Accepts full timestamps to assist with client-side sorting of
     * transactions created while the app was offline.
     * @param string|null $typeTransaction The RegistryEntry transaction type.
     * NORMAL, INCOME, or BALANCE.
     * @param int|null $tricountId The original tricount id for backwards
     * compatibility, to ensure clients are able to sync updates to transactions
     * made offline before the Tricount migration to the bunq backend.
     */
    public function __construct(Amount  $amount, array  $allocations, int  $id = null, string  $uuid = null, string  $updated = null, string  $status = null, string  $membershipUuidOwner = null, int  $membershipTricountIdOwner = null, Pointer  $aliasOwner = null, Amount  $amountLocal = null, string  $exchangeRate = null, RegistryEntryReference  $objectReference = null, string  $description = null, array  $attachment = null, string  $category = null, string  $categoryCustom = null, string  $date = null, string  $typeTransaction = null, int  $tricountId = null)
    {
        $this->idFieldForRequest = $id;
        $this->uuidFieldForRequest = $uuid;
        $this->updatedFieldForRequest = $updated;
        $this->statusFieldForRequest = $status;
        $this->membershipUuidOwnerFieldForRequest = $membershipUuidOwner;
        $this->membershipTricountIdOwnerFieldForRequest = $membershipTricountIdOwner;
        $this->aliasOwnerFieldForRequest = $aliasOwner;
        $this->amountFieldForRequest = $amount;
        $this->amountLocalFieldForRequest = $amountLocal;
        $this->exchangeRateFieldForRequest = $exchangeRate;
        $this->objectReferenceFieldForRequest = $objectReference;
        $this->descriptionFieldForRequest = $description;
        $this->allocationsFieldForRequest = $allocations;
        $this->attachmentFieldForRequest = $attachment;
        $this->categoryFieldForRequest = $category;
        $this->categoryCustomFieldForRequest = $categoryCustom;
        $this->dateFieldForRequest = $date;
        $this->typeTransactionFieldForRequest = $typeTransaction;
        $this->tricountIdFieldForRequest = $tricountId;
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The uuid of the RegistryEntry. If it was provided by the client on
     * creation, then the client can use it to match the returned RegistryEntry
     * to the row stored locally.
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $uuid
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * The timestamp of the RegistryEntry's creation.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the RegistryEntry's last update.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $updated
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $registryId
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
     * The Amount of the RegistryEntry.
     *
     * @return Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * The Amount of the RegistryEntry in a local currency.
     *
     * @return Amount
     */
    public function getAmountLocal()
    {
        return $this->amountLocal;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountLocal
     */
    public function setAmountLocal($amountLocal)
    {
        $this->amountLocal = $amountLocal;
    }

    /**
     * The exchange rate used to convert between amount and amount_local.
     *
     * @return string
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $exchangeRate
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
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
     * The RegistryEntry transaction type. NORMAL, INCOME, or BALANCE.
     *
     * @return string
     */
    public function getTypeTransaction()
    {
        return $this->typeTransaction;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $typeTransaction
     */
    public function setTypeTransaction($typeTransaction)
    {
        $this->typeTransaction = $typeTransaction;
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelUser $alias
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelUser $counterpartyAlias
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelUser $userAliasCreated
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param RegistryMembership $membershipCreated
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param RegistryMembership $membershipOwned
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param AllocationItem[] $allocations
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param RegistryEntryAttachment[] $attachment
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
    }

    /**
     * The category of this RegistryEntry. Supported values: UNCATEGORIZED,
     * OTHER, ACCOMODATION, ENTERTAINMENT, GROCERIES, HEALTHCARE, INSURANCE,
     * RENT, RESTAURANTS, SHOPPING, TRANSPORT
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
     * A custom user-provided category description for this RegistryEntry. Only
     * allowed if `category` is set to "OTHER".
     *
     * @return string
     */
    public function getCategoryCustom()
    {
        return $this->categoryCustom;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $categoryCustom
     */
    public function setCategoryCustom($categoryCustom)
    {
        $this->categoryCustom = $categoryCustom;
    }

    /**
     * A user provided date for this RegistryEntry. Returns a full timestamp to
     * allow apps to also use this to sort transactions client-side.
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->uuid)) {
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

        if (!is_null($this->amountLocal)) {
            return false;
        }

        if (!is_null($this->exchangeRate)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->typeTransaction)) {
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

        if (!is_null($this->category)) {
            return false;
        }

        if (!is_null($this->categoryCustom)) {
            return false;
        }

        if (!is_null($this->date)) {
            return false;
        }

        return true;
    }
}
