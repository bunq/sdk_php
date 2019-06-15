<?php

namespace bunq\Model\Generated\Endpoint;

use bunq\Http\BunqResponse;

/**
 */
class BunqResponseCard extends BunqResponse
{
    /**
     * @return Card
     */
    public function getValue(): Card
    {
        return parent::getValue();
    }
}
