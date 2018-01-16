<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * After having created an Installation you can now create a DeviceServer. A
 * DeviceServer is needed to do a login call with session-server.
 *
 * @generated
 */
class DeviceServer extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'device-server';
    const ENDPOINT_URL_READ = 'device-server/%s';
    const ENDPOINT_URL_LISTING = 'device-server';

    /**
     * Field constants.
     */
    const FIELD_DESCRIPTION = 'description';
    const FIELD_SECRET = 'secret';
    const FIELD_PERMITTED_IPS = 'permitted_ips';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'DeviceServer';

    /**
     * The id of the DeviceServer as created on the server.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the DeviceServer's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the DeviceServer's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The description of the DeviceServer.
     *
     * @var string
     */
    protected $description;

    /**
     * The ip address which was used to create the DeviceServer.
     *
     * @var string
     */
    protected $ip;

    /**
     * The status of the DeviceServer. Can be ACTIVE, BLOCKED,
     * NEEDS_CONFIRMATION or OBSOLETE.
     *
     * @var string
     */
    protected $status;

    /**
     * Create a new DeviceServer providing the installation token in the header
     * and signing the request with the private part of the key you used to
     * create the installation. The API Key that you are using will be bound to
     * the IP address of the DeviceServer which you have created.<br/><br/>Using
     * a Wildcard API Key gives you the freedom to make API calls even if the IP
     * address has changed after the POST device-server.<br/><br/>Find out more
     * at this link <a href="https://bunq.com/en/apikey-dynamic-ip"
     * target="_blank">https://bunq.com/en/apikey-dynamic-ip</a>.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(ApiContext $apiContext, array $requestMap, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                []
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Get one of your DeviceServers.
     *
     * @param ApiContext $apiContext
     * @param int $deviceServerId
     * @param string[] $customHeaders
     *
     * @return BunqResponseDeviceServer
     */
    public static function get(ApiContext $apiContext, int $deviceServerId, array $customHeaders = []): BunqResponseDeviceServer
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$deviceServerId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseDeviceServer::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Get a collection of all the DeviceServers you have created.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseDeviceServerList
     */
    public static function listing(ApiContext $apiContext, array $params = [], array $customHeaders = []): BunqResponseDeviceServerList
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                []
            ),
            $params,
            $customHeaders
        );

        return BunqResponseDeviceServerList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the DeviceServer as created on the server.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The timestamp of the DeviceServer's creation.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the DeviceServer's last update.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The description of the DeviceServer.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * The ip address which was used to create the DeviceServer.
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
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * The status of the DeviceServer. Can be ACTIVE, BLOCKED,
     * NEEDS_CONFIRMATION or OBSOLETE.
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
    public function setStatus($status)
    {
        $this->status = $status;
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

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->ip)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        return true;
    }
}
