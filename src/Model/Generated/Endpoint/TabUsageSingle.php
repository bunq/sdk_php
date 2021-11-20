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
 * TabUsageSingle is a Tab that can be paid once. The TabUsageSingle is
 * created with the status OPEN. Optionally you can add TabItems to the tab
 * using /tab/_/tab-item, TabItems don't affect the total amount of the Tab.
 * However, if you've created any TabItems for a Tab the sum of the amounts
 * of these items must be equal to the total_amount of the Tab when you
 * change its status to WAITING_FOR_PAYMENT. By setting the visibility
 * object a TabUsageSingle with the status OPEN or WAITING_FOR_PAYMENT can
 * be made visible to customers. As soon as a customer pays the
 * TabUsageSingle its status changes to PAID, and it can't be paid again.
 *
 * @generated
 */
class TabUsageSingle extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/cash-register/%s/tab-usage-single';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/cash-register/%s/tab-usage-single/%s';
    const ENDPOINT_URL_DELETE = 'user/%s/monetary-account/%s/cash-register/%s/tab-usage-single/%s';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/cash-register/%s/tab-usage-single/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/cash-register/%s/tab-usage-single';

    /**
     * Field constants.
     */
    const FIELD_MERCHANT_REFERENCE = 'merchant_reference';
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
    const OBJECT_TYPE_GET = 'TabUsageSingle';

    /**
     * The uuid of the created TabUsageSingle.
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
     * The merchant reference of the Tab, as defined by the owner.
     *
     * @var string
     */
    protected $merchantReference;

    /**
     * The description of the TabUsageMultiple. Maximum 9000 characters.
     *
     * @var string
     */
    protected $description;

    /**
     * The status of the Tab. Can be OPEN, WAITING_FOR_PAYMENT, PAID or
     * CANCELED.
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
     * The amount that has been paid for this Tab.
     *
     * @var Amount
     */
    protected $amountPaid;

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
     * An array of attachments that describe the tab. Uploaded through the POST
     * /user/{userid}/attachment-tab endpoint.
     *
     * @var BunqId[]
     */
    protected $tabAttachment;

    /**
     * The reference of the Tab, as defined by the owner. This reference will be
     * set for any payment that is generated by this tab. Must be unique among
     * all the owner's tabs for the used monetary account.
     *
     * @var string|null
     */
    protected $merchantReferenceFieldForRequest;

    /**
     * The description of the Tab. Maximum 9000 characters. Field is required
     * but can be an empty string.
     *
     * @var string
     */
    protected $descriptionFieldForRequest;

    /**
     * The status of the Tab. On creation the status must be set to OPEN. You
     * can change the status from OPEN to WAITING_FOR_PAYMENT.
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
     * WAITING_FOR_PAYMENT.
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
     * The moment when this Tab expires. Can be at most 1 hour into the future.
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
     * @param string $description The description of the Tab. Maximum 9000
     * characters. Field is required but can be an empty string.
     * @param string $status The status of the Tab. On creation the status must
     * be set to OPEN. You can change the status from OPEN to
     * WAITING_FOR_PAYMENT.
     * @param Amount $amountTotal The total amount of the Tab. Must be a
     * positive amount. As long as the tab has the status OPEN you can change
     * the total amount. This amount is not affected by the amounts of the
     * TabItems. However, if you've created any TabItems for a Tab the sum of
     * the amounts of these items must be equal to the total_amount of the Tab
     * when you change its status to WAITING_FOR_PAYMENT.
     * @param string|null $merchantReference The reference of the Tab, as
     * defined by the owner. This reference will be set for any payment that is
     * generated by this tab. Must be unique among all the owner's tabs for the
     * used monetary account.
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
     * at most 1 hour into the future.
     * @param BunqId[]|null $tabAttachment An array of attachments that describe
     * the tab. Uploaded through the POST /user/{userid}/attachment-tab
     * endpoint.
     */
    public function __construct(string  $description, string  $status, Amount  $amountTotal, string  $merchantReference = null, bool  $allowAmountHigher = null, bool  $allowAmountLower = null, bool  $wantTip = null, int  $minimumAge = null, string  $requireAddress = null, string  $redirectUrl = null, TabVisibility  $visibility = null, string  $expiration = null, array  $tabAttachment = null)
    {
        $this->merchantReferenceFieldForRequest = $merchantReference;
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
     * Create a TabUsageSingle. The initial status must be OPEN
     *
     * @param int $cashRegisterId
     * @param string $description The description of the Tab. Maximum 9000
     * characters. Field is required but can be an empty string.
     * @param string $status The status of the Tab. On creation the status must
     * be set to OPEN. You can change the status from OPEN to
     * WAITING_FOR_PAYMENT.
     * @param Amount $amountTotal The total amount of the Tab. Must be a
     * positive amount. As long as the tab has the status OPEN you can change
     * the total amount. This amount is not affected by the amounts of the
     * TabItems. However, if you've created any TabItems for a Tab the sum of
     * the amounts of these items must be equal to the total_amount of the Tab
     * when you change its status to WAITING_FOR_PAYMENT.
     * @param int|null $monetaryAccountId
     * @param string|null $merchantReference The reference of the Tab, as
     * defined by the owner. This reference will be set for any payment that is
     * generated by this tab. Must be unique among all the owner's tabs for the
     * used monetary account.
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
     * at most 1 hour into the future.
     * @param BunqId[]|null $tabAttachment An array of attachments that describe
     * the tab. Uploaded through the POST /user/{userid}/attachment-tab
     * endpoint.
     * @param string[] $customHeaders
     *
     * @return BunqResponseString
     */
    public static function create(int $cashRegisterId, string  $description, string  $status, Amount  $amountTotal, int $monetaryAccountId = null, string  $merchantReference = null, bool  $allowAmountHigher = null, bool  $allowAmountLower = null, bool  $wantTip = null, int  $minimumAge = null, string  $requireAddress = null, string  $redirectUrl = null, TabVisibility  $visibility = null, string  $expiration = null, array  $tabAttachment = null, array $customHeaders = []): BunqResponseString
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $cashRegisterId]
            ),
            [self::FIELD_MERCHANT_REFERENCE => $merchantReference,
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
self::FIELD_TAB_ATTACHMENT => $tabAttachment],
            $customHeaders
        );

        return BunqResponseString::castFromBunqResponse(
            static::processForUuid($responseRaw)
        );
    }

    /**
     * Modify a specific TabUsageSingle. You can change the amount_total, status
     * and visibility. Once you change the status to WAITING_FOR_PAYMENT the
     * TabUsageSingle will expire after 5 minutes (default) or up to 1 hour if a
     * different expiration is provided.
     *
     * @param int $cashRegisterId
     * @param string $tabUsageSingleUuid
     * @param int|null $monetaryAccountId
     * @param string|null $status The status of the Tab. On creation the status
     * must be set to OPEN. You can change the status from OPEN to
     * WAITING_FOR_PAYMENT.
     * @param Amount|null $amountTotal The total amount of the Tab. Must be a
     * positive amount. As long as the tab has the status OPEN you can change
     * the total amount. This amount is not affected by the amounts of the
     * TabItems. However, if you've created any TabItems for a Tab the sum of
     * the amounts of these items must be equal to the total_amount of the Tab
     * when you change its status to WAITING_FOR_PAYMENT.
     * @param TabVisibility|null $visibility The visibility of a Tab. A Tab can
     * be visible trough NearPay, the QR code of the CashRegister and its own QR
     * code.
     * @param string|null $expiration The moment when this Tab expires. Can be
     * at most 1 hour into the future.
     * @param BunqId[]|null $tabAttachment An array of attachments that describe
     * the tab. Uploaded through the POST /user/{userid}/attachment-tab
     * endpoint.
     * @param string[] $customHeaders
     *
     * @return BunqResponseString
     */
    public static function update(int $cashRegisterId, string $tabUsageSingleUuid, int $monetaryAccountId = null, string  $status = null, Amount  $amountTotal = null, TabVisibility  $visibility = null, string  $expiration = null, array  $tabAttachment = null, array $customHeaders = []): BunqResponseString
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $cashRegisterId, $tabUsageSingleUuid]
            ),
            [self::FIELD_STATUS => $status,
self::FIELD_AMOUNT_TOTAL => $amountTotal,
self::FIELD_VISIBILITY => $visibility,
self::FIELD_EXPIRATION => $expiration,
self::FIELD_TAB_ATTACHMENT => $tabAttachment],
            $customHeaders
        );

        return BunqResponseString::castFromBunqResponse(
            static::processForUuid($responseRaw)
        );
    }

    /**
     * Cancel a specific TabUsageSingle.
     *
     * @param string[] $customHeaders
     * @param int $cashRegisterId
     * @param string $tabUsageSingleUuid
     *
     * @return BunqResponseNull
     */
    public static function delete(int $cashRegisterId, string $tabUsageSingleUuid, int $monetaryAccountId = null, array $customHeaders = []): BunqResponseNull
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->delete(
            vsprintf(
                self::ENDPOINT_URL_DELETE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $cashRegisterId, $tabUsageSingleUuid]
            ),
            $customHeaders
        );

        return BunqResponseNull::castFromBunqResponse(
            new BunqResponse(null, $responseRaw->getHeaders())
        );
    }

    /**
     * Get a specific TabUsageSingle.
     *
     * @param int $cashRegisterId
     * @param string $tabUsageSingleUuid
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseTabUsageSingle
     */
    public static function get(int $cashRegisterId, string $tabUsageSingleUuid, int $monetaryAccountId = null, array $customHeaders = []): BunqResponseTabUsageSingle
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $cashRegisterId, $tabUsageSingleUuid]
            ),
            [],
            $customHeaders
        );

        return BunqResponseTabUsageSingle::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Get a collection of TabUsageSingle.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $cashRegisterId
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseTabUsageSingleList
     */
    public static function listing(int $cashRegisterId, int $monetaryAccountId = null, array $params = [], array $customHeaders = []): BunqResponseTabUsageSingleList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $cashRegisterId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseTabUsageSingleList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The uuid of the created TabUsageSingle.
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The merchant reference of the Tab, as defined by the owner.
     *
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->merchantReference;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $merchantReference
     */
    public function setMerchantReference($merchantReference)
    {
        $this->merchantReference = $merchantReference;
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * The status of the Tab. Can be OPEN, WAITING_FOR_PAYMENT, PAID or
     * CANCELED.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountTotal
     */
    public function setAmountTotal($amountTotal)
    {
        $this->amountTotal = $amountTotal;
    }

    /**
     * The amount that has been paid for this Tab.
     *
     * @return Amount
     */
    public function getAmountPaid()
    {
        return $this->amountPaid;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountPaid
     */
    public function setAmountPaid($amountPaid)
    {
        $this->amountPaid = $amountPaid;
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param TabItem[] $tabItem
     */
    public function setTabItem($tabItem)
    {
        $this->tabItem = $tabItem;
    }

    /**
     * An array of attachments that describe the tab. Uploaded through the POST
     * /user/{userid}/attachment-tab endpoint.
     *
     * @return BunqId[]
     */
    public function getTabAttachment()
    {
        return $this->tabAttachment;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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

        if (!is_null($this->merchantReference)) {
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

        if (!is_null($this->amountPaid)) {
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
