<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Manage the IPs which may be used for a credential of a user for server
 * authentication.
 *
 * @generated
 */
class PermittedIp extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/credential-password-ip/%s/ip/%s';
    const ENDPOINT_URL_CREATE = 'user/%s/credential-password-ip/%s/ip';
    const ENDPOINT_URL_LISTING = 'user/%s/credential-password-ip/%s/ip';
    const ENDPOINT_URL_UPDATE = 'user/%s/credential-password-ip/%s/ip/%s';

    /**
     * Field constants.
     */
    const FIELD_IP = 'ip';
    const FIELD_STATUS = 'status';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'PermittedIp';

    /**
     * The IP address.
     *
     * @var string
     */
    protected $ip;

    /**
     * The status of the IP. May be "ACTIVE" or "INACTIVE". It is only possible
     * to make requests from "ACTIVE" IP addresses. Only "ACTIVE" IPs will be
     * billed.
     *
     * @var string
     */
    protected $status;

    /**
     * The IP address.
     *
     * @var string
     */
    protected $ipFieldForRequest;

    /**
     * The status of the IP. May be "ACTIVE" or "INACTIVE". It is only possible
     * to make requests from "ACTIVE" IP addresses. Only "ACTIVE" IPs will be
     * billed.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * @param string $ip The IP address.
     * @param string|null $status The status of the IP. May be "ACTIVE" or
     * "INACTIVE". It is only possible to make requests from "ACTIVE" IP
     * addresses. Only "ACTIVE" IPs will be billed.
     */
    public function __construct(string  $ip, string  $status = null)
    {
        $this->ipFieldForRequest = $ip;
        $this->statusFieldForRequest = $status;
    }

    /**
     * @param int $credentialPasswordIpId
     * @param int $permittedIpId
     * @param string[] $customHeaders
     *
     * @return BunqResponsePermittedIp
     */
    public static function get(int $credentialPasswordIpId, int $permittedIpId, array $customHeaders = []): BunqResponsePermittedIp
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $credentialPasswordIpId, $permittedIpId]
            ),
            [],
            $customHeaders
        );

        return BunqResponsePermittedIp::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $credentialPasswordIpId
     * @param string $ip The IP address.
     * @param string|null $status The status of the IP. May be "ACTIVE" or
     * "INACTIVE". It is only possible to make requests from "ACTIVE" IP
     * addresses. Only "ACTIVE" IPs will be billed.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(int $credentialPasswordIpId, string  $ip, string  $status = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), $credentialPasswordIpId]
            ),
            [self::FIELD_IP => $ip,
self::FIELD_STATUS => $status],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $credentialPasswordIpId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponsePermittedIpList
     */
    public static function listing(int $credentialPasswordIpId, array $params = [], array $customHeaders = []): BunqResponsePermittedIpList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), $credentialPasswordIpId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponsePermittedIpList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $credentialPasswordIpId
     * @param int $permittedIpId
     * @param string|null $status The status of the IP. May be "ACTIVE" or
     * "INACTIVE". It is only possible to make requests from "ACTIVE" IP
     * addresses. Only "ACTIVE" IPs will be billed.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(int $credentialPasswordIpId, int $permittedIpId, string  $status = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $credentialPasswordIpId, $permittedIpId]
            ),
            [self::FIELD_STATUS => $status],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * The IP address.
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * The status of the IP. May be "ACTIVE" or "INACTIVE". It is only possible
     * to make requests from "ACTIVE" IP addresses. Only "ACTIVE" IPs will be
     * billed.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->ip)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        return true;
    }
}
