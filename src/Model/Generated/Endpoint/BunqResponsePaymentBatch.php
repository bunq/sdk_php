<?php

namespace bunq\Model\Generated\Endpoint;

use bunq\Http\BunqResponse;

/**
 */
class BunqResponsePaymentBatch extends BunqResponse
{
    /**
     * @return PaymentBatch
     */
    public function getValue(): PaymentBatch
    {
        return parent::getValue();
    }
}
