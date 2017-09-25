<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\BunqModel;
use bunq\Model\Generated\Object\CardCountryPermission;
use bunq\Model\Generated\Object\CardLimit;
use bunq\Model\Generated\Object\CardMagStripePermission;
use bunq\Model\Generated\Object\CardPinAssignment;
use bunq\Model\Generated\Object\LabelMonetaryAccount;

/**
 * Endpoint for retrieving details for the cards the user has access to.
 *
 * @generated
 */
class Card extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_PIN_CODE = 'pin_code';
    const FIELD_ACTIVATION_CODE = 'activation_code';
    const FIELD_STATUS = 'status';
    const FIELD_LIMIT = 'limit';
    const FIELD_MAG_STRIPE_PERMISSION = 'mag_stripe_permission';
    const FIELD_COUNTRY_PERMISSION = 'country_permission';
    const FIELD_MONETARY_ACCOUNT_CURRENT_ID = 'monetary_account_current_id';
    const FIELD_PIN_CODE_ASSIGNMENT = 'pin_code_assignment';
    const FIELD_MONETARY_ACCOUNT_ID_FALLBACK = 'monetary_account_id_fallback';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_UPDATE = 'user/%s/card/%s';
    const ENDPOINT_URL_READ = 'user/%s/card/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/card';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'CardDebit';

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
     * The order status of the card. Can be CARD_UPDATE_REQUESTED,
     * CARD_UPDATE_SENT, CARD_UPDATE_ACCEPTED, ACCEPTED_FOR_PRODUCTION or
     * DELIVERED_TO_CUSTOMER.
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
     * The last 4 digits of the PAN of the card.
     *
     * @var string
     */
    protected $primaryAccountNumberFourDigit;

    /**
     * The limits to define for the card, among CARD_LIMIT_CONTACTLESS,
     * CARD_LIMIT_ATM, CARD_LIMIT_DIPPING and CARD_LIMIT_POS_ICC (e.g. 25 EUR
     * for CARD_LIMIT_CONTACTLESS)
     *
     * @var CardLimit[]
     */
    protected $limit;

    /**
     * The countries for which to grant (temporary) permissions to use the card.
     *
     * @var CardMagStripePermission
     */
    protected $magStripePermission;

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
     * Update the card details. Allow to change pin code, status, limits,
     * country permissions and the monetary account connected to the card. When
     * the card has been received, it can be also activated through this
     * endpoint.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $cardId
     * @param string[] $customHeaders
     *
     * @return BunqResponseCard
     */
    public static function update(ApiContext $apiContext, array $requestMap, $userId, $cardId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $apiClient->enableEncryption();
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [$userId, $cardId]
            ),
            $requestMap,
            $customHeaders
        );

        return static::fromJson($responseRaw, self::OBJECT_TYPE);
    }

    /**
     * Return the details of a specific card.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $cardId
     * @param string[] $customHeaders
     *
     * @return BunqResponseCard
     */
    public static function get(ApiContext $apiContext, $userId, $cardId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $cardId]
            ),
            [],
            $customHeaders
        );

        return static::fromJson($responseRaw, self::OBJECT_TYPE);
    }

    /**
     * Return all the cards available to the user.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseCardList
     */
    public static function listing(ApiContext $apiContext, $userId, array $params = [], array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId]
            ),
            $params,
            $customHeaders
        );

        return static::fromJsonList($responseRaw, self::OBJECT_TYPE);
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
     */
    public function setPublicUuid($publicUuid)
    {
        $this->publicUuid = $publicUuid;
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
     */
    public function setSubStatus($subStatus)
    {
        $this->subStatus = $subStatus;
    }

    /**
     * The order status of the card. Can be CARD_UPDATE_REQUESTED,
     * CARD_UPDATE_SENT, CARD_UPDATE_ACCEPTED, ACCEPTED_FOR_PRODUCTION or
     * DELIVERED_TO_CUSTOMER.
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param string $orderStatus
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
     * @param string $primaryAccountNumberFourDigit
     */
    public function setPrimaryAccountNumberFourDigit($primaryAccountNumberFourDigit)
    {
        $this->primaryAccountNumberFourDigit = $primaryAccountNumberFourDigit;
    }

    /**
     * The limits to define for the card, among CARD_LIMIT_CONTACTLESS,
     * CARD_LIMIT_ATM, CARD_LIMIT_DIPPING and CARD_LIMIT_POS_ICC (e.g. 25 EUR
     * for CARD_LIMIT_CONTACTLESS)
     *
     * @return CardLimit[]
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param CardLimit[] $limit
     */
    public function setLimit(array$limit)
    {
        $this->limit = $limit;
    }

    /**
     * The countries for which to grant (temporary) permissions to use the card.
     *
     * @return CardMagStripePermission
     */
    public function getMagStripePermission()
    {
        return $this->magStripePermission;
    }

    /**
     * @param CardMagStripePermission $magStripePermission
     */
    public function setMagStripePermission(CardMagStripePermission $magStripePermission)
    {
        $this->magStripePermission = $magStripePermission;
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
     */
    public function setCountryPermission(array$countryPermission)
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
     */
    public function setLabelMonetaryAccountOrdered(LabelMonetaryAccount $labelMonetaryAccountOrdered)
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
     */
    public function setLabelMonetaryAccountCurrent(LabelMonetaryAccount $labelMonetaryAccountCurrent)
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
     */
    public function setPinCodeAssignment(array$pinCodeAssignment)
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
     */
    public function setMonetaryAccountIdFallback($monetaryAccountIdFallback)
    {
        $this->monetaryAccountIdFallback = $monetaryAccountIdFallback;
    }
}
