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
    const FIELD_MERCHANT_ID = 'merchant_id';
    const FIELD_MERCHANT_NAME = 'merchant_name';
    const FIELD_MERCHANT_IDENTIFIER = 'merchant_identifier';

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
     * The blacklisted merchant.
     *
     * @var string
     */
    protected $merchantId;

    /**
     * The name of the merchant.
     *
     * @var string
     */
    protected $merchantName;

    /**
     * Identifier of the merchant we are blacklisting.
     *
     * @var string
     */
    protected $merchantIdentifier;

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
     * The merchant id.
     *
     * @var string
     */
    protected $merchantIdFieldForRequest;

    /**
     * The name of the merchant.
     *
     * @var string
     */
    protected $merchantNameFieldForRequest;

    /**
     * Optional identifier of the merchant to blacklist.
     *
     * @var string|null
     */
    protected $merchantIdentifierFieldForRequest;

    /**
     * @param string $merchantId The merchant id.
     * @param string $merchantName The name of the merchant.
     * @param string|null $merchantIdentifier Optional identifier of the
     * merchant to blacklist.
     */
    public function __construct(string  $merchantId, string  $merchantName, string  $merchantIdentifier = null)
    {
        $this->merchantIdFieldForRequest = $merchantId;
        $this->merchantNameFieldForRequest = $merchantName;
        $this->merchantIdentifierFieldForRequest = $merchantIdentifier;
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

        if (!is_null($this->merchantId)) {
            return false;
        }

        if (!is_null($this->merchantName)) {
            return false;
        }

        if (!is_null($this->merchantIdentifier)) {
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
