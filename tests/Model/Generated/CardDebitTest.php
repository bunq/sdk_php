<?php
namespace bunq\test\Model\Generated;

use bunq\Model\Generated\Card;
use bunq\Model\Generated\CardDebit;
use bunq\Model\Generated\CardName;
use bunq\Model\Generated\Object\Pointer;
use bunq\Model\Generated\User;
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
     */
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        static::$userId = Config::getUserId();
        $cardNamesAllowed = CardName::listing(static::getApiContext(), static::$userId)->getValue();
        static::$nameOnCard = $cardNamesAllowed[self::INDEX_FIRST]->getPossibleCardNameArray();
        $usersAccessible = User::listing(static::getApiContext())->getValue();
        static::$alias = $usersAccessible[self::INDEX_FIRST]->getUserCompany()->getAlias()[self::INDEX_FIRST];
    }

    /**
     * Test if the user can order a new card with an unique second line.
     */
    public function testOrderingDebitCard()
    {
        $apiContext = static::getApiContext();
        $alias = new Pointer(static::$alias->getType(), static::$alias->getValue());

        $cardDebitMap = [
            CardDebit::FIELD_ALIAS => $alias,
            CardDebit::FIELD_SECOND_LINE => uniqid(self::CARD_SECOND_LINE_PREFIX),
            CardDebit::FIELD_PIN_CODE => self::CARD_PIN_CODE,
            CardDebit::FIELD_NAME_ON_CARD => static::$nameOnCard[self::INDEX_FIRST],
        ];
        $cardDebit = CardDebit::create($apiContext, $cardDebitMap, static::$userId)->getValue();
        $card = Card::get($apiContext, static::$userId, $cardDebit->getId())->getValue();

        static::assertEquals($cardDebit->getNameOnCard(), $card->getNameOnCard());
        static::assertEquals($cardDebit->getCreated(), $card->getCreated());
        static::assertEquals($cardDebit->getSecondLine(), $card->getSecondLine());
    }
}
