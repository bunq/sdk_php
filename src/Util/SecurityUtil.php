<?php
namespace bunq\Util;

use bunq\Exception\BunqException;
use bunq\Model\Generated\Object\Certificate;
use bunq\Security\PrivateKey;
use bunq\Security\PublicKey;

/**
 */
class SecurityUtil
{
    /**
     * Error constants.
     */
    const ERROR_FILE_NOT_FOUND = 'No file found at specified path %s.';

    /**
     * @param PublicKey $key
     *
     * @return string
     */
    public static function getPublicKeyFormattedString(
        PublicKey $key
    ): string {
        return $key->getKey();
    }

    /**
     * @param Certificate[] $allChainCertificate
     *
     * @return string
     */
    public static function getCertificateChainString(
        array $allChainCertificate
    ): string {
        $chainString = '';

        foreach ($allChainCertificate as $certificate) {
            if ($certificate instanceof Certificate) {
                $chainString .= $certificate->getCertificate() . PHP_EOL;
            }
        }

        return $chainString;
    }

    /**
     * @param string $path
     *
     * @return Certificate
     * @throws BunqException
     */
    public static function getCertificateFromFile(
        string $path
    ): Certificate {
        if (file_exists($path)) {
            $certificateString = FileUtil::getFileContents($path);

            $certificate = new Certificate($certificateString);
            $certificate->setCertificate($certificateString);

            return $certificate;
        } else {
            throw new BunqException(vsprintf(self::ERROR_FILE_NOT_FOUND, [$path]));
        }
    }

    /**
     * @param string $path
     *
     * @return PrivateKey
     * @throws BunqException
     */
    public static function getPrivateKeyFromFile(
        string $path
    ): PrivateKey {
        if (file_exists($path)) {
            $privateKeyResource = openssl_pkey_get_private(
                FileUtil::getFileContents($path)
            );

            return new PrivateKey($privateKeyResource);
        } else {
            throw new BunqException(vsprintf(self::ERROR_FILE_NOT_FOUND, [$path]));
        }
    }
}
