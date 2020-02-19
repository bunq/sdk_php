<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

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
     * Deletes the current session.
     *
     * @param string[] $customHeaders
     * @param int $sessionId
     *
     * @return BunqResponseNull
     */
    public static function delete(int $sessionId, array $customHeaders = []): BunqResponseNull
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->delete(
            vsprintf(
                self::ENDPOINT_URL_DELETE,
                [$sessionId]
            ),
            $customHeaders
        );

        return BunqResponseNull::castFromBunqResponse(
            new BunqResponse(null, $responseRaw->getHeaders())
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
