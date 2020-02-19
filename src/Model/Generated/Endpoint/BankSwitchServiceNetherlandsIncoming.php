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
    const FIELD_SUB_STATUS = 'sub_status';
    const FIELD_TIME_START_ACTUAL = 'time_start_actual';

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
     * The substatus of the switch service. Only available in UPDATE. Can be
     * NONE or CAPTURED
     *
     * @var string|null
     */
    protected $subStatusFieldForRequest;

    /**
     * The timestamp when the switch service actually starts.
     *
     * @var string|null
     */
    protected $timeStartActualFieldForRequest;

    /**
     * @param Pointer $alias The alias of the Monetary Account this switch
     * service is for.
     * @param Pointer $counterpartyAlias The Alias of the party we are switching
     * from. Can only be an Alias of type IBAN (external bank account).
     * @param string|null $status The status of the switch service. Ignored in
     * POST requests (always set to REQUESTED) can be CANCELLED in PUT requests
     * to cancel the switch service. Admin can set this to ACCEPTED, or
     * REJECTED.
     * @param string|null $subStatus The substatus of the switch service. Only
     * available in UPDATE. Can be NONE or CAPTURED
     * @param string|null $timeStartActual The timestamp when the switch service
     * actually starts.
     */
    public function __construct(
        Pointer $alias,
        Pointer $counterpartyAlias,
        string $status = null,
        string $subStatus = null,
        string $timeStartActual = null
    ) {
        $this->aliasFieldForRequest = $alias;
        $this->counterpartyAliasFieldForRequest = $counterpartyAlias;
        $this->statusFieldForRequest = $status;
        $this->subStatusFieldForRequest = $subStatus;
        $this->timeStartActualFieldForRequest = $timeStartActual;
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
     * @param LabelUser $userAlias
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @param LabelMonetaryAccount $alias
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @param LabelMonetaryAccount $counterpartyAlias
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @param string $status
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @param string $subStatus
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @param string $timeStartDesired
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @param string $timeStartActual
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @param string $timeEnd
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @param Attachment $attachment
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
