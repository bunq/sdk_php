<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\AttachmentPublic;
use bunq\Model\Generated\Object\AttachmentTab;

/**
 * After you’ve created a Tab using /tab-usage-single or
 * /tab-usage-multiple you can add items and attachments using tab-item. You
 * can only add or modify TabItems of a Tab which status is OPEN. The amount
 * of the TabItems will not influence the total_amount of the corresponding
 * Tab. However, if you've created any TabItems for a Tab the sum of the
 * amounts of these items must be equal to the total_amount of the Tab when
 * you change its status to PAYABLE/WAITING_FOR_PAYMENT.
 *
 * @generated
 */
class TabItemShop extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/cash-register/%s/tab/%s/tab-item';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/cash-register/%s/tab/%s/tab-item/%s';
    const ENDPOINT_URL_DELETE = 'user/%s/monetary-account/%s/cash-register/%s/tab/%s/tab-item/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/cash-register/%s/tab/%s/tab-item';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/cash-register/%s/tab/%s/tab-item/%s';

    /**
     * Field constants.
     */
    const FIELD_DESCRIPTION = 'description';
    const FIELD_EAN_CODE = 'ean_code';
    const FIELD_AVATAR_ATTACHMENT_UUID = 'avatar_attachment_uuid';
    const FIELD_TAB_ATTACHMENT = 'tab_attachment';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_AMOUNT = 'amount';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'TabItem';

    /**
     * The id of the created TabItem.
     *
     * @var int
     */
    protected $id;

    /**
     * The TabItem's brief description.
     *
     * @var string
     */
    protected $description;

    /**
     * The TabItem's EAN code.
     *
     * @var string
     */
    protected $eanCode;

    /**
     * A struct with an AttachmentPublic UUID that used as an avatar for the
     * TabItem.
     *
     * @var AttachmentPublic
     */
    protected $avatarAttachment;

    /**
     * A list of AttachmentTab attached to the TabItem.
     *
     * @var AttachmentTab[]
     */
    protected $tabAttachment;

    /**
     * The quantity of the TabItem.
     *
     * @var float
     */
    protected $quantity;

    /**
     * The money amount of the TabItem.
     *
     * @var Amount
     */
    protected $amount;

    /**
     * The TabItem's brief description. Can't be empty and must be no longer
     * than 100 characters
     *
     * @var string
     */
    protected $descriptionFieldForRequest;

    /**
     * The TabItem's EAN code.
     *
     * @var string|null
     */
    protected $eanCodeFieldForRequest;

    /**
     * An AttachmentPublic UUID that used as an avatar for the TabItem.
     *
     * @var string|null
     */
    protected $avatarAttachmentUuidFieldForRequest;

    /**
     * A list of AttachmentTab attached to the TabItem.
     *
     * @var int[]|null
     */
    protected $tabAttachmentFieldForRequest;

    /**
     * The quantity of the TabItem. Formatted as a number containing up to 15
     * digits, up to 15 decimals and using a dot.
     *
     * @var string|null
     */
    protected $quantityFieldForRequest;

    /**
     * The money amount of the TabItem. Will not change the value of the
     * corresponding Tab.
     *
     * @var Amount|null
     */
    protected $amountFieldForRequest;

    /**
     * @param string $description The TabItem's brief description. Can't be
     * empty and must be no longer than 100 characters
     * @param string|null $eanCode The TabItem's EAN code.
     * @param string|null $avatarAttachmentUuid An AttachmentPublic UUID that
     * used as an avatar for the TabItem.
     * @param int[]|null $tabAttachment A list of AttachmentTab attached to the
     * TabItem.
     * @param string|null $quantity The quantity of the TabItem. Formatted as a
     * number containing up to 15 digits, up to 15 decimals and using a dot.
     * @param Amount|null $amount The money amount of the TabItem. Will not
     * change the value of the corresponding Tab.
     */
    public function __construct(
        string $description,
        string $eanCode = null,
        string $avatarAttachmentUuid = null,
        array $tabAttachment = null,
        string $quantity = null,
        Amount $amount = null
    ) {
        $this->descriptionFieldForRequest = $description;
        $this->eanCodeFieldForRequest = $eanCode;
        $this->avatarAttachmentUuidFieldForRequest = $avatarAttachmentUuid;
        $this->tabAttachmentFieldForRequest = $tabAttachment;
        $this->quantityFieldForRequest = $quantity;
        $this->amountFieldForRequest = $amount;
    }

    /**
     * Create a new TabItem for a given Tab.
     *
     * @param int $cashRegisterId
     * @param string $tabUuid
     * @param string $description The TabItem's brief description. Can't be
     * empty and must be no longer than 100 characters
     * @param int|null $monetaryAccountId
     * @param string|null $eanCode The TabItem's EAN code.
     * @param string|null $avatarAttachmentUuid An AttachmentPublic UUID that
     * used as an avatar for the TabItem.
     * @param int[]|null $tabAttachment A list of AttachmentTab attached to the
     * TabItem.
     * @param string|null $quantity The quantity of the TabItem. Formatted as a
     * number containing up to 15 digits, up to 15 decimals and using a dot.
     * @param Amount|null $amount The money amount of the TabItem. Will not
     * change the value of the corresponding Tab.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        int $cashRegisterId,
        string $tabUuid,
        string $description,
        int $monetaryAccountId = null,
        string $eanCode = null,
        string $avatarAttachmentUuid = null,
        array $tabAttachment = null,
        string $quantity = null,
        Amount $amount = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $cashRegisterId,
                    $tabUuid,
                ]
            ),
            [
                self::FIELD_DESCRIPTION => $description,
                self::FIELD_EAN_CODE => $eanCode,
                self::FIELD_AVATAR_ATTACHMENT_UUID => $avatarAttachmentUuid,
                self::FIELD_TAB_ATTACHMENT => $tabAttachment,
                self::FIELD_QUANTITY => $quantity,
                self::FIELD_AMOUNT => $amount,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Modify a TabItem from a given Tab.
     *
     * @param int $cashRegisterId
     * @param string $tabUuid
     * @param int $tabItemShopId
     * @param int|null $monetaryAccountId
     * @param string|null $description The TabItem's brief description. Can't be
     * empty and must be no longer than 100 characters
     * @param string|null $eanCode The TabItem's EAN code.
     * @param string|null $avatarAttachmentUuid An AttachmentPublic UUID that
     * used as an avatar for the TabItem.
     * @param int[]|null $tabAttachment A list of AttachmentTab attached to the
     * TabItem.
     * @param string|null $quantity The quantity of the TabItem. Formatted as a
     * number containing up to 15 digits, up to 15 decimals and using a dot.
     * @param Amount|null $amount The money amount of the TabItem. Will not
     * change the value of the corresponding Tab.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(
        int $cashRegisterId,
        string $tabUuid,
        int $tabItemShopId,
        int $monetaryAccountId = null,
        string $description = null,
        string $eanCode = null,
        string $avatarAttachmentUuid = null,
        array $tabAttachment = null,
        string $quantity = null,
        Amount $amount = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $cashRegisterId,
                    $tabUuid,
                    $tabItemShopId,
                ]
            ),
            [
                self::FIELD_DESCRIPTION => $description,
                self::FIELD_EAN_CODE => $eanCode,
                self::FIELD_AVATAR_ATTACHMENT_UUID => $avatarAttachmentUuid,
                self::FIELD_TAB_ATTACHMENT => $tabAttachment,
                self::FIELD_QUANTITY => $quantity,
                self::FIELD_AMOUNT => $amount,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Delete a specific TabItem from a Tab.
     *
     * @param string[] $customHeaders
     * @param int $cashRegisterId
     * @param string $tabUuid
     * @param int $tabItemShopId
     *
     * @return BunqResponseNull
     */
    public static function delete(
        int $cashRegisterId,
        string $tabUuid,
        int $tabItemShopId,
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
                    $tabUuid,
                    $tabItemShopId,
                ]
            ),
            $customHeaders
        );

        return BunqResponseNull::castFromBunqResponse(
            new BunqResponse(null, $responseRaw->getHeaders())
        );
    }

    /**
     * Get a collection of TabItems from a given Tab.
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $cashRegisterId
     * @param string $tabUuid
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseTabItemShopList
     */
    public static function listing(
        int $cashRegisterId,
        string $tabUuid,
        int $monetaryAccountId = null,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseTabItemShopList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $cashRegisterId,
                    $tabUuid,
                ]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseTabItemShopList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Get a specific TabItem from a given Tab.
     *
     * @param int $cashRegisterId
     * @param string $tabUuid
     * @param int $tabItemShopId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseTabItemShop
     */
    public static function get(
        int $cashRegisterId,
        string $tabUuid,
        int $tabItemShopId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseTabItemShop {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $cashRegisterId,
                    $tabUuid,
                    $tabItemShopId,
                ]
            ),
            [],
            $customHeaders
        );

        return BunqResponseTabItemShop::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the created TabItem.
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
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The TabItem's brief description.
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
     * The TabItem's EAN code.
     *
     * @return string
     */
    public function getEanCode()
    {
        return $this->eanCode;
    }

    /**
     * @param string $eanCode
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setEanCode($eanCode)
    {
        $this->eanCode = $eanCode;
    }

    /**
     * A struct with an AttachmentPublic UUID that used as an avatar for the
     * TabItem.
     *
     * @return AttachmentPublic
     */
    public function getAvatarAttachment()
    {
        return $this->avatarAttachment;
    }

    /**
     * @param AttachmentPublic $avatarAttachment
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setAvatarAttachment($avatarAttachment)
    {
        $this->avatarAttachment = $avatarAttachment;
    }

    /**
     * A list of AttachmentTab attached to the TabItem.
     *
     * @return AttachmentTab[]
     */
    public function getTabAttachment()
    {
        return $this->tabAttachment;
    }

    /**
     * @param AttachmentTab[] $tabAttachment
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setTabAttachment($tabAttachment)
    {
        $this->tabAttachment = $tabAttachment;
    }

    /**
     * The quantity of the TabItem.
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param float $quantity
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * The money amount of the TabItem.
     *
     * @return Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Amount $amount
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->eanCode)) {
            return false;
        }

        if (!is_null($this->avatarAttachment)) {
            return false;
        }

        if (!is_null($this->tabAttachment)) {
            return false;
        }

        if (!is_null($this->quantity)) {
            return false;
        }

        if (!is_null($this->amount)) {
            return false;
        }

        return true;
    }
}
