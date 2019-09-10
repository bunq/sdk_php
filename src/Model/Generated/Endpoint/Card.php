<?php

namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\CardCountryPermission;
use bunq\Model\Generated\Object\CardMagStripePermission;
use bunq\Model\Generated\Object\CardPinAssignment;
use bunq\Model\Generated\Object\CardPrimaryAccountNumber;
use bunq\Model\Generated\Object\CardVirtualPrimaryAccountNumber;
use bunq\Model\Generated\Object\LabelMonetaryAccount;

/**
 * Endpoint for retrieving details for the cards the user has access to.
 *
 * @generated
 */
class Card extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_UPDATE = 'user/%s/card/%s';
    const ENDPOINT_URL_READ = 'user/%s/card/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/card';

    /**
     * Field constants.
     */
    const FIELD_PIN_CODE = 'pin_code';
    const FIELD_ACTIVATION_CODE = 'activation_code';
    const FIELD_STATUS = 'status';
    const FIELD_CARD_LIMIT = 'card_limit';
    const FIELD_CARD_LIMIT_ATM = 'card_limit_atm';
    const FIELD_MAG_STRIPE_PERMISSION = 'mag_stripe_permission';
    const FIELD_COUNTRY_PERMISSION = 'country_permission';
    const FIELD_PIN_CODE_ASSIGNMENT = 'pin_code_assignment';
    const FIELD_PRIMARY_ACCOUNT_NUMBERS_VIRTUAL = 'primary_account_numbers_virtual';
    const FIELD_PRIMARY_ACCOUNT_NUMBERS = 'primary_account_numbers';
    const FIELD_MONETARY_ACCOUNT_ID_FALLBACK = 'monetary_account_id_fallback';

    /**
     * Object type.
     */
    const OBJECT_TYPE_PUT = 'CardDebit';
    const OBJECT_TYPE_GET = 'CardDebit';

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
     * The type of the card. Can be MAESTRO, MASTERCARD.
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
     * Array of PANs, status, description and account id for online cards.
     *
     * @var CardVirtualPrimaryAccountNumber[]
     */
    protected $primaryAccountNumbersVirtual;

    /**
     * Array of PANs and their attributes.
     *
     * @var CardPrimaryAccountNumber[]
     */
    protected $primaryAccountNumbers;

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
     * The plaintext pin code. Requests require encryption to be enabled.
     *
     * @var string|null
     */
    protected $pinCodeFieldForRequest;

    /**
     * DEPRECATED: Activate a card by setting status to ACTIVE when the
     * order_status is ACCEPTED_FOR_PRODUCTION.
     *
     * @var string|null
     */
    protected $activationCodeFieldForRequest;

    /**
     * The status to set for the card. Can be ACTIVE, DEACTIVATED, LOST, STOLEN
     * or CANCELLED, and can only be set to LOST/STOLEN/CANCELLED when order
     * status is
     * ACCEPTED_FOR_PRODUCTION/DELIVERED_TO_CUSTOMER/CARD_UPDATE_REQUESTED/CARD_UPDATE_SENT/CARD_UPDATE_ACCEPTED.
     * Can only be set to DEACTIVATED after initial activation, i.e.
     * order_status is
     * DELIVERED_TO_CUSTOMER/CARD_UPDATE_REQUESTED/CARD_UPDATE_SENT/CARD_UPDATE_ACCEPTED.
     * Mind that all the possible choices (apart from ACTIVE and DEACTIVATED)
     * are permanent and cannot be changed after.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * The spending limit for the card.
     *
     * @var Amount|null
     */
    protected $cardLimitFieldForRequest;

    /**
     * The ATM spending limit for the card.
     *
     * @var Amount|null
     */
    protected $cardLimitAtmFieldForRequest;

    /**
     * DEPRECATED: Whether or not it is allowed to use the mag stripe for the
     * card.
     *
     * @var CardMagStripePermission|null
     */
    protected $magStripePermissionFieldForRequest;

    /**
     * The countries for which to grant (temporary) permissions to use the card.
     *
     * @var CardCountryPermission[]|null
     */
    protected $countryPermissionFieldForRequest;

    /**
     * Array of Types, PINs, account IDs assigned to the card.
     *
     * @var CardPinAssignment[]|null
     */
    protected $pinCodeAssignmentFieldForRequest;

    /**
     * Array of PANs, status, description and account id for online cards.
     *
     * @var CardVirtualPrimaryAccountNumber[]|null
     */
    protected $primaryAccountNumbersVirtualFieldForRequest;

    /**
     * Array of PANs and their attributes.
     *
     * @var CardPrimaryAccountNumber[]|null
     */
    protected $primaryAccountNumbersFieldForRequest;

    /**
     * ID of the MA to be used as fallback for this card if insufficient
     * balance. Fallback account is removed if not supplied.
     *
     * @var int|null
     */
    protected $monetaryAccountIdFallbackFieldForRequest;

    /**
     * @param string|null $pinCode                                   The plaintext pin code. Requests require
     *                                                               encryption to be enabled.
     * @param string|null $activationCode                            DEPRECATED: Activate a card by setting
     *                                                               status to ACTIVE when the order_status is
     *                                                               ACCEPTED_FOR_PRODUCTION.
     * @param string|null $status                                    The status to set for the card. Can be ACTIVE,
     *                                                               DEACTIVATED, LOST, STOLEN or CANCELLED, and can
     *                                                               only be set to LOST/STOLEN/CANCELLED when order
     *                                                               status is
     *                                                               ACCEPTED_FOR_PRODUCTION/DELIVERED_TO_CUSTOMER/CARD_UPDATE_REQUESTED/CARD_UPDATE_SENT/CARD_UPDATE_ACCEPTED.
     *                                                               Can only be set to DEACTIVATED after initial
     *                                                               activation, i.e. order_status is
     *                                                               DELIVERED_TO_CUSTOMER/CARD_UPDATE_REQUESTED/CARD_UPDATE_SENT/CARD_UPDATE_ACCEPTED.
     *                                                               Mind that all the possible choices (apart from
     *                                                               ACTIVE and DEACTIVATED) are permanent and cannot
     *                                                               be changed after.
     * @param Amount|null $cardLimit                                 The spending limit for the card.
     * @param Amount|null $cardLimitAtm                              The ATM spending limit for the card.
     * @param CardMagStripePermission|null $magStripePermission      DEPRECATED:
     *                                                               Whether or not it is allowed to use the mag stripe
     *                                                               for the card.
     * @param CardCountryPermission[]|null $countryPermission        The countries for
     *                                                               which to grant (temporary) permissions to use the
     *                                                               card.
     * @param CardPinAssignment[]|null $pinCodeAssignment            Array of Types, PINs,
     *                                                               account IDs assigned to the card.
     * @param CardVirtualPrimaryAccountNumber[]|null
     *                                                               $primaryAccountNumbersVirtual Array of PANs,
     *                                                               status, description and account id for online
     *                                                               cards.
     * @param CardPrimaryAccountNumber[]|null $primaryAccountNumbers Array of
     *                                                               PANs and their attributes.
     * @param int|null $monetaryAccountIdFallback                    ID of the MA to be used as
     *                                                               fallback for this card if insufficient balance.
     *                                                               Fallback account is removed if not supplied.
     */
    public function __construct(
        string $pinCode = null,
        string $activationCode = null,
        string $status = null,
        Amount $cardLimit = null,
        Amount $cardLimitAtm = null,
        CardMagStripePermission $magStripePermission = null,
        array $countryPermission = null,
        array $pinCodeAssignment = null,
        array $primaryAccountNumbersVirtual = null,
        array $primaryAccountNumbers = null,
        int $monetaryAccountIdFallback = null
    ) {
        $this->pinCodeFieldForRequest = $pinCode;
        $this->activationCodeFieldForRequest = $activationCode;
        $this->statusFieldForRequest = $status;
        $this->cardLimitFieldForRequest = $cardLimit;
        $this->cardLimitAtmFieldForRequest = $cardLimitAtm;
        $this->magStripePermissionFieldForRequest = $magStripePermission;
        $this->countryPermissionFieldForRequest = $countryPermission;
        $this->pinCodeAssignmentFieldForRequest = $pinCodeAssignment;
        $this->primaryAccountNumbersVirtualFieldForRequest = $primaryAccountNumbersVirtual;
        $this->primaryAccountNumbersFieldForRequest = $primaryAccountNumbers;
        $this->monetaryAccountIdFallbackFieldForRequest = $monetaryAccountIdFallback;
    }

    /**
     * Update the card details. Allow to change pin code, status, limits,
     * country permissions and the monetary account connected to the card. When
     * the card has been received, it can be also activated through this
     * endpoint.
     *
     * @param int $cardId
     * @param string|null $pinCode                                   The plaintext pin code. Requests require
     *                                                               encryption to be enabled.
     * @param string|null $activationCode                            DEPRECATED: Activate a card by setting
     *                                                               status to ACTIVE when the order_status is
     *                                                               ACCEPTED_FOR_PRODUCTION.
     * @param string|null $status                                    The status to set for the card. Can be ACTIVE,
     *                                                               DEACTIVATED, LOST, STOLEN or CANCELLED, and can
     *                                                               only be set to LOST/STOLEN/CANCELLED when order
     *                                                               status is
     *                                                               ACCEPTED_FOR_PRODUCTION/DELIVERED_TO_CUSTOMER/CARD_UPDATE_REQUESTED/CARD_UPDATE_SENT/CARD_UPDATE_ACCEPTED.
     *                                                               Can only be set to DEACTIVATED after initial
     *                                                               activation, i.e. order_status is
     *                                                               DELIVERED_TO_CUSTOMER/CARD_UPDATE_REQUESTED/CARD_UPDATE_SENT/CARD_UPDATE_ACCEPTED.
     *                                                               Mind that all the possible choices (apart from
     *                                                               ACTIVE and DEACTIVATED) are permanent and cannot
     *                                                               be changed after.
     * @param Amount|null $cardLimit                                 The spending limit for the card.
     * @param Amount|null $cardLimitAtm                              The ATM spending limit for the card.
     * @param CardMagStripePermission|null $magStripePermission      DEPRECATED:
     *                                                               Whether or not it is allowed to use the mag stripe
     *                                                               for the card.
     * @param CardCountryPermission[]|null $countryPermission        The countries for
     *                                                               which to grant (temporary) permissions to use the
     *                                                               card.
     * @param CardPinAssignment[]|null $pinCodeAssignment            Array of Types, PINs,
     *                                                               account IDs assigned to the card.
     * @param CardVirtualPrimaryAccountNumber[]|null
     *                                                               $primaryAccountNumbersVirtual Array of PANs,
     *                                                               status, description and account id for online
     *                                                               cards.
     * @param CardPrimaryAccountNumber[]|null $primaryAccountNumbers Array of
     *                                                               PANs and their attributes.
     * @param int|null $monetaryAccountIdFallback                    ID of the MA to be used as
     *                                                               fallback for this card if insufficient balance.
     *                                                               Fallback account is removed if not supplied.
     * @param string[] $customHeaders
     *
     * @return BunqResponseCard
     */
    public static function update(
        int $cardId,
        string $pinCode = null,
        string $activationCode = null,
        string $status = null,
        Amount $cardLimit = null,
        Amount $cardLimitAtm = null,
        CardMagStripePermission $magStripePermission = null,
        array $countryPermission = null,
        array $pinCodeAssignment = null,
        array $primaryAccountNumbersVirtual = null,
        array $primaryAccountNumbers = null,
        int $monetaryAccountIdFallback = null,
        array $customHeaders = []
    ): BunqResponseCard {
        $apiClient = new ApiClient(static::getApiContext());
        $apiClient->enableEncryption();
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $cardId]
            ),
            [
                self::FIELD_PIN_CODE => $pinCode,
                self::FIELD_ACTIVATION_CODE => $activationCode,
                self::FIELD_STATUS => $status,
                self::FIELD_CARD_LIMIT => $cardLimit,
                self::FIELD_CARD_LIMIT_ATM => $cardLimitAtm,
                self::FIELD_MAG_STRIPE_PERMISSION => $magStripePermission,
                self::FIELD_COUNTRY_PERMISSION => $countryPermission,
                self::FIELD_PIN_CODE_ASSIGNMENT => $pinCodeAssignment,
                self::FIELD_PRIMARY_ACCOUNT_NUMBERS_VIRTUAL => $primaryAccountNumbersVirtual,
                self::FIELD_PRIMARY_ACCOUNT_NUMBERS => $primaryAccountNumbers,
                self::FIELD_MONETARY_ACCOUNT_ID_FALLBACK => $monetaryAccountIdFallback,
            ],
            $customHeaders
        );

        return BunqResponseCard::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_PUT)
        );
    }

    /**
     * Return the details of a specific card.
     *
     * @param int $cardId
     * @param string[] $customHeaders
     *
     * @return BunqResponseCard
     */
    public static function get(int $cardId, array $customHeaders = []): BunqResponseCard
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $cardId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseCard::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Return all the cards available to the user.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseCardList
     */
    public static function listing(array $params = [], array $customHeaders = []): BunqResponseCardList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId()]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseCardList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
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
     *             constructor.
     *
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
     *             constructor.
     *
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
     *             constructor.
     *
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
     *             constructor.
     *
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
     * @param string $type
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     *             constructor.
     *
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
     * @param string $secondLine
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     *             constructor.
     *
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
     *             constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
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
     *             constructor.
     *
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
     *             constructor.
     *
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setPrimaryAccountNumberFourDigit($primaryAccountNumberFourDigit)
    {
        $this->primaryAccountNumberFourDigit = $primaryAccountNumberFourDigit;
    }

    /**
     * Array of PANs, status, description and account id for online cards.
     *
     * @return CardVirtualPrimaryAccountNumber[]
     */
    public function getPrimaryAccountNumbersVirtual()
    {
        return $this->primaryAccountNumbersVirtual;
    }

    /**
     * @param CardVirtualPrimaryAccountNumber[] $primaryAccountNumbersVirtual
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setPrimaryAccountNumbersVirtual($primaryAccountNumbersVirtual)
    {
        $this->primaryAccountNumbersVirtual = $primaryAccountNumbersVirtual;
    }

    /**
     * Array of PANs and their attributes.
     *
     * @return CardPrimaryAccountNumber[]
     */
    public function getPrimaryAccountNumbers()
    {
        return $this->primaryAccountNumbers;
    }

    /**
     * @param CardPrimaryAccountNumber[] $primaryAccountNumbers
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setPrimaryAccountNumbers($primaryAccountNumbers)
    {
        $this->primaryAccountNumbers = $primaryAccountNumbers;
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
     *             constructor.
     *
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
     *             constructor.
     *
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
     *             constructor.
     *
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
     *             constructor.
     *
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
     *             constructor.
     *
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
     *             constructor.
     *
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
     *             constructor.
     *
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
     *             constructor.
     *
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

        if (!is_null($this->primaryAccountNumberFourDigit)) {
            return false;
        }

        if (!is_null($this->primaryAccountNumbersVirtual)) {
            return false;
        }

        if (!is_null($this->primaryAccountNumbers)) {
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

        return true;
    }
}
