<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\CardPinAssignment;
use bunq\Model\Generated\Object\Pointer;

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
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/card-debit';

    /**
     * Field constants.
     */
    const FIELD_SECOND_LINE = 'second_line';
    const FIELD_NAME_ON_CARD = 'name_on_card';
    const FIELD_PREFERRED_NAME_ON_CARD = 'preferred_name_on_card';
    const FIELD_ALIAS = 'alias';
    const FIELD_TYPE = 'type';
    const FIELD_PRODUCT_TYPE = 'product_type';
    const FIELD_PIN_CODE_ASSIGNMENT = 'pin_code_assignment';
    const FIELD_MONETARY_ACCOUNT_ID_FALLBACK = 'monetary_account_id_fallback';
    const FIELD_ORDER_STATUS = 'order_status';

    /**
     * Object type.
     */
    const OBJECT_TYPE_POST = 'CardDebit';

    /**
     * The second line of text on the card, used as name/description for it. It
     * can contain at most 17 characters and it can be empty.
     *
     * @var string
     */
    protected $secondLineFieldForRequest;

    /**
     * The user's name as it will be on the card. Check 'card-name' for the
     * available card names for a user.
     *
     * @var string
     */
    protected $nameOnCardFieldForRequest;

    /**
     * The user's preferred name that can be put on the card.
     *
     * @var string|null
     */
    protected $preferredNameOnCardFieldForRequest;

    /**
     * The pointer to the monetary account that will be connected at first with
     * the card. Its IBAN code is also the one that will be printed on the card
     * itself. The pointer must be of type IBAN.
     *
     * @var Pointer|null
     */
    protected $aliasFieldForRequest;

    /**
     * The type of card to order. Can be MAESTRO or MASTERCARD.
     *
     * @var string
     */
    protected $typeFieldForRequest;

    /**
     * The product type of the card to order.
     *
     * @var string
     */
    protected $productTypeFieldForRequest;

    /**
     * Array of Types, PINs, account IDs assigned to the card.
     *
     * @var CardPinAssignment[]|null
     */
    protected $pinCodeAssignmentFieldForRequest;

    /**
     * ID of the MA to be used as fallback for this card if insufficient
     * balance. Fallback account is removed if not supplied.
     *
     * @var int|null
     */
    protected $monetaryAccountIdFallbackFieldForRequest;

    /**
     * The order status of this card. Can be CARD_REQUEST_PENDING or
     * VIRTUAL_DELIVERY.
     *
     * @var string|null
     */
    protected $orderStatusFieldForRequest;

    /**
     * @param string $secondLine The second line of text on the card, used as
     * name/description for it. It can contain at most 17 characters and it can
     * be empty.
     * @param string $nameOnCard The user's name as it will be on the card.
     * Check 'card-name' for the available card names for a user.
     * @param string $type The type of card to order. Can be MAESTRO or
     * MASTERCARD.
     * @param string $productType The product type of the card to order.
     * @param string|null $preferredNameOnCard The user's preferred name that
     * can be put on the card.
     * @param Pointer|null $alias The pointer to the monetary account that will
     * be connected at first with the card. Its IBAN code is also the one that
     * will be printed on the card itself. The pointer must be of type IBAN.
     * @param CardPinAssignment[]|null $pinCodeAssignment Array of Types, PINs,
     * account IDs assigned to the card.
     * @param int|null $monetaryAccountIdFallback ID of the MA to be used as
     * fallback for this card if insufficient balance. Fallback account is
     * removed if not supplied.
     * @param string|null $orderStatus The order status of this card. Can be
     * CARD_REQUEST_PENDING or VIRTUAL_DELIVERY.
     */
    public function __construct(string  $secondLine, string  $nameOnCard, string  $type, string  $productType, string  $preferredNameOnCard = null, Pointer  $alias = null, array  $pinCodeAssignment = null, int  $monetaryAccountIdFallback = null, string  $orderStatus = null)
    {
        $this->secondLineFieldForRequest = $secondLine;
        $this->nameOnCardFieldForRequest = $nameOnCard;
        $this->preferredNameOnCardFieldForRequest = $preferredNameOnCard;
        $this->aliasFieldForRequest = $alias;
        $this->typeFieldForRequest = $type;
        $this->productTypeFieldForRequest = $productType;
        $this->pinCodeAssignmentFieldForRequest = $pinCodeAssignment;
        $this->monetaryAccountIdFallbackFieldForRequest = $monetaryAccountIdFallback;
        $this->orderStatusFieldForRequest = $orderStatus;
    }

    /**
     * Create a new debit card request.
     *
     * @param string $secondLine The second line of text on the card, used as
     * name/description for it. It can contain at most 17 characters and it can
     * be empty.
     * @param string $nameOnCard The user's name as it will be on the card.
     * Check 'card-name' for the available card names for a user.
     * @param string $type The type of card to order. Can be MAESTRO or
     * MASTERCARD.
     * @param string $productType The product type of the card to order.
     * @param string|null $preferredNameOnCard The user's preferred name that
     * can be put on the card.
     * @param Pointer|null $alias The pointer to the monetary account that will
     * be connected at first with the card. Its IBAN code is also the one that
     * will be printed on the card itself. The pointer must be of type IBAN.
     * @param CardPinAssignment[]|null $pinCodeAssignment Array of Types, PINs,
     * account IDs assigned to the card.
     * @param int|null $monetaryAccountIdFallback ID of the MA to be used as
     * fallback for this card if insufficient balance. Fallback account is
     * removed if not supplied.
     * @param string|null $orderStatus The order status of this card. Can be
     * CARD_REQUEST_PENDING or VIRTUAL_DELIVERY.
     * @param string[] $customHeaders
     *
     * @return BunqResponseCardDebit
     */
    public static function create(string  $secondLine, string  $nameOnCard, string  $type, string  $productType, string  $preferredNameOnCard = null, Pointer  $alias = null, array  $pinCodeAssignment = null, int  $monetaryAccountIdFallback = null, string  $orderStatus = null, array $customHeaders = []): BunqResponseCardDebit
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [self::FIELD_SECOND_LINE => $secondLine,
self::FIELD_NAME_ON_CARD => $nameOnCard,
self::FIELD_PREFERRED_NAME_ON_CARD => $preferredNameOnCard,
self::FIELD_ALIAS => $alias,
self::FIELD_TYPE => $type,
self::FIELD_PRODUCT_TYPE => $productType,
self::FIELD_PIN_CODE_ASSIGNMENT => $pinCodeAssignment,
self::FIELD_MONETARY_ACCOUNT_ID_FALLBACK => $monetaryAccountIdFallback,
self::FIELD_ORDER_STATUS => $orderStatus],
            $customHeaders
        );

        return BunqResponseCardDebit::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_POST)
        );
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        return true;
    }
}
