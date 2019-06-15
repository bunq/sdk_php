<?php

namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class ShareDetailDraftPayment extends BunqModel
{
    /**
     * If set to true, the invited user will be able to make draft payments from
     * the shared account.
     *
     * @var bool
     */
    protected $makeDraftPayments;

    /**
     * If set to true, the invited user will be able to view the account
     * balance.
     *
     * @var bool
     */
    protected $viewBalance;

    /**
     * If set to true, the invited user will be able to view events from before
     * the share was active.
     *
     * @var bool
     */
    protected $viewOldEvents;

    /**
     * If set to true, the invited user will be able to view events starting
     * from the time the share became active.
     *
     * @var bool
     */
    protected $viewNewEvents;

    /**
     * If set to true, the invited user will be able to make draft payments from
     * the shared account.
     *
     * @var bool
     */
    protected $makeDraftPaymentsFieldForRequest;

    /**
     * If set to true, the invited user will be able to view the account
     * balance.
     *
     * @var bool
     */
    protected $viewBalanceFieldForRequest;

    /**
     * If set to true, the invited user will be able to view events from before
     * the share was active.
     *
     * @var bool
     */
    protected $viewOldEventsFieldForRequest;

    /**
     * If set to true, the invited user will be able to view events starting
     * from the time the share became active.
     *
     * @var bool
     */
    protected $viewNewEventsFieldForRequest;

    /**
     * @param bool $makeDraftPayments If set to true, the invited user will be
     *                                able to make draft payments from the shared account.
     * @param bool $viewBalance       If set to true, the invited user will be able to
     *                                view the account balance.
     * @param bool $viewOldEvents     If set to true, the invited user will be able
     *                                to view events from before the share was active.
     * @param bool $viewNewEvents     If set to true, the invited user will be able
     *                                to view events starting from the time the share became active.
     */
    public function __construct(bool $makeDraftPayments, bool $viewBalance, bool $viewOldEvents, bool $viewNewEvents)
    {
        $this->makeDraftPaymentsFieldForRequest = $makeDraftPayments;
        $this->viewBalanceFieldForRequest = $viewBalance;
        $this->viewOldEventsFieldForRequest = $viewOldEvents;
        $this->viewNewEventsFieldForRequest = $viewNewEvents;
    }

    /**
     * If set to true, the invited user will be able to make draft payments from
     * the shared account.
     *
     * @return bool
     */
    public function getMakeDraftPayments()
    {
        return $this->makeDraftPayments;
    }

    /**
     * @param bool $makeDraftPayments
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setMakeDraftPayments($makeDraftPayments)
    {
        $this->makeDraftPayments = $makeDraftPayments;
    }

    /**
     * If set to true, the invited user will be able to view the account
     * balance.
     *
     * @return bool
     */
    public function getViewBalance()
    {
        return $this->viewBalance;
    }

    /**
     * @param bool $viewBalance
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setViewBalance($viewBalance)
    {
        $this->viewBalance = $viewBalance;
    }

    /**
     * If set to true, the invited user will be able to view events from before
     * the share was active.
     *
     * @return bool
     */
    public function getViewOldEvents()
    {
        return $this->viewOldEvents;
    }

    /**
     * @param bool $viewOldEvents
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setViewOldEvents($viewOldEvents)
    {
        $this->viewOldEvents = $viewOldEvents;
    }

    /**
     * If set to true, the invited user will be able to view events starting
     * from the time the share became active.
     *
     * @return bool
     */
    public function getViewNewEvents()
    {
        return $this->viewNewEvents;
    }

    /**
     * @param bool $viewNewEvents
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setViewNewEvents($viewNewEvents)
    {
        $this->viewNewEvents = $viewNewEvents;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->makeDraftPayments)) {
            return false;
        }

        if (!is_null($this->viewBalance)) {
            return false;
        }

        if (!is_null($this->viewOldEvents)) {
            return false;
        }

        if (!is_null($this->viewNewEvents)) {
            return false;
        }

        return true;
    }
}
