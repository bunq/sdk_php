<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

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
     * The amount formatted to two decimal places.
     *
     * @var string
     */
    protected $valueFieldForRequest;

    /**
     * The currency of the amount. It is an ISO 4217 formatted currency code.
     *
     * @var string
     */
    protected $currencyFieldForRequest;

    /**
     * @param string $value The amount formatted to two decimal places.
     * @param string $currency The currency of the amount. It is an ISO 4217
     * formatted currency code.
     */
    public function __construct(string  $value, string  $currency)
    {
        $this->valueFieldForRequest = $value;
        $this->currencyFieldForRequest = $currency;
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->value)) {
            return false;
        }

        if (!is_null($this->currency)) {
            return false;
        }

        return true;
    }
}
