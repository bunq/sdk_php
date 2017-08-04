<?php
namespace bunq\Model\Generated;

use bunq\Model\Generated\Object\Pointer;
use bunq\test\ApiContextHandler;
use bunq\test\TestConfig;
use PHPUnit\Framework\TestCase;
use function uniqid;

/**
 * Tests:
 *  CardName
 *  User
 *  Card
 *  CardDebit
 */
class CardDebitTest extends TestCase
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
        static::$userId = TestConfig::getUserId();
        static::$nameOnCard =
            CardName::listing(
                ApiContextHandler::getApiContext(),
                static::$userId
            )[self::INDEX_FIRST]->getPossibleCardNameArray();
        static::$alias =
            User::listing(ApiContextHandler::getApiContext())[self::INDEX_FIRST]->getUserCompany()->getAlias(
            )[self::INDEX_FIRST];
    }

    /**
     * Test if the user can order a new card with an unique second line.
     */
    public function testOrderingDebitCard()
    {
        $apiContext = ApiContextHandler::getApiContext();
        $alias = new Pointer(static::$alias->getType(), static::$alias->getValue());

        $cardDebitMap = [
            CardDebit::FIELD_ALIAS => $alias,
            CardDebit::FIELD_SECOND_LINE => uniqid(self::CARD_SECOND_LINE_PREFIX),
            CardDebit::FIELD_PIN_CODE => self::CARD_PIN_CODE,
            CardDebit::FIELD_NAME_ON_CARD => static::$nameOnCard[self::INDEX_FIRST],
        ];
        $cardDebit = CardDebit::create($apiContext, $cardDebitMap, static::$userId);
        $card = Card::get($apiContext, static::$userId, $cardDebit->getId());

        static::assertEquals($cardDebit->getNameOnCard(), $card->getNameOnCard());
        static::assertEquals($cardDebit->getCreated(), $card->getCreated());
        static::assertEquals($cardDebit->getSecondLine(), $card->getSecondLine());
    }
}
