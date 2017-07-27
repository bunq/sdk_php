<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Model\BunqModel;

/**
 * After having created an Installation you can now create a DeviceServer. A
 * DeviceServer is needed to do a login call with session-server.
 *
 * @generated
 */
class DeviceServer extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_DESCRIPTION = 'description';
    const FIELD_SECRET = 'secret';
    const FIELD_PERMITTED_IPS = 'permitted_ips';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'device-server';
    const ENDPOINT_URL_READ = 'device-server/%s';
    const ENDPOINT_URL_LISTING = 'device-server';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'DeviceServer';

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
     * Create a new DeviceServer. Provide the Installation token in the
     * "X-Bunq-Client-Authentication" header. And sign this request with the key
     * of which you used the public part to create the Installation. Your API
     * key will be bound to the ip address of this DeviceServer.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param string[] $customHeaders
     *
     * @return int
     */
    public static function create(ApiContext $apiContext, array $requestMap, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $response = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                []
            ),
            $requestMap,
            $customHeaders
        );

        return static::processForId($response);
    }

    /**
     * Get one of your DeviceServers.
     *
     * @param ApiContext $apiContext
     * @param int $deviceServerId
     * @param string[] $customHeaders
     *
     * @return BunqModel|DeviceServer
     */
    public static function get(ApiContext $apiContext, $deviceServerId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $response = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$deviceServerId]
            ),
            $customHeaders
        );

        return static::fromJson($response);
    }

    /**
     * Get a collection of all the DeviceServers you have created.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param string[] $customHeaders
     *
     * @return BunqModel[]|DeviceServer[]
     */
    public static function listing(ApiContext $apiContext, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $response = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                []
            ),
            $customHeaders
        );

        return static::fromJsonList($response, self::OBJECT_TYPE);
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
}
