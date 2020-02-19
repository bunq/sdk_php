<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\BunqId;
use bunq\Model\Generated\Object\CardBatchEntry;

/**
 * Used to update multiple cards in a batch.
 *
 * @generated
 */
class CardBatch extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/card-batch';

    /**
     * Field constants.
     */
    const FIELD_CARDS = 'cards';

    /**
     * Object type.
     */
    const OBJECT_TYPE_POST = 'CardBatch';

    /**
     * The ids of the cards that have been updated.
     *
     * @var BunqId[]
     */
    protected $updatedCardIds;

    /**
     * The cards that need to be updated.
     *
     * @var CardBatchEntry[]
     */
    protected $cardsFieldForRequest;

    /**
     * @param CardBatchEntry[] $cards The cards that need to be updated.
     */
    public function __construct(array $cards)
    {
        $this->cardsFieldForRequest = $cards;
    }

    /**
     * @param CardBatchEntry[] $cards The cards that need to be updated.
     * @param string[] $customHeaders
     *
     * @return BunqResponseCardBatch
     */
    public static function create(array $cards, array $customHeaders = []): BunqResponseCardBatch
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [self::FIELD_CARDS => $cards],
            $customHeaders
        );

        return BunqResponseCardBatch::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_POST)
        );
    }

    /**
     * The ids of the cards that have been updated.
     *
     * @return BunqId[]
     */
    public function getUpdatedCardIds()
    {
        return $this->updatedCardIds;
    }

    /**
     * @param BunqId[] $updatedCardIds
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setUpdatedCardIds($updatedCardIds)
    {
        $this->updatedCardIds = $updatedCardIds;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->updatedCardIds)) {
            return false;
        }

        return true;
    }
}
