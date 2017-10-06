<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class InvoiceItemGroup extends BunqModel
{
    /**
     * The type of the invoice item group.
     *
     * @var string
     */
    protected $type;

    /**
     * The description of the type of the invoice item group.
     *
     * @var string
     */
    protected $typeDescription;

    /**
     * The translated description of the type of the invoice item group.
     *
     * @var string
     */
    protected $typeDescriptionTranslated;

    /**
     * The identifier of the invoice item group.
     *
     * @var string
     */
    protected $instanceDescription;

    /**
     * The unit item price excluding VAT.
     *
     * @var Amount
     */
    protected $productVatExclusive;

    /**
     * The unit item price including VAT.
     *
     * @var Amount
     */
    protected $productVatInclusive;

    /**
     * The invoice items in the group.
     *
     * @var InvoiceItem
     */
    protected $item;

    /**
     * The type of the invoice item group.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The description of the type of the invoice item group.
     *
     * @return string
     */
    public function getTypeDescription()
    {
        return $this->typeDescription;
    }

    /**
     * @param string $typeDescription
     */
    public function setTypeDescription($typeDescription)
    {
        $this->typeDescription = $typeDescription;
    }

    /**
     * The translated description of the type of the invoice item group.
     *
     * @return string
     */
    public function getTypeDescriptionTranslated()
    {
        return $this->typeDescriptionTranslated;
    }

    /**
     * @param string $typeDescriptionTranslated
     */
    public function setTypeDescriptionTranslated($typeDescriptionTranslated)
    {
        $this->typeDescriptionTranslated = $typeDescriptionTranslated;
    }

    /**
     * The identifier of the invoice item group.
     *
     * @return string
     */
    public function getInstanceDescription()
    {
        return $this->instanceDescription;
    }

    /**
     * @param string $instanceDescription
     */
    public function setInstanceDescription($instanceDescription)
    {
        $this->instanceDescription = $instanceDescription;
    }

    /**
     * The unit item price excluding VAT.
     *
     * @return Amount
     */
    public function getProductVatExclusive()
    {
        return $this->productVatExclusive;
    }

    /**
     * @param Amount $productVatExclusive
     */
    public function setProductVatExclusive($productVatExclusive)
    {
        $this->productVatExclusive = $productVatExclusive;
    }

    /**
     * The unit item price including VAT.
     *
     * @return Amount
     */
    public function getProductVatInclusive()
    {
        return $this->productVatInclusive;
    }

    /**
     * @param Amount $productVatInclusive
     */
    public function setProductVatInclusive($productVatInclusive)
    {
        $this->productVatInclusive = $productVatInclusive;
    }

    /**
     * The invoice items in the group.
     *
     * @return InvoiceItem
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param InvoiceItem $item
     */
    public function setItem($item)
    {
        $this->item = $item;
    }
}
