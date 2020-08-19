<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\AttachmentPublic;
use bunq\Model\Generated\Object\AttachmentTab;

/**
 * Used to get items on a tab.
 *
 * @generated
 */
class TabItem extends BunqModel
{
    /**
     * The id of the tab item.
     *
     * @var int
     */
    protected $id;

    /**
     * The item's brief description.
     *
     * @var string
     */
    protected $description;

    /**
     * The item's EAN code.
     *
     * @var string
     */
    protected $eanCode;

    /**
     * A struct with an AttachmentPublic UUID that used as an avatar for the
     * TabItem.
     *
     * @var AttachmentPublic
     */
    protected $avatarAttachment;

    /**
     * A list of AttachmentTab attached to the TabItem.
     *
     * @var AttachmentTab[]
     */
    protected $tabAttachment;

    /**
     * The quantity of the item. Formatted as a number containing up to 15
     * digits, up to 15 decimals and using a dot.
     *
     * @var string
     */
    protected $quantity;

    /**
     * The money amount of the item.
     *
     * @var Amount
     */
    protected $amount;

    /**
     * The id of the tab item.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The item's brief description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * The item's EAN code.
     *
     * @return string
     */
    public function getEanCode()
    {
        return $this->eanCode;
    }

    /**
     * @param string $eanCode
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setEanCode($eanCode)
    {
        $this->eanCode = $eanCode;
    }

    /**
     * A struct with an AttachmentPublic UUID that used as an avatar for the
     * TabItem.
     *
     * @return AttachmentPublic
     */
    public function getAvatarAttachment()
    {
        return $this->avatarAttachment;
    }

    /**
     * @param AttachmentPublic $avatarAttachment
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setAvatarAttachment($avatarAttachment)
    {
        $this->avatarAttachment = $avatarAttachment;
    }

    /**
     * A list of AttachmentTab attached to the TabItem.
     *
     * @return AttachmentTab[]
     */
    public function getTabAttachment()
    {
        return $this->tabAttachment;
    }

    /**
     * @param AttachmentTab[] $tabAttachment
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setTabAttachment($tabAttachment)
    {
        $this->tabAttachment = $tabAttachment;
    }

    /**
     * The quantity of the item. Formatted as a number containing up to 15
     * digits, up to 15 decimals and using a dot.
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param string $quantity
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * The money amount of the item.
     *
     * @return Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Amount $amount
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->eanCode)) {
            return false;
        }

        if (!is_null($this->avatarAttachment)) {
            return false;
        }

        if (!is_null($this->tabAttachment)) {
            return false;
        }

        if (!is_null($this->quantity)) {
            return false;
        }

        if (!is_null($this->amount)) {
            return false;
        }

        return true;
    }
}
