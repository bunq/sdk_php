<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class InvoiceItem extends BunqModel
{
    /**
     * The billing date of the item.
     *
     * @var string
     */
    protected $billingDate;

    /**
     * The price description.
     *
     * @var string
     */
    protected $typeDescription;

    /**
     * The translated price description.
     *
     * @var string
     */
    protected $typeDescriptionTranslated;

    /**
     * The unit item price excluding VAT.
     *
     * @var Amount
     */
    protected $unitVatExclusive;

    /**
     * The unit item price including VAT.
     *
     * @var Amount
     */
    protected $unitVatInclusive;

    /**
     * The VAT tax fraction.
     *
     * @var float
     */
    protected $vat;

    /**
     * The number of items priced.
     *
     * @var float
     */
    protected $quantity;

    /**
     * The item price excluding VAT.
     *
     * @var Amount
     */
    protected $totalVatExclusive;

    /**
     * The item price including VAT.
     *
     * @var Amount
     */
    protected $totalVatInclusive;

    /**
     * The billing date of the item.
     *
     * @return string
     */
    public function getBillingDate()
    {
        return $this->billingDate;
    }

    /**
     * @param string $billingDate
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setBillingDate($billingDate)
    {
        $this->billingDate = $billingDate;
    }

    /**
     * The price description.
     *
     * @return string
     */
    public function getTypeDescription()
    {
        return $this->typeDescription;
    }

    /**
     * @param string $typeDescription
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setTypeDescription($typeDescription)
    {
        $this->typeDescription = $typeDescription;
    }

    /**
     * The translated price description.
     *
     * @return string
     */
    public function getTypeDescriptionTranslated()
    {
        return $this->typeDescriptionTranslated;
    }

    /**
     * @param string $typeDescriptionTranslated
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setTypeDescriptionTranslated($typeDescriptionTranslated)
    {
        $this->typeDescriptionTranslated = $typeDescriptionTranslated;
    }

    /**
     * The unit item price excluding VAT.
     *
     * @return Amount
     */
    public function getUnitVatExclusive()
    {
        return $this->unitVatExclusive;
    }

    /**
     * @param Amount $unitVatExclusive
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setUnitVatExclusive($unitVatExclusive)
    {
        $this->unitVatExclusive = $unitVatExclusive;
    }

    /**
     * The unit item price including VAT.
     *
     * @return Amount
     */
    public function getUnitVatInclusive()
    {
        return $this->unitVatInclusive;
    }

    /**
     * @param Amount $unitVatInclusive
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setUnitVatInclusive($unitVatInclusive)
    {
        $this->unitVatInclusive = $unitVatInclusive;
    }

    /**
     * The VAT tax fraction.
     *
     * @return float
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param float $vat
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
    }

    /**
     * The number of items priced.
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param float $quantity
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * The item price excluding VAT.
     *
     * @return Amount
     */
    public function getTotalVatExclusive()
    {
        return $this->totalVatExclusive;
    }

    /**
     * @param Amount $totalVatExclusive
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setTotalVatExclusive($totalVatExclusive)
    {
        $this->totalVatExclusive = $totalVatExclusive;
    }

    /**
     * The item price including VAT.
     *
     * @return Amount
     */
    public function getTotalVatInclusive()
    {
        return $this->totalVatInclusive;
    }

    /**
     * @param Amount $totalVatInclusive
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setTotalVatInclusive($totalVatInclusive)
    {
        $this->totalVatInclusive = $totalVatInclusive;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->billingDate)) {
            return false;
        }

        if (!is_null($this->typeDescription)) {
            return false;
        }

        if (!is_null($this->typeDescriptionTranslated)) {
            return false;
        }

        if (!is_null($this->unitVatExclusive)) {
            return false;
        }

        if (!is_null($this->unitVatInclusive)) {
            return false;
        }

        if (!is_null($this->vat)) {
            return false;
        }

        if (!is_null($this->quantity)) {
            return false;
        }

        if (!is_null($this->totalVatExclusive)) {
            return false;
        }

        if (!is_null($this->totalVatInclusive)) {
            return false;
        }

        return true;
    }
}
