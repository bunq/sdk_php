<?php

namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;

/**
 * view for reading the scheduled definitions.
 *
 * @generated
 */
class ScheduleUser extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/schedule';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'ScheduleUser';

    /**
     * Get a collection of scheduled definition for all accessible monetary
     * accounts of the user. You can add the parameter type to filter the
     * response. When
     * type={SCHEDULE_DEFINITION_PAYMENT,SCHEDULE_DEFINITION_PAYMENT_BATCH} is
     * provided only schedule definition object that relate to these definitions
     * are returned.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseScheduleUserList
     */
    public static function listing(array $params = [], array $customHeaders = []): BunqResponseScheduleUserList
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

        return BunqResponseScheduleUserList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        return true;
    }
}
