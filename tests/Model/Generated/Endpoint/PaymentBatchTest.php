<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Model\Generated\Endpoint\Payment;
use bunq\Model\Generated\Endpoint\PaymentBatch;
use bunq\Model\Generated\Object\Amount;
use bunq\test\BunqSdkTestBase;

/**
 * Tests:
 * PaymentBatch
 * Payment
 */
class PaymentBatchTest extends BunqSdkTestBase
{
    /**
     * Test constants
     */
    const PAYMENT_CURRENCY = 'EUR';
    const PAYMENT_DESCRIPTION = 'php sdk Batch test';
    const MAXIMUM_PAYMENT_ENTRIES = 10;

    /**
     * Threshold constants.
     */
    const MONETARY_ACCOUNT_BALANCE_THRESHOLD = 0.10;

    /**
     */
    public function testSendBatchPayment()
    {
        $response = PaymentBatch::create($this->createPaymentArray());

        self::assertTrue(is_integer($response->getValue()));
    }

    /**
     * @return Payment[]
     */
    private function createPaymentArray(): array
    {
        $this->skipTestIfNeededDueToInsufficientBalance();

        $allPayment = [];

        while (count($allPayment) < self::MAXIMUM_PAYMENT_ENTRIES) {
            $payment = new Payment(
                new Amount(self::PAYMENT_AMOUNT_DEFAULT, self::PAYMENT_CURRENCY),
                $this->getPointerUserBravo(),
                self::PAYMENT_DESCRIPTION
            );

            $allPayment[] = $payment;
        }

        return $allPayment;
    }
}
