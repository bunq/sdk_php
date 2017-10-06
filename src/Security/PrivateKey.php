<?php
namespace bunq\Security;

/**
 */
class PrivateKey
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
     * @param string $dataToSign
     *
     * @return string
     */
    public function sign(string $dataToSign): string
    {
        openssl_sign($dataToSign, $signature, $this->getKey(), OPENSSL_ALGO_SHA256);

        return base64_encode($signature);
    }

    /**
     * @return resource
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function export(): string
    {
        openssl_pkey_export($this->getKey(), $privateKeyString);

        return $privateKeyString;
    }
}
