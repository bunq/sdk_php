<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Exception\BunqException;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\AnchorObjectInterface;
use bunq\Model\Core\BunqModel;

/**
 * Used to get a Device or a listing of Devices. Creating a DeviceServer
 * should happen via /device-server
 *
 * @generated
 */
class Device extends BunqModel implements AnchorObjectInterface
{
    /**
     * Error constants.
     */
    const ERROR_NULL_FIELDS = 'All fields of an extended model or object are null.';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'device/%s';
    const ENDPOINT_URL_LISTING = 'device';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'Device';

    /**
     * @var DeviceServer
     */
    protected $deviceServer;

    /**
     * Get a single Device. A Device is either a DevicePhone or a DeviceServer.
     *
     * @param int $deviceId
     * @param string[] $customHeaders
     *
     * @return BunqResponseDevice
     */
    public static function get(int $deviceId, array $customHeaders = []): BunqResponseDevice
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$deviceId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseDevice::castFromBunqResponse(
            static::fromJson($responseRaw)
        );
    }

    /**
     * Get a collection of Devices. A Device is either a DevicePhone or a
     * DeviceServer.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseDeviceList
     */
    public static function listing( array $params = [], array $customHeaders = []): BunqResponseDeviceList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                []
            ),
            $params,
            $customHeaders
        );

        return BunqResponseDeviceList::castFromBunqResponse(
            static::fromJsonList($responseRaw)
        );
    }

    /**
     * @return DeviceServer
     */
    public function getDeviceServer()
    {
        return $this->deviceServer;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param DeviceServer $deviceServer
     */
    public function setDeviceServer($deviceServer)
    {
        $this->deviceServer = $deviceServer;
    }

    /**
     * @return BunqModel
     * @throws BunqException
     */
    public function getReferencedObject()
    {
        if (!is_null($this->deviceServer)) {
            return $this->deviceServer;
        }

        throw new BunqException(self::ERROR_NULL_FIELDS);
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->deviceServer)) {
            return false;
        }

        return true;
    }
}
