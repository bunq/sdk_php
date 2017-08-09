<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Model\BunqModel;
use bunq\Model\BunqResponse;

/**
 * Used to get a Device or a listing of Devices. Creating a DeviceServer
 * should happen via /device-server
 *
 * @generated
 */
class Device extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'device/%s';
    const ENDPOINT_URL_LISTING = 'device';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'Device';

    /**
     * @var DevicePhone
     */
    protected $devicePhone;

    /**
     * @var DeviceServer
     */
    protected $deviceServer;

    /**
     * Get a single Device. A Device is either a DevicePhone or a DeviceServer.
     *
     * @param ApiContext $apiContext
     * @param int $deviceId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<Device>
     */
    public static function get(ApiContext $apiContext, $deviceId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$deviceId]
            ),
            $customHeaders
        );

        return static::fromJson($responseRaw);
    }

    /**
     * Get a collection of Devices. A Device is either a DevicePhone or a
     * DeviceServer.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param string[] $customHeaders
     *
     * @return BunqResponse<BunqModel[]|Device[]>
     */
    public static function listing(ApiContext $apiContext, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                []
            ),
            $customHeaders
        );

        return static::fromJsonList($responseRaw);
    }

    /**
     * @return DevicePhone
     */
    public function getDevicePhone()
    {
        return $this->devicePhone;
    }

    /**
     * @param DevicePhone $devicePhone
     */
    public function setDevicePhone(DevicePhone $devicePhone)
    {
        $this->devicePhone = $devicePhone;
    }

    /**
     * @return DeviceServer
     */
    public function getDeviceServer()
    {
        return $this->deviceServer;
    }

    /**
     * @param DeviceServer $deviceServer
     */
    public function setDeviceServer(DeviceServer $deviceServer)
    {
        $this->deviceServer = $deviceServer;
    }
}
