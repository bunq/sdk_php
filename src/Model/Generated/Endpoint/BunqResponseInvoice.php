<?php

namespace bunq\Model\Generated\Endpoint;

use bunq\Http\BunqResponse;

/**
 */
class BunqResponseInvoice extends BunqResponse
{
    /**
     * @return Invoice
     */
    public function getValue(): Invoice
    {
        return parent::getValue();
    }
}
