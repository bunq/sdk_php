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
     * @param $key
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
    public function sign($dataToSign)
    {
        openssl_sign($dataToSign, $signature, $this->getKey(), OPENSSL_ALGO_SHA256);

        return base64_encode($signature);
    }

    /**
     * @return string
     */
    public function export()
    {
        openssl_pkey_export($this->getKey(), $privateKeyString);

        return $privateKeyString;
    }


    /**
     * @return resource
     */
    public function getKey()
    {
        return $this->key;
    }
}
