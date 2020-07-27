<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;

/**
 * Used to get a list of supported currencies for Transferwise.
 *
 * @generated
 */
class TransferwiseCurrency extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/transferwise-currency';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'TransferwiseCurrency';

    /**
     * The currency code.
     *
     * @var string
     */
    protected $currency;

    /**
     * The currency name.
     *
     * @var string
     */
    protected $name;

    /**
     * The country code associated with the currency.
     *
     * @var string
     */
    protected $country;

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseTransferwiseCurrencyList
     */
    public static function listing(array $params = [], array $customHeaders = []): BunqResponseTransferwiseCurrencyList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId()]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseTransferwiseCurrencyList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The currency code.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * The currency name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * The country code associated with the currency.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->currency)) {
            return false;
        }

        if (!is_null($this->name)) {
            return false;
        }

        if (!is_null($this->country)) {
            return false;
        }

        return true;
    }
}
