<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;

/**
 * Aggregation of how many card payments have been done with a Green Card in
 * the current calendar month.
 *
 * @generated
 */
class MasterCardActionGreenAggregation extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/mastercard-action-green-aggregation';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'MasterCardActionGreenAggregation';

    /**
     * The date of the aggregation.
     *
     * @var string
     */
    protected $date;

    /**
     * The percentage of card payments that were done with a Green Card.
     *
     * @var string
     */
    protected $percentage;

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseMasterCardActionGreenAggregationList
     */
    public static function listing(
        array $params = [],
        array $customHeaders = []
    ): BunqResponseMasterCardActionGreenAggregationList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId()]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseMasterCardActionGreenAggregationList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The date of the aggregation.
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * The percentage of card payments that were done with a Green Card.
     *
     * @return string
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * @param string $percentage
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->date)) {
            return false;
        }

        if (!is_null($this->percentage)) {
            return false;
        }

        return true;
    }
}
