<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Attachment;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
use bunq\Model\Generated\Object\LabelUser;
use bunq\Model\Generated\Object\Pointer;

/**
 * Endpoint for using the Equens Bank Switch Service.
 *
 * @generated
 */
class BankSwitchServiceNetherlandsIncoming extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_ALIAS = 'alias';
    const FIELD_COUNTERPARTY_ALIAS = 'counterparty_alias';
    const FIELD_STATUS = 'status';

    /**
     * The label of the user creator of this switch service.
     *
     * @var LabelUser
     */
    protected $userAlias;

    /**
     * The label of the monetary of this switch service.
     *
     * @var LabelMonetaryAccount
     */
    protected $alias;

    /**
     * The IBAN alias that's displayed for this switch service.
     *
     * @var LabelMonetaryAccount
     */
    protected $counterpartyAlias;

    /**
     * The status of the switch service.
     *
     * @var string
     */
    protected $status;

    /**
     * The sub status of the switch service.
     *
     * @var string
     */
    protected $subStatus;

    /**
     * The timestamp when the switch service desired to be start.
     *
     * @var string
     */
    protected $timeStartDesired;

    /**
     * The timestamp when the switch service actually starts.
     *
     * @var string
     */
    protected $timeStartActual;

    /**
     * The timestamp when the switch service ends.
     *
     * @var string
     */
    protected $timeEnd;

    /**
     * Reference to the bank transfer form for this switch-service.
     *
     * @var Attachment
     */
    protected $attachment;

    /**
     * The alias of the Monetary Account this switch service is for.
     *
     * @var Pointer
     */
    protected $aliasFieldForRequest;

    /**
     * The Alias of the party we are switching from. Can only be an Alias of
     * type IBAN (external bank account).
     *
     * @var Pointer
     */
    protected $counterpartyAliasFieldForRequest;

    /**
     * The status of the switch service. Ignored in POST requests (always set to
     * REQUESTED) can be CANCELLED in PUT requests to cancel the switch service.
     * Admin can set this to ACCEPTED, or REJECTED.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * @param Pointer $alias The alias of the Monetary Account this switch
     * service is for.
     * @param Pointer $counterpartyAlias The Alias of the party we are switching
     * from. Can only be an Alias of type IBAN (external bank account).
     * @param string|null $status The status of the switch service. Ignored in
     * POST requests (always set to REQUESTED) can be CANCELLED in PUT requests
     * to cancel the switch service. Admin can set this to ACCEPTED, or
     * REJECTED.
     */
    public function __construct(Pointer  $alias, Pointer  $counterpartyAlias, string  $status = null)
    {
        $this->aliasFieldForRequest = $alias;
        $this->counterpartyAliasFieldForRequest = $counterpartyAlias;
        $this->statusFieldForRequest = $status;
    }

    /**
     * The label of the user creator of this switch service.
     *
     * @return LabelUser
     */
    public function getUserAlias()
    {
        return $this->userAlias;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelUser $userAlias
     */
    public function setUserAlias($userAlias)
    {
        $this->userAlias = $userAlias;
    }

    /**
     * The label of the monetary of this switch service.
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
     * The IBAN alias that's displayed for this switch service.
     *
     * @return LabelMonetaryAccount
     */
    public function getCounterpartyAlias()
    {
        return $this->counterpartyAlias;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelMonetaryAccount $counterpartyAlias
     */
    public function setCounterpartyAlias($counterpartyAlias)
    {
        $this->counterpartyAlias = $counterpartyAlias;
    }

    /**
     * The status of the switch service.
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
     * The sub status of the switch service.
     *
     * @return string
     */
    public function getSubStatus()
    {
        return $this->subStatus;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $subStatus
     */
    public function setSubStatus($subStatus)
    {
        $this->subStatus = $subStatus;
    }

    /**
     * The timestamp when the switch service desired to be start.
     *
     * @return string
     */
    public function getTimeStartDesired()
    {
        return $this->timeStartDesired;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $timeStartDesired
     */
    public function setTimeStartDesired($timeStartDesired)
    {
        $this->timeStartDesired = $timeStartDesired;
    }

    /**
     * The timestamp when the switch service actually starts.
     *
     * @return string
     */
    public function getTimeStartActual()
    {
        return $this->timeStartActual;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $timeStartActual
     */
    public function setTimeStartActual($timeStartActual)
    {
        $this->timeStartActual = $timeStartActual;
    }

    /**
     * The timestamp when the switch service ends.
     *
     * @return string
     */
    public function getTimeEnd()
    {
        return $this->timeEnd;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $timeEnd
     */
    public function setTimeEnd($timeEnd)
    {
        $this->timeEnd = $timeEnd;
    }

    /**
     * Reference to the bank transfer form for this switch-service.
     *
     * @return Attachment
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Attachment $attachment
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
        if (!is_null($this->userAlias)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->counterpartyAlias)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->subStatus)) {
            return false;
        }

        if (!is_null($this->timeStartDesired)) {
            return false;
        }

        if (!is_null($this->timeStartActual)) {
            return false;
        }

        if (!is_null($this->timeEnd)) {
            return false;
        }

        if (!is_null($this->attachment)) {
            return false;
        }

        return true;
    }
}
