<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Avatar;
use bunq\Model\Generated\Object\Geolocation;
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
    const FIELD_TAB_TEXT_WAITING_SCREEN = 'tab_text_waiting_screen';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'CashRegister';

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
     * The tab text for waiting screen of CashRegister.
     *
     * @var TabTextWaitingScreen[]
     */
    protected $tabTextWaitingScreen;

    /**
     * The name of the CashRegister. Must be unique for this MonetaryAccount.
     *
     * @var string
     */
    protected $nameFieldForRequest;

    /**
     * The status of the CashRegister. Can only be created or updated with
     * PENDING_APPROVAL or CLOSED.
     *
     * @var string
     */
    protected $statusFieldForRequest;

    /**
     * The UUID of the avatar of the CashRegister. Use the calls
     * /attachment-public and /avatar to create a new Avatar and get its UUID.
     *
     * @var string
     */
    protected $avatarUuidFieldForRequest;

    /**
     * The geolocation of the CashRegister.
     *
     * @var Geolocation|null
     */
    protected $locationFieldForRequest;

    /**
     * The tab text for waiting screen of CashRegister.
     *
     * @var TabTextWaitingScreen[]|null
     */
    protected $tabTextWaitingScreenFieldForRequest;

    /**
     * @param string $name The name of the CashRegister. Must be unique for this
     * MonetaryAccount.
     * @param string $status The status of the CashRegister. Can only be created
     * or updated with PENDING_APPROVAL or CLOSED.
     * @param string $avatarUuid The UUID of the avatar of the CashRegister. Use
     * the calls /attachment-public and /avatar to create a new Avatar and get
     * its UUID.
     * @param Geolocation|null $location The geolocation of the CashRegister.
     * @param TabTextWaitingScreen[]|null $tabTextWaitingScreen The tab text for
     * waiting screen of CashRegister.
     */
    public function __construct(
        string $name,
        string $status,
        string $avatarUuid,
        Geolocation $location = null,
        array $tabTextWaitingScreen = null
    ) {
        $this->nameFieldForRequest = $name;
        $this->statusFieldForRequest = $status;
        $this->avatarUuidFieldForRequest = $avatarUuid;
        $this->locationFieldForRequest = $location;
        $this->tabTextWaitingScreenFieldForRequest = $tabTextWaitingScreen;
    }

    /**
     * Create a new CashRegister. Only an UserCompany can create a
     * CashRegisters. They need to be created with status PENDING_APPROVAL, an
     * bunq admin has to approve your CashRegister before you can use it. In the
     * sandbox testing environment an CashRegister will be automatically
     * approved immediately after creation.
     *
     * @param string $name The name of the CashRegister. Must be unique for this
     * MonetaryAccount.
     * @param string $status The status of the CashRegister. Can only be created
     * or updated with PENDING_APPROVAL or CLOSED.
     * @param string $avatarUuid The UUID of the avatar of the CashRegister. Use
     * the calls /attachment-public and /avatar to create a new Avatar and get
     * its UUID.
     * @param int|null $monetaryAccountId
     * @param Geolocation|null $location The geolocation of the CashRegister.
     * @param TabTextWaitingScreen[]|null $tabTextWaitingScreen The tab text for
     * waiting screen of CashRegister.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        string $name,
        string $status,
        string $avatarUuid,
        int $monetaryAccountId = null,
        Geolocation $location = null,
        array $tabTextWaitingScreen = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            [
                self::FIELD_NAME => $name,
                self::FIELD_STATUS => $status,
                self::FIELD_AVATAR_UUID => $avatarUuid,
                self::FIELD_LOCATION => $location,
                self::FIELD_TAB_TEXT_WAITING_SCREEN => $tabTextWaitingScreen,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Get a specific CashRegister.
     *
     * @param int $cashRegisterId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseCashRegister
     */
    public static function get(
        int $cashRegisterId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseCashRegister {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $cashRegisterId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseCashRegister::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Modify or close an existing CashRegister. You must set the status back to
     * PENDING_APPROVAL if you modify the name, avatar or location of a
     * CashRegister. To close a cash register put its status to CLOSED.
     *
     * @param int $cashRegisterId
     * @param int|null $monetaryAccountId
     * @param string|null $name The name of the CashRegister. Must be unique for
     * this MonetaryAccount.
     * @param string|null $status The status of the CashRegister. Can only be
     * created or updated with PENDING_APPROVAL or CLOSED.
     * @param string|null $avatarUuid The UUID of the avatar of the
     * CashRegister. Use the calls /attachment-public and /avatar to create a
     * new Avatar and get its UUID.
     * @param Geolocation|null $location The geolocation of the CashRegister.
     * @param TabTextWaitingScreen[]|null $tabTextWaitingScreen The tab text for
     * waiting screen of CashRegister.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(
        int $cashRegisterId,
        int $monetaryAccountId = null,
        string $name = null,
        string $status = null,
        string $avatarUuid = null,
        Geolocation $location = null,
        array $tabTextWaitingScreen = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $cashRegisterId]
            ),
            [
                self::FIELD_NAME => $name,
                self::FIELD_STATUS => $status,
                self::FIELD_AVATAR_UUID => $avatarUuid,
                self::FIELD_LOCATION => $location,
                self::FIELD_TAB_TEXT_WAITING_SCREEN => $tabTextWaitingScreen,
            ],
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
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseCashRegisterList
     */
    public static function listing(
        int $monetaryAccountId = null,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseCashRegisterList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseCashRegisterList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setLocation($location)
    {
        $this->location = $location;
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setTabTextWaitingScreen($tabTextWaitingScreen)
    {
        $this->tabTextWaitingScreen = $tabTextWaitingScreen;
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

        if (!is_null($this->tabTextWaitingScreen)) {
            return false;
        }

        return true;
    }
}
