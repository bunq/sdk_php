<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Get a PDF export of an invoice.
 *
 * @generated
 */
class InvoiceExportPdf extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/invoice/%s/invoice-export/%s';
    const ENDPOINT_URL_CREATE = 'user/%s/invoice/%s/invoice-export';
    const ENDPOINT_URL_UPDATE = 'user/%s/invoice/%s/invoice-export/%s';
    const ENDPOINT_URL_DELETE = 'user/%s/invoice/%s/invoice-export/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'InvoiceExportPdf';

    /**
     * The id of the invoice export model.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the invoice export's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the invoice export's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The status of the invoice export.
     *
     * @var string
     */
    protected $status;

    /**
     * @param int $invoiceId
     * @param int $invoiceExportPdfId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInvoiceExportPdf
     */
    public static function get(int $invoiceId, int $invoiceExportPdfId, array $customHeaders = []): BunqResponseInvoiceExportPdf
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $invoiceId, $invoiceExportPdfId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseInvoiceExportPdf::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $invoiceId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(int $invoiceId, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), $invoiceId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param int $invoiceId
     * @param int $invoiceExportPdfId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(int $invoiceId, int $invoiceExportPdfId, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $invoiceId, $invoiceExportPdfId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param string[] $customHeaders
     * @param int $invoiceId
     * @param int $invoiceExportPdfId
     *
     * @return BunqResponseNull
     */
    public static function delete(int $invoiceId, int $invoiceExportPdfId, array $customHeaders = []): BunqResponseNull
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->delete(
            vsprintf(
                self::ENDPOINT_URL_DELETE,
                [static::determineUserId(), $invoiceId, $invoiceExportPdfId]
            ),
            $customHeaders
        );

        return BunqResponseNull::castFromBunqResponse(
            new BunqResponse(null, $responseRaw->getHeaders())
        );
    }

    /**
     * The id of the invoice export model.
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
     * The timestamp of the invoice export's creation.
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
     * The timestamp of the invoice export's last update.
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
     * The status of the invoice export.
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

        return true;
    }
}
