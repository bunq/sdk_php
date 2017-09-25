<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Show the subscription billing contract for the authenticated user.
 *
 * @generated
 */
class BillingContractSubscription extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_SUBSCRIPTION_TYPE = 'subscription_type';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/billing-contract-subscription';
    const ENDPOINT_URL_LISTING = 'user/%s/billing-contract-subscription';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'BillingContractSubscription';

    /**
     * The id of the billing contract.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp when the billing contract was made.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp when the billing contract was last updated.
     *
     * @var string
     */
    protected $updated;

    /**
     * The date from when the billing contract is valid.
     *
     * @var string
     */
    protected $contractDateStart;

    /**
     * The date until when the billing contract is valid.
     *
     * @var string
     */
    protected $contractDateEnd;

    /**
     * The version of the billing contract.
     *
     * @var int
     */
    protected $contractVersion;

    /**
     * The subscription type of the user. Can be one of PERSON_SUPER_LIGHT_V1,
     * PERSON_LIGHT_V1, PERSON_MORE_V1, PERSON_FREE_V1, PERSON_PREMIUM_V1,
     * COMPANY_V1, or COMPANY_V2.
     *
     * @var string
     */
    protected $subscriptionType;

    /**
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param string[] $customHeaders
     *
     * @return BunqResponseBillingContractSubscription
     */
    public static function create(ApiContext $apiContext, array $requestMap, $userId, array $customHeaders = [])
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

        return BunqResponseBillingContractSubscription::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * Get all subscription billing contract for the authenticated user.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseBillingContractSubscriptionList
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

        return BunqResponseBillingContractSubscriptionList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * The id of the billing contract.
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
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * The timestamp when the billing contract was made.
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
    public function setCreated(string $created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp when the billing contract was last updated.
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
    public function setUpdated(string $updated)
    {
        $this->updated = $updated;
    }

    /**
     * The date from when the billing contract is valid.
     *
     * @return string
     */
    public function getContractDateStart()
    {
        return $this->contractDateStart;
    }

    /**
     * @param string $contractDateStart
     */
    public function setContractDateStart(string $contractDateStart)
    {
        $this->contractDateStart = $contractDateStart;
    }

    /**
     * The date until when the billing contract is valid.
     *
     * @return string
     */
    public function getContractDateEnd()
    {
        return $this->contractDateEnd;
    }

    /**
     * @param string $contractDateEnd
     */
    public function setContractDateEnd(string $contractDateEnd)
    {
        $this->contractDateEnd = $contractDateEnd;
    }

    /**
     * The version of the billing contract.
     *
     * @return int
     */
    public function getContractVersion()
    {
        return $this->contractVersion;
    }

    /**
     * @param int $contractVersion
     */
    public function setContractVersion(int $contractVersion)
    {
        $this->contractVersion = $contractVersion;
    }

    /**
     * The subscription type of the user. Can be one of PERSON_SUPER_LIGHT_V1,
     * PERSON_LIGHT_V1, PERSON_MORE_V1, PERSON_FREE_V1, PERSON_PREMIUM_V1,
     * COMPANY_V1, or COMPANY_V2.
     *
     * @return string
     */
    public function getSubscriptionType()
    {
        return $this->subscriptionType;
    }

    /**
     * @param string $subscriptionType
     */
    public function setSubscriptionType(string $subscriptionType)
    {
        $this->subscriptionType = $subscriptionType;
    }
}
