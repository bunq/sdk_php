<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
use bunq\Model\Generated\Object\LabelUser;
use bunq\Model\Generated\Object\Pointer;

/**
 * View for RegistryMembership.
 *
 * @generated
 */
class RegistryMembership extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_UUID = 'uuid';
    const FIELD_ALIAS = 'alias';
    const FIELD_STATUS = 'status';
    const FIELD_AUTO_ADD_CARD_TRANSACTION = 'auto_add_card_transaction';

    /**
     * The UUID of the membership.
     *
     * @var string
     */
    protected $uuid;

    /**
     * The LabelMonetaryAccount of the user who belongs to this
     * RegistryMembership.
     *
     * @var LabelMonetaryAccount
     */
    protected $alias;

    /**
     * The balance of this RegistryMembership.
     *
     * @var Amount
     */
    protected $balance;

    /**
     * The total amount spent of this RegistryMembership.
     *
     * @var Amount
     */
    protected $totalAmountSpent;

    /**
     * The status of the RegistryMembership.
     *
     * @var string
     */
    protected $status;

    /**
     * The status of the settlement of the Registry. Can be PENDING or SETTLED.
     *
     * @var string
     */
    protected $statusSettlement;

    /**
     * The setting for for adding automatically card transactions to the
     * registry.
     *
     * @var string
     */
    protected $autoAddCardTransaction;

    /**
     * The registry id.
     *
     * @var int
     */
    protected $registryId;

    /**
     * The registry title.
     *
     * @var string
     */
    protected $registryTitle;

    /**
     * The label of the user that sent the invite.
     *
     * @var LabelUser
     */
    protected $invitor;

    /**
     * The UUID of the membership. May be used as an alternative to the alias
     * field to identify specific memberships, as the alias may be updated
     * server-side, whereas the UUID will remain consistent.
     *
     * @var string|null
     */
    protected $uuidFieldForRequest;

    /**
     * The Alias of the party we are inviting to the Registry.
     *
     * @var Pointer
     */
    protected $aliasFieldForRequest;

    /**
     * The status of the RegistryMembership.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * The setting for for adding automatically card transactions to the
     * registry.
     *
     * @var string|null
     */
    protected $autoAddCardTransactionFieldForRequest;

    /**
     * @param Pointer $alias The Alias of the party we are inviting to the
     * Registry.
     * @param string|null $uuid The UUID of the membership. May be used as an
     * alternative to the alias field to identify specific memberships, as the
     * alias may be updated server-side, whereas the UUID will remain
     * consistent.
     * @param string|null $status The status of the RegistryMembership.
     * @param string|null $autoAddCardTransaction The setting for for adding
     * automatically card transactions to the registry.
     */
    public function __construct(Pointer  $alias, string  $uuid = null, string  $status = null, string  $autoAddCardTransaction = null)
    {
        $this->uuidFieldForRequest = $uuid;
        $this->aliasFieldForRequest = $alias;
        $this->statusFieldForRequest = $status;
        $this->autoAddCardTransactionFieldForRequest = $autoAddCardTransaction;
    }

    /**
     * The UUID of the membership.
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
     * The LabelMonetaryAccount of the user who belongs to this
     * RegistryMembership.
     *
     * @return LabelMonetaryAccount
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelMonetaryAccount $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * The balance of this RegistryMembership.
     *
     * @return Amount
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * The total amount spent of this RegistryMembership.
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
     * The status of the RegistryMembership.
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
     * The status of the settlement of the Registry. Can be PENDING or SETTLED.
     *
     * @return string
     */
    public function getStatusSettlement()
    {
        return $this->statusSettlement;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $statusSettlement
     */
    public function setStatusSettlement($statusSettlement)
    {
        $this->statusSettlement = $statusSettlement;
    }

    /**
     * The setting for for adding automatically card transactions to the
     * registry.
     *
     * @return string
     */
    public function getAutoAddCardTransaction()
    {
        return $this->autoAddCardTransaction;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $autoAddCardTransaction
     */
    public function setAutoAddCardTransaction($autoAddCardTransaction)
    {
        $this->autoAddCardTransaction = $autoAddCardTransaction;
    }

    /**
     * The registry id.
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
     * The registry title.
     *
     * @return string
     */
    public function getRegistryTitle()
    {
        return $this->registryTitle;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $registryTitle
     */
    public function setRegistryTitle($registryTitle)
    {
        $this->registryTitle = $registryTitle;
    }

    /**
     * The label of the user that sent the invite.
     *
     * @return LabelUser
     */
    public function getInvitor()
    {
        return $this->invitor;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelUser $invitor
     */
    public function setInvitor($invitor)
    {
        $this->invitor = $invitor;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->uuid)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->balance)) {
            return false;
        }

        if (!is_null($this->totalAmountSpent)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->statusSettlement)) {
            return false;
        }

        if (!is_null($this->autoAddCardTransaction)) {
            return false;
        }

        if (!is_null($this->registryId)) {
            return false;
        }

        if (!is_null($this->registryTitle)) {
            return false;
        }

        if (!is_null($this->invitor)) {
            return false;
        }

        return true;
    }
}
