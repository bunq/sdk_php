<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Used to create a sandbox userPerson.
 *
 * @generated
 */
class SandboxUserPerson extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'sandbox-user-person';

    /**
     * Object type.
     */
    const OBJECT_TYPE_POST = 'ApiKey';

    /**
     * The API key of the newly created sandbox userPerson.
     *
     * @var string
     */
    protected $apiKey;

    /**
     * @param string[] $customHeaders
     *
     * @return BunqResponseSandboxUserPerson
     */
    public static function create( array $customHeaders = []): BunqResponseSandboxUserPerson
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

        return BunqResponseSandboxUserPerson::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_POST)
        );
    }

    /**
     * The API key of the newly created sandbox userPerson.
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $apiKey
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
