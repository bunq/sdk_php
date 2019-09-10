<?php
namespace bunq\Model\Core;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Http\BunqResponseRaw;
use bunq\Model\Generated\Endpoint\BunqResponseUserCredentialPasswordIp;
use bunq\Model\Generated\Endpoint\PaymentServiceProviderCredential;
use bunq\Model\Generated\Endpoint\UserCredentialPasswordIp;

/**
 */
class PaymentServiceProviderCredentialInternal extends PaymentServiceProviderCredential
{
    /**
     * Field constants.
     */
    const FIELD_OBJECT_TYPE = 'CredentialPasswordIp';

    /**
     * @param string $clientPaymentServiceProviderCertificate      Payment Services
     *                                                             Directive 2 compatible QSEAL certificate
     * @param string $clientPaymentServiceProviderCertificateChain Intermediate
     *                                                             and root certificate belonging to the provided
     *                                                             certificate.
     * @param string $clientPublicKeySignature                     The Base64 encoded signature of
     *                                                             the public key provided during installation and with
     *                                                             the installation token appended as a nonce. Signed
     *                                                             with the private key belonging to the QSEAL
     *                                                             certificate.
     * @param ApiContext $apiContext
     * @param string[] $allCustomHeader
     *
     * @return BunqResponseUserCredentialPasswordIp
     */
    public static function createWithApiContext(
        string $clientPaymentServiceProviderCertificate,
        string $clientPaymentServiceProviderCertificateChain,
        string $clientPublicKeySignature,
        ApiContext $apiContext,
        array $allCustomHeader = []
    ): BunqResponseUserCredentialPasswordIp {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            self::ENDPOINT_URL_CREATE,
            [
                self::FIELD_CLIENT_PAYMENT_SERVICE_PROVIDER_CERTIFICATE => $clientPaymentServiceProviderCertificate,
                self::FIELD_CLIENT_PAYMENT_SERVICE_PROVIDER_CERTIFICATE_CHAIN => $clientPaymentServiceProviderCertificateChain,
                self::FIELD_CLIENT_PUBLIC_KEY_SIGNATURE => $clientPublicKeySignature,
            ],
            $allCustomHeader
        );

        return BunqResponseUserCredentialPasswordIp::castFromBunqResponse(
            static::fromRawResponse($responseRaw)
        );
    }


    /**
     * @param BunqResponseRaw $responseRaw
     *
     * @return BunqResponse
     */
    protected static function fromRawResponse(BunqResponseRaw $responseRaw): BunqResponse
    {
        $allCredential = UserCredentialPasswordIp::fromJson($responseRaw, self::FIELD_OBJECT_TYPE);

        return new BunqResponseUserCredentialPasswordIp($allCredential->getValue(), $responseRaw->getHeaders());
    }
}
