<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Model\Generated\Endpoint\Payment;
use bunq\Model\Generated\Endpoint\PaymentBatch;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\LabelMonetaryAccount;
use bunq\Model\Generated\Object\Pointer;
use bunq\test\BunqSdkTestBase;

/**
 * @author Kevin Hellemun <khellemun@bunq.com>
 * @since  20180330 Initial creation.
 */
class PaymentBatchTest extends BunqSdkTestBase
{
    /**
     * Test constants
     */
    const PAYMENT_CURRENCY = 'EUR';
    const PAYMENT_DESCRIPTION = "php sdk Batch test";

    /**
     */
    public function testSendBatchPayment()
    {
        $response = PaymentBatch::create(
            $this->createPaymentArray()
        );

        self::assertTrue(is_integer($response->getValue()));
    }

    /**
     * @return Payment[]
     */
    private function createPaymentArray(): array
    {
        $allPayment = [];

        while (count($allPayment) < 10) {
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
