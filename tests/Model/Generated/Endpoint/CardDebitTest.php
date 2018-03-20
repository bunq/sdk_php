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
    const CARD_PIN_CODE_ASSIGNMENT = 'PRIMARY';

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
        $cardNamesAllowed = CardName::listing()->getValue();
        static::$nameOnCard = $cardNamesAllowed[self::INDEX_FIRST]->getPossibleCardNameArray();
        $usersAccessible = User::listing()->getValue();
        static::$alias = $usersAccessible[self::INDEX_FIRST]->getUserCompany()->getAlias()[self::INDEX_FIRST];
        static::$monetaryAccountId = Config::getMonetaryAccountId();
    }

    /**
     * Test if the user can order a new card with an unique second line.
     */
    public function testOrderingDebitCard()
    {
        $alias = new Pointer(static::$alias->getType(), static::$alias->getValue());
        $cardAssigned =
            new CardPinAssignment(
                self::CARD_ASSIGNMENT_TYPE_PRIMARY,
                self::CARD_PIN_CODE,
                static::$monetaryAccountId
            );

        $cardDebit = CardDebit::create(
            uniqid(self::CARD_SECOND_LINE_PREFIX),
            static::$nameOnCard[self::INDEX_FIRST],
            $alias,
            null,
            [new CardPinAssignment(self::CARD_PIN_CODE_ASSIGNMENT, self::CARD_PIN_CODE, Config::getMonetaryAccountId())]
        )->getValue();

        $card = Card::get($cardDebit->getId())->getValue();

        static::assertEquals($cardDebit->getNameOnCard(), $card->getNameOnCard());
        static::assertEquals($cardDebit->getCreated(), $card->getCreated());
        static::assertEquals($cardDebit->getSecondLine(), $card->getSecondLine());
    }
}
