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
    const ENDPOINT_URL_UPDATE = 'user/%s/card/%s/generated-cvc2/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/card/%s/generated-cvc2';

    /**
     * Field constants.
     */
    const FIELD_TYPE = 'type';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'CardGeneratedCvc2';

    /**
     * The id of the cvc code.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the cvc code's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the cvc code's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The type of generated cvc2. Can be STATIC or GENERATED.
     *
     * @var string
     */
    protected $type;

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
     * The type of generated cvc2. Can be STATIC or GENERATED.
     *
     * @var string|null
     */
    protected $typeFieldForRequest;

    /**
     * @param string|null $type The type of generated cvc2. Can be STATIC or
     * GENERATED.
     */
    public function __construct(string  $type = null)
    {
        $this->typeFieldForRequest = $type;
    }

    /**
     * Generate a new CVC2 code for a card.
     *
     * @param int $cardId
     * @param string|null $type The type of generated cvc2. Can be STATIC or
     * GENERATED.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(int $cardId, string  $type = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), $cardId]
            ),
            [self::FIELD_TYPE => $type],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Get the details for a specific generated CVC2 code.
     *
     * @param int $cardId
     * @param int $cardGeneratedCvc2Id
     * @param string[] $customHeaders
     *
     * @return BunqResponseCardGeneratedCvc2
     */
    public static function get(int $cardId, int $cardGeneratedCvc2Id, array $customHeaders = []): BunqResponseCardGeneratedCvc2
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $cardId, $cardGeneratedCvc2Id]
            ),
            [],
            $customHeaders
        );

        return BunqResponseCardGeneratedCvc2::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $cardId
     * @param int $cardGeneratedCvc2Id
     * @param string|null $type The type of generated cvc2. Can be STATIC or
     * GENERATED.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(int $cardId, int $cardGeneratedCvc2Id, string  $type = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $cardId, $cardGeneratedCvc2Id]
            ),
            [self::FIELD_TYPE => $type],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Get all generated CVC2 codes for a card.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $cardId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseCardGeneratedCvc2List
     */
    public static function listing(int $cardId, array $params = [], array $customHeaders = []): BunqResponseCardGeneratedCvc2List
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

        return BunqResponseCardGeneratedCvc2List::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the cvc code.
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
     * The timestamp of the cvc code's creation.
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
     * The timestamp of the cvc code's last update.
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
     * The type of generated cvc2. Can be STATIC or GENERATED.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
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
     * Expiry time of the cvc2.
     *
     * @return string
     */
    public function getExpiryTime()
    {
        return $this->expiryTime;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $expiryTime
     */
    public function setExpiryTime($expiryTime)
    {
        $this->expiryTime = $expiryTime;
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

        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->cvc2)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->expiryTime)) {
            return false;
        }

        return true;
    }
}
