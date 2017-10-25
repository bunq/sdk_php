<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Endpoint for generating and retrieving a new CVC2 code.
 *
 * @generated
 */
class CardGeneratedCvc2 extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/card/%s/generated-cvc2';
    const ENDPOINT_URL_READ = 'user/%s/card/%s/generated-cvc2/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/card/%s/generated-cvc2';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'CardGeneratedCvc2';

    /**
     * The cvc2 code.
     *
     * @var string
     */
    protected $cvc2;

    /**
     * The status of the cvc2. Can be AVAILABLE, USED, EXPIRED, BLOCKED.
     *
     * @var string
     */
    protected $status;

    /**
     * Expiry time of the cvc2.
     *
     * @var string
     */
    protected $expiryTime;

    /**
     * Generate a new CVC2 code for a card.
     *
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $cardId
     * @param string[] $customHeaders
     *
     * @return BunqResponseCardGeneratedCvc2
     */
    public static function create(ApiContext $apiContext, array $requestMap, int $userId, int $cardId, array $customHeaders = []): BunqResponseCardGeneratedCvc2
    {
        $apiClient = new ApiClient($apiContext);
        $apiClient->enableEncryption();
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId, $cardId]
            ),
            $requestMap,
            $customHeaders
        );

        return BunqResponseCardGeneratedCvc2::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * Get the details for a specific generated CVC2 code.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $cardId
     * @param int $cardGeneratedCvc2Id
     * @param string[] $customHeaders
     *
     * @return BunqResponseCardGeneratedCvc2
     */
    public static function get(ApiContext $apiContext, int $userId, int $cardId, int $cardGeneratedCvc2Id, array $customHeaders = []): BunqResponseCardGeneratedCvc2
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $cardId, $cardGeneratedCvc2Id]
            ),
            [],
            $customHeaders
        );

        return BunqResponseCardGeneratedCvc2::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * Get all generated CVC2 codes for a card.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $cardId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseCardGeneratedCvc2List
     */
    public static function listing(ApiContext $apiContext, int $userId, int $cardId, array $params = [], array $customHeaders = []): BunqResponseCardGeneratedCvc2List
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $cardId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseCardGeneratedCvc2List::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * The cvc2 code.
     *
     * @return string
     */
    public function getCvc2()
    {
        return $this->cvc2;
    }

    /**
     * @param string $cvc2
     */
    public function setCvc2($cvc2)
    {
        $this->cvc2 = $cvc2;
    }

    /**
     * The status of the cvc2. Can be AVAILABLE, USED, EXPIRED, BLOCKED.
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
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Expiry time of the cvc2.
     *
     * @return string
     */
    public function getExpiryTime()
    {
        return $this->expiryTime;
    }

    /**
     * @param string $expiryTime
     */
    public function setExpiryTime($expiryTime)
    {
        $this->expiryTime = $expiryTime;
    }
}
