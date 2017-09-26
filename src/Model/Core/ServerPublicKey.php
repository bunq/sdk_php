<?php
namespace bunq\Model\Core;

use bunq\Security\PublicKey;

/**
 */
class ServerPublicKey extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_SERVER_PUBLIC_KEY = 'server_public_key';

    /**
     * @var PublicKey
     */
    protected $serverPublicKey;

    /**
     * @param string|null $serverPublicKey
     */
    public function __construct($serverPublicKey = null)
    {
        $this->serverPublicKey = new PublicKey($serverPublicKey);
    }

    /**
     * @return PublicKey
     */
    public function getServerPublicKey(): PublicKey
    {
        return $this->serverPublicKey;
    }

    /**
     * @param mixed[] $responseArray
     * @param string|null $wrapper
     *
     * @return static
     */
    public static function createFromResponseArray(array $responseArray, string $wrapper = null): ServerPublicKey
    {
        return new static($responseArray[self::FIELD_SERVER_PUBLIC_KEY]);
    }
}
