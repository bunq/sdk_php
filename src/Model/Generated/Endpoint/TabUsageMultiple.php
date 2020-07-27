<?php
namespace bunq\Model\Generated\Endpoint;

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
     * @var TabVisibility|null
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
     * The description of the TabUsageMultiple. Maximum 9000 characters. Field
     * is required but can be an empty string.
     *
     * @var string
     */
    protected $descriptionFieldForRequest;

    /**
     * The status of the TabUsageMultiple. On creation the status must be set to
     * OPEN. You can change the status from OPEN to PAYABLE. If the
     * TabUsageMultiple gets paid the status will remain PAYABLE.
     *
     * @var string
     */
    protected $statusFieldForRequest;

    /**
     * The total amount of the Tab. Must be a positive amount. As long as the
     * tab has the status OPEN you can change the total amount. This amount is
     * not affected by the amounts of the TabItems. However, if you've created
     * any TabItems for a Tab the sum of the amounts of these items must be
     * equal to the total_amount of the Tab when you change its status to
     * PAYABLE
     *
     * @var Amount
     */
    protected $amountTotalFieldForRequest;

    /**
     * [DEPRECATED] Whether or not a higher amount can be paid.
     *
     * @var bool|null
     */
    protected $allowAmountHigherFieldForRequest;

    /**
     * [DEPRECATED] Whether or not a lower amount can be paid.
     *
     * @var bool|null
     */
    protected $allowAmountLowerFieldForRequest;

    /**
     * [DEPRECATED] Whether or not the user paying the Tab should be asked if he
     * wants to give a tip. When want_tip is set to true, allow_amount_higher
     * must also be set to true and allow_amount_lower must be false.
     *
     * @var bool|null
     */
    protected $wantTipFieldForRequest;

    /**
     * The minimum age of the user paying the Tab.
     *
     * @var int|null
     */
    protected $minimumAgeFieldForRequest;

    /**
     * Whether a billing and shipping address must be provided when paying the
     * Tab. Possible values are: BILLING, SHIPPING, BILLING_SHIPPING, NONE,
     * OPTIONAL. Default is NONE.
     *
     * @var string|null
     */
    protected $requireAddressFieldForRequest;

    /**
     * The URL which the user is sent to after paying the Tab.
     *
     * @var string|null
     */
    protected $redirectUrlFieldForRequest;

    /**
     * The visibility of a Tab. A Tab can be visible trough NearPay, the QR code
     * of the CashRegister and its own QR code.
     *
     * @var TabVisibility|null
     */
    protected $visibilityFieldForRequest;

    /**
     * The moment when this Tab expires. Can be at most 365 days into the
     * future.
     *
     * @var string|null
     */
    protected $expirationFieldForRequest;

    /**
     * An array of attachments that describe the tab. Uploaded through the POST
     * /user/{userid}/attachment-tab endpoint.
     *
     * @var BunqId[]|null
     */
    protected $tabAttachmentFieldForRequest;

    /**
     * @param string $description The description of the TabUsageMultiple.
     * Maximum 9000 characters. Field is required but can be an empty string.
     * @param string $status The status of the TabUsageMultiple. On creation the
     * status must be set to OPEN. You can change the status from OPEN to
     * PAYABLE. If the TabUsageMultiple gets paid the status will remain
     * PAYABLE.
     * @param Amount $amountTotal The total amount of the Tab. Must be a
     * positive amount. As long as the tab has the status OPEN you can change
     * the total amount. This amount is not affected by the amounts of the
     * TabItems. However, if you've created any TabItems for a Tab the sum of
     * the amounts of these items must be equal to the total_amount of the Tab
     * when you change its status to PAYABLE
     * @param bool|null $allowAmountHigher [DEPRECATED] Whether or not a higher
     * amount can be paid.
     * @param bool|null $allowAmountLower [DEPRECATED] Whether or not a lower
     * amount can be paid.
     * @param bool|null $wantTip [DEPRECATED] Whether or not the user paying the
     * Tab should be asked if he wants to give a tip. When want_tip is set to
     * true, allow_amount_higher must also be set to true and allow_amount_lower
     * must be false.
     * @param int|null $minimumAge The minimum age of the user paying the Tab.
     * @param string|null $requireAddress Whether a billing and shipping address
     * must be provided when paying the Tab. Possible values are: BILLING,
     * SHIPPING, BILLING_SHIPPING, NONE, OPTIONAL. Default is NONE.
     * @param string|null $redirectUrl The URL which the user is sent to after
     * paying the Tab.
     * @param TabVisibility|null $visibility The visibility of a Tab. A Tab can
     * be visible trough NearPay, the QR code of the CashRegister and its own QR
     * code.
     * @param string|null $expiration The moment when this Tab expires. Can be
     * at most 365 days into the future.
     * @param BunqId[]|null $tabAttachment An array of attachments that describe
     * the tab. Uploaded through the POST /user/{userid}/attachment-tab
     * endpoint.
     */
    public function __construct(
        string $description,
        string $status,
        Amount $amountTotal,
        bool $allowAmountHigher = null,
        bool $allowAmountLower = null,
        bool $wantTip = null,
        int $minimumAge = null,
        string $requireAddress = null,
        string $redirectUrl = null,
        TabVisibility $visibility = null,
        string $expiration = null,
        array $tabAttachment = null
    ) {
        $this->descriptionFieldForRequest = $description;
        $this->statusFieldForRequest = $status;
        $this->amountTotalFieldForRequest = $amountTotal;
        $this->allowAmountHigherFieldForRequest = $allowAmountHigher;
        $this->allowAmountLowerFieldForRequest = $allowAmountLower;
        $this->wantTipFieldForRequest = $wantTip;
        $this->minimumAgeFieldForRequest = $minimumAge;
        $this->requireAddressFieldForRequest = $requireAddress;
        $this->redirectUrlFieldForRequest = $redirectUrl;
        $this->visibilityFieldForRequest = $visibility;
        $this->expirationFieldForRequest = $expiration;
        $this->tabAttachmentFieldForRequest = $tabAttachment;
    }

    /**
     * Create a TabUsageMultiple. On creation the status must be set to OPEN
     *
     * @param int $cashRegisterId
     * @param string $description The description of the TabUsageMultiple.
     * Maximum 9000 characters. Field is required but can be an empty string.
     * @param string $status The status of the TabUsageMultiple. On creation the
     * status must be set to OPEN. You can change the status from OPEN to
     * PAYABLE. If the TabUsageMultiple gets paid the status will remain
     * PAYABLE.
     * @param Amount $amountTotal The total amount of the Tab. Must be a
     * positive amount. As long as the tab has the status OPEN you can change
     * the total amount. This amount is not affected by the amounts of the
     * TabItems. However, if you've created any TabItems for a Tab the sum of
     * the amounts of these items must be equal to the total_amount of the Tab
     * when you change its status to PAYABLE
     * @param int|null $monetaryAccountId
     * @param bool|null $allowAmountHigher [DEPRECATED] Whether or not a higher
     * amount can be paid.
     * @param bool|null $allowAmountLower [DEPRECATED] Whether or not a lower
     * amount can be paid.
     * @param bool|null $wantTip [DEPRECATED] Whether or not the user paying the
     * Tab should be asked if he wants to give a tip. When want_tip is set to
     * true, allow_amount_higher must also be set to true and allow_amount_lower
     * must be false.
     * @param int|null $minimumAge The minimum age of the user paying the Tab.
     * @param string|null $requireAddress Whether a billing and shipping address
     * must be provided when paying the Tab. Possible values are: BILLING,
     * SHIPPING, BILLING_SHIPPING, NONE, OPTIONAL. Default is NONE.
     * @param string|null $redirectUrl The URL which the user is sent to after
     * paying the Tab.
     * @param TabVisibility|null $visibility The visibility of a Tab. A Tab can
     * be visible trough NearPay, the QR code of the CashRegister and its own QR
     * code.
     * @param string|null $expiration The moment when this Tab expires. Can be
     * at most 365 days into the future.
     * @param BunqId[]|null $tabAttachment An array of attachments that describe
     * the tab. Uploaded through the POST /user/{userid}/attachment-tab
     * endpoint.
     * @param string[] $customHeaders
     *
     * @return BunqResponseString
     */
    public static function create(
        int $cashRegisterId,
        string $description,
        string $status,
        Amount $amountTotal,
        int $monetaryAccountId = null,
        bool $allowAmountHigher = null,
        bool $allowAmountLower = null,
        bool $wantTip = null,
        int $minimumAge = null,
        string $requireAddress = null,
        string $redirectUrl = null,
        TabVisibility $visibility = null,
        string $expiration = null,
        array $tabAttachment = null,
        array $customHeaders = []
    ): BunqResponseString {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $cashRegisterId]
            ),
            [
                self::FIELD_DESCRIPTION => $description,
                self::FIELD_STATUS => $status,
                self::FIELD_AMOUNT_TOTAL => $amountTotal,
                self::FIELD_ALLOW_AMOUNT_HIGHER => $allowAmountHigher,
                self::FIELD_ALLOW_AMOUNT_LOWER => $allowAmountLower,
                self::FIELD_WANT_TIP => $wantTip,
                self::FIELD_MINIMUM_AGE => $minimumAge,
                self::FIELD_REQUIRE_ADDRESS => $requireAddress,
                self::FIELD_REDIRECT_URL => $redirectUrl,
                self::FIELD_VISIBILITY => $visibility,
                self::FIELD_EXPIRATION => $expiration,
                self::FIELD_TAB_ATTACHMENT => $tabAttachment,
            ],
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
     * @param int $cashRegisterId
     * @param string $tabUsageMultipleUuid
     * @param int|null $monetaryAccountId
     * @param string|null $status The status of the TabUsageMultiple. On
     * creation the status must be set to OPEN. You can change the status from
     * OPEN to PAYABLE. If the TabUsageMultiple gets paid the status will remain
     * PAYABLE.
     * @param Amount|null $amountTotal The total amount of the Tab. Must be a
     * positive amount. As long as the tab has the status OPEN you can change
     * the total amount. This amount is not affected by the amounts of the
     * TabItems. However, if you've created any TabItems for a Tab the sum of
     * the amounts of these items must be equal to the total_amount of the Tab
     * when you change its status to PAYABLE
     * @param TabVisibility|null $visibility The visibility of a Tab. A Tab can
     * be visible trough NearPay, the QR code of the CashRegister and its own QR
     * code.
     * @param string|null $expiration The moment when this Tab expires. Can be
     * at most 365 days into the future.
     * @param BunqId[]|null $tabAttachment An array of attachments that describe
     * the tab. Uploaded through the POST /user/{userid}/attachment-tab
     * endpoint.
     * @param string[] $customHeaders
     *
     * @return BunqResponseString
     */
    public static function update(
        int $cashRegisterId,
        string $tabUsageMultipleUuid,
        int $monetaryAccountId = null,
        string $status = null,
        Amount $amountTotal = null,
        TabVisibility $visibility = null,
        string $expiration = null,
        array $tabAttachment = null,
        array $customHeaders = []
    ): BunqResponseString {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $cashRegisterId,
                    $tabUsageMultipleUuid,
                ]
            ),
            [
                self::FIELD_STATUS => $status,
                self::FIELD_AMOUNT_TOTAL => $amountTotal,
                self::FIELD_VISIBILITY => $visibility,
                self::FIELD_EXPIRATION => $expiration,
                self::FIELD_TAB_ATTACHMENT => $tabAttachment,
            ],
            $customHeaders
        );

        return BunqResponseString::castFromBunqResponse(
            static::processForUuid($responseRaw)
        );
    }

    /**
     * Close a specific TabUsageMultiple.
     *
     * @param string[] $customHeaders
     * @param int $cashRegisterId
     * @param string $tabUsageMultipleUuid
     *
     * @return BunqResponseNull
     */
    public static function delete(
        int $cashRegisterId,
        string $tabUsageMultipleUuid,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseNull {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->delete(
            vsprintf(
                self::ENDPOINT_URL_DELETE,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $cashRegisterId,
                    $tabUsageMultipleUuid,
                ]
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
     * @param int $cashRegisterId
     * @param string $tabUsageMultipleUuid
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseTabUsageMultiple
     */
    public static function get(
        int $cashRegisterId,
        string $tabUsageMultipleUuid,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseTabUsageMultiple {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $cashRegisterId,
                    $tabUsageMultipleUuid,
                ]
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
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $cashRegisterId
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseTabUsageMultipleList
     */
    public static function listing(
        int $cashRegisterId,
        int $monetaryAccountId = null,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseTabUsageMultipleList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $cashRegisterId]
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
