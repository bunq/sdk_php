<?php
namespace bunq\Http\Handler;

use bunq\Security\PublicKey;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;

/**
 */
class RequestHandlerEncryption extends RequestHandlerBase
{
    /**
     * Header constants.
     */
    const HEADER_CLIENT_ENCRYPTION_HMAC = 'X-Bunq-Client-Encryption-Hmac';
    const HEADER_CLIENT_ENCRYPTION_IV = 'X-Bunq-Client-Encryption-Iv';
    const HEADER_CLIENT_ENCRYPTION_KEY = 'X-Bunq-Client-Encryption-Key';

    /**
     * Encryption constants.
     */
    const AES_ENCRYPTION_METHOD = 'aes-256-cbc';
    const AES_KEY_LENGTH = 32;
    const HMAC_ALGORITHM = 'sha1';
    const INITIATION_VECTOR_LENGTH = 16;

    /**
     * @var PublicKey
     */
    protected $publicKey;

    /**
     * @param PublicKey $publicKey
     */
    public function __construct(PublicKey $publicKey)
    {
        $this->publicKey = $publicKey;
    }

    /**
     * @param RequestInterface $request
     *
     * @return RequestInterface
     */
    public function execute(RequestInterface $request): RequestInterface
    {
        $body = $request->getBody()->getContents();

        $iv = random_bytes(self::INITIATION_VECTOR_LENGTH);
        $aesKey = random_bytes(self::AES_KEY_LENGTH);
        $encryptedAesKey = $this->publicKey->encrypt($aesKey);
        $bodyEncrypted = $this->determineBodyStringEncrypted($body, $aesKey, $iv);
        $hmac = $this->determineHmac($aesKey, $iv, $bodyEncrypted);
        $encryptedHeaders = [
            self::HEADER_CLIENT_ENCRYPTION_IV => [base64_encode($iv)],
            self::HEADER_CLIENT_ENCRYPTION_KEY => [base64_encode($encryptedAesKey)],
            self::HEADER_CLIENT_ENCRYPTION_HMAC => [base64_encode($hmac)],
        ];

        return new Request(
            $request->getMethod(),
            $request->getUri(),
            array_merge($request->getHeaders(), $encryptedHeaders),
            $bodyEncrypted
        );
    }

    /**
     * @param string $body
     * @param string $aesKey
     * @param string $iv
     *
     * @return string
     */
    protected function determineBodyStringEncrypted(string $body, string $aesKey, string $iv): string
    {
        return openssl_encrypt($body, self::AES_ENCRYPTION_METHOD, $aesKey, OPENSSL_PKCS1_PADDING, $iv);
    }

    /**
     * @param string $aesKey
     * @param string $iv
     * @param string $bodyString
     *
     * @return string
     */
    private function determineHmac(string $aesKey, string $iv, string $bodyString): string
    {
        $rawData = $iv . $bodyString;

        return hash_hmac(self::HMAC_ALGORITHM, $rawData, $aesKey, true);
    }
}
