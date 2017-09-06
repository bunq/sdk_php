<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\BunqModel;

/**
 * Used to view a customer.
 *
 * @generated
 */
class Customer extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_BILLING_ACCOUNT_ID = 'billing_account_id';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/customer';
    const ENDPOINT_URL_READ = 'user/%s/customer/%s';
    const ENDPOINT_URL_UPDATE = 'user/%s/customer/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'Customer';

    /**
     * The id of the customer.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the customer object's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the customer object's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The primary billing account account's id.
     *
     * @var string
     */
    protected $billingAccountId;

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponse<BunqModel[]|Customer[]>
     */
    public static function listing(ApiContext $apiContext, $userId, array $params = [], array $customHeaders = [])
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

        return static::fromJsonList($responseRaw, self::OBJECT_TYPE);
    }

    /**
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $customerId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<Customer>
     */
    public static function get(ApiContext $apiContext, $userId, $customerId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $customerId]
            ),
            [],
            $customHeaders
        );

        return static::fromJson($responseRaw);
    }

    /**
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $customerId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<int>
     */
    public static function update(ApiContext $apiContext, array $requestMap, $userId, $customerId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [$userId, $customerId]
            ),
            $requestMap,
            $customHeaders
        );

        return static::processForId($responseRaw);
    }

    /**
     * The id of the customer.
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
     * The timestamp of the customer object's creation.
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
     * The timestamp of the customer object's last update.
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
     * The primary billing account account's id.
     *
     * @return string
     */
    public function getBillingAccountId()
    {
        return $this->billingAccountId;
    }

    /**
     * @param string $billingAccountId
     */
    public function setBillingAccountId($billingAccountId)
    {
        $this->billingAccountId = $billingAccountId;
    }
}
