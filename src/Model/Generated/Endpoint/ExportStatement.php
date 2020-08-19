<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\LabelMonetaryAccount;

/**
 * Used to create new and read existing statement exports. Statement exports
 * can be created in either CSV, MT940 or PDF file format.
 *
 * @generated
 */
class ExportStatement extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/customer-statement';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/customer-statement/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/customer-statement';
    const ENDPOINT_URL_DELETE = 'user/%s/monetary-account/%s/customer-statement/%s';

    /**
     * Field constants.
     */
    const FIELD_STATEMENT_FORMAT = 'statement_format';
    const FIELD_DATE_START = 'date_start';
    const FIELD_DATE_END = 'date_end';
    const FIELD_REGIONAL_FORMAT = 'regional_format';
    const FIELD_INCLUDE_ATTACHMENT = 'include_attachment';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'CustomerStatement';

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
     * MT940 Statement number. Unique per monetary account.
     *
     * @var int
     */
    protected $statementNumber;

    /**
     * The format of statement.
     *
     * @var string
     */
    protected $statementFormat;

    /**
     * The regional format of a CSV statement.
     *
     * @var string
     */
    protected $regionalFormat;

    /**
     * The monetary account for which this statement was created.
     *
     * @var LabelMonetaryAccount
     */
    protected $aliasMonetaryAccount;

    /**
     * The format type of statement. Allowed values: MT940, CSV, PDF.
     *
     * @var string
     */
    protected $statementFormatFieldForRequest;

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
     * Required for CSV exports. The regional format of the statement, can be
     * UK_US (comma-separated) or EUROPEAN (semicolon-separated).
     *
     * @var string|null
     */
    protected $regionalFormatFieldForRequest;

    /**
     * Only for PDF exports. Includes attachments to mutations in the export,
     * such as scanned receipts.
     *
     * @var bool|null
     */
    protected $includeAttachmentFieldForRequest;

    /**
     * @param string $statementFormat The format type of statement. Allowed
     * values: MT940, CSV, PDF.
     * @param string $dateStart The start date for making statements.
     * @param string $dateEnd The end date for making statements.
     * @param string|null $regionalFormat Required for CSV exports. The regional
     * format of the statement, can be UK_US (comma-separated) or EUROPEAN
     * (semicolon-separated).
     * @param bool|null $includeAttachment Only for PDF exports. Includes
     * attachments to mutations in the export, such as scanned receipts.
     */
    public function __construct(
        string $statementFormat,
        string $dateStart,
        string $dateEnd,
        string $regionalFormat = null,
        bool $includeAttachment = null
    ) {
        $this->statementFormatFieldForRequest = $statementFormat;
        $this->dateStartFieldForRequest = $dateStart;
        $this->dateEndFieldForRequest = $dateEnd;
        $this->regionalFormatFieldForRequest = $regionalFormat;
        $this->includeAttachmentFieldForRequest = $includeAttachment;
    }

    /**
     * @param string $statementFormat The format type of statement. Allowed
     * values: MT940, CSV, PDF.
     * @param string $dateStart The start date for making statements.
     * @param string $dateEnd The end date for making statements.
     * @param int|null $monetaryAccountId
     * @param string|null $regionalFormat Required for CSV exports. The regional
     * format of the statement, can be UK_US (comma-separated) or EUROPEAN
     * (semicolon-separated).
     * @param bool|null $includeAttachment Only for PDF exports. Includes
     * attachments to mutations in the export, such as scanned receipts.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        string $statementFormat,
        string $dateStart,
        string $dateEnd,
        int $monetaryAccountId = null,
        string $regionalFormat = null,
        bool $includeAttachment = null,
        array $customHeaders = []
    ): BunqResponseInt {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            [
                self::FIELD_STATEMENT_FORMAT => $statementFormat,
                self::FIELD_DATE_START => $dateStart,
                self::FIELD_DATE_END => $dateEnd,
                self::FIELD_REGIONAL_FORMAT => $regionalFormat,
                self::FIELD_INCLUDE_ATTACHMENT => $includeAttachment,
            ],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param int $exportStatementId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseExportStatement
     */
    public static function get(
        int $exportStatementId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseExportStatement {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $exportStatementId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseExportStatement::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseExportStatementList
     */
    public static function listing(
        int $monetaryAccountId = null,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseExportStatementList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseExportStatementList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param string[] $customHeaders
     * @param int $exportStatementId
     *
     * @return BunqResponseNull
     */
    public static function delete(
        int $exportStatementId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseNull {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->delete(
            vsprintf(
                self::ENDPOINT_URL_DELETE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $exportStatementId]
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
     * The timestamp of the statement model's creation.
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
     * The timestamp of the statement model's last update.
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
     * The date from when this statement shows transactions.
     *
     * @return string
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * @param string $dateStart
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     * @param string $dateEnd
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
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
     * MT940 Statement number. Unique per monetary account.
     *
     * @return int
     */
    public function getStatementNumber()
    {
        return $this->statementNumber;
    }

    /**
     * @param int $statementNumber
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setStatementNumber($statementNumber)
    {
        $this->statementNumber = $statementNumber;
    }

    /**
     * The format of statement.
     *
     * @return string
     */
    public function getStatementFormat()
    {
        return $this->statementFormat;
    }

    /**
     * @param string $statementFormat
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setStatementFormat($statementFormat)
    {
        $this->statementFormat = $statementFormat;
    }

    /**
     * The regional format of a CSV statement.
     *
     * @return string
     */
    public function getRegionalFormat()
    {
        return $this->regionalFormat;
    }

    /**
     * @param string $regionalFormat
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setRegionalFormat($regionalFormat)
    {
        $this->regionalFormat = $regionalFormat;
    }

    /**
     * The monetary account for which this statement was created.
     *
     * @return LabelMonetaryAccount
     */
    public function getAliasMonetaryAccount()
    {
        return $this->aliasMonetaryAccount;
    }

    /**
     * @param LabelMonetaryAccount $aliasMonetaryAccount
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setAliasMonetaryAccount($aliasMonetaryAccount)
    {
        $this->aliasMonetaryAccount = $aliasMonetaryAccount;
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

        if (!is_null($this->statementNumber)) {
            return false;
        }

        if (!is_null($this->statementFormat)) {
            return false;
        }

        if (!is_null($this->regionalFormat)) {
            return false;
        }

        if (!is_null($this->aliasMonetaryAccount)) {
            return false;
        }

        return true;
    }
}
