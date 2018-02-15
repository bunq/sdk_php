<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\BunqId;
use bunq\Model\Generated\Object\Geolocation;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
use bunq\Model\Generated\Object\TabVisibility;

/**
 * TabUsageMultiple is a Tab that can be paid by multiple users. Just like
 * the TabUsageSingle it is created with the status OPEN, the visibility can
 * be defined in the visibility object and TabItems can be added as long as
 * the status is OPEN. When you change the status to PAYABLE any bunq user
 * can use the tab to make a payment to your account. After an user has paid
 * your TabUsageMultiple the status will not change, it will stay PAYABLE.
 * For example: you can create a TabUsageMultiple with require_address set
 * to true. Now show the QR code of this Tab on your webshop, and any bunq
 * user can instantly pay and order something from your webshop.
 *
 * @generated
 */
class TabUsageMultiple extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/cash-register/%s/tab-usage-multiple';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/cash-register/%s/tab-usage-multiple/%s';
    const ENDPOINT_URL_DELETE = 'user/%s/monetary-account/%s/cash-register/%s/tab-usage-multiple/%s';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/cash-register/%s/tab-usage-multiple/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/cash-register/%s/tab-usage-multiple';

    /**
     * Field constants.
     */
    const FIELD_DESCRIPTION = 'description';
    const FIELD_STATUS = 'status';
    const FIELD_AMOUNT_TOTAL = 'amount_total';
    const FIELD_ALLOW_AMOUNT_HIGHER = 'allow_amount_higher';
    const FIELD_ALLOW_AMOUNT_LOWER = 'allow_amount_lower';
    const FIELD_WANT_TIP = 'want_tip';
    const FIELD_MINIMUM_AGE = 'minimum_age';
    const FIELD_REQUIRE_ADDRESS = 'require_address';
    const FIELD_REDIRECT_URL = 'redirect_url';
    const FIELD_VISIBILITY = 'visibility';
    const FIELD_EXPIRATION = 'expiration';
    const FIELD_TAB_ATTACHMENT = 'tab_attachment';

    /**
     * Object type.
     */
    const OBJECT_TYPE_POST = 'Uuid';
    const OBJECT_TYPE_PUT = 'Uuid';
    const OBJECT_TYPE_GET = 'TabUsageMultiple';

    /**
     * The uuid of the created TabUsageMultiple.
     *
     * @var string
     */
    protected $uuid;

    /**
     * The timestamp of the Tab's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the Tab's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The description of the TabUsageMultiple. Maximum 9000 characters.
     *
     * @var string
     */
    protected $description;

    /**
     * The status of the Tab. Can be OPEN, PAYABLE or CLOSED.
     *
     * @var string
     */
    protected $status;

    /**
     * The total amount of the Tab.
     *
     * @var Amount
     */
    protected $amountTotal;

    /**
     * The token used to redirect mobile devices directly to the bunq app.
     * Because they can't scan a QR code.
     *
     * @var string
     */
    protected $qrCodeToken;

    /**
     * The URL redirecting user to the tab payment in the bunq app. Only works
     * on mobile devices.
     *
     * @var string
     */
    protected $tabUrl;

    /**
     * The visibility of a Tab. A Tab can be visible trough NearPay, the QR code
     * of the CashRegister and its own QR code.
     *
     * @var TabVisibility
     */
    protected $visibility;

    /**
     * The minimum age of the user paying the Tab.
     *
     * @var bool
     */
    protected $minimumAge;

    /**
     * Whether or not an billing and shipping address must be provided when
     * paying the Tab.
     *
     * @var string
     */
    protected $requireAddress;

    /**
     * The URL which the user is sent to after paying the Tab.
     *
     * @var string
     */
    protected $redirectUrl;

    /**
     * The moment when this Tab expires.
     *
     * @var string
     */
    protected $expiration;

    /**
     * The alias of the party that owns this tab.
     *
     * @var LabelMonetaryAccount
     */
    protected $alias;

    /**
     * The location of the cash register that created this tab.
     *
     * @var Geolocation
     */
    protected $cashRegisterLocation;

    /**
     * The tab items of this tab.
     *
     * @var TabItem[]
     */
    protected $tabItem;

    /**
     * An array of attachments that describe the tab. Viewable through the GET
     * /tab/{tabid}/attachment/{attachmentid}/content endpoint.
     *
     * @var BunqId[]
     */
    protected $tabAttachment;

    /**
     * Create a TabUsageMultiple. On creation the status must be set to OPEN
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $cashRegisterId
     * @param string[] $customHeaders
     *
     * @return BunqResponseString
     */
    public static function create(ApiContext $apiContext, array $requestMap, int $userId, int $monetaryAccountId, int $cashRegisterId, array $customHeaders = []): BunqResponseString
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId, $monetaryAccountId, $cashRegisterId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseString::castFromBunqResponse(
            static::processForUuid($responseRaw)
        );
    }

    /**
     * Modify a specific TabUsageMultiple. You can change the amount_total,
     * status and visibility. Once you change the status to PAYABLE the
     * TabUsageMultiple will expire after a year (default). If you've created
     * any TabItems for a Tab the sum of the amounts of these items must be
     * equal to the total_amount of the Tab when you change its status to
     * PAYABLE.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $cashRegisterId
     * @param string $tabUsageMultipleUuid
     * @param string[] $customHeaders
     *
     * @return BunqResponseString
     */
    public static function update(ApiContext $apiContext, array $requestMap, int $userId, int $monetaryAccountId, int $cashRegisterId, string $tabUsageMultipleUuid, array $customHeaders = []): BunqResponseString
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [$userId, $monetaryAccountId, $cashRegisterId, $tabUsageMultipleUuid]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseString::castFromBunqResponse(
            static::processForUuid($responseRaw)
        );
    }

    /**
     * Close a specific TabUsageMultiple.
     *
     * @param ApiContext $apiContext
     * @param string[] $customHeaders
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $cashRegisterId
     * @param string $tabUsageMultipleUuid
     *
     * @return BunqResponseNull
     */
    public static function delete(ApiContext $apiContext, int $userId, int $monetaryAccountId, int $cashRegisterId, string $tabUsageMultipleUuid, array $customHeaders = []): BunqResponseNull
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->delete(
            vsprintf(
                self::ENDPOINT_URL_DELETE,
                [$userId, $monetaryAccountId, $cashRegisterId, $tabUsageMultipleUuid]
            ),
            $customHeaders
        );

        return BunqResponseNull::castFromBunqResponse(
            new BunqResponse(null, $responseRaw->getHeaders())
        );
    }

    /**
     * Get a specific TabUsageMultiple.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $cashRegisterId
     * @param string $tabUsageMultipleUuid
     * @param string[] $customHeaders
     *
     * @return BunqResponseTabUsageMultiple
     */
    public static function get(ApiContext $apiContext, int $userId, int $monetaryAccountId, int $cashRegisterId, string $tabUsageMultipleUuid, array $customHeaders = []): BunqResponseTabUsageMultiple
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $monetaryAccountId, $cashRegisterId, $tabUsageMultipleUuid]
            ),
            [],
            $customHeaders
        );

        return BunqResponseTabUsageMultiple::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Get a collection of TabUsageMultiple.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $cashRegisterId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseTabUsageMultipleList
     */
    public static function listing(ApiContext $apiContext, int $userId, int $monetaryAccountId, int $cashRegisterId, array $params = [], array $customHeaders = []): BunqResponseTabUsageMultipleList
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $monetaryAccountId, $cashRegisterId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseTabUsageMultipleList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The uuid of the created TabUsageMultiple.
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * The timestamp of the Tab's creation.
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
     * The timestamp of the Tab's last update.
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
     * The description of the TabUsageMultiple. Maximum 9000 characters.
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
     * The status of the Tab. Can be OPEN, PAYABLE or CLOSED.
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
     * The total amount of the Tab.
     *
     * @return Amount
     */
    public function getAmountTotal()
    {
        return $this->amountTotal;
    }

    /**
     * @param Amount $amountTotal
     */
    public function setAmountTotal($amountTotal)
    {
        $this->amountTotal = $amountTotal;
    }

    /**
     * The token used to redirect mobile devices directly to the bunq app.
     * Because they can't scan a QR code.
     *
     * @return string
     */
    public function getQrCodeToken()
    {
        return $this->qrCodeToken;
    }

    /**
     * @param string $qrCodeToken
     */
    public function setQrCodeToken($qrCodeToken)
    {
        $this->qrCodeToken = $qrCodeToken;
    }

    /**
     * The URL redirecting user to the tab payment in the bunq app. Only works
     * on mobile devices.
     *
     * @return string
     */
    public function getTabUrl()
    {
        return $this->tabUrl;
    }

    /**
     * @param string $tabUrl
     */
    public function setTabUrl($tabUrl)
    {
        $this->tabUrl = $tabUrl;
    }

    /**
     * The visibility of a Tab. A Tab can be visible trough NearPay, the QR code
     * of the CashRegister and its own QR code.
     *
     * @return TabVisibility
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @param TabVisibility $visibility
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    }

    /**
     * The minimum age of the user paying the Tab.
     *
     * @return bool
     */
    public function getMinimumAge()
    {
        return $this->minimumAge;
    }

    /**
     * @param bool $minimumAge
     */
    public function setMinimumAge($minimumAge)
    {
        $this->minimumAge = $minimumAge;
    }

    /**
     * Whether or not an billing and shipping address must be provided when
     * paying the Tab.
     *
     * @return string
     */
    public function getRequireAddress()
    {
        return $this->requireAddress;
    }

    /**
     * @param string $requireAddress
     */
    public function setRequireAddress($requireAddress)
    {
        $this->requireAddress = $requireAddress;
    }

    /**
     * The URL which the user is sent to after paying the Tab.
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param string $redirectUrl
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }

    /**
     * The moment when this Tab expires.
     *
     * @return string
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * @param string $expiration
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
    }

    /**
     * The alias of the party that owns this tab.
     *
     * @return LabelMonetaryAccount
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param LabelMonetaryAccount $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * The location of the cash register that created this tab.
     *
     * @return Geolocation
     */
    public function getCashRegisterLocation()
    {
        return $this->cashRegisterLocation;
    }

    /**
     * @param Geolocation $cashRegisterLocation
     */
    public function setCashRegisterLocation($cashRegisterLocation)
    {
        $this->cashRegisterLocation = $cashRegisterLocation;
    }

    /**
     * The tab items of this tab.
     *
     * @return TabItem[]
     */
    public function getTabItem()
    {
        return $this->tabItem;
    }

    /**
     * @param TabItem[] $tabItem
     */
    public function setTabItem($tabItem)
    {
        $this->tabItem = $tabItem;
    }

    /**
     * An array of attachments that describe the tab. Viewable through the GET
     * /tab/{tabid}/attachment/{attachmentid}/content endpoint.
     *
     * @return BunqId[]
     */
    public function getTabAttachment()
    {
        return $this->tabAttachment;
    }

    /**
     * @param BunqId[] $tabAttachment
     */
    public function setTabAttachment($tabAttachment)
    {
        $this->tabAttachment = $tabAttachment;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->uuid)) {
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

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->amountTotal)) {
            return false;
        }

        if (!is_null($this->qrCodeToken)) {
            return false;
        }

        if (!is_null($this->tabUrl)) {
            return false;
        }

        if (!is_null($this->visibility)) {
            return false;
        }

        if (!is_null($this->minimumAge)) {
            return false;
        }

        if (!is_null($this->requireAddress)) {
            return false;
        }

        if (!is_null($this->redirectUrl)) {
            return false;
        }

        if (!is_null($this->expiration)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->cashRegisterLocation)) {
            return false;
        }

        if (!is_null($this->tabItem)) {
            return false;
        }

        if (!is_null($this->tabAttachment)) {
            return false;
        }

        return true;
    }
}
