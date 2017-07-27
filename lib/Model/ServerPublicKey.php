<?php
namespace bunq\Model;

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
     * PublicKeyServer constructor.
     *
     * @param string|null $serverPublicKey
     */
    public function __construct($serverPublicKey = null)
    {
        $this->serverPublicKey = new PublicKey($serverPublicKey);
    }

    /**
     * @return PublicKey
     */
    public function getServerPublicKey()
    {
        return $this->serverPublicKey;
    }

    /**
     * @param array $responseArray
     * @param bool $isList
     * @param string $wrapper
     *
     * @return static
     */
    public static function createFromResponseArray(array $responseArray, $isList = false, $wrapper = null)
    {
        return new static($responseArray[self::FIELD_SERVER_PUBLIC_KEY]);
    }
}
