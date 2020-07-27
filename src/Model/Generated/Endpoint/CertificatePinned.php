<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Certificate;

/**
 * This endpoint allow you to pin the certificate chains to your account.
 * These certificate chains are used for SSL validation whenever a callback
 * is initiated to one of your https callback urls.
 *
 * @generated
 */
class CertificatePinned extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/certificate-pinned';
    const ENDPOINT_URL_DELETE = 'user/%s/certificate-pinned/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/certificate-pinned';
    const ENDPOINT_URL_READ = 'user/%s/certificate-pinned/%s';

    /**
     * Field constants.
     */
    const FIELD_CERTIFICATE_CHAIN = 'certificate_chain';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'CertificatePinned';

    /**
     * The certificate chain in .PEM format. Certificates are glued with newline
     * characters.
     *
     * @var string
     */
    protected $certificateChain;

    /**
     * The id generated for the pinned certificate chain.
     *
     * @var int
     */
    protected $id;

    /**
     * The certificate chain in .PEM format.
     *
     * @var Certificate[]
     */
    protected $certificateChainFieldForRequest;

    /**
     * @param Certificate[] $certificateChain The certificate chain in .PEM
     * format.
     */
    public function __construct(array $certificateChain)
    {
        $this->certificateChainFieldForRequest = $certificateChain;
    }

    /**
     * Pin the certificate chain.
     *
     * @param Certificate[] $certificateChain The certificate chain in .PEM
     * format.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(array $certificateChain, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [self::FIELD_CERTIFICATE_CHAIN => $certificateChain],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Remove the pinned certificate chain with the specific ID.
     *
     * @param string[] $customHeaders
     * @param int $certificatePinnedId
     *
     * @return BunqResponseNull
     */
    public static function delete(int $certificatePinnedId, array $customHeaders = []): BunqResponseNull
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->delete(
            vsprintf(
                self::ENDPOINT_URL_DELETE,
                [static::determineUserId(), $certificatePinnedId]
            ),
            $customHeaders
        );

        return BunqResponseNull::castFromBunqResponse(
            new BunqResponse(null, $responseRaw->getHeaders())
        );
    }

    /**
     * List all the pinned certificate chain for the given user.
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseCertificatePinnedList
     */
    public static function listing(array $params = [], array $customHeaders = []): BunqResponseCertificatePinnedList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId()]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseCertificatePinnedList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Get the pinned certificate chain with the specified ID.
     *
     * @param int $certificatePinnedId
     * @param string[] $customHeaders
     *
     * @return BunqResponseCertificatePinned
     */
    public static function get(int $certificatePinnedId, array $customHeaders = []): BunqResponseCertificatePinned
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $certificatePinnedId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseCertificatePinned::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The certificate chain in .PEM format. Certificates are glued with newline
     * characters.
     *
     * @return string
     */
    public function getCertificateChain()
    {
        return $this->certificateChain;
    }

    /**
     * @param string $certificateChain
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCertificateChain($certificateChain)
    {
        $this->certificateChain = $certificateChain;
    }

    /**
     * The id generated for the pinned certificate chain.
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
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->certificateChain)) {
            return false;
        }

        if (!is_null($this->id)) {
            return false;
        }

        return true;
    }
}
