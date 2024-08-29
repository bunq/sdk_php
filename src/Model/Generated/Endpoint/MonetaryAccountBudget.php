<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;

/**
 * Endpoint to read, list, or delete the budget for a monetary account.
 *
 * @generated
 */
class MonetaryAccountBudget extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_ALL_CATEGORY = 'all_category';
    const FIELD_AMOUNT = 'amount';
    const FIELD_RECURRENCE_TYPE = 'recurrence_type';
    const FIELD_MONETARY_ACCOUNT_SOURCE_FUNDING_ID = 'monetary_account_source_funding_id';
    const FIELD_PAYMENT_DAY_OF_MONTH = 'payment_day_of_month';

    /**
     * DEPRECATED. The list of categories on which the user wants to set the
     * budget.
     *
     * @var string[]
     */
    protected $allCategoryFieldForRequest;

    /**
     * DEPRECATED. The amount for the budget.
     *
     * @var Amount
     */
    protected $amountFieldForRequest;

    /**
     * DEPRECATED. The recurrence type for the automatic top-up.
     *
     * @var string
     */
    protected $recurrenceTypeFieldForRequest;

    /**
     * DEPRECATED. The monetary account's ID from/to which the missing/exceeding
     * funds will be transferred.
     *
     * @var int
     */
    protected $monetaryAccountSourceFundingIdFieldForRequest;

    /**
     * DEPRECATED. The day of the month for the automatic top-up.
     *
     * @var int|null
     */
    protected $paymentDayOfMonthFieldForRequest;

    /**
     * @param string[] $allCategory DEPRECATED. The list of categories on which
     * the user wants to set the budget.
     * @param Amount $amount DEPRECATED. The amount for the budget.
     * @param string $recurrenceType DEPRECATED. The recurrence type for the
     * automatic top-up.
     * @param int $monetaryAccountSourceFundingId DEPRECATED. The monetary
     * account's ID from/to which the missing/exceeding funds will be
     * transferred.
     * @param int|null $paymentDayOfMonth DEPRECATED. The day of the month for
     * the automatic top-up.
     */
    public function __construct(array  $allCategory, Amount  $amount, string  $recurrenceType, int  $monetaryAccountSourceFundingId, int  $paymentDayOfMonth = null)
    {
        $this->allCategoryFieldForRequest = $allCategory;
        $this->amountFieldForRequest = $amount;
        $this->recurrenceTypeFieldForRequest = $recurrenceType;
        $this->monetaryAccountSourceFundingIdFieldForRequest = $monetaryAccountSourceFundingId;
        $this->paymentDayOfMonthFieldForRequest = $paymentDayOfMonth;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        return true;
    }
}
