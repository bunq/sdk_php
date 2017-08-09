<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Model\BunqModel;
use bunq\Model\BunqResponse;

/**
 * Endpoint for operations over the current session.
 *
 * @generated
 */
class Session extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_DELETE = 'session/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'Session';

    /**
     * Deletes the current session. No response is returned for this request.
     *
     * @param ApiContext $apiContext
     * @param string[] $customHeaders
     * @param int $sessionId
     *
     * @return BunqResponse<null>
     */
    public static function delete(ApiContext $apiContext, $sessionId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->delete(
            vsprintf(
                self::ENDPOINT_URL_DELETE,
                [$sessionId]
            ),
            $customHeaders
        );

        return new BunqResponse(null, $responseRaw->getHeaders());
    }
}
