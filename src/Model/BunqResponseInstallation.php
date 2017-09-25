<?php
namespace bunq\Model;

use bunq\Http\BunqResponse;

/**
 */
class BunqResponseInstallation extends BunqResponse
{
    /**
     * @return Installation
     */
    public function getValue()
    {
        return parent::getValue();
    }
}
