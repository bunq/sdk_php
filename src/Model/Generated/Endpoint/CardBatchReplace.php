<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\BunqId;
use bunq\Model\Generated\Object\CardBatchReplaceEntry;

/**
 * Used to replace multiple cards in a batch.
 *
 * @generated
 */
class CardBatchReplace extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/card-batch-replace';

    /**
     * Field constants.
     */
    const FIELD_CARDS = 'cards';

    /**
     * Object type.
     */
    const OBJECT_TYPE_POST = 'CardBatchReplace';

    /**
     * The ids of the cards that have been replaced.
     *
     * @var BunqId[]
     */
    protected $updatedCardIds;

    /**
     * The cards that need to be replaced.
     *
     * @var CardBatchReplaceEntry[]
     */
    protected $cardsFieldForRequest;

    /**
     * @param CardBatchReplaceEntry[] $cards The cards that need to be replaced.
     */
    public function __construct(array  $cards)
    {
        $this->cardsFieldForRequest = $cards;
    }

    /**
     * @param CardBatchReplaceEntry[] $cards The cards that need to be replaced.
     * @param string[] $customHeaders
     *
     * @return BunqResponseCardBatchReplace
     */
    public static function create(array  $cards, array $customHeaders = []): BunqResponseCardBatchReplace
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

        return BunqResponseCardBatchReplace::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_POST)
        );
    }

    /**
     * The ids of the cards that have been replaced.
     *
     * @return BunqId[]
     */
    public function getUpdatedCardIds()
    {
        return $this->updatedCardIds;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param BunqId[] $updatedCardIds
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
