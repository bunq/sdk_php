<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\BirdeeInvestmentPortfolioGoal;

/**
 * Endpoint for interacting with the investment portfolio opened at Birdee.
 *
 * @generated
 */
class BirdeeInvestmentPortfolio extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_RISK_PROFILE_TYPE = 'risk_profile_type';
    const FIELD_INVESTMENT_THEME = 'investment_theme';
    const FIELD_NAME = 'name';
    const FIELD_GOAL = 'goal';

    /**
     * Status of the portfolio.
     *
     * @var string
     */
    protected $status;

    /**
     * The type of risk profile associated with the portfolio.
     *
     * @var string
     */
    protected $riskProfileType;

    /**
     * The investment theme.
     *
     * @var string
     */
    protected $investmentTheme;

    /**
     * Maximum number of strategy changes in a year.
     *
     * @var int
     */
    protected $numberOfStrategyChangeAnnualMaximum;

    /**
     * Maximum number of strategy changes used.
     *
     * @var int
     */
    protected $numberOfStrategyChangeAnnualUsed;

    /**
     * The name associated with the investment portfolio.
     *
     * @var string
     */
    protected $name;

    /**
     * The investment goal.
     *
     * @var BirdeeInvestmentPortfolioGoal|null
     */
    protected $goal;

    /**
     * The investment portfolio balance.
     *
     * @var BirdeeInvestmentPortfolioBalance
     */
    protected $balance;

    /**
     * The allocations of the investment portfolio.
     *
     * @var BirdeePortfolioAllocation[]
     */
    protected $allocations;

    /**
     * The type of risk profile associated with the portfolio.
     *
     * @var string
     */
    protected $riskProfileTypeFieldForRequest;

    /**
     * The investment theme.
     *
     * @var string
     */
    protected $investmentThemeFieldForRequest;

    /**
     * The name associated with the investment portfolio.
     *
     * @var string|null
     */
    protected $nameFieldForRequest;

    /**
     * The investment goal.
     *
     * @var BirdeeInvestmentPortfolioGoal|null
     */
    protected $goalFieldForRequest;

    /**
     * @param string $riskProfileType The type of risk profile associated with
     * the portfolio.
     * @param string $investmentTheme The investment theme.
     * @param string|null $name The name associated with the investment
     * portfolio.
     * @param BirdeeInvestmentPortfolioGoal|null $goal The investment goal.
     */
    public function __construct(string  $riskProfileType, string  $investmentTheme, string  $name = null, BirdeeInvestmentPortfolioGoal  $goal = null)
    {
        $this->riskProfileTypeFieldForRequest = $riskProfileType;
        $this->investmentThemeFieldForRequest = $investmentTheme;
        $this->nameFieldForRequest = $name;
        $this->goalFieldForRequest = $goal;
    }

    /**
     * Status of the portfolio.
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
     * The type of risk profile associated with the portfolio.
     *
     * @return string
     */
    public function getRiskProfileType()
    {
        return $this->riskProfileType;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $riskProfileType
     */
    public function setRiskProfileType($riskProfileType)
    {
        $this->riskProfileType = $riskProfileType;
    }

    /**
     * The investment theme.
     *
     * @return string
     */
    public function getInvestmentTheme()
    {
        return $this->investmentTheme;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $investmentTheme
     */
    public function setInvestmentTheme($investmentTheme)
    {
        $this->investmentTheme = $investmentTheme;
    }

    /**
     * Maximum number of strategy changes in a year.
     *
     * @return int
     */
    public function getNumberOfStrategyChangeAnnualMaximum()
    {
        return $this->numberOfStrategyChangeAnnualMaximum;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $numberOfStrategyChangeAnnualMaximum
     */
    public function setNumberOfStrategyChangeAnnualMaximum($numberOfStrategyChangeAnnualMaximum)
    {
        $this->numberOfStrategyChangeAnnualMaximum = $numberOfStrategyChangeAnnualMaximum;
    }

    /**
     * Maximum number of strategy changes used.
     *
     * @return int
     */
    public function getNumberOfStrategyChangeAnnualUsed()
    {
        return $this->numberOfStrategyChangeAnnualUsed;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $numberOfStrategyChangeAnnualUsed
     */
    public function setNumberOfStrategyChangeAnnualUsed($numberOfStrategyChangeAnnualUsed)
    {
        $this->numberOfStrategyChangeAnnualUsed = $numberOfStrategyChangeAnnualUsed;
    }

    /**
     * The name associated with the investment portfolio.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * The investment goal.
     *
     * @return BirdeeInvestmentPortfolioGoal
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param BirdeeInvestmentPortfolioGoal $goal
     */
    public function setGoal($goal)
    {
        $this->goal = $goal;
    }

    /**
     * The investment portfolio balance.
     *
     * @return BirdeeInvestmentPortfolioBalance
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param BirdeeInvestmentPortfolioBalance $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * The allocations of the investment portfolio.
     *
     * @return BirdeePortfolioAllocation[]
     */
    public function getAllocations()
    {
        return $this->allocations;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param BirdeePortfolioAllocation[] $allocations
     */
    public function setAllocations($allocations)
    {
        $this->allocations = $allocations;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->riskProfileType)) {
            return false;
        }

        if (!is_null($this->investmentTheme)) {
            return false;
        }

        if (!is_null($this->numberOfStrategyChangeAnnualMaximum)) {
            return false;
        }

        if (!is_null($this->numberOfStrategyChangeAnnualUsed)) {
            return false;
        }

        if (!is_null($this->name)) {
            return false;
        }

        if (!is_null($this->goal)) {
            return false;
        }

        if (!is_null($this->balance)) {
            return false;
        }

        if (!is_null($this->allocations)) {
            return false;
        }

        return true;
    }
}
