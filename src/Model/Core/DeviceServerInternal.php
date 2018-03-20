<?php
namespace bunq\Model\Core;

use bunq\Context\ApiContext;
use bunq\Exception\BunqException;
use bunq\Http\ApiClient;
use bunq\Model\Generated\Endpoint\BunqResponseInt;
use bunq\Model\Generated\Endpoint\DeviceServer;

/**
 */
class DeviceServerInternal extends DeviceServer
{
    /**
     * Error constants.
     */
    const ERROR_API_CONTEXT_IS_NULL = 'ApiContext should not be null, use the genereted class instead.';

    /**
     * @param string $description
     * @param string $secret
     * @param array|null $permittedIps
     * @param array $customHeaders
     * @param ApiContext|null $apiContext
     *
     * @return BunqResponseInt
     * @throws BunqException
     */
    public static function create(
        string $description,
        string $secret,
        array $permittedIps = null,
        array $customHeaders = [],
        ApiContext $apiContext = null
    ): BunqResponseInt {
        if (is_null($apiContext)) {
            throw new BunqException(self::ERROR_API_CONTEXT_IS_NULL);
        }

        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                []
            ),
            [
                self::FIELD_DESCRIPTION => $description,
                self::FIELD_SECRET => $secret,
                self::FIELD_PERMITTED_IPS => $permittedIps,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }
}
