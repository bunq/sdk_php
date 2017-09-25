<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Avatar;
use bunq\Model\Generated\Object\Geolocation;
use bunq\Model\Generated\Object\NotificationFilter;
use bunq\Model\Generated\Object\TabTextWaitingScreen;

/**
 * CashRegisters act as an point of sale. They have a specific name and
 * avatar, and optionally a location. A CashRegister is used to create Tabs.
 * A CashRegister can have an QR code that links to one of its Tabs.
 *
 * @generated
 */
class CashRegister extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_NAME = 'name';
    const FIELD_STATUS = 'status';
    const FIELD_AVATAR_UUID = 'avatar_uuid';
    const FIELD_LOCATION = 'location';
    const FIELD_NOTIFICATION_FILTERS = 'notification_filters';
    const FIELD_TAB_TEXT_WAITING_SCREEN = 'tab_text_waiting_screen';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/cash-register';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/cash-register/%s';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/cash-register/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/cash-register';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'CashRegister';

    /**
     * The id of the created CashRegister.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the CashRegister's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the CashRegister's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The name of the CashRegister.
     *
     * @var string
     */
    protected $name;

    /**
     * The status of the CashRegister. Can be PENDING_APPROVAL, ACTIVE, DENIED
     * or CLOSED.
     *
     * @var string
     */
    protected $status;

    /**
     * The Avatar of the CashRegister.
     *
     * @var Avatar
     */
    protected $avatar;

    /**
     * The geolocation of the CashRegister. Can be null.
     *
     * @var Geolocation
     */
    protected $location;

    /**
     * The types of notifications that will result in a push notification or URL
     * callback for this CashRegister.
     *
     * @var NotificationFilter[]
     */
    protected $notificationFilters;

    /**
     * The tab text for waiting screen of CashRegister.
     *
     * @var TabTextWaitingScreen[]
     */
    protected $tabTextWaitingScreen;

    /**
     * Create a new CashRegister. Only an UserCompany can create a
     * CashRegisters. They need to be created with status PENDING_APPROVAL, an
     * bunq admin has to approve your CashRegister before you can use it. In the
     * sandbox testing environment an CashRegister will be automatically
     * approved immediately after creation.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(ApiContext $apiContext, array $requestMap, $userId, $monetaryAccountId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId, $monetaryAccountId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Get a specific CashRegister.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $cashRegisterId
     * @param string[] $customHeaders
     *
     * @return BunqResponseCashRegister
     */
    public static function get(ApiContext $apiContext, $userId, $monetaryAccountId, $cashRegisterId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $monetaryAccountId, $cashRegisterId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseCashRegister::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * Modify or close an existing CashRegister. You must set the status back to
     * PENDING_APPROVAL if you modify the name, avatar or location of a
     * CashRegister. To close a cash register put its status to CLOSED.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $cashRegisterId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(ApiContext $apiContext, array $requestMap, $userId, $monetaryAccountId, $cashRegisterId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [$userId, $monetaryAccountId, $cashRegisterId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Get a collection of CashRegister for a given user and monetary account.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseCashRegisterList
     */
    public static function listing(ApiContext $apiContext, $userId, $monetaryAccountId, array $params = [], array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $monetaryAccountId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseCashRegisterList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * The id of the created CashRegister.
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
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * The timestamp of the CashRegister's creation.
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
    public function setCreated(string $created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the CashRegister's last update.
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
    public function setUpdated(string $updated)
    {
        $this->updated = $updated;
    }

    /**
     * The name of the CashRegister.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * The status of the CashRegister. Can be PENDING_APPROVAL, ACTIVE, DENIED
     * or CLOSED.
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

    /**
     * The Avatar of the CashRegister.
     *
     * @return Avatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param Avatar $avatar
     */
    public function setAvatar(Avatar $avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * The geolocation of the CashRegister. Can be null.
     *
     * @return Geolocation
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param Geolocation $location
     */
    public function setLocation(Geolocation $location)
    {
        $this->location = $location;
    }

    /**
     * The types of notifications that will result in a push notification or URL
     * callback for this CashRegister.
     *
     * @return NotificationFilter[]
     */
    public function getNotificationFilters()
    {
        return $this->notificationFilters;
    }

    /**
     * @param NotificationFilter[] $notificationFilters
     */
    public function setNotificationFilters(array $notificationFilters)
    {
        $this->notificationFilters = $notificationFilters;
    }

    /**
     * The tab text for waiting screen of CashRegister.
     *
     * @return TabTextWaitingScreen[]
     */
    public function getTabTextWaitingScreen()
    {
        return $this->tabTextWaitingScreen;
    }

    /**
     * @param TabTextWaitingScreen[] $tabTextWaitingScreen
     */
    public function setTabTextWaitingScreen(array $tabTextWaitingScreen)
    {
        $this->tabTextWaitingScreen = $tabTextWaitingScreen;
    }
}
