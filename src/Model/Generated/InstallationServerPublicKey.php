<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Model\BunqModel;
use bunq\Model\BunqResponse;

/**
 * Using /installation/_/server-public-key you can request the
 * ServerPublicKey again. This is done by referring to the id of the
 * Installation.
 *
 * @generated
 */
class InstallationServerPublicKey extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'installation/%s/server-public-key';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'ServerPublicKey';

    /**
     * The server's public key for this Installation.
     *
     * @var string
     */
    protected $serverPublicKey;

    /**
     * Show the ServerPublicKey for this Installation.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $installationId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<BunqModel[]|InstallationServerPublicKey[]>
     */
    public static function listing(ApiContext $apiContext, $installationId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$installationId]
            ),
            $customHeaders
        );

        return static::fromJsonList($responseRaw, self::OBJECT_TYPE);
    }

    /**
     * The server's public key for this Installation.
     *
     * @return string
     */
    public function getServerPublicKey()
    {
        return $this->serverPublicKey;
    }

    /**
     * @param string $serverPublicKey
     */
    public function setServerPublicKey($serverPublicKey)
    {
        $this->serverPublicKey = $serverPublicKey;
    }
}
