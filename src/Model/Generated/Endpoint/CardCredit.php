<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\CardCountryPermission;
use bunq\Model\Generated\Object\CardPinAssignment;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
use bunq\Model\Generated\Object\Pointer;

/**
 * With bunq it is possible to order credit cards that can then be connected
 * with each one of the monetary accounts the user has access to (including
 * connected accounts).
 *
 * @generated
 */
class CardCredit extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/card-credit';

    /**
     * Field constants.
     */
    const FIELD_SECOND_LINE = 'second_line';
    const FIELD_NAME_ON_CARD = 'name_on_card';
    const FIELD_ALIAS = 'alias';
    const FIELD_TYPE = 'type';
    const FIELD_PRODUCT_TYPE = 'product_type';
    const FIELD_PIN_CODE_ASSIGNMENT = 'pin_code_assignment';
    const FIELD_MONETARY_ACCOUNT_ID_FALLBACK = 'monetary_account_id_fallback';

    /**
     * Object type.
     */
    const OBJECT_TYPE_POST = 'CardCredit';

    /**
     * The id of the card.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the card's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the card's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The public UUID of the card.
     *
     * @var string
     */
    protected $publicUuid;

    /**
     * The type of the card. Can is MASTERCARD.
     *
     * @var string
     */
    protected $type;

    /**
     * The sub-type of the card.
     *
     * @var string
     */
    protected $subType;

    /**
     * The product type of the card.
     *
     * @var string
     */
    protected $productType;

    /**
     * The second line of text on the card
     *
     * @var string
     */
    protected $secondLine;

    /**
     * The status to set for the card. Can be ACTIVE, DEACTIVATED, LOST, STOLEN,
     * CANCELLED, EXPIRED or PIN_TRIES_EXCEEDED.
     *
     * @var string
     */
    protected $status;

    /**
     * The sub-status of the card. Can be NONE or REPLACED.
     *
     * @var string
     */
    protected $subStatus;

    /**
     * The order status of the card. Can be NEW_CARD_REQUEST_RECEIVED,
     * CARD_REQUEST_PENDING, SENT_FOR_PRODUCTION, ACCEPTED_FOR_PRODUCTION,
     * DELIVERED_TO_CUSTOMER, CARD_UPDATE_REQUESTED, CARD_UPDATE_PENDING,
     * CARD_UPDATE_SENT, CARD_UPDATE_ACCEPTED, VIRTUAL_DELIVERY,
     * NEW_CARD_REQUEST_PENDING_USER_APPROVAL, SENT_FOR_DELIVERY or
     * NEW_CARD_REQUEST_CANCELLED.
     *
     * @var string
     */
    protected $orderStatus;

    /**
     * Expiry date of the card.
     *
     * @var string
     */
    protected $expiryDate;

    /**
     * The user's name on the card.
     *
     * @var string
     */
    protected $nameOnCard;

    /**
     * The spending limit for the card.
     *
     * @var Amount
     */
    protected $cardLimit;

    /**
     * The ATM spending limit for the card.
     *
     * @var Amount
     */
    protected $cardLimitAtm;

    /**
     * The countries for which to grant (temporary) permissions to use the card.
     *
     * @var CardCountryPermission[]
     */
    protected $countryPermission;

    /**
     * The monetary account this card was ordered on and the label user that
     * owns the card.
     *
     * @var LabelMonetaryAccount
     */
    protected $labelMonetaryAccountOrdered;

    /**
     * The monetary account that this card is currently linked to and the label
     * user viewing it.
     *
     * @var LabelMonetaryAccount
     */
    protected $labelMonetaryAccountCurrent;

    /**
     * Array of Types, PINs, account IDs assigned to the card.
     *
     * @var CardPinAssignment[]
     */
    protected $pinCodeAssignment;

    /**
     * ID of the MA to be used as fallback for this card if insufficient
     * balance. Fallback account is removed if not supplied.
     *
     * @var int
     */
    protected $monetaryAccountIdFallback;

    /**
     * The country that is domestic to the card. Defaults to country of
     * residence of user.
     *
     * @var string
     */
    protected $country;

    /**
     * A tracking link provided by our shipment provider.
     *
     * @var string
     */
    protected $cardShipmentTrackingUrl;

    /**
     * The second line of text on the card, used as name/description for it. It
     * can contain at most 17 characters and it can be empty.
     *
     * @var string
     */
    protected $secondLineFieldForRequest;

    /**
     * The user's name as it will be on the card. Check 'card-name' for the
     * available card names for a user.
     *
     * @var string
     */
    protected $nameOnCardFieldForRequest;

    /**
     * The pointer to the monetary account that will be connected at first with
     * the card. Its IBAN code is also the one that will be printed on the card
     * itself. The pointer must be of type IBAN.
     *
     * @var Pointer|null
     */
    protected $aliasFieldForRequest;

    /**
     * The type of card to order. Can be MASTERCARD.
     *
     * @var string
     */
    protected $typeFieldForRequest;

    /**
     * The product type of the card to order.
     *
     * @var string|null
     */
    protected $productTypeFieldForRequest;

    /**
     * Array of Types, PINs, account IDs assigned to the card.
     *
     * @var CardPinAssignment[]|null
     */
    protected $pinCodeAssignmentFieldForRequest;

    /**
     * ID of the MA to be used as fallback for this card if insufficient
     * balance. Fallback account is removed if not supplied.
     *
     * @var int|null
     */
    protected $monetaryAccountIdFallbackFieldForRequest;

    /**
     * @param string $secondLine The second line of text on the card, used as
     * name/description for it. It can contain at most 17 characters and it can
     * be empty.
     * @param string $nameOnCard The user's name as it will be on the card.
     * Check 'card-name' for the available card names for a user.
     * @param string $type The type of card to order. Can be MASTERCARD.
     * @param Pointer|null $alias The pointer to the monetary account that will
     * be connected at first with the card. Its IBAN code is also the one that
     * will be printed on the card itself. The pointer must be of type IBAN.
     * @param string|null $productType The product type of the card to order.
     * @param CardPinAssignment[]|null $pinCodeAssignment Array of Types, PINs,
     * account IDs assigned to the card.
     * @param int|null $monetaryAccountIdFallback ID of the MA to be used as
     * fallback for this card if insufficient balance. Fallback account is
     * removed if not supplied.
     */
    public function __construct(
        string $secondLine,
        string $nameOnCard,
        string $type,
        Pointer $alias = null,
        string $productType = null,
        array $pinCodeAssignment = null,
        int $monetaryAccountIdFallback = null
    ) {
        $this->secondLineFieldForRequest = $secondLine;
        $this->nameOnCardFieldForRequest = $nameOnCard;
        $this->aliasFieldForRequest = $alias;
        $this->typeFieldForRequest = $type;
        $this->productTypeFieldForRequest = $productType;
        $this->pinCodeAssignmentFieldForRequest = $pinCodeAssignment;
        $this->monetaryAccountIdFallbackFieldForRequest = $monetaryAccountIdFallback;
    }

    /**
     * Create a new credit card request.
     *
     * @param string $secondLine The second line of text on the card, used as
     * name/description for it. It can contain at most 17 characters and it can
     * be empty.
     * @param string $nameOnCard The user's name as it will be on the card.
     * Check 'card-name' for the available card names for a user.
     * @param string $type The type of card to order. Can be MASTERCARD.
     * @param Pointer|null $alias The pointer to the monetary account that will
     * be connected at first with the card. Its IBAN code is also the one that
     * will be printed on the card itself. The pointer must be of type IBAN.
     * @param string|null $productType The product type of the card to order.
     * @param CardPinAssignment[]|null $pinCodeAssignment Array of Types, PINs,
     * account IDs assigned to the card.
     * @param int|null $monetaryAccountIdFallback ID of the MA to be used as
     * fallback for this card if insufficient balance. Fallback account is
     * removed if not supplied.
     * @param string[] $customHeaders
     *
     * @return BunqResponseCardCredit
     */
    public static function create(
        string $secondLine,
        string $nameOnCard,
        string $type,
        Pointer $alias = null,
        string $productType = null,
        array $pinCodeAssignment = null,
        int $monetaryAccountIdFallback = null,
        array $customHeaders = []
    ): BunqResponseCardCredit {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [
                self::FIELD_SECOND_LINE => $secondLine,
                self::FIELD_NAME_ON_CARD => $nameOnCard,
                self::FIELD_ALIAS => $alias,
                self::FIELD_TYPE => $type,
                self::FIELD_PRODUCT_TYPE => $productType,
                self::FIELD_PIN_CODE_ASSIGNMENT => $pinCodeAssignment,
                self::FIELD_MONETARY_ACCOUNT_ID_FALLBACK => $monetaryAccountIdFallback,
            ],
            $customHeaders
        );

        return BunqResponseCardCredit::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_POST)
        );
    }

    /**
     * The id of the card.
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
     * The timestamp of the card's creation.
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
     * The timestamp of the card's last update.
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
     * The public UUID of the card.
     *
     * @return string
     */
    public function getPublicUuid()
    {
        return $this->publicUuid;
    }

    /**
     * @param string $publicUuid
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setPublicUuid($publicUuid)
    {
        $this->publicUuid = $publicUuid;
    }

    /**
     * The type of the card. Can is MASTERCARD.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The sub-type of the card.
     *
     * @return string
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * @param string $subType
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setSubType($subType)
    {
        $this->subType = $subType;
    }

    /**
     * The product type of the card.
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param string $productType
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
    }

    /**
     * The second line of text on the card
     *
     * @return string
     */
    public function getSecondLine()
    {
        return $this->secondLine;
    }

    /**
     * @param string $secondLine
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setSecondLine($secondLine)
    {
        $this->secondLine = $secondLine;
    }

    /**
     * The status to set for the card. Can be ACTIVE, DEACTIVATED, LOST, STOLEN,
     * CANCELLED, EXPIRED or PIN_TRIES_EXCEEDED.
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
     * The sub-status of the card. Can be NONE or REPLACED.
     *
     * @return string
     */
    public function getSubStatus()
    {
        return $this->subStatus;
    }

    /**
     * @param string $subStatus
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setSubStatus($subStatus)
    {
        $this->subStatus = $subStatus;
    }

    /**
     * The order status of the card. Can be NEW_CARD_REQUEST_RECEIVED,
     * CARD_REQUEST_PENDING, SENT_FOR_PRODUCTION, ACCEPTED_FOR_PRODUCTION,
     * DELIVERED_TO_CUSTOMER, CARD_UPDATE_REQUESTED, CARD_UPDATE_PENDING,
     * CARD_UPDATE_SENT, CARD_UPDATE_ACCEPTED, VIRTUAL_DELIVERY,
     * NEW_CARD_REQUEST_PENDING_USER_APPROVAL, SENT_FOR_DELIVERY or
     * NEW_CARD_REQUEST_CANCELLED.
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param string $orderStatus
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * Expiry date of the card.
     *
     * @return string
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @param string $expiryDate
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
    }

    /**
     * The user's name on the card.
     *
     * @return string
     */
    public function getNameOnCard()
    {
        return $this->nameOnCard;
    }

    /**
     * @param string $nameOnCard
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setNameOnCard($nameOnCard)
    {
        $this->nameOnCard = $nameOnCard;
    }

    /**
     * The spending limit for the card.
     *
     * @return Amount
     */
    public function getCardLimit()
    {
        return $this->cardLimit;
    }

    /**
     * @param Amount $cardLimit
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCardLimit($cardLimit)
    {
        $this->cardLimit = $cardLimit;
    }

    /**
     * The ATM spending limit for the card.
     *
     * @return Amount
     */
    public function getCardLimitAtm()
    {
        return $this->cardLimitAtm;
    }

    /**
     * @param Amount $cardLimitAtm
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCardLimitAtm($cardLimitAtm)
    {
        $this->cardLimitAtm = $cardLimitAtm;
    }

    /**
     * The countries for which to grant (temporary) permissions to use the card.
     *
     * @return CardCountryPermission[]
     */
    public function getCountryPermission()
    {
        return $this->countryPermission;
    }

    /**
     * @param CardCountryPermission[] $countryPermission
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCountryPermission($countryPermission)
    {
        $this->countryPermission = $countryPermission;
    }

    /**
     * The monetary account this card was ordered on and the label user that
     * owns the card.
     *
     * @return LabelMonetaryAccount
     */
    public function getLabelMonetaryAccountOrdered()
    {
        return $this->labelMonetaryAccountOrdered;
    }

    /**
     * @param LabelMonetaryAccount $labelMonetaryAccountOrdered
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setLabelMonetaryAccountOrdered($labelMonetaryAccountOrdered)
    {
        $this->labelMonetaryAccountOrdered = $labelMonetaryAccountOrdered;
    }

    /**
     * The monetary account that this card is currently linked to and the label
     * user viewing it.
     *
     * @return LabelMonetaryAccount
     */
    public function getLabelMonetaryAccountCurrent()
    {
        return $this->labelMonetaryAccountCurrent;
    }

    /**
     * @param LabelMonetaryAccount $labelMonetaryAccountCurrent
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setLabelMonetaryAccountCurrent($labelMonetaryAccountCurrent)
    {
        $this->labelMonetaryAccountCurrent = $labelMonetaryAccountCurrent;
    }

    /**
     * Array of Types, PINs, account IDs assigned to the card.
     *
     * @return CardPinAssignment[]
     */
    public function getPinCodeAssignment()
    {
        return $this->pinCodeAssignment;
    }

    /**
     * @param CardPinAssignment[] $pinCodeAssignment
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setPinCodeAssignment($pinCodeAssignment)
    {
        $this->pinCodeAssignment = $pinCodeAssignment;
    }

    /**
     * ID of the MA to be used as fallback for this card if insufficient
     * balance. Fallback account is removed if not supplied.
     *
     * @return int
     */
    public function getMonetaryAccountIdFallback()
    {
        return $this->monetaryAccountIdFallback;
    }

    /**
     * @param int $monetaryAccountIdFallback
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setMonetaryAccountIdFallback($monetaryAccountIdFallback)
    {
        $this->monetaryAccountIdFallback = $monetaryAccountIdFallback;
    }

    /**
     * The country that is domestic to the card. Defaults to country of
     * residence of user.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * A tracking link provided by our shipment provider.
     *
     * @return string
     */
    public function getCardShipmentTrackingUrl()
    {
        return $this->cardShipmentTrackingUrl;
    }

    /**
     * @param string $cardShipmentTrackingUrl
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCardShipmentTrackingUrl($cardShipmentTrackingUrl)
    {
        $this->cardShipmentTrackingUrl = $cardShipmentTrackingUrl;
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

        if (!is_null($this->publicUuid)) {
            return false;
        }

        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->subType)) {
            return false;
        }

        if (!is_null($this->productType)) {
            return false;
        }

        if (!is_null($this->secondLine)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->subStatus)) {
            return false;
        }

        if (!is_null($this->orderStatus)) {
            return false;
        }

        if (!is_null($this->expiryDate)) {
            return false;
        }

        if (!is_null($this->nameOnCard)) {
            return false;
        }

        if (!is_null($this->cardLimit)) {
            return false;
        }

        if (!is_null($this->cardLimitAtm)) {
            return false;
        }

        if (!is_null($this->countryPermission)) {
            return false;
        }

        if (!is_null($this->labelMonetaryAccountOrdered)) {
            return false;
        }

        if (!is_null($this->labelMonetaryAccountCurrent)) {
            return false;
        }

        if (!is_null($this->pinCodeAssignment)) {
            return false;
        }

        if (!is_null($this->monetaryAccountIdFallback)) {
            return false;
        }

        if (!is_null($this->country)) {
            return false;
        }

        if (!is_null($this->cardShipmentTrackingUrl)) {
            return false;
        }

        return true;
    }
}
