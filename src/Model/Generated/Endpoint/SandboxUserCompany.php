<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;

/**
 * Used to create a sandbox userCompany.
 *
 * @generated
 */
class SandboxUserCompany extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'sandbox-user-company';

    /**
     * Object type.
     */
    const OBJECT_TYPE_POST = 'ApiKey';

    /**
     * The API key of the newly created sandbox userCompany.
     *
     * @var string
     */
    protected $apiKey;

    /**
     * @param string[] $customHeaders
     *
     * @return BunqResponseSandboxUserCompany
     */
    public static function create(array $customHeaders = []): BunqResponseSandboxUserCompany
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

        return BunqResponseSandboxUserCompany::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_POST)
        );
    }

    /**
     * The API key of the newly created sandbox userCompany.
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
