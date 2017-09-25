<?php
namespace bunq\Context;

use bunq\Model\Core\Token;
use bunq\Security\KeyPair;
use bunq\Security\PrivateKey;
use bunq\Security\PublicKey;
use JsonSerializable;

/**
 */
class InstallationContext implements JsonSerializable
{
    /**
     * Field constants.
     */
    const FIELD_TOKEN = 'token';
    const FIELD_PRIVATE_KEY_CLIENT = 'private_key_client';
    const FIELD_PUBLIC_KEY_CLIENT = 'public_key_client';
    const FIELD_PUBLIC_KEY_SERVER = 'public_key_server';

    /** @var Token */
    protected $installationToken;

    /** @var KeyPair */
    protected $keyPairClient;

    /** @var PublicKey */
    protected $publicKeyServer;

    /**
     * @param Token $installationToken
     * @param KeyPair $keyPairClient
     * @param PublicKey $publicKeyServer
     */
    public function __construct(Token $installationToken, KeyPair $keyPairClient, PublicKey $publicKeyServer)
    {
        $this->installationToken = $installationToken;
        $this->keyPairClient = $keyPairClient;
        $this->publicKeyServer = $publicKeyServer;
    }

    /**
     * @param mixed[] $installationContextJson
     * @return static
     */
    public static function restore(array $installationContextJson)
    {
        return new static(
            new Token($installationContextJson[self::FIELD_TOKEN]),
            new KeyPair(
                new PrivateKey($installationContextJson[self::FIELD_PRIVATE_KEY_CLIENT]),
                new PublicKey($installationContextJson[self::FIELD_PUBLIC_KEY_CLIENT])
            ),
            new PublicKey($installationContextJson[self::FIELD_PUBLIC_KEY_SERVER])
        );
    }

    /**
     * return string[]
     */
    public function jsonSerialize()
    {
        return [
            self::FIELD_TOKEN => $this->getInstallationToken()->getToken(),
            self::FIELD_PRIVATE_KEY_CLIENT => $this->getKeyPairClient()->getPrivateKey()->export(),
            self::FIELD_PUBLIC_KEY_CLIENT => $this->getKeyPairClient()->getPublicKey()->getKey(),
            self::FIELD_PUBLIC_KEY_SERVER => $this->getPublicKeyServer()->getKey(),
        ];
    }

    /**
     * @return Token
     */
    public function getInstallationToken()
    {
        return $this->installationToken;
    }

    /**
     * @return KeyPair
     */
    public function getKeyPairClient()
    {
        return $this->keyPairClient;
    }

    /**
     * @return PublicKey
     */
    public function getPublicKeyServer()
    {
        return $this->publicKeyServer;
    }
}
