<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Using this call you can create a SOFORT Request assigned to your User by
 * providing the Token of the request.
 *
 * @generated
 */
class TokenQrRequestSofort extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/token-qr-request-sofort';

    /**
     * Field constants.
     */
    const FIELD_TOKEN = 'token';

    /**
     * Object type.
     */
    const OBJECT_TYPE_POST = 'RequestResponse';

    /**
     * Create a request from an SOFORT transaction.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param string[] $customHeaders
     *
     * @return BunqResponseTokenQrRequestSofort
     */
    public static function create(ApiContext $apiContext, array $requestMap, int $userId, array $customHeaders = []): BunqResponseTokenQrRequestSofort
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseTokenQrRequestSofort::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_POST)
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
