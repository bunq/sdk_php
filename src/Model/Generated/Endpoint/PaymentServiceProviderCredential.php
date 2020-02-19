<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\PermittedDevice;

/**
 * Register a Payment Service Provider and provide credentials
 *
 * @generated
 */
class PaymentServiceProviderCredential extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'payment-service-provider-credential/%s';
    const ENDPOINT_URL_CREATE = 'payment-service-provider-credential';

    /**
     * Field constants.
     */
    const FIELD_CLIENT_PAYMENT_SERVICE_PROVIDER_CERTIFICATE = 'client_payment_service_provider_certificate';
    const FIELD_CLIENT_PAYMENT_SERVICE_PROVIDER_CERTIFICATE_CHAIN = 'client_payment_service_provider_certificate_chain';
    const FIELD_CLIENT_PUBLIC_KEY_SIGNATURE = 'client_public_key_signature';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'CredentialPasswordIp';

    /**
     * The id of the credential.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the credential object's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the credential object's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The status of the credential.
     *
     * @var string
     */
    protected $status;

    /**
     * When the status is PENDING_FIRST_USE: when the credential expires.
     *
     * @var string
     */
    protected $expiryTime;

    /**
     * When the status is PENDING_FIRST_USE: the value of the token.
     *
     * @var string
     */
    protected $tokenValue;

    /**
     * When the status is ACTIVE: the details of the device that may use the
     * credential.
     *
     * @var PermittedDevice
     */
    protected $permittedDevice;

    /**
     * Payment Services Directive 2 compatible QSEAL certificate
     *
     * @var string
     */
    protected $clientPaymentServiceProviderCertificateFieldForRequest;

    /**
     * Intermediate and root certificate belonging to the provided certificate.
     *
     * @var string
     */
    protected $clientPaymentServiceProviderCertificateChainFieldForRequest;

    /**
     * The Base64 encoded signature of the public key provided during
     * installation and with the installation token appended as a nonce. Signed
     * with the private key belonging to the QSEAL certificate.
     *
     * @var string
     */
    protected $clientPublicKeySignatureFieldForRequest;

    /**
     * @param string $clientPaymentServiceProviderCertificate Payment Services
     * Directive 2 compatible QSEAL certificate
     * @param string $clientPaymentServiceProviderCertificateChain Intermediate
     * and root certificate belonging to the provided certificate.
     * @param string $clientPublicKeySignature The Base64 encoded signature of
     * the public key provided during installation and with the installation
     * token appended as a nonce. Signed with the private key belonging to the
     * QSEAL certificate.
     */
    public function __construct(
        string $clientPaymentServiceProviderCertificate,
        string $clientPaymentServiceProviderCertificateChain,
        string $clientPublicKeySignature
    ) {
        $this->clientPaymentServiceProviderCertificateFieldForRequest = $clientPaymentServiceProviderCertificate;
        $this->clientPaymentServiceProviderCertificateChainFieldForRequest =
            $clientPaymentServiceProviderCertificateChain;
        $this->clientPublicKeySignatureFieldForRequest = $clientPublicKeySignature;
    }

    /**
     * @param int $paymentServiceProviderCredentialId
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentServiceProviderCredential
     */
    public static function get(
        int $paymentServiceProviderCredentialId,
        array $customHeaders = []
    ): BunqResponsePaymentServiceProviderCredential {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$paymentServiceProviderCredentialId]
            ),
            [],
            $customHeaders
        );

        return BunqResponsePaymentServiceProviderCredential::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param string $clientPaymentServiceProviderCertificate Payment Services
     * Directive 2 compatible QSEAL certificate
     * @param string $clientPaymentServiceProviderCertificateChain Intermediate
     * and root certificate belonging to the provided certificate.
     * @param string $clientPublicKeySignature The Base64 encoded signature of
     * the public key provided during installation and with the installation
     * token appended as a nonce. Signed with the private key belonging to the
     * QSEAL certificate.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        string $clientPaymentServiceProviderCertificate,
        string $clientPaymentServiceProviderCertificateChain,
        string $clientPublicKeySignature,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                []
            ),
            [
                self::FIELD_CLIENT_PAYMENT_SERVICE_PROVIDER_CERTIFICATE => $clientPaymentServiceProviderCertificate,
                self::FIELD_CLIENT_PAYMENT_SERVICE_PROVIDER_CERTIFICATE_CHAIN => $clientPaymentServiceProviderCertificateChain,
                self::FIELD_CLIENT_PUBLIC_KEY_SIGNATURE => $clientPublicKeySignature,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * The id of the credential.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The timestamp of the credential object's creation.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the credential object's last update.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The status of the credential.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * When the status is PENDING_FIRST_USE: when the credential expires.
     *
     * @return string
     */
    public function getExpiryTime()
    {
        return $this->expiryTime;
    }

    /**
     * @param string $expiryTime
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setExpiryTime($expiryTime)
    {
        $this->expiryTime = $expiryTime;
    }

    /**
     * When the status is PENDING_FIRST_USE: the value of the token.
     *
     * @return string
     */
    public function getTokenValue()
    {
        return $this->tokenValue;
    }

    /**
     * @param string $tokenValue
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setTokenValue($tokenValue)
    {
        $this->tokenValue = $tokenValue;
    }

    /**
     * When the status is ACTIVE: the details of the device that may use the
     * credential.
     *
     * @return PermittedDevice
     */
    public function getPermittedDevice()
    {
        return $this->permittedDevice;
    }

    /**
     * @param PermittedDevice $permittedDevice
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setPermittedDevice($permittedDevice)
    {
        $this->permittedDevice = $permittedDevice;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->created)) {
            return false;
        }

        if (!is_null($this->updated)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->expiryTime)) {
            return false;
        }

        if (!is_null($this->tokenValue)) {
            return false;
        }

        if (!is_null($this->permittedDevice)) {
            return false;
        }

        return true;
    }
}
