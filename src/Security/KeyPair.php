<?php
namespace bunq\Security;

/**
 * Represents an OpenSSL key pair.
 *
 */
class KeyPair
{
    /**
     * Field constants.
     */
    const FIELD_KEY_LENGTH = "private_key_bits";
    const FIELD_KEY_TYPE = "private_key_type";
    const FIELD_KEY_ALGORITHM = "digest_alg";
    const FIELD_DETAILS_KEY = 'key';

    /**
     * Key constants.
     */
    const PRIVATE_KEY_LENGTH = 2048;
    const PRIVATE_KEY_ALGORITHM = "sha512";

    /** @var PrivateKey */
    protected $privateKey;

    /** @var PublicKey */
    protected $publicKey;

    /**
     * @return static
     */
    public static function generate()
    {
        $opensslKeyPair = openssl_pkey_new([
            self::FIELD_KEY_ALGORITHM => self::PRIVATE_KEY_ALGORITHM,
            self::FIELD_KEY_LENGTH => self::PRIVATE_KEY_LENGTH,
            self::FIELD_KEY_TYPE => OPENSSL_KEYTYPE_RSA
        ]);

        $privateKey = new PrivateKey(openssl_pkey_get_private($opensslKeyPair));
        $keyDetails = openssl_pkey_get_details($opensslKeyPair);
        $publicKey = new PublicKey($keyDetails[self::FIELD_DETAILS_KEY]);

        return new static($privateKey, $publicKey);
    }

    /**
     * @param PrivateKey $privateKey
     * @param PublicKey $publicKey
     */
    public function __construct(PrivateKey $privateKey, PublicKey $publicKey)
    {
        $this->privateKey = $privateKey;
        $this->publicKey = $publicKey;
    }

    /**
     * @return PublicKey
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * @return PrivateKey
     */
    public function getPrivateKey()
    {
        return $this->privateKey;
    }
}
