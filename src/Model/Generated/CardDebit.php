<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\BunqModel;
use bunq\Model\Generated\Object\CardCountryPermission;
use bunq\Model\Generated\Object\CardLimit;
use bunq\Model\Generated\Object\LabelUser;

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
     * Field constants.
     */
    const FIELD_SECOND_LINE = 'second_line';
    const FIELD_NAME_ON_CARD = 'name_on_card';
    const FIELD_PIN_CODE = 'pin_code';
    const FIELD_ALIAS = 'alias';
    const FIELD_TYPE = 'type';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/card-debit';

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
     * The label for the user who requested the card.
     *
     * @var LabelUser
     */
    protected $alias;

    /**
     * Create a new debit card request.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<BunqResponse<CardDebit>>
     */
    public static function create(ApiContext $apiContext, array $requestMap, $userId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $apiClient->enableEncryption();
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId]
            ),
            $requestMap,
            $customHeaders
        );

        return static::fromJson($responseRaw);
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
     * The timestamp when the card was crated.
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
     * The timestamp when the card was last updated.
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
     * The user's name as will be on the card
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
     * @param CardLimit[] $limit
     */
    public function setLimit(array$limit)
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
     * @param CardCountryPermission[] $countryPermission
     */
    public function setCountryPermission(array$countryPermission)
    {
        $this->countryPermission = $countryPermission;
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
     * @param LabelUser $alias
     */
    public function setAlias(LabelUser $alias)
    {
        $this->alias = $alias;
    }
}
