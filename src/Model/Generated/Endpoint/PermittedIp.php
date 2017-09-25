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
     * Field constants.
     */
    const FIELD_IP = 'ip';
    const FIELD_STATUS = 'status';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/credential-password-ip/%s/ip/%s';
    const ENDPOINT_URL_CREATE = 'user/%s/credential-password-ip/%s/ip';
    const ENDPOINT_URL_LISTING = 'user/%s/credential-password-ip/%s/ip';
    const ENDPOINT_URL_UPDATE = 'user/%s/credential-password-ip/%s/ip/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'PermittedIp';

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
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $credentialPasswordIpId
     * @param int $permittedIpId
     * @param string[] $customHeaders
     *
     * @return BunqResponsePermittedIp
     */
    public static function get(ApiContext $apiContext, $userId, $credentialPasswordIpId, $permittedIpId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $credentialPasswordIpId, $permittedIpId]
            ),
            [],
            $customHeaders
        );

        return BunqResponsePermittedIp::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $credentialPasswordIpId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(ApiContext $apiContext, array $requestMap, $userId, $credentialPasswordIpId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId, $credentialPasswordIpId]
            ),
            $requestMap,
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
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $credentialPasswordIpId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponsePermittedIpList
     */
    public static function listing(ApiContext $apiContext, $userId, $credentialPasswordIpId, array $params = [], array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $credentialPasswordIpId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponsePermittedIpList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $credentialPasswordIpId
     * @param int $permittedIpId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(ApiContext $apiContext, array $requestMap, $userId, $credentialPasswordIpId, $permittedIpId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [$userId, $credentialPasswordIpId, $permittedIpId]
            ),
            $requestMap,
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
     * @param string $ip
     */
    public function setIp(string $ip)
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
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }
}
