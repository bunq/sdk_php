<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\BunqModel;

/**
 * @generated
 */
class Amount extends BunqModel
{
    /**
     * The amount formatted to two decimal places.
     *
     * @var string
     */
    protected $value;

    /**
     * The currency of the amount. It is an ISO 4217 formatted currency code.
     *
     * @var string
     */
    protected $currency;

    /**
     * @param string $value
     * @param string $currency
     */
    public function __construct($value, $currency)
    {
        $this->value = $value;
        $this->currency = $currency;
    }

    /**
     * The amount formatted to two decimal places.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * The currency of the amount. It is an ISO 4217 formatted currency code.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }
}
