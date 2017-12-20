<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class ShareDetailPayment extends BunqModel
{
    /**
     * If set to true, the invited user will be able to make payments from the
     * shared account.
     *
     * @var bool
     */
    protected $makePayments;

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
     * The budget restriction.
     *
     * @var BudgetRestriction
     */
    protected $budget;

    /**
     * @param bool $makePayments
     * @param bool $viewBalance
     * @param bool $viewOldEvents
     * @param bool $viewNewEvents
     */
    public function __construct($makePayments, $viewBalance, $viewOldEvents, $viewNewEvents)
    {
        $this->makePayments = $makePayments;
        $this->viewBalance = $viewBalance;
        $this->viewOldEvents = $viewOldEvents;
        $this->viewNewEvents = $viewNewEvents;
    }

    /**
     * If set to true, the invited user will be able to make payments from the
     * shared account.
     *
     * @return bool
     */
    public function getMakePayments()
    {
        return $this->makePayments;
    }

    /**
     * @param bool $makePayments
     */
    public function setMakePayments($makePayments)
    {
        $this->makePayments = $makePayments;
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
     */
    public function setViewNewEvents($viewNewEvents)
    {
        $this->viewNewEvents = $viewNewEvents;
    }

    /**
     * The budget restriction.
     *
     * @return BudgetRestriction
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @param BudgetRestriction $budget
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->makePayments)) {
            return false;
        }

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

        if (!is_null($this->budget)) {
            return false;
        }

        return true;
    }
}
