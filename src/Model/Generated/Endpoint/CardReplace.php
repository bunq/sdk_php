<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\CardPinAssignment;

/**
 * It is possible to order a card replacement with the bunq
 * API.<br/><br/>You can order up to one free card replacement per year.
 * Additional replacement requests will be billed.<br/><br/>The card
 * replacement will have the same expiry date and the same pricing as the
 * old card, but it will have a new card number. You can change the
 * description and optional the PIN through the card replacement endpoint.
 *
 * @generated
 */
class CardReplace extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/card/%s/replace';

    /**
     * Field constants.
     */
    const FIELD_NAME_ON_CARD = 'name_on_card';
    const FIELD_PREFERRED_NAME_ON_CARD = 'preferred_name_on_card';
    const FIELD_PIN_CODE_ASSIGNMENT = 'pin_code_assignment';
    const FIELD_SECOND_LINE = 'second_line';

    /**
     * The id of the new card.
     *
     * @var int
     */
    protected $id;

    /**
     * The user's name as it will be on the card. Check 'card-name' for the
     * available card names for a user.
     *
     * @var string|null
     */
    protected $nameOnCardFieldForRequest;

    /**
     * The user's preferred name that can be put on the card.
     *
     * @var string|null
     */
    protected $preferredNameOnCardFieldForRequest;

    /**
     * Array of Types, PINs, account IDs assigned to the card.
     *
     * @var CardPinAssignment[]|null
     */
    protected $pinCodeAssignmentFieldForRequest;

    /**
     * The second line on the card.
     *
     * @var string|null
     */
    protected $secondLineFieldForRequest;

    /**
     * @param string|null $nameOnCard The user's name as it will be on the card.
     * Check 'card-name' for the available card names for a user.
     * @param string|null $preferredNameOnCard The user's preferred name that
     * can be put on the card.
     * @param CardPinAssignment[]|null $pinCodeAssignment Array of Types, PINs,
     * account IDs assigned to the card.
     * @param string|null $secondLine The second line on the card.
     */
    public function __construct(string  $nameOnCard = null, string  $preferredNameOnCard = null, array  $pinCodeAssignment = null, string  $secondLine = null)
    {
        $this->nameOnCardFieldForRequest = $nameOnCard;
        $this->preferredNameOnCardFieldForRequest = $preferredNameOnCard;
        $this->pinCodeAssignmentFieldForRequest = $pinCodeAssignment;
        $this->secondLineFieldForRequest = $secondLine;
    }

    /**
     * Request a card replacement.
     *
     * @param int $cardId
     * @param string|null $nameOnCard The user's name as it will be on the card.
     * Check 'card-name' for the available card names for a user.
     * @param string|null $preferredNameOnCard The user's preferred name that
     * can be put on the card.
     * @param CardPinAssignment[]|null $pinCodeAssignment Array of Types, PINs,
     * account IDs assigned to the card.
     * @param string|null $secondLine The second line on the card.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(int $cardId, string  $nameOnCard = null, string  $preferredNameOnCard = null, array  $pinCodeAssignment = null, string  $secondLine = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), $cardId]
            ),
            [self::FIELD_NAME_ON_CARD => $nameOnCard,
self::FIELD_PREFERRED_NAME_ON_CARD => $preferredNameOnCard,
self::FIELD_PIN_CODE_ASSIGNMENT => $pinCodeAssignment,
self::FIELD_SECOND_LINE => $secondLine],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * The id of the new card.
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
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        return true;
    }
}
