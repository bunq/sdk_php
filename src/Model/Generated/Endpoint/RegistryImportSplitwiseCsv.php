<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Used to upload a CSV export from Splitwise, and create a new Registry
 * from it.
 *
 * @generated
 */
class RegistryImportSplitwiseCsv extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'registry-import-splitwise-csv';

    /**
     * Object type.
     */
    const OBJECT_TYPE_POST = 'RegistryImport';

    /**
     * The registry details.
     *
     * @var Registry
     */
    protected $registry;

    /**
     * @param string[] $customHeaders
     *
     * @return BunqResponseRegistryImportSplitwiseCsv
     */
    public static function create( array $customHeaders = []): BunqResponseRegistryImportSplitwiseCsv
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                []
            ),
            [],
            $customHeaders
        );

        return BunqResponseRegistryImportSplitwiseCsv::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_POST)
        );
    }

    /**
     * The registry details.
     *
     * @return Registry
     */
    public function getRegistry()
    {
        return $this->registry;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Registry $registry
     */
    public function setRegistry($registry)
    {
        $this->registry = $registry;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->registry)) {
            return false;
        }

        return true;
    }
}
