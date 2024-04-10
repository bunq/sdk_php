<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Used to allow users to set insight/budget preferences.
 *
 * @generated
 */
class InsightPreferenceDate extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/insight-preference-date';

    /**
     * Field constants.
     */
    const FIELD_DAY_OF_MONTH = 'day_of_month';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'InsightPreferenceDate';

    /**
     * The day of month at which budgeting/insights should start.
     *
     * @var int
     */
    protected $dayOfMonth;

    /**
     * The day of month at which budgeting/insights should start.
     *
     * @var int
     */
    protected $dayOfMonthFieldForRequest;

    /**
     * @param int $dayOfMonth The day of month at which budgeting/insights
     * should start.
     */
    public function __construct(int  $dayOfMonth)
    {
        $this->dayOfMonthFieldForRequest = $dayOfMonth;
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseInsightPreferenceDateList
     */
    public static function listing( array $params = [], array $customHeaders = []): BunqResponseInsightPreferenceDateList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId()]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseInsightPreferenceDateList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The day of month at which budgeting/insights should start.
     *
     * @return int
     */
    public function getDayOfMonth()
    {
        return $this->dayOfMonth;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $dayOfMonth
     */
    public function setDayOfMonth($dayOfMonth)
    {
        $this->dayOfMonth = $dayOfMonth;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->dayOfMonth)) {
            return false;
        }

        return true;
    }
}
