<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\BunqMeMerchantAvailable;
use bunq\Model\Generated\Object\LabelMonetaryAccount;

/**
 * bunq.me tabs allows you to create a payment request and share the link
 * through e-mail, chat, etc. Multiple persons are able to respond to the
 * payment request and pay through bunq, iDeal or SOFORT.
 *
 * @generated
 */
class BunqMeTabEntry extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_AMOUNT_INQUIRED = 'amount_inquired';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_REDIRECT_URL = 'redirect_url';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'BunqMeTab';

    /**
     * The uuid of the bunq.me.
     *
     * @var string
     */
    protected $uuid;

    /**
     * The requested Amount.
     *
     * @var Amount
     */
    protected $amountInquired;

    /**
     * The LabelMonetaryAccount with the public information of the User and the
     * MonetaryAccount that created the bunq.me link.
     *
     * @var LabelMonetaryAccount
     */
    protected $alias;

    /**
     * The description for the bunq.me. Maximum 9000 characters.
     *
     * @var string
     */
    protected $description;

    /**
     * The status of the bunq.me. Can be WAITING_FOR_PAYMENT, CANCELLED or
     * EXPIRED.
     *
     * @var string
     */
    protected $status;

    /**
     * The URL which the user is sent to when a payment is completed.
     *
     * @var string
     */
    protected $redirectUrl;

    /**
     * List of available merchants.
     *
     * @var BunqMeMerchantAvailable[]
     */
    protected $merchantAvailable;

    /**
     * The uuid of the bunq.me.
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * The requested Amount.
     *
     * @return Amount
     */
    public function getAmountInquired()
    {
        return $this->amountInquired;
    }

    /**
     * @param Amount $amountInquired
     */
    public function setAmountInquired($amountInquired)
    {
        $this->amountInquired = $amountInquired;
    }

    /**
     * The LabelMonetaryAccount with the public information of the User and the
     * MonetaryAccount that created the bunq.me link.
     *
     * @return LabelMonetaryAccount
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param LabelMonetaryAccount $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * The description for the bunq.me. Maximum 9000 characters.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * The status of the bunq.me. Can be WAITING_FOR_PAYMENT, CANCELLED or
     * EXPIRED.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The URL which the user is sent to when a payment is completed.
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param string $redirectUrl
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }

    /**
     * List of available merchants.
     *
     * @return BunqMeMerchantAvailable[]
     */
    public function getMerchantAvailable()
    {
        return $this->merchantAvailable;
    }

    /**
     * @param BunqMeMerchantAvailable[] $merchantAvailable
     */
    public function setMerchantAvailable($merchantAvailable)
    {
        $this->merchantAvailable = $merchantAvailable;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->uuid)) {
            return false;
        }

        if (!is_null($this->amountInquired)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->redirectUrl)) {
            return false;
        }

        if (!is_null($this->merchantAvailable)) {
            return false;
        }

        return true;
    }
}
