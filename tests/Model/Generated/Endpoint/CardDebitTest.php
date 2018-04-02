<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Context\BunqContext;
use bunq\Model\Generated\Endpoint\Card;
use bunq\Model\Generated\Endpoint\CardDebit;
use bunq\Model\Generated\Endpoint\CardName;
use bunq\Model\Generated\Object\CardPinAssignment;
use bunq\test\BunqSdkTestBase;

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
     * @var string
     */
    private static $nameOnCard;

    /**
     */
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        $cardNamesAllowed = CardName::listing()->getValue();
        static::$nameOnCard = $cardNamesAllowed[self::INDEX_FIRST]->getPossibleCardNameArray();
    }

    /**
     * Test if the user can order a new card with an unique second line.
     */
    public function testOrderingDebitCard()
    {
        $cardDebit = CardDebit::create(
            uniqid(self::CARD_SECOND_LINE_PREFIX),
            static::$nameOnCard[self::INDEX_FIRST],
            $this->getUserAlias(),
            null,
            [
                new CardPinAssignment(
                    self::CARD_PIN_CODE_ASSIGNMENT,
                    self::CARD_PIN_CODE,
                    BunqContext::getUserContext()->getPrimaryMonetaryAccount()->getId()
                ),
            ]
        )->getValue();

        $card = Card::get($cardDebit->getId())->getValue();

        $this->assertEquals($cardDebit->getNameOnCard(), $card->getNameOnCard());
        $this->assertEquals($cardDebit->getCreated(), $card->getCreated());
        $this->assertEquals($cardDebit->getSecondLine(), $card->getSecondLine());
    }
}
