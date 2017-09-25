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
     * @param bool $makeDraftPayments
     * @param bool $viewBalance
     * @param bool $viewOldEvents
     * @param bool $viewNewEvents
     */
    public function __construct($makeDraftPayments, $viewBalance, $viewOldEvents, $viewNewEvents)
    {
        $this->makeDraftPayments = $makeDraftPayments;
        $this->viewBalance = $viewBalance;
        $this->viewOldEvents = $viewOldEvents;
        $this->viewNewEvents = $viewNewEvents;
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
     */
    public function setMakeDraftPayments(bool $makeDraftPayments)
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
     */
    public function setViewBalance(bool $viewBalance)
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
     */
    public function setViewOldEvents(bool $viewOldEvents)
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
     */
    public function setViewNewEvents(bool $viewNewEvents)
    {
        $this->viewNewEvents = $viewNewEvents;
    }
}
