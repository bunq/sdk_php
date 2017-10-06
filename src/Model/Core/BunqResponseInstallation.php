<?php
namespace bunq\Model\Core;

use bunq\Http\BunqResponse;

/**
 */
class BunqResponseInstallation extends BunqResponse
{
    /**
     * @return Installation
     */
    public function getValue(): Installation
    {
        return parent::getValue();
    }
}
