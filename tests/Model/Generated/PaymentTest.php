<?php
namespace bunq\Model\Generated;

use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Pointer;
use bunq\test\ApiContextHandler;
use bunq\test\TestConfig;
use PHPUnit\Framework\TestCase;

/**
 * Tests:
 *  Payment
 *  PaymentChat
 *  ChatMessageText
 */
class PaymentTest extends TestCase
{
    /**
     *  The amount of euros send to the other account/user.
     */
    const PAYMENT_AMOUNT_IN_EUR = '0.01';

    /**
     *  The currency in which the money is send.
     */
    const PAYMENT_CURRENCY = 'EUR';

    /**
     *  Description field for the request body.
     */
    const PAYMENT_DESCRIPTION = 'PHP unit test';

    /**
     *  The message send in the payment chat.
     */
    const PAYMENT_CHAT_TEXT_MESSAGE = 'send from PHP test';

    /**
     * @var int
     */
    private static $userId;

    /**
     * @var int
     */
    private static $monetaryAccountId;

    /**
     * @var string
     */
    private static $counterAliasOtherUser;

    /**
     * @var string
     */
    private static $counterTypeOtherUser;

    /**
     * @var string
     */
    private static $counterAliasSameUserOtherAccount;

    /**
     * @var string
     */
    private static $counterTypeSameUserOtherAccount;

    /**
     * @var int
     */
    private static $paymentId;

    /**
     */
    public static function setUpBeforeClass()
    {
        static::$userId = TestConfig::getUserId();
        static::$monetaryAccountId = TestConfig::getMonetaryAccountId();
        static::$counterAliasOtherUser = TestConfig::getAliasCounterPartyOther();
        static::$counterTypeOtherUser = TestConfig::getTypeCounterPartyOther();
        static::$counterAliasSameUserOtherAccount = TestConfig::getAliasCounterParty();
        static::$counterTypeSameUserOtherAccount = TestConfig::getTypeCounterParty();
    }

    /**
     * Test sending money to other sandbox user.
     *
     * This test has no assertion as of its testing to see if the code runs without errors.
     */
    public function testSendMoneyToOtherUser()
    {
        $apiContext = ApiContextHandler::getApiContext();

        $requestMap = [
            Payment::FIELD_COUNTERPARTY_ALIAS => new Pointer(
                static::$counterTypeOtherUser,
                static::$counterAliasOtherUser
            ),
            Payment::FIELD_AMOUNT => new Amount(self::PAYMENT_AMOUNT_IN_EUR, self::PAYMENT_CURRENCY),
            Payment::FIELD_DESCRIPTION => self::PAYMENT_DESCRIPTION,
        ];

        Payment::create($apiContext, $requestMap, static::$userId, static::$monetaryAccountId);
    }

    /**
     * Test sending money to other monetaryAccount.
     *
     * This test has no assertion as of its testing to see if the code runs without errors.
     */
    public function testSendMoneyToOtherMonetaryAccount()
    {
        $apiContext = ApiContextHandler::getApiContext();
        $requestMap = [
            Payment::FIELD_AMOUNT => new Amount(self::PAYMENT_AMOUNT_IN_EUR, self::PAYMENT_CURRENCY),
            Payment::FIELD_COUNTERPARTY_ALIAS => new Pointer(
                static::$counterTypeSameUserOtherAccount,
                static::$counterAliasSameUserOtherAccount
            ),
            Payment::FIELD_DESCRIPTION => self::PAYMENT_DESCRIPTION,
        ];

        static::$paymentId = Payment::create($apiContext, $requestMap, static::$userId, static::$monetaryAccountId);
    }

    /**
     * Test sending a payment chat to a payment.
     *
     * This test has no assertion as of its testing to see if the code runs without errors.
     *
     * @depends testSendMoneyToOtherMonetaryAccount
     */
    public function testSendMessageToPayment()
    {
        $apiContext = ApiContextHandler::getApiContext();
        $chatId = PaymentChat::create(
            $apiContext,
            [],
            static::$userId,
            static::$monetaryAccountId,
            static::$paymentId
        );
        $messageMap = [
            ChatMessageText::FIELD_TEXT => self::PAYMENT_CHAT_TEXT_MESSAGE,
        ];

        ChatMessageText::create($apiContext, $messageMap, static::$userId, $chatId);
    }
}
