<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\LabelUser;

/**
 * Used to create new and read existing annual overviews of all the user's
 * monetary accounts. Once created, annual overviews can be downloaded in
 * PDF format via the 'export-annual-overview/{id}/content' endpoint.
 *
 * @generated
 */
class ExportAnnualOverview extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/export-annual-overview';
    const ENDPOINT_URL_READ = 'user/%s/export-annual-overview/%s';
    const ENDPOINT_URL_DELETE = 'user/%s/export-annual-overview/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/export-annual-overview';

    /**
     * Field constants.
     */
    const FIELD_YEAR = 'year';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'ExportAnnualOverview';

    /**
     * The id of the annual overview as created on the server.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the annual overview 's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the annual overview 's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The year for which the overview is.
     *
     * @var int
     */
    protected $year;

    /**
     * The user to which this annual overview belongs.
     *
     * @var LabelUser
     */
    protected $aliasUser;

    /**
     * The year for which the overview is.
     *
     * @var int
     */
    protected $yearFieldForRequest;

    /**
     * @param int $year The year for which the overview is.
     */
    public function __construct(int  $year)
    {
        $this->yearFieldForRequest = $year;
    }

    /**
     * Create a new annual overview for a specific year. An overview can be
     * generated only for a past year.
     *
     * @param int $year The year for which the overview is.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(int  $year, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [self::FIELD_YEAR => $year],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Get an annual overview for a user by its id.
     *
     * @param int $exportAnnualOverviewId
     * @param string[] $customHeaders
     *
     * @return BunqResponseExportAnnualOverview
     */
    public static function get(int $exportAnnualOverviewId, array $customHeaders = []): BunqResponseExportAnnualOverview
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $exportAnnualOverviewId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseExportAnnualOverview::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param string[] $customHeaders
     * @param int $exportAnnualOverviewId
     *
     * @return BunqResponseNull
     */
    public static function delete(int $exportAnnualOverviewId, array $customHeaders = []): BunqResponseNull
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->delete(
            vsprintf(
                self::ENDPOINT_URL_DELETE,
                [static::determineUserId(), $exportAnnualOverviewId]
            ),
            $customHeaders
        );

        return BunqResponseNull::castFromBunqResponse(
            new BunqResponse(null, $responseRaw->getHeaders())
        );
    }

    /**
     * List all the annual overviews for a user.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseExportAnnualOverviewList
     */
    public static function listing( array $params = [], array $customHeaders = []): BunqResponseExportAnnualOverviewList
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

        return BunqResponseExportAnnualOverviewList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the annual overview as created on the server.
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
     * The timestamp of the annual overview 's creation.
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
     * The timestamp of the annual overview 's last update.
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
     * The year for which the overview is.
     *
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * The user to which this annual overview belongs.
     *
     * @return LabelUser
     */
    public function getAliasUser()
    {
        return $this->aliasUser;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelUser $aliasUser
     */
    public function setAliasUser($aliasUser)
    {
        $this->aliasUser = $aliasUser;
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

        if (!is_null($this->year)) {
            return false;
        }

        if (!is_null($this->aliasUser)) {
            return false;
        }

        return true;
    }
}
