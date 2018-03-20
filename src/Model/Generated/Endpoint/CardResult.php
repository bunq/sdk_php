<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\LabelCard;
use bunq\Model\Generated\Object\LabelMonetaryAccount;

/**
 * Endpoint for Card result requests (failed and successful transactions).
 *
 * @generated
 */
class CardResult extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/card-result/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/card-result';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'CardResult';

    /**
     * The id of the monetary account this card result links to.
     *
     * @var int
     */
    protected $monetaryAccountId;

    /**
     * The id of the card this card result links to.
     *
     * @var int
     */
    protected $cardId;

    /**
     * The original amount of the message.
     *
     * @var Amount
     */
    protected $amountOriginal;

    /**
     * The final amount of the message to be booked to the account.
     *
     * @var Amount
     */
    protected $amountFinal;

    /**
     * Why the transaction was denied, if it was denied, or just ALLOWED.
     *
     * @var string
     */
    protected $decision;

    /**
     * Empty if allowed, otherwise a textual explanation of why it was denied.
     *
     * @var string
     */
    protected $decisionDescription;

    /**
     * Empty if allowed, otherwise a textual explanation of why it was denied in
     * user's language.
     *
     * @var string
     */
    protected $decisionDescriptionTranslated;

    /**
     * The description for this transaction to display.
     *
     * @var string
     */
    protected $description;

    /**
     * The type of message that this card result is created for.
     *
     * @var string
     */
    protected $messageType;

    /**
     * The way the cardholder was authorised to the POS or ATM.
     *
     * @var string
     */
    protected $authorisationType;

    /**
     * The city where the message originates from.
     *
     * @var string
     */
    protected $city;

    /**
     * The monetary account label of the account that this result is created
     * for.
     *
     * @var LabelMonetaryAccount
     */
    protected $alias;

    /**
     * The monetary account label of the counterparty.
     *
     * @var LabelMonetaryAccount
     */
    protected $counterpartyAlias;

    /**
     * The label of the card.
     *
     * @var LabelCard
     */
    protected $labelCard;

    /**
     * The status of the reservation if the transaction is a reservation.
     *
     * @var string
     */
    protected $reservationStatus;

    /**
     * The moment the reservation will expire.
     *
     * @var string
     */
    protected $reservationExpiryTime;

    /**
     * @param int $cardResultId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseCardResult
     */
    public static function get(
        int $cardResultId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseCardResult {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $cardResultId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseCardResult::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseCardResultList
     */
    public static function listing(
        int $monetaryAccountId = null,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseCardResultList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseCardResultList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the monetary account this card result links to.
     *
     * @return int
     */
    public function getMonetaryAccountId()
    {
        return $this->monetaryAccountId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $monetaryAccountId
     */
    public function setMonetaryAccountId($monetaryAccountId)
    {
        $this->monetaryAccountId = $monetaryAccountId;
    }

    /**
     * The id of the card this card result links to.
     *
     * @return int
     */
    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $cardId
     */
    public function setCardId($cardId)
    {
        $this->cardId = $cardId;
    }

    /**
     * The original amount of the message.
     *
     * @return Amount
     */
    public function getAmountOriginal()
    {
        return $this->amountOriginal;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountOriginal
     */
    public function setAmountOriginal($amountOriginal)
    {
        $this->amountOriginal = $amountOriginal;
    }

    /**
     * The final amount of the message to be booked to the account.
     *
     * @return Amount
     */
    public function getAmountFinal()
    {
        return $this->amountFinal;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountFinal
     */
    public function setAmountFinal($amountFinal)
    {
        $this->amountFinal = $amountFinal;
    }

    /**
     * Why the transaction was denied, if it was denied, or just ALLOWED.
     *
     * @return string
     */
    public function getDecision()
    {
        return $this->decision;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $decision
     */
    public function setDecision($decision)
    {
        $this->decision = $decision;
    }

    /**
     * Empty if allowed, otherwise a textual explanation of why it was denied.
     *
     * @return string
     */
    public function getDecisionDescription()
    {
        return $this->decisionDescription;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $decisionDescription
     */
    public function setDecisionDescription($decisionDescription)
    {
        $this->decisionDescription = $decisionDescription;
    }

    /**
     * Empty if allowed, otherwise a textual explanation of why it was denied in
     * user's language.
     *
     * @return string
     */
    public function getDecisionDescriptionTranslated()
    {
        return $this->decisionDescriptionTranslated;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $decisionDescriptionTranslated
     */
    public function setDecisionDescriptionTranslated($decisionDescriptionTranslated)
    {
        $this->decisionDescriptionTranslated = $decisionDescriptionTranslated;
    }

    /**
     * The description for this transaction to display.
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
     * The type of message that this card result is created for.
     *
     * @return string
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $messageType
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;
    }

    /**
     * The way the cardholder was authorised to the POS or ATM.
     *
     * @return string
     */
    public function getAuthorisationType()
    {
        return $this->authorisationType;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $authorisationType
     */
    public function setAuthorisationType($authorisationType)
    {
        $this->authorisationType = $authorisationType;
    }

    /**
     * The city where the message originates from.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * The monetary account label of the account that this result is created
     * for.
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
     * The monetary account label of the counterparty.
     *
     * @return LabelMonetaryAccount
     */
    public function getCounterpartyAlias()
    {
        return $this->counterpartyAlias;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelMonetaryAccount $counterpartyAlias
     */
    public function setCounterpartyAlias($counterpartyAlias)
    {
        $this->counterpartyAlias = $counterpartyAlias;
    }

    /**
     * The label of the card.
     *
     * @return LabelCard
     */
    public function getLabelCard()
    {
        return $this->labelCard;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelCard $labelCard
     */
    public function setLabelCard($labelCard)
    {
        $this->labelCard = $labelCard;
    }

    /**
     * The status of the reservation if the transaction is a reservation.
     *
     * @return string
     */
    public function getReservationStatus()
    {
        return $this->reservationStatus;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $reservationStatus
     */
    public function setReservationStatus($reservationStatus)
    {
        $this->reservationStatus = $reservationStatus;
    }

    /**
     * The moment the reservation will expire.
     *
     * @return string
     */
    public function getReservationExpiryTime()
    {
        return $this->reservationExpiryTime;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $reservationExpiryTime
     */
    public function setReservationExpiryTime($reservationExpiryTime)
    {
        $this->reservationExpiryTime = $reservationExpiryTime;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->monetaryAccountId)) {
            return false;
        }

        if (!is_null($this->cardId)) {
            return false;
        }

        if (!is_null($this->amountOriginal)) {
            return false;
        }

        if (!is_null($this->amountFinal)) {
            return false;
        }

        if (!is_null($this->decision)) {
            return false;
        }

        if (!is_null($this->decisionDescription)) {
            return false;
        }

        if (!is_null($this->decisionDescriptionTranslated)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->messageType)) {
            return false;
        }

        if (!is_null($this->authorisationType)) {
            return false;
        }

        if (!is_null($this->city)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->counterpartyAlias)) {
            return false;
        }

        if (!is_null($this->labelCard)) {
            return false;
        }

        if (!is_null($this->reservationStatus)) {
            return false;
        }

        if (!is_null($this->reservationExpiryTime)) {
            return false;
        }

        return true;
    }
}
