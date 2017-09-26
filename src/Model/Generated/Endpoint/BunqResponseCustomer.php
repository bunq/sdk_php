<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\BunqResponse;

/**
 */
class BunqResponseCustomer extends BunqResponse
{
    /**
     * @return Customer
     */
    public function getValue(): Customer
    {
        return parent::getValue();
    }
}
