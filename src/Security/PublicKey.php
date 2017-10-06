<?php
namespace bunq\Security;

/**
 */
class PublicKey
{
    /**
     * @var resource
     */
    protected $key;

    /**
     * @param resource $key
     */
    public function __construct($key)
    {
        $this->key = $key;
    }

    /**
     * @param string $dataToEncrypt
     *
     * @return string
     */
    public function encrypt(string $dataToEncrypt): string
    {
        openssl_public_encrypt($dataToEncrypt, $encrypted, $this->getKey());

        return $encrypted;
    }

    /**
     * @return resource
     */
    public function getKey()
    {
        return $this->key;
    }
}
