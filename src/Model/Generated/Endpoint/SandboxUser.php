<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;

/**
 * Used to create a sandbox user.
 *
 * @generated
 */
class SandboxUser extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'sandbox-user';

    /**
     * Object type.
     */
    const OBJECT_TYPE_POST = 'ApiKey';

    /**
     * The API key of the newly created sandbox user.
     *
     * @var string
     */
    protected $apiKey;

    /**
     * @param string[] $customHeaders
     *
     * @return BunqResponseSandboxUser
     */
    public static function create(array $customHeaders = []): BunqResponseSandboxUser
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                []
            ),
            [],
            $customHeaders
        );

        return BunqResponseSandboxUser::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_POST)
        );
    }

    /**
     * The API key of the newly created sandbox user.
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->apiKey)) {
            return false;
        }

        return true;
    }
}
