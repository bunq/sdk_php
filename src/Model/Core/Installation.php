<?php
namespace bunq\Model\Core;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;

/**
 * Once you have created an Installation and a DeviceServer with that Installation, then you are
 * ready to start a session! A session expires after the same amount of time you have set for
 * Auto Logout in your user account. By default this is 1 week. If a request is made 30 seconds
 * before a session expires, it will be extended from that moment by your auto logout time, but
 * never by more than 5 minutes.
 *
 */
class Installation extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_CLIENT_PUBLIC_KEY = 'client_public_key';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_POST = 'installation';

    /**
     * @var string
     */
    protected $clientPublicKey;

    /**
     * @var Id
     */
    protected $id;

    /**
     * @var Token
     */
    protected $token;

    /**
     * @var ServerPublicKey
     */
    protected $serverPublicKey;

    /**
     * @param string $clientPublicKey
     */
    public function __construct(string $clientPublicKey = null)
    {
        $this->clientPublicKey = $clientPublicKey;
    }

    /**
     * @param ApiContext $apiContext
     * @param string $clientPublicKey
     *
     * @return BunqResponseInstallation
     */
    public static function create(
        ApiContext $apiContext,
        string $clientPublicKey
    ): BunqResponseInstallation {
        $installation = new static($clientPublicKey);

        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(self::ENDPOINT_URL_POST, $installation->jsonSerialize(), []);

        return BunqResponseInstallation::castFromBunqResponse(
            static::classFromJson($responseRaw)
        );
    }

    /**
     * @return Id
     */
    public function getId(): Id
    {
        return $this->id;
    }

    /**
     * @return Token
     */
    public function getToken(): Token
    {
        return $this->token;
    }

    /**
     * @return ServerPublicKey
     */
    public function getServerPublicKey(): ServerPublicKey
    {
        return $this->serverPublicKey;
    }

    /**
     * @return string[]
     */
    public function jsonSerialize(): array
    {
        return [
            self::FIELD_CLIENT_PUBLIC_KEY => $this->clientPublicKey,
        ];
    }

    /**
     * @return bool
     */
    protected function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->token)) {
            return false;
        }

        if (!is_null($this->serverPublicKey)) {
            return false;
        }

        if (!is_null($this->clientPublicKey)) {
            return false;
        }

        return true;
    }
}
