<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;

/**
 * Fetch blacklists of merchants created by user
 *
 * @generated
 */
class UserBlacklistMasterCardMerchant extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_MERCHANT_NAME = 'merchant_name';
    const FIELD_MERCHANT_ID = 'merchant_id';
    const FIELD_MERCHANT_IDENTIFIER = 'merchant_identifier';
    const FIELD_MASTERCARD_MERCHANT_ID = 'mastercard_merchant_id';
    const FIELD_EXTERNAL_MERCHANT_ID = 'external_merchant_id';

    /**
     * The id of the blacklist.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the object's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the object's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The status of the the blacklist.
     *
     * @var string
     */
    protected $status;

    /**
     * The name of the merchant.
     *
     * @var string
     */
    protected $merchantName;

    /**
     * The blacklisted merchant.
     *
     * @var string
     */
    protected $merchantId;

    /**
     * Identifier of the merchant we are blacklisting.
     *
     * @var string
     */
    protected $merchantIdentifier;

    /**
     * The blacklisted merchant.
     *
     * @var string
     */
    protected $mastercardMerchantId;

    /**
     * Externally provided merchant identification.
     *
     * @var string
     */
    protected $externalMerchantId;

    /**
     * Hash of the merchant we are blacklisting.
     *
     * @var string
     */
    protected $merchantHash;

    /**
     * @var Avatar
     */
    protected $merchantAvatar;

    /**
     * The name of the merchant.
     *
     * @var string
     */
    protected $merchantNameFieldForRequest;

    /**
     * The merchant id.
     *
     * @var string|null
     */
    protected $merchantIdFieldForRequest;

    /**
     * Optional identifier of the merchant to blacklist.
     *
     * @var string|null
     */
    protected $merchantIdentifierFieldForRequest;

    /**
     * Master card merchant id.
     *
     * @var string|null
     */
    protected $mastercardMerchantIdFieldForRequest;

    /**
     * Externally provided merchant id.
     *
     * @var string|null
     */
    protected $externalMerchantIdFieldForRequest;

    /**
     * @param string $merchantName The name of the merchant.
     * @param string|null $merchantId The merchant id.
     * @param string|null $merchantIdentifier Optional identifier of the
     * merchant to blacklist.
     * @param string|null $mastercardMerchantId Master card merchant id.
     * @param string|null $externalMerchantId Externally provided merchant id.
     */
    public function __construct(string  $merchantName, string  $merchantId = null, string  $merchantIdentifier = null, string  $mastercardMerchantId = null, string  $externalMerchantId = null)
    {
        $this->merchantNameFieldForRequest = $merchantName;
        $this->merchantIdFieldForRequest = $merchantId;
        $this->merchantIdentifierFieldForRequest = $merchantIdentifier;
        $this->mastercardMerchantIdFieldForRequest = $mastercardMerchantId;
        $this->externalMerchantIdFieldForRequest = $externalMerchantId;
    }

    /**
     * The id of the blacklist.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The timestamp of the object's creation.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the object's last update.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The status of the the blacklist.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The name of the merchant.
     *
     * @return string
     */
    public function getMerchantName()
    {
        return $this->merchantName;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $merchantName
     */
    public function setMerchantName($merchantName)
    {
        $this->merchantName = $merchantName;
    }

    /**
     * The blacklisted merchant.
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $merchantId
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
    }

    /**
     * Identifier of the merchant we are blacklisting.
     *
     * @return string
     */
    public function getMerchantIdentifier()
    {
        return $this->merchantIdentifier;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $merchantIdentifier
     */
    public function setMerchantIdentifier($merchantIdentifier)
    {
        $this->merchantIdentifier = $merchantIdentifier;
    }

    /**
     * The blacklisted merchant.
     *
     * @return string
     */
    public function getMastercardMerchantId()
    {
        return $this->mastercardMerchantId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $mastercardMerchantId
     */
    public function setMastercardMerchantId($mastercardMerchantId)
    {
        $this->mastercardMerchantId = $mastercardMerchantId;
    }

    /**
     * Externally provided merchant identification.
     *
     * @return string
     */
    public function getExternalMerchantId()
    {
        return $this->externalMerchantId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $externalMerchantId
     */
    public function setExternalMerchantId($externalMerchantId)
    {
        $this->externalMerchantId = $externalMerchantId;
    }

    /**
     * Hash of the merchant we are blacklisting.
     *
     * @return string
     */
    public function getMerchantHash()
    {
        return $this->merchantHash;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $merchantHash
     */
    public function setMerchantHash($merchantHash)
    {
        $this->merchantHash = $merchantHash;
    }

    /**
     * @return Avatar
     */
    public function getMerchantAvatar()
    {
        return $this->merchantAvatar;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Avatar $merchantAvatar
     */
    public function setMerchantAvatar($merchantAvatar)
    {
        $this->merchantAvatar = $merchantAvatar;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->created)) {
            return false;
        }

        if (!is_null($this->updated)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->merchantName)) {
            return false;
        }

        if (!is_null($this->merchantId)) {
            return false;
        }

        if (!is_null($this->merchantIdentifier)) {
            return false;
        }

        if (!is_null($this->mastercardMerchantId)) {
            return false;
        }

        if (!is_null($this->externalMerchantId)) {
            return false;
        }

        if (!is_null($this->merchantHash)) {
            return false;
        }

        if (!is_null($this->merchantAvatar)) {
            return false;
        }

        return true;
    }
}
