<?php
namespace bunq\Security;

/**
 */
class PublicKey
{
    /**
     * @var string
     */
    protected $key;

    /**
     * @param $key
     */
    public function __construct($key)
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $dataToEncrypt
     *
     * @return string
     */
    public function encrypt($dataToEncrypt)
    {
        openssl_public_encrypt($dataToEncrypt, $encrypted, $this->getKey());

        return $encrypted;
    }
}
