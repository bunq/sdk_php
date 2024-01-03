<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Avatar;
use bunq\Model\Generated\Object\Pointer;
use bunq\Model\Generated\Object\RegistryMembershipSetting;

/**
 * Used to manage Slice groups.
 *
 * @generated
 */
class Registry extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_UPDATED = 'updated';
    const FIELD_UUID = 'uuid';
    const FIELD_PUBLIC_IDENTIFIER_TOKEN = 'public_identifier_token';
    const FIELD_CURRENCY = 'currency';
    const FIELD_TITLE = 'title';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_CATEGORY = 'category';
    const FIELD_STATUS = 'status';
    const FIELD_LAST_REGISTRY_ENTRY_SEEN_ID = 'last_registry_entry_seen_id';
    const FIELD_PREVIOUS_UPDATED_TIMESTAMP = 'previous_updated_timestamp';
    const FIELD_MEMBERSHIP_UUID_ACTIVE = 'membership_uuid_active';
    const FIELD_MEMBERSHIPS = 'memberships';
    const FIELD_MEMBERSHIPS_PREVIOUS = 'memberships_previous';
    const FIELD_DELETED_MEMBERSHIP_IDS = 'deleted_membership_ids';
    const FIELD_AUTO_ADD_CARD_TRANSACTION = 'auto_add_card_transaction';
    const FIELD_MEMBERSHIP_SETTING = 'membership_setting';
    const FIELD_AVATAR_UUID = 'avatar_uuid';
    const FIELD_SETTING = 'setting';
    const FIELD_ALL_REGISTRY_ENTRY = 'all_registry_entry';
    const FIELD_ALIAS_CREATOR = 'alias_creator';

    /**
     * The id of the Registry.
     *
     * @var int
     */
    protected $id;

    /**
     * The uuid of the Registry. If it was provided by the client on creation,
     * then the client can use it to match the returned Registry to the row
     * stored locally.
     *
     * @var string
     */
    protected $uuid;

    /**
     * Public identifier token provided by the client. Will remain null if not
     * provided in the POST call.
     *
     * @var string
     */
    protected $publicIdentifierToken;

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
     * A description about the Registry.
     *
     * @var string
     */
    protected $description;

    /**
     * The category of the Registry. Can be one of the following values:
     * GENERAL, TRIP, SHARED_HOUSE, COUPLE, EVENT, PROJECT, OTHER
     *
     * @var string
     */
    protected $category;

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
     * The UUID of the membership which is currently linked to the logged in
     * user.
     *
     * @var string
     */
    protected $membershipUuidActive;

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
     * The registry's avatar.
     *
     * @var Avatar
     */
    protected $avatar;

    /**
     * The optional ID of the last settlement of this activity.
     *
     * @var int
     */
    protected $lastSettlementId;

    /**
     * The timestamp of the latest activity seen for this registry.
     *
     * @var string
     */
    protected $lastActivityTimestamp;

    /**
     * @var RegistryEntry[]|null
     */
    protected $allRegistryEntry;

    /**
     * The timestamp of the Registry's last update.
     *
     * @var string|null
     */
    protected $updatedFieldForRequest;

    /**
     * An optional uuid of the Registry. Can be provided by the client on POST
     * to allow clients to later match returned Registries to the row stored
     * locally. If none is provided, the backend will generate it.
     *
     * @var string|null
     */
    protected $uuidFieldForRequest;

    /**
     * Public identifier token provided by the client.
     *
     * @var string|null
     */
    protected $publicIdentifierTokenFieldForRequest;

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
     * The category of the Registry. Can be one of the following values:
     * GENERAL, TRIP, SHARED_HOUSE, COUPLE, EVENT, PROJECT, OTHER
     *
     * @var string|null
     */
    protected $categoryFieldForRequest;

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
     * The UUID of the membership to set as the active one.
     *
     * @var string|null
     */
    protected $membershipUuidActiveFieldForRequest;

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
     * The ids of the memberships that have been deleted.
     *
     * @var string[]|null
     */
    protected $deletedMembershipIdsFieldForRequest;

    /**
     * The setting for adding automatically card transactions to the registry
     * for the creator. (deprecated)
     *
     * @var string|null
     */
    protected $autoAddCardTransactionFieldForRequest;

    /**
     * User creator registry membership setting.
     *
     * @var RegistryMembershipSetting|null
     */
    protected $membershipSettingFieldForRequest;

    /**
     * The UUID of the avatar. Use the calls /attachment-public and /avatar to
     * create a new Avatar and get its UUID.
     *
     * @var string|null
     */
    protected $avatarUuidFieldForRequest;

    /**
     * The settings of the Registry.
     *
     * @var RegistrySetting|null
     */
    protected $settingFieldForRequest;

    /**
     * @var RegistryEntry[]|null
     */
    protected $allRegistryEntryFieldForRequest;

    /**
     * The alias of the creator, so we can send a confirmation even when the
     * creator doesn't yet have an alias saved for their user.
     *
     * @var Pointer|null
     */
    protected $aliasCreatorFieldForRequest;

    /**
     * @param string $currency The currency for the Registry as an ISO 4217
     * formatted currency code.
     * @param string|null $updated The timestamp of the Registry's last update.
     * @param string|null $uuid An optional uuid of the Registry. Can be
     * provided by the client on POST to allow clients to later match returned
     * Registries to the row stored locally. If none is provided, the backend
     * will generate it.
     * @param string|null $publicIdentifierToken Public identifier token
     * provided by the client.
     * @param string|null $title The title of the Registry.
     * @param string|null $description A description about the Registry.
     * @param string|null $category The category of the Registry. Can be one of
     * the following values: GENERAL, TRIP, SHARED_HOUSE, COUPLE, EVENT,
     * PROJECT, OTHER
     * @param string|null $status The status of the Registry.
     * @param int|null $lastRegistryEntrySeenId The id of the last RegistryEntry
     * that the user has seen.
     * @param string|null $previousUpdatedTimestamp The previous updated
     * timestamp that you received for this Registry.
     * @param string|null $membershipUuidActive The UUID of the membership to
     * set as the active one.
     * @param RegistryMembership[]|null $memberships New list of memberships.
     * @param RegistryMembership[]|null $membershipsPrevious Previous list of
     * memberships.
     * @param string[]|null $deletedMembershipIds The ids of the memberships
     * that have been deleted.
     * @param string|null $autoAddCardTransaction The setting for adding
     * automatically card transactions to the registry for the creator.
     * (deprecated)
     * @param RegistryMembershipSetting|null $membershipSetting User creator
     * registry membership setting.
     * @param string|null $avatarUuid The UUID of the avatar. Use the calls
     * /attachment-public and /avatar to create a new Avatar and get its UUID.
     * @param RegistrySetting|null $setting The settings of the Registry.
     * @param RegistryEntry[]|null $allRegistryEntry 
     * @param Pointer|null $aliasCreator The alias of the creator, so we can
     * send a confirmation even when the creator doesn't yet have an alias saved
     * for their user.
     */
    public function __construct(string  $currency, string  $updated = null, string  $uuid = null, string  $publicIdentifierToken = null, string  $title = null, string  $description = null, string  $category = null, string  $status = null, int  $lastRegistryEntrySeenId = null, string  $previousUpdatedTimestamp = null, string  $membershipUuidActive = null, array  $memberships = null, array  $membershipsPrevious = null, array  $deletedMembershipIds = null, string  $autoAddCardTransaction = null, RegistryMembershipSetting  $membershipSetting = null, string  $avatarUuid = null, RegistrySetting  $setting = null, array  $allRegistryEntry = null, Pointer  $aliasCreator = null)
    {
        $this->updatedFieldForRequest = $updated;
        $this->uuidFieldForRequest = $uuid;
        $this->publicIdentifierTokenFieldForRequest = $publicIdentifierToken;
        $this->currencyFieldForRequest = $currency;
        $this->titleFieldForRequest = $title;
        $this->descriptionFieldForRequest = $description;
        $this->categoryFieldForRequest = $category;
        $this->statusFieldForRequest = $status;
        $this->lastRegistryEntrySeenIdFieldForRequest = $lastRegistryEntrySeenId;
        $this->previousUpdatedTimestampFieldForRequest = $previousUpdatedTimestamp;
        $this->membershipUuidActiveFieldForRequest = $membershipUuidActive;
        $this->membershipsFieldForRequest = $memberships;
        $this->membershipsPreviousFieldForRequest = $membershipsPrevious;
        $this->deletedMembershipIdsFieldForRequest = $deletedMembershipIds;
        $this->autoAddCardTransactionFieldForRequest = $autoAddCardTransaction;
        $this->membershipSettingFieldForRequest = $membershipSetting;
        $this->avatarUuidFieldForRequest = $avatarUuid;
        $this->settingFieldForRequest = $setting;
        $this->allRegistryEntryFieldForRequest = $allRegistryEntry;
        $this->aliasCreatorFieldForRequest = $aliasCreator;
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
     * The uuid of the Registry. If it was provided by the client on creation,
     * then the client can use it to match the returned Registry to the row
     * stored locally.
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
     * Public identifier token provided by the client. Will remain null if not
     * provided in the POST call.
     *
     * @return string
     */
    public function getPublicIdentifierToken()
    {
        return $this->publicIdentifierToken;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $publicIdentifierToken
     */
    public function setPublicIdentifierToken($publicIdentifierToken)
    {
        $this->publicIdentifierToken = $publicIdentifierToken;
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
     * The timestamp of the Registry's last update.
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
     * The currency for the Registry as an ISO 4217 formatted currency code.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $currency
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * A description about the Registry.
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
     * The category of the Registry. Can be one of the following values:
     * GENERAL, TRIP, SHARED_HOUSE, COUPLE, EVENT, PROJECT, OTHER
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
     * The status of the Registry.
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $unseenEntriesCount
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $totalAmountSpent
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param bool $isPreviouslySettled
     */
    public function setIsPreviouslySettled($isPreviouslySettled)
    {
        $this->isPreviouslySettled = $isPreviouslySettled;
    }

    /**
     * The UUID of the membership which is currently linked to the logged in
     * user.
     *
     * @return string
     */
    public function getMembershipUuidActive()
    {
        return $this->membershipUuidActive;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $membershipUuidActive
     */
    public function setMembershipUuidActive($membershipUuidActive)
    {
        $this->membershipUuidActive = $membershipUuidActive;
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param RegistryMembership[] $memberships
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param RegistrySetting $setting
     */
    public function setSetting($setting)
    {
        $this->setting = $setting;
    }

    /**
     * The registry's avatar.
     *
     * @return Avatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Avatar $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * The optional ID of the last settlement of this activity.
     *
     * @return int
     */
    public function getLastSettlementId()
    {
        return $this->lastSettlementId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $lastSettlementId
     */
    public function setLastSettlementId($lastSettlementId)
    {
        $this->lastSettlementId = $lastSettlementId;
    }

    /**
     * The timestamp of the latest activity seen for this registry.
     *
     * @return string
     */
    public function getLastActivityTimestamp()
    {
        return $this->lastActivityTimestamp;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $lastActivityTimestamp
     */
    public function setLastActivityTimestamp($lastActivityTimestamp)
    {
        $this->lastActivityTimestamp = $lastActivityTimestamp;
    }

    /**
     * @return RegistryEntry[]
     */
    public function getAllRegistryEntry()
    {
        return $this->allRegistryEntry;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param RegistryEntry[] $allRegistryEntry
     */
    public function setAllRegistryEntry($allRegistryEntry)
    {
        $this->allRegistryEntry = $allRegistryEntry;
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

        if (!is_null($this->publicIdentifierToken)) {
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

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->category)) {
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

        if (!is_null($this->membershipUuidActive)) {
            return false;
        }

        if (!is_null($this->memberships)) {
            return false;
        }

        if (!is_null($this->setting)) {
            return false;
        }

        if (!is_null($this->avatar)) {
            return false;
        }

        if (!is_null($this->lastSettlementId)) {
            return false;
        }

        if (!is_null($this->lastActivityTimestamp)) {
            return false;
        }

        if (!is_null($this->allRegistryEntry)) {
            return false;
        }

        return true;
    }
}
