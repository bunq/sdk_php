<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
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
    const OBJECT_TYPE = 'CardResult';

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
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $cardResultId
     * @param string[] $customHeaders
     *
     * @return BunqResponseCardResult
     */
    public static function get(ApiContext $apiContext, int $userId, int $monetaryAccountId, int $cardResultId, array $customHeaders = []): BunqResponseCardResult
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $monetaryAccountId, $cardResultId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseCardResult::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseCardResultList
     */
    public static function listing(ApiContext $apiContext, int $userId, int $monetaryAccountId, array $params = [], array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $monetaryAccountId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseCardResultList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE)
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
     * @param int $monetaryAccountId
     */
    public function setMonetaryAccountId(int $monetaryAccountId)
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
     * @param int $cardId
     */
    public function setCardId(int $cardId)
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
     * @param Amount $amountOriginal
     */
    public function setAmountOriginal(Amount $amountOriginal)
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
     * @param Amount $amountFinal
     */
    public function setAmountFinal(Amount $amountFinal)
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
     * @param string $decision
     */
    public function setDecision(string $decision)
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
     * @param string $decisionDescription
     */
    public function setDecisionDescription(string $decisionDescription)
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
     * @param string $decisionDescriptionTranslated
     */
    public function setDecisionDescriptionTranslated(string $decisionDescriptionTranslated)
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
     * @param string $description
     */
    public function setDescription(string $description)
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
     * @param string $messageType
     */
    public function setMessageType(string $messageType)
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
     * @param string $authorisationType
     */
    public function setAuthorisationType(string $authorisationType)
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
     * @param string $city
     */
    public function setCity(string $city)
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
     * @param LabelMonetaryAccount $alias
     */
    public function setAlias(LabelMonetaryAccount $alias)
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
     * @param LabelMonetaryAccount $counterpartyAlias
     */
    public function setCounterpartyAlias(LabelMonetaryAccount $counterpartyAlias)
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
     * @param LabelCard $labelCard
     */
    public function setLabelCard(LabelCard $labelCard)
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
     * @param string $reservationStatus
     */
    public function setReservationStatus(string $reservationStatus)
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
     * @param string $reservationExpiryTime
     */
    public function setReservationExpiryTime(string $reservationExpiryTime)
    {
        $this->reservationExpiryTime = $reservationExpiryTime;
    }
}
