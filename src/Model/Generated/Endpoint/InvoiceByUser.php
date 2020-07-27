<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Address;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\InvoiceItemGroup;
use bunq\Model\Generated\Object\LabelMonetaryAccount;

/**
 * Used to list bunq invoices by user.
 *
 * @generated
 */
class InvoiceByUser extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/invoice';
    const ENDPOINT_URL_READ = 'user/%s/invoice/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'Invoice';

    /**
     * The id of the invoice object.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the invoice object's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the invoice object's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The invoice date.
     *
     * @var string
     */
    protected $invoiceDate;

    /**
     * The invoice number.
     *
     * @var string
     */
    protected $invoiceNumber;

    /**
     * The invoice status.
     *
     * @var string
     */
    protected $status;

    /**
     * The invoice item groups.
     *
     * @var InvoiceItemGroup[]
     */
    protected $group;

    /**
     * The total discounted item price including VAT.
     *
     * @var Amount
     */
    protected $totalVatInclusive;

    /**
     * The total discounted item price excluding VAT.
     *
     * @var Amount
     */
    protected $totalVatExclusive;

    /**
     * The VAT on the total discounted item price.
     *
     * @var Amount
     */
    protected $totalVat;

    /**
     * The label that's displayed to the counterparty with the invoice. Includes
     * user.
     *
     * @var LabelMonetaryAccount
     */
    protected $alias;

    /**
     * The customer's address.
     *
     * @var Address
     */
    protected $address;

    /**
     * The label of the counterparty of the invoice. Includes user.
     *
     * @var LabelMonetaryAccount
     */
    protected $counterpartyAlias;

    /**
     * The company's address.
     *
     * @var Address
     */
    protected $counterpartyAddress;

    /**
     * The company's chamber of commerce number.
     *
     * @var string
     */
    protected $chamberOfCommerceNumber;

    /**
     * The company's chamber of commerce number.
     *
     * @var string
     */
    protected $vatNumber;

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseInvoiceByUserList
     */
    public static function listing(array $params = [], array $customHeaders = []): BunqResponseInvoiceByUserList
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

        return BunqResponseInvoiceByUserList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $invoiceByUserId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInvoiceByUser
     */
    public static function get(int $invoiceByUserId, array $customHeaders = []): BunqResponseInvoiceByUser
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $invoiceByUserId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseInvoiceByUser::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the invoice object.
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
     * The timestamp of the invoice object's creation.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the invoice object's last update.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The invoice date.
     *
     * @return string
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * @param string $invoiceDate
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;
    }

    /**
     * The invoice number.
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * @param string $invoiceNumber
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
    }

    /**
     * The invoice status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The invoice item groups.
     *
     * @return InvoiceItemGroup[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param InvoiceItemGroup[] $group
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setGroup($group)
    {
        $this->group = $group;
    }

    /**
     * The total discounted item price including VAT.
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
     * The total discounted item price excluding VAT.
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
     * The VAT on the total discounted item price.
     *
     * @return Amount
     */
    public function getTotalVat()
    {
        return $this->totalVat;
    }

    /**
     * @param Amount $totalVat
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setTotalVat($totalVat)
    {
        $this->totalVat = $totalVat;
    }

    /**
     * The label that's displayed to the counterparty with the invoice. Includes
     * user.
     *
     * @return LabelMonetaryAccount
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param LabelMonetaryAccount $alias
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * The customer's address.
     *
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address $address
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * The label of the counterparty of the invoice. Includes user.
     *
     * @return LabelMonetaryAccount
     */
    public function getCounterpartyAlias()
    {
        return $this->counterpartyAlias;
    }

    /**
     * @param LabelMonetaryAccount $counterpartyAlias
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCounterpartyAlias($counterpartyAlias)
    {
        $this->counterpartyAlias = $counterpartyAlias;
    }

    /**
     * The company's address.
     *
     * @return Address
     */
    public function getCounterpartyAddress()
    {
        return $this->counterpartyAddress;
    }

    /**
     * @param Address $counterpartyAddress
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCounterpartyAddress($counterpartyAddress)
    {
        $this->counterpartyAddress = $counterpartyAddress;
    }

    /**
     * The company's chamber of commerce number.
     *
     * @return string
     */
    public function getChamberOfCommerceNumber()
    {
        return $this->chamberOfCommerceNumber;
    }

    /**
     * @param string $chamberOfCommerceNumber
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setChamberOfCommerceNumber($chamberOfCommerceNumber)
    {
        $this->chamberOfCommerceNumber = $chamberOfCommerceNumber;
    }

    /**
     * The company's chamber of commerce number.
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    /**
     * @param string $vatNumber
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setVatNumber($vatNumber)
    {
        $this->vatNumber = $vatNumber;
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

        if (!is_null($this->invoiceDate)) {
            return false;
        }

        if (!is_null($this->invoiceNumber)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->group)) {
            return false;
        }

        if (!is_null($this->totalVatInclusive)) {
            return false;
        }

        if (!is_null($this->totalVatExclusive)) {
            return false;
        }

        if (!is_null($this->totalVat)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->address)) {
            return false;
        }

        if (!is_null($this->counterpartyAlias)) {
            return false;
        }

        if (!is_null($this->counterpartyAddress)) {
            return false;
        }

        if (!is_null($this->chamberOfCommerceNumber)) {
            return false;
        }

        if (!is_null($this->vatNumber)) {
            return false;
        }

        return true;
    }
}
