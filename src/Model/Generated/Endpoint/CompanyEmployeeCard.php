<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Pointer;

/**
 * Manage cards for company employees.
 *
 * @generated
 */
class CompanyEmployeeCard extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_ALIAS = 'alias';
    const FIELD_TYPE = 'type';
    const FIELD_PRODUCT_TYPE = 'product_type';
    const FIELD_COMPANY_NAME_ON_CARD = 'company_name_on_card';
    const FIELD_EMPLOYEE_NAME_ON_CARD = 'employee_name_on_card';
    const FIELD_EMPLOYEE_PREFERRED_NAME_ON_CARD = 'employee_preferred_name_on_card';
    const FIELD_AMOUNT_LIMIT_MONTHLY = 'amount_limit_monthly';
    const FIELD_STATUS = 'status';

    /**
     * The actual card.
     *
     * @var Card
     */
    protected $card;

    /**
     * The id of the relation user.
     *
     * @var int
     */
    protected $relationUserId;

    /**
     * The status of the employee card.
     *
     * @var string
     */
    protected $status;

    /**
     * The name of the company that should be displayed on the card.
     *
     * @var string
     */
    protected $companyNameOnCard;

    /**
     * The monthly spending limit for this employee on the card.
     *
     * @var Amount
     */
    protected $amountLimitMonthly;

    /**
     * The monthly spend for this employee on the card.
     *
     * @var Amount
     */
    protected $amountSpentMonthly;

    /**
     * The pointer to the monetary account that will be connected at first with
     * the card.
     *
     * @var Pointer
     */
    protected $aliasFieldForRequest;

    /**
     * The type of card to order.
     *
     * @var string
     */
    protected $typeFieldForRequest;

    /**
     * The product type of the card to order.
     *
     * @var string
     */
    protected $productTypeFieldForRequest;

    /**
     * The name of the company that should be displayed on the card.
     *
     * @var string
     */
    protected $companyNameOnCardFieldForRequest;

    /**
     * The name of the employee that should be displayed on the card.
     *
     * @var string|null
     */
    protected $employeeNameOnCardFieldForRequest;

    /**
     * The user's preferred name as it will be on the card.
     *
     * @var string|null
     */
    protected $employeePreferredNameOnCardFieldForRequest;

    /**
     * The monthly spending limit for this employee on the card.
     *
     * @var Amount|null
     */
    protected $amountLimitMonthlyFieldForRequest;

    /**
     * The status of the employee card.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * @param Pointer $alias The pointer to the monetary account that will be
     * connected at first with the card.
     * @param string $type The type of card to order.
     * @param string $productType The product type of the card to order.
     * @param string $companyNameOnCard The name of the company that should be
     * displayed on the card.
     * @param string|null $employeeNameOnCard The name of the employee that
     * should be displayed on the card.
     * @param string|null $employeePreferredNameOnCard The user's preferred name
     * as it will be on the card.
     * @param Amount|null $amountLimitMonthly The monthly spending limit for
     * this employee on the card.
     * @param string|null $status The status of the employee card.
     */
    public function __construct(Pointer  $alias, string  $type, string  $productType, string  $companyNameOnCard, string  $employeeNameOnCard = null, string  $employeePreferredNameOnCard = null, Amount  $amountLimitMonthly = null, string  $status = null)
    {
        $this->aliasFieldForRequest = $alias;
        $this->typeFieldForRequest = $type;
        $this->productTypeFieldForRequest = $productType;
        $this->companyNameOnCardFieldForRequest = $companyNameOnCard;
        $this->employeeNameOnCardFieldForRequest = $employeeNameOnCard;
        $this->employeePreferredNameOnCardFieldForRequest = $employeePreferredNameOnCard;
        $this->amountLimitMonthlyFieldForRequest = $amountLimitMonthly;
        $this->statusFieldForRequest = $status;
    }

    /**
     * The actual card.
     *
     * @return Card
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Card $card
     */
    public function setCard($card)
    {
        $this->card = $card;
    }

    /**
     * The id of the relation user.
     *
     * @return int
     */
    public function getRelationUserId()
    {
        return $this->relationUserId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $relationUserId
     */
    public function setRelationUserId($relationUserId)
    {
        $this->relationUserId = $relationUserId;
    }

    /**
     * The status of the employee card.
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
     * The name of the company that should be displayed on the card.
     *
     * @return string
     */
    public function getCompanyNameOnCard()
    {
        return $this->companyNameOnCard;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $companyNameOnCard
     */
    public function setCompanyNameOnCard($companyNameOnCard)
    {
        $this->companyNameOnCard = $companyNameOnCard;
    }

    /**
     * The monthly spending limit for this employee on the card.
     *
     * @return Amount
     */
    public function getAmountLimitMonthly()
    {
        return $this->amountLimitMonthly;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountLimitMonthly
     */
    public function setAmountLimitMonthly($amountLimitMonthly)
    {
        $this->amountLimitMonthly = $amountLimitMonthly;
    }

    /**
     * The monthly spend for this employee on the card.
     *
     * @return Amount
     */
    public function getAmountSpentMonthly()
    {
        return $this->amountSpentMonthly;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountSpentMonthly
     */
    public function setAmountSpentMonthly($amountSpentMonthly)
    {
        $this->amountSpentMonthly = $amountSpentMonthly;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->card)) {
            return false;
        }

        if (!is_null($this->relationUserId)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->companyNameOnCard)) {
            return false;
        }

        if (!is_null($this->amountLimitMonthly)) {
            return false;
        }

        if (!is_null($this->amountSpentMonthly)) {
            return false;
        }

        return true;
    }
}
