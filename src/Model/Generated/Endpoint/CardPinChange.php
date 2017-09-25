<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\LabelCard;
use bunq\Model\Generated\Object\LabelMonetaryAccount;

/**
 * View for the pin change.
 *
 * @generated
 */
class CardPinChange extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/card/%s/pin-change';
    const ENDPOINT_URL_READ = 'user/%s/card/%s/pin-change/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'CardPinChange';

    /**
     * The id of the pin change.
     *
     * @var int
     */
    protected $id;

    /**
     * The label of the card.
     *
     * @var LabelCard
     */
    protected $labelCard;

    /**
     * The monetary account this card was ordered on and the label user that
     * owns the card.
     *
     * @var LabelMonetaryAccount
     */
    protected $labelMonetaryAccountCurrent;

    /**
     * The request date of the pin change.
     *
     * @var string
     */
    protected $timeRequest;

    /**
     * The acceptance date of the pin change.
     *
     * @var string
     */
    protected $timeAccept;

    /**
     * The status of the pin change request, PIN_UPDATE_REQUESTED or
     * PIN_UPDATE_ACCEPTED
     *
     * @var string
     */
    protected $status;

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $cardId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseCardPinChangeList
     */
    public static function listing(ApiContext $apiContext, $userId, $cardId, array $params = [], array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $cardId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseCardPinChangeList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $cardId
     * @param int $cardPinChangeId
     * @param string[] $customHeaders
     *
     * @return BunqResponseCardPinChange
     */
    public static function get(ApiContext $apiContext, $userId, $cardId, $cardPinChangeId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $cardId, $cardPinChangeId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseCardPinChange::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * The id of the pin change.
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
     * The monetary account this card was ordered on and the label user that
     * owns the card.
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
     * The request date of the pin change.
     *
     * @return string
     */
    public function getTimeRequest()
    {
        return $this->timeRequest;
    }

    /**
     * @param string $timeRequest
     */
    public function setTimeRequest($timeRequest)
    {
        $this->timeRequest = $timeRequest;
    }

    /**
     * The acceptance date of the pin change.
     *
     * @return string
     */
    public function getTimeAccept()
    {
        return $this->timeAccept;
    }

    /**
     * @param string $timeAccept
     */
    public function setTimeAccept($timeAccept)
    {
        $this->timeAccept = $timeAccept;
    }

    /**
     * The status of the pin change request, PIN_UPDATE_REQUESTED or
     * PIN_UPDATE_ACCEPTED
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
}
