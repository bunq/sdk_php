<?php
namespace bunq\Model\Core;

use bunq\Http\BunqResponse;

/**
 */
class BunqResponseSessionServer extends BunqResponse
{
    /**
     * @return SessionServer
     */
    public function getValue(): SessionServer
    {
        return parent::getValue();
    }
}
