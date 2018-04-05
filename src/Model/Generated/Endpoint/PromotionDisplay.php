<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\LabelMonetaryAccount;

/**
 * The public endpoint for retrieving and updating a promotion display
 * model.
 *
 * @generated
 */
class PromotionDisplay extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/promotion-display/%s';
    const ENDPOINT_URL_UPDATE = 'user/%s/promotion-display/%s';

    /**
     * Field constants.
     */
    const FIELD_STATUS = 'status';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'PromotionDisplay';

    /**
     * The id of the promotion.
     *
     * @var int
     */
    protected $id;

    /**
     * The alias of the user you received the promotion from.
     *
     * @var LabelMonetaryAccount
     */
    protected $counterpartyAlias;

    /**
     * The event description of the promotion appearing on time line.
     *
     * @var string
     */
    protected $eventDescription;

    /**
     * The status of the promotion. (CREATED, CLAIMED, EXPIRED, DISCARDED)
     *
     * @var string
     */
    protected $status;

    /**
     * The status of the promotion. User can set it to discarded.
     *
     * @var string
     */
    protected $statusFieldForRequest;

    /**
     * @param string $status The status of the promotion. User can set it to
     *                       discarded.
     */
    public function __construct(string $status)
    {
        $this->statusFieldForRequest = $status;
    }

    /**
     * @param int $promotionDisplayId
     * @param string[] $customHeaders
     *
     * @return BunqResponsePromotionDisplay
     */
    public static function get(int $promotionDisplayId, array $customHeaders = []): BunqResponsePromotionDisplay
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $promotionDisplayId]
            ),
            [],
            $customHeaders
        );

        return BunqResponsePromotionDisplay::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $promotionDisplayId
     * @param string|null $status The status of the promotion. User can set it
     *                            to discarded.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(
        int $promotionDisplayId,
        string $status = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $promotionDisplayId]
            ),
            [self::FIELD_STATUS => $status],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * The id of the promotion.
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
     * The alias of the user you received the promotion from.
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
     * The event description of the promotion appearing on time line.
     *
     * @return string
     */
    public function getEventDescription()
    {
        return $this->eventDescription;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $eventDescription
     */
    public function setEventDescription($eventDescription)
    {
        $this->eventDescription = $eventDescription;
    }

    /**
     * The status of the promotion. (CREATED, CLAIMED, EXPIRED, DISCARDED)
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
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->counterpartyAlias)) {
            return false;
        }

        if (!is_null($this->eventDescription)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        return true;
    }
}
