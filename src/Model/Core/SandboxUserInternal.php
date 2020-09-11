<?php
namespace bunq\Model\Core;

use bunq\Context\ApiContext;
use bunq\Exception\BunqException;
use bunq\Http\ApiClient;
use bunq\Model\Generated\Endpoint\BunqResponseSandboxUserPerson;
use bunq\Model\Generated\Endpoint\SandboxUserPerson;

/**
 */
class SandboxUserInternal extends SandboxUserPerson
{
    /**
     * Error constants.
     */
    const ERROR_API_CONTEXT_IS_NULL = 'ApiContext should not be null, use the generated class instead.';

    /**
     * @param string[] $customHeaders
     * @param ApiContext|null $apiContext
     *
     * @return BunqResponseSandboxUserPerson
     * @throws BunqException
     */
    public static function create(
        array $customHeaders = [],
        ApiContext $apiContext = null
    ): BunqResponseSandboxUserPerson {
        if (is_null($apiContext)) {
            throw new BunqException(self::ERROR_API_CONTEXT_IS_NULL);
        }

        $apiClient = new ApiClient($apiContext);
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
}
