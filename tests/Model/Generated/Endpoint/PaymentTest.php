<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Model\Generated\Endpoint\BunqResponseInt;
use bunq\Model\Generated\Endpoint\ChatMessageText;
use bunq\Model\Generated\Endpoint\Payment;
use bunq\Model\Generated\Endpoint\PaymentChat;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Pointer;
use bunq\test\BunqSdkTestBase;
use bunq\test\Config;
use phpDocumentor\Reflection\Types\This;

/**
 * Tests:
 *  Payment
 *  PaymentChat
 *  ChatMessageText
 */
class PaymentTest extends BunqSdkTestBase
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
     * Test sending money to other sandbox user.
     *
     * This test has no assertion as of its testing to see if the code runs without errors.
     */
    public function testSendMoneyToOtherUser()
    {
        $this->skipTestIfNeededDueToInsufficientBalance();

        Payment::create(
            new Amount(self::PAYMENT_AMOUNT_IN_EUR, self::PAYMENT_CURRENCY),
            $this->getPointerUserBravo(),
            self::PAYMENT_DESCRIPTION
        );
    }

    /**
     * Test sending money to other monetaryAccount.
     *
     * This test has no assertion as of its testing to see if the code runs without errors.
     */
    public function testSendMoneyToOtherMonetaryAccount()
    {
        $this->skipTestIfNeededDueToInsufficientBalance();

        $paymentId = Payment::create(
            new Amount(self::PAYMENT_AMOUNT_IN_EUR, self::PAYMENT_CURRENCY),
            $this->getSecondMonetaryAccountAlias(),
            self::PAYMENT_DESCRIPTION
        )->getValue();
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
        $chatId = PaymentChat::create(
            $this->paymentId
        )->getValue();

        ChatMessageText::create($chatId, self::PAYMENT_CHAT_TEXT_MESSAGE);
    }
}
