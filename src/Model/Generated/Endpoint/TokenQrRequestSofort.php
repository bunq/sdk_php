<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
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
     * The token passed from a site or read from a QR code.
     *
     * @var string
     */
    protected $tokenFieldForRequest;

    /**
     * @param string $token The token passed from a site or read from a QR code.
     */
    public function __construct(string $token)
    {
        $this->tokenFieldForRequest = $token;
    }

    /**
     * Create a request from an SOFORT transaction.
     *
     * @param string $token The token passed from a site or read from a QR code.
     * @param string[] $customHeaders
     *
     * @return BunqResponseTokenQrRequestSofort
     */
    public static function create(string $token, array $customHeaders = []): BunqResponseTokenQrRequestSofort
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [self::FIELD_TOKEN => $token],
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
