<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\CardCountryPermission;
use bunq\Model\Generated\Object\CardLimit;
use bunq\Model\Generated\Object\CardPinAssignment;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
use bunq\Model\Generated\Object\LabelUser;
use bunq\Model\Generated\Object\Pointer;

/**
 * With bunq it is possible to order debit cards that can then be connected
 * with each one of the monetary accounts the user has access to (including
 * connected accounts).
 *
 * @generated
 */
class CardDebit extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/card-debit';

    /**
     * Field constants.
     */
    const FIELD_SECOND_LINE = 'second_line';
    const FIELD_NAME_ON_CARD = 'name_on_card';
    const FIELD_ALIAS = 'alias';
    const FIELD_TYPE = 'type';
    const FIELD_PIN_CODE_ASSIGNMENT = 'pin_code_assignment';
    const FIELD_MONETARY_ACCOUNT_ID_FALLBACK = 'monetary_account_id_fallback';

    /**
     * Object type.
     */
    const OBJECT_TYPE_POST = 'CardDebit';

    /**
     * The id of the card.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp when the card was crated.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp when the card was last updated.
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
     * The type of the card. Can be MAESTRO, MASTERCARD.
     *
     * @var string
     */
    protected $type;

    /**
     * The sub_type of card.
     *
     * @var string
     */
    protected $subType;

    /**
     * The second line of text on the card
     *
     * @var string
     */
    protected $secondLine;

    /**
     * The user's name as will be on the card
     *
     * @var string
     */
    protected $nameOnCard;

    /**
     * The last 4 digits of the PAN of the card.
     *
     * @var string
     */
    protected $primaryAccountNumberFourDigit;

    /**
     * The status to set for the card. After ordering the card it will be
     * DEACTIVATED.
     *
     * @var string
     */
    protected $status;

    /**
     * The order status of the card. After ordering the card it will be
     * NEW_CARD_REQUEST_RECEIVED.
     *
     * @var string
     */
    protected $orderStatus;

    /**
     * The expiry date of the card.
     *
     * @var string
     */
    protected $expiryDate;

    /**
     * The limits to define for the card (e.g. 25 EUR for
     * CARD_LIMIT_CONTACTLESS).
     *
     * @var CardLimit[]
     */
    protected $limit;

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
     * The label for the user who requested the card.
     *
     * @var LabelUser
     */
    protected $alias;

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
     * The type of card to order. Can be MAESTRO or MASTERCARD.
     *
     * @var string|null
     */
    protected $typeFieldForRequest;

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
     * @param string $secondLine                          The second line of text on the card, used as
     *                                                    name/description for it. It can contain at most 17 characters
     *                                                    and it can be empty.
     * @param string $nameOnCard                          The user's name as it will be on the card.
     *                                                    Check 'card-name' for the available card names for a user.
     * @param Pointer|null $alias                         The pointer to the monetary account that will
     *                                                    be connected at first with the card. Its IBAN code is also
     *                                                    the one that will be printed on the card itself. The pointer
     *                                                    must be of type IBAN.
     * @param string|null $type                           The type of card to order. Can be MAESTRO or
     *                                                    MASTERCARD.
     * @param CardPinAssignment[]|null $pinCodeAssignment Array of Types, PINs,
     *                                                    account IDs assigned to the card.
     * @param int|null $monetaryAccountIdFallback         ID of the MA to be used as
     *                                                    fallback for this card if insufficient balance. Fallback
     *                                                    account is removed if not supplied.
     */
    public function __construct(
        string $secondLine,
        string $nameOnCard,
        Pointer $alias = null,
        string $type = null,
        array $pinCodeAssignment = null,
        int $monetaryAccountIdFallback = null
    ) {
        $this->secondLineFieldForRequest = $secondLine;
        $this->nameOnCardFieldForRequest = $nameOnCard;
        $this->aliasFieldForRequest = $alias;
        $this->typeFieldForRequest = $type;
        $this->pinCodeAssignmentFieldForRequest = $pinCodeAssignment;
        $this->monetaryAccountIdFallbackFieldForRequest = $monetaryAccountIdFallback;
    }

    /**
     * Create a new debit card request.
     *
     * @param string $secondLine                          The second line of text on the card, used as
     *                                                    name/description for it. It can contain at most 17 characters
     *                                                    and it can be empty.
     * @param string $nameOnCard                          The user's name as it will be on the card.
     *                                                    Check 'card-name' for the available card names for a user.
     * @param Pointer|null $alias                         The pointer to the monetary account that will
     *                                                    be connected at first with the card. Its IBAN code is also
     *                                                    the one that will be printed on the card itself. The pointer
     *                                                    must be of type IBAN.
     * @param string|null $type                           The type of card to order. Can be MAESTRO or
     *                                                    MASTERCARD.
     * @param CardPinAssignment[]|null $pinCodeAssignment Array of Types, PINs,
     *                                                    account IDs assigned to the card.
     * @param int|null $monetaryAccountIdFallback         ID of the MA to be used as
     *                                                    fallback for this card if insufficient balance. Fallback
     *                                                    account is removed if not supplied.
     * @param string[] $customHeaders
     *
     * @return BunqResponseCardDebit
     */
    public static function create(
        string $secondLine,
        string $nameOnCard,
        Pointer $alias = null,
        string $type = null,
        array $pinCodeAssignment = null,
        int $monetaryAccountIdFallback = null,
        array $customHeaders = []
    ): BunqResponseCardDebit {
        $apiClient = new ApiClient(static::getApiContext());
        $apiClient->enableEncryption();
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
                self::FIELD_PIN_CODE_ASSIGNMENT => $pinCodeAssignment,
                self::FIELD_MONETARY_ACCOUNT_ID_FALLBACK => $monetaryAccountIdFallback,
            ],
            $customHeaders
        );

        return BunqResponseCardDebit::castFromBunqResponse(
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The timestamp when the card was crated.
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
     * The timestamp when the card was last updated.
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
     * The public UUID of the card.
     *
     * @return string
     */
    public function getPublicUuid()
    {
        return $this->publicUuid;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $publicUuid
     */
    public function setPublicUuid($publicUuid)
    {
        $this->publicUuid = $publicUuid;
    }

    /**
     * The type of the card. Can be MAESTRO, MASTERCARD.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The sub_type of card.
     *
     * @return string
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $subType
     */
    public function setSubType($subType)
    {
        $this->subType = $subType;
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $secondLine
     */
    public function setSecondLine($secondLine)
    {
        $this->secondLine = $secondLine;
    }

    /**
     * The user's name as will be on the card
     *
     * @return string
     */
    public function getNameOnCard()
    {
        return $this->nameOnCard;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $nameOnCard
     */
    public function setNameOnCard($nameOnCard)
    {
        $this->nameOnCard = $nameOnCard;
    }

    /**
     * The last 4 digits of the PAN of the card.
     *
     * @return string
     */
    public function getPrimaryAccountNumberFourDigit()
    {
        return $this->primaryAccountNumberFourDigit;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $primaryAccountNumberFourDigit
     */
    public function setPrimaryAccountNumberFourDigit($primaryAccountNumberFourDigit)
    {
        $this->primaryAccountNumberFourDigit = $primaryAccountNumberFourDigit;
    }

    /**
     * The status to set for the card. After ordering the card it will be
     * DEACTIVATED.
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
     * The order status of the card. After ordering the card it will be
     * NEW_CARD_REQUEST_RECEIVED.
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $orderStatus
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * The expiry date of the card.
     *
     * @return string
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $expiryDate
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
    }

    /**
     * The limits to define for the card (e.g. 25 EUR for
     * CARD_LIMIT_CONTACTLESS).
     *
     * @return CardLimit[]
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param CardLimit[] $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param CardCountryPermission[] $countryPermission
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelMonetaryAccount $labelMonetaryAccountOrdered
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelMonetaryAccount $labelMonetaryAccountCurrent
     */
    public function setLabelMonetaryAccountCurrent($labelMonetaryAccountCurrent)
    {
        $this->labelMonetaryAccountCurrent = $labelMonetaryAccountCurrent;
    }

    /**
     * The label for the user who requested the card.
     *
     * @return LabelUser
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelUser $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param CardPinAssignment[] $pinCodeAssignment
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $monetaryAccountIdFallback
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
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

        if (!is_null($this->secondLine)) {
            return false;
        }

        if (!is_null($this->nameOnCard)) {
            return false;
        }

        if (!is_null($this->primaryAccountNumberFourDigit)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->orderStatus)) {
            return false;
        }

        if (!is_null($this->expiryDate)) {
            return false;
        }

        if (!is_null($this->limit)) {
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

        if (!is_null($this->alias)) {
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

        return true;
    }
}
