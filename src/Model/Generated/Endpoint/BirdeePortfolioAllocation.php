<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;

/**
 * Endpoint for viewing the allocations of the model portfolios Birdee
 * offers.
 *
 * @generated
 */
class BirdeePortfolioAllocation extends BunqModel
{
    /**
     * Currency of the instrument.
     *
     * @var string
     */
    protected $instrumentCurrency;

    /**
     * Asset Class of the instrument.
     *
     * @var string
     */
    protected $instrumentAssetClass;

    /**
     * Name of the asset class.
     *
     * @var string
     */
    protected $instrumentAssetClassName;

    /**
     * ISIN code of the instrument.
     *
     * @var string
     */
    protected $instrumentIsin;

    /**
     * Name of the instrument.
     *
     * @var string
     */
    protected $instrumentName;

    /**
     * Name of the geographical region covered by the instrument
     *
     * @var string
     */
    protected $instrumentRegionName;

    /**
     * Key Information Document of the instrument.
     *
     * @var string
     */
    protected $instrumentKeyInformationDocumentUri;

    /**
     * Weight of the financial instrument in the model portfolio.
     *
     * @var string
     */
    protected $weight;

    /**
     * Quantity of the financial instrument in the portfolio.
     *
     * @var string
     */
    protected $quantity;

    /**
     * Unit price of the financial instrument.
     *
     * @var string
     */
    protected $price;

    /**
     * Monetary amount of the financial instrument in the portfolio.
     *
     * @var string
     */
    protected $amount;

    /**
     * Currency of the instrument.
     *
     * @return string
     */
    public function getInstrumentCurrency()
    {
        return $this->instrumentCurrency;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $instrumentCurrency
     */
    public function setInstrumentCurrency($instrumentCurrency)
    {
        $this->instrumentCurrency = $instrumentCurrency;
    }

    /**
     * Asset Class of the instrument.
     *
     * @return string
     */
    public function getInstrumentAssetClass()
    {
        return $this->instrumentAssetClass;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $instrumentAssetClass
     */
    public function setInstrumentAssetClass($instrumentAssetClass)
    {
        $this->instrumentAssetClass = $instrumentAssetClass;
    }

    /**
     * Name of the asset class.
     *
     * @return string
     */
    public function getInstrumentAssetClassName()
    {
        return $this->instrumentAssetClassName;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $instrumentAssetClassName
     */
    public function setInstrumentAssetClassName($instrumentAssetClassName)
    {
        $this->instrumentAssetClassName = $instrumentAssetClassName;
    }

    /**
     * ISIN code of the instrument.
     *
     * @return string
     */
    public function getInstrumentIsin()
    {
        return $this->instrumentIsin;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $instrumentIsin
     */
    public function setInstrumentIsin($instrumentIsin)
    {
        $this->instrumentIsin = $instrumentIsin;
    }

    /**
     * Name of the instrument.
     *
     * @return string
     */
    public function getInstrumentName()
    {
        return $this->instrumentName;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $instrumentName
     */
    public function setInstrumentName($instrumentName)
    {
        $this->instrumentName = $instrumentName;
    }

    /**
     * Name of the geographical region covered by the instrument
     *
     * @return string
     */
    public function getInstrumentRegionName()
    {
        return $this->instrumentRegionName;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $instrumentRegionName
     */
    public function setInstrumentRegionName($instrumentRegionName)
    {
        $this->instrumentRegionName = $instrumentRegionName;
    }

    /**
     * Key Information Document of the instrument.
     *
     * @return string
     */
    public function getInstrumentKeyInformationDocumentUri()
    {
        return $this->instrumentKeyInformationDocumentUri;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $instrumentKeyInformationDocumentUri
     */
    public function setInstrumentKeyInformationDocumentUri($instrumentKeyInformationDocumentUri)
    {
        $this->instrumentKeyInformationDocumentUri = $instrumentKeyInformationDocumentUri;
    }

    /**
     * Weight of the financial instrument in the model portfolio.
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * Quantity of the financial instrument in the portfolio.
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * Unit price of the financial instrument.
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Monetary amount of the financial instrument in the portfolio.
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->instrumentCurrency)) {
            return false;
        }

        if (!is_null($this->instrumentAssetClass)) {
            return false;
        }

        if (!is_null($this->instrumentAssetClassName)) {
            return false;
        }

        if (!is_null($this->instrumentIsin)) {
            return false;
        }

        if (!is_null($this->instrumentName)) {
            return false;
        }

        if (!is_null($this->instrumentRegionName)) {
            return false;
        }

        if (!is_null($this->instrumentKeyInformationDocumentUri)) {
            return false;
        }

        if (!is_null($this->weight)) {
            return false;
        }

        if (!is_null($this->quantity)) {
            return false;
        }

        if (!is_null($this->price)) {
            return false;
        }

        if (!is_null($this->amount)) {
            return false;
        }

        return true;
    }
}
