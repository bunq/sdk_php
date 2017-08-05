<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\BunqModel;

/**
 * @generated
 */
class ShareDetailReadOnly extends BunqModel
{
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
     * @param bool $viewBalance
     * @param bool $viewOldEvents
     * @param bool $viewNewEvents
     */
    public function __construct($viewBalance, $viewOldEvents, $viewNewEvents)
    {
        $this->viewBalance = $viewBalance;
        $this->viewOldEvents = $viewOldEvents;
        $this->viewNewEvents = $viewNewEvents;
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
}
