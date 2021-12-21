<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Used to serialize ExportStatementCardPdf
 *
 * @generated
 */
class ExportStatementCardPdf extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/card/%s/export-statement-card-pdf';
    const ENDPOINT_URL_READ = 'user/%s/card/%s/export-statement-card-pdf/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/card/%s/export-statement-card-pdf';
    const ENDPOINT_URL_DELETE = 'user/%s/card/%s/export-statement-card-pdf/%s';

    /**
     * Field constants.
     */
    const FIELD_DATE_START = 'date_start';
    const FIELD_DATE_END = 'date_end';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'ExportStatementCardPdf';

    /**
     * The id of the customer statement model.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the statement model's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the statement model's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The date from when this statement shows transactions.
     *
     * @var string
     */
    protected $dateStart;

    /**
     * The date until which statement shows transactions.
     *
     * @var string
     */
    protected $dateEnd;

    /**
     * The status of the export.
     *
     * @var string
     */
    protected $status;

    /**
     * The card for which this statement was created.
     *
     * @var int
     */
    protected $cardId;

    /**
     * The start date for making statements.
     *
     * @var string
     */
    protected $dateStartFieldForRequest;

    /**
     * The end date for making statements.
     *
     * @var string
     */
    protected $dateEndFieldForRequest;

    /**
     * @param string $dateStart The start date for making statements.
     * @param string $dateEnd The end date for making statements.
     */
    public function __construct(string  $dateStart, string  $dateEnd)
    {
        $this->dateStartFieldForRequest = $dateStart;
        $this->dateEndFieldForRequest = $dateEnd;
    }

    /**
     * @param int $cardId
     * @param string $dateStart The start date for making statements.
     * @param string $dateEnd The end date for making statements.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(int $cardId, string  $dateStart, string  $dateEnd, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), $cardId]
            ),
            [self::FIELD_DATE_START => $dateStart,
self::FIELD_DATE_END => $dateEnd],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param int $cardId
     * @param int $exportStatementCardPdfId
     * @param string[] $customHeaders
     *
     * @return BunqResponseExportStatementCardPdf
     */
    public static function get(int $cardId, int $exportStatementCardPdfId, array $customHeaders = []): BunqResponseExportStatementCardPdf
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $cardId, $exportStatementCardPdfId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseExportStatementCardPdf::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $cardId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseExportStatementCardPdfList
     */
    public static function listing(int $cardId, array $params = [], array $customHeaders = []): BunqResponseExportStatementCardPdfList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), $cardId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseExportStatementCardPdfList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param string[] $customHeaders
     * @param int $cardId
     * @param int $exportStatementCardPdfId
     *
     * @return BunqResponseNull
     */
    public static function delete(int $cardId, int $exportStatementCardPdfId, array $customHeaders = []): BunqResponseNull
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->delete(
            vsprintf(
                self::ENDPOINT_URL_DELETE,
                [static::determineUserId(), $cardId, $exportStatementCardPdfId]
            ),
            $customHeaders
        );

        return BunqResponseNull::castFromBunqResponse(
            new BunqResponse(null, $responseRaw->getHeaders())
        );
    }

    /**
     * The id of the customer statement model.
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
     * The timestamp of the statement model's creation.
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
     * The timestamp of the statement model's last update.
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
     * The date from when this statement shows transactions.
     *
     * @return string
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $dateStart
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    }

    /**
     * The date until which statement shows transactions.
     *
     * @return string
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $dateEnd
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
    }

    /**
     * The status of the export.
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
     * The card for which this statement was created.
     *
     * @return int
     */
    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $cardId
     */
    public function setCardId($cardId)
    {
        $this->cardId = $cardId;
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

        if (!is_null($this->dateStart)) {
            return false;
        }

        if (!is_null($this->dateEnd)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->cardId)) {
            return false;
        }

        return true;
    }
}
