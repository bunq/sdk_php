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
 * CashRegisters are virtual points of sale. They have a specific name and
 * avatar, and optionally, a location.<br/>With a CashRegister you can
 * create a Tab and then use a QR code to receive payments.<br/>Check out
 * our Quickstart example to learn how you can easily <a
 * href="/api/1/page/usecase-tab-payment">create Tab
 * payments</a>.<br/><br/>Notification filters can be set on a CashRegister
 * to receive callbacks. For more information check the <a
 * href="/api/1/page/callbacks">dedicated callbacks page</a>.
 *
 * @generated
 */
class CashRegister extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/cash-register';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/cash-register/%s';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/cash-register/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/cash-register';

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
    public static function create(ApiContext $apiContext, array $requestMap, int $userId, int $monetaryAccountId, array $customHeaders = []): BunqResponseInt
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
    public static function get(ApiContext $apiContext, int $userId, int $monetaryAccountId, int $cashRegisterId, array $customHeaders = []): BunqResponseCashRegister
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
    public static function update(ApiContext $apiContext, array $requestMap, int $userId, int $monetaryAccountId, int $cashRegisterId, array $customHeaders = []): BunqResponseInt
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
    public static function listing(ApiContext $apiContext, int $userId, int $monetaryAccountId, array $params = [], array $customHeaders = []): BunqResponseCashRegisterList
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
    public function setId($id)
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
    public function setCreated($created)
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
    public function setUpdated($updated)
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
    public function setName($name)
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
    public function setStatus($status)
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
    public function setAvatar($avatar)
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
    public function setLocation($location)
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
    public function setNotificationFilters($notificationFilters)
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
    public function setTabTextWaitingScreen($tabTextWaitingScreen)
    {
        $this->tabTextWaitingScreen = $tabTextWaitingScreen;
    }

    /**
     * @return bool
     */
    public function areAllFieldsNull()
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

        if (!is_null($this->name)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->avatar)) {
            return false;
        }

        if (!is_null($this->location)) {
            return false;
        }

        if (!is_null($this->notificationFilters)) {
            return false;
        }

        if (!is_null($this->tabTextWaitingScreen)) {
            return false;
        }

        return true;
    }
}
