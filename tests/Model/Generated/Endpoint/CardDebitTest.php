<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Model\Generated\Endpoint\Card;
use bunq\Model\Generated\Endpoint\CardDebit;
use bunq\Model\Generated\Endpoint\CardName;
use bunq\Model\Generated\Endpoint\User;
use bunq\Model\Generated\Object\CardPinAssignment;
use bunq\Model\Generated\Object\Pointer;
use bunq\test\BunqSdkTestBase;
use bunq\test\Config;

/**
 * Tests:
 *  CardName
 *  User
 *  Card
 *  CardDebit
 */
class CardDebitTest extends BunqSdkTestBase
{
    /**
     *  Pin code that the card will be ordered with.
     */
    const CARD_PIN_CODE = '4045';
    const CARD_ASSIGNMENT_TYPE_PRIMARY = 'PRIMARY';

    /**
     * The prefix for the second line on the card.
     */
    const CARD_SECOND_LINE_PREFIX = 'card_';

    /**
     *  Index number of the first item in an array.
     */
    const INDEX_FIRST = 0;

    /**
     * @var int
     */
    private static $userId;

    /**
     * @var string
     */
    private static $nameOnCard;

    /**
     * @var Pointer
     */
    private static $alias;

    /**
     * @var int
     */
    private static $monetaryAccountId;

    /**
     */
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        static::$userId = Config::getUserId();
        $cardNamesAllowed = CardName::listing(static::getApiContext(), static::$userId)->getValue();
        static::$nameOnCard = $cardNamesAllowed[self::INDEX_FIRST]->getPossibleCardNameArray();
        $usersAccessible = User::listing(static::getApiContext())->getValue();
        static::$alias = $usersAccessible[self::INDEX_FIRST]->getUserCompany()->getAlias()[self::INDEX_FIRST];
        static::$monetaryAccountId = Config::getMonetaryAccountId();
    }

    /**
     * Test if the user can order a new card with an unique second line.
     */
    public function testOrderingDebitCard()
    {
        $apiContext = static::getApiContext();
        $alias = new Pointer(static::$alias->getType(), static::$alias->getValue());
        $cardAssigned =
            new CardPinAssignment(
                self::CARD_ASSIGNMENT_TYPE_PRIMARY,
                self::CARD_PIN_CODE,
                static::$monetaryAccountId
            );

        $cardDebitMap = [
            CardDebit::FIELD_ALIAS => $alias,
            CardDebit::FIELD_SECOND_LINE => uniqid(self::CARD_SECOND_LINE_PREFIX),
            CardDebit::FIELD_PIN_CODE_ASSIGNMENT => [$cardAssigned],
            CardDebit::FIELD_NAME_ON_CARD => static::$nameOnCard[self::INDEX_FIRST],
        ];
        $cardDebit = CardDebit::create($apiContext, $cardDebitMap, static::$userId)->getValue();
        $card = Card::get($apiContext, static::$userId, $cardDebit->getId())->getValue();

        static::assertEquals($cardDebit->getNameOnCard(), $card->getNameOnCard());
        static::assertEquals($cardDebit->getCreated(), $card->getCreated());
        static::assertEquals($cardDebit->getSecondLine(), $card->getSecondLine());
    }
}
