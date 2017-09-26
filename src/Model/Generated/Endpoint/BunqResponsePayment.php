<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\BunqResponse;

/**
 */
class BunqResponsePayment extends BunqResponse
{
    /**
     * @return Payment
     */
    public function getValue(): Payment
    {
        return parent::getValue();
    }
}
