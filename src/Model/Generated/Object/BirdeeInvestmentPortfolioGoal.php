<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class BirdeeInvestmentPortfolioGoal extends BunqModel
{
    /**
     * The investment goal amount.
     *
     * @var Amount
     */
    protected $amountTarget;

    /**
     * The investment goal end time.
     *
     * @var string
     */
    protected $timeEnd;

    /**
     * The investment goal amount.
     *
     * @var Amount|null
     */
    protected $amountTargetFieldForRequest;

    /**
     * The investment goal end time.
     *
     * @var string|null
     */
    protected $timeEndFieldForRequest;

    /**
     * @param Amount|null $amountTarget The investment goal amount.
     * @param string|null $timeEnd The investment goal end time.
     */
    public function __construct(Amount  $amountTarget = null, string  $timeEnd = null)
    {
        $this->amountTargetFieldForRequest = $amountTarget;
        $this->timeEndFieldForRequest = $timeEnd;
    }

    /**
     * The investment goal amount.
     *
     * @return Amount
     */
    public function getAmountTarget()
    {
        return $this->amountTarget;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountTarget
     */
    public function setAmountTarget($amountTarget)
    {
        $this->amountTarget = $amountTarget;
    }

    /**
     * The investment goal end time.
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
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->amountTarget)) {
            return false;
        }

        if (!is_null($this->timeEnd)) {
            return false;
        }

        return true;
    }
}
