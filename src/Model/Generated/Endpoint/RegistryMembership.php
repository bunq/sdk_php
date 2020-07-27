<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
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
    const FIELD_ALIAS = 'alias';
    const FIELD_STATUS = 'status';

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
     * @param Pointer $alias The Alias of the party we are inviting to the
     * Registry.
     * @param string|null $status The status of the RegistryMembership.
     */
    public function __construct(Pointer $alias, string $status = null)
    {
        $this->aliasFieldForRequest = $alias;
        $this->statusFieldForRequest = $status;
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
     * @param LabelMonetaryAccount $alias
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     * @param Amount $balance
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     * The status of the RegistryMembership.
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
     * @return bool
     */
    public function isAllFieldNull()
    {
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

        return true;
    }
}
