<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Address;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\InvoiceItemGroup;
use bunq\Model\Generated\Object\LabelMonetaryAccount;

/**
 * Used to view a bunq invoice.
 *
 * @generated
 */
class Invoice extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_STATUS = 'status';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_EXTERNAL_URL = 'external_url';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/invoice';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/invoice/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'Invoice';

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
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseInvoiceList
     */
    public static function listing(ApiContext $apiContext, $userId, $monetaryAccountId, array $params = [], array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $monetaryAccountId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseInvoiceList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $invoiceId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInvoice
     */
    public static function get(ApiContext $apiContext, $userId, $monetaryAccountId, $invoiceId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $monetaryAccountId, $invoiceId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseInvoice::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
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
     */
    public function setId(int $id)
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
     */
    public function setCreated(string $created)
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
     */
    public function setUpdated(string $updated)
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
     */
    public function setInvoiceDate(string $invoiceDate)
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
     */
    public function setInvoiceNumber(string $invoiceNumber)
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
     */
    public function setStatus(string $status)
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
     */
    public function setGroup(array $group)
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
     */
    public function setTotalVatInclusive(Amount $totalVatInclusive)
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
     */
    public function setTotalVatExclusive(Amount $totalVatExclusive)
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
     */
    public function setTotalVat(Amount $totalVat)
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
     */
    public function setAlias(LabelMonetaryAccount $alias)
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
     */
    public function setAddress(Address $address)
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
     */
    public function setCounterpartyAlias(LabelMonetaryAccount $counterpartyAlias)
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
     */
    public function setCounterpartyAddress(Address $counterpartyAddress)
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
     */
    public function setChamberOfCommerceNumber(string $chamberOfCommerceNumber)
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
     */
    public function setVatNumber(string $vatNumber)
    {
        $this->vatNumber = $vatNumber;
    }
}
