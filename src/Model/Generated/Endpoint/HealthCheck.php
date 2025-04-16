<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Exception\BunqException;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\AnchorObjectInterface;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\HealthCheckResult;

/**
 * Basic health check for uptime and instance health monitoring.
 *
 * @generated
 */
class HealthCheck extends BunqModel implements AnchorObjectInterface
{
    /**
     * Error constants.
     */
    const ERROR_NULL_FIELDS = 'All fields of an extended model or object are null.';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'health-check';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'HealthCheckResult';

    /**
     * @var HealthCheckResult
     */
    protected $healthResult;

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseHealthCheckList
     */
    public static function listing( array $params = [], array $customHeaders = []): BunqResponseHealthCheckList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                []
            ),
            $params,
            $customHeaders
        );

        return BunqResponseHealthCheckList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @return HealthCheckResult
     */
    public function getHealthResult()
    {
        return $this->healthResult;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param HealthCheckResult $healthResult
     */
    public function setHealthResult($healthResult)
    {
        $this->healthResult = $healthResult;
    }

    /**
     * @return BunqModel
     * @throws BunqException
     */
    public function getReferencedObject()
    {
        if (!is_null($this->healthResult)) {
            return $this->healthResult;
        }

        throw new BunqException(self::ERROR_NULL_FIELDS);
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->healthResult)) {
            return false;
        }

        return true;
    }
}
