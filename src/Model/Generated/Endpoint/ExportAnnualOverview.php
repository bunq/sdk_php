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
     * Field constants.
     */
    const FIELD_YEAR = 'year';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/export-annual-overview';
    const ENDPOINT_URL_READ = 'user/%s/export-annual-overview/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/export-annual-overview';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'ExportAnnualOverview';

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
     * Create a new annual overview for a specific year. An overview can be
     * generated only for a past year.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(ApiContext $apiContext, array $requestMap, int $userId, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Get an annual overview for a user by its id.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $exportAnnualOverviewId
     * @param string[] $customHeaders
     *
     * @return BunqResponseExportAnnualOverview
     */
    public static function get(ApiContext $apiContext, int $userId, int $exportAnnualOverviewId, array $customHeaders = []): BunqResponseExportAnnualOverview
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $exportAnnualOverviewId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseExportAnnualOverview::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * List all the annual overviews for a user.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseExportAnnualOverviewList
     */
    public static function listing(ApiContext $apiContext, int $userId, array $params = [], array $customHeaders = []): BunqResponseExportAnnualOverviewList
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseExportAnnualOverviewList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE)
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
     * @param LabelUser $aliasUser
     */
    public function setAliasUser($aliasUser)
    {
        $this->aliasUser = $aliasUser;
    }
}
