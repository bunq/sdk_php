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
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/billing-contract-subscription';

    /**
     * Field constants.
     */
    const FIELD_SUBSCRIPTION_TYPE = 'subscription_type';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'BillingContractSubscription';

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
     * The subscription type the user will have after a subscription downgrade.
     * Will be null if downgrading is not possible.
     *
     * @var string
     */
    protected $subscriptionTypeDowngrade;

    /**
     * The subscription status.
     *
     * @var string
     */
    protected $status;

    /**
     * The subscription substatus.
     *
     * @var string
     */
    protected $subStatus;

    /**
     * The subscription type of the user. Can be one of PERSON_LIGHT_V1,
     * PERSON_MORE_V1, PERSON_FREE_V1, PERSON_PREMIUM_V1, COMPANY_V1, or
     * COMPANY_V2.
     *
     * @var string
     */
    protected $subscriptionTypeFieldForRequest;

    /**
     * @param string $subscriptionType The subscription type of the user. Can be
     * one of PERSON_LIGHT_V1, PERSON_MORE_V1, PERSON_FREE_V1,
     * PERSON_PREMIUM_V1, COMPANY_V1, or COMPANY_V2.
     */
    public function __construct(string  $subscriptionType)
    {
        $this->subscriptionTypeFieldForRequest = $subscriptionType;
    }

    /**
     * Get all subscription billing contract for the authenticated user.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseBillingContractSubscriptionList
     */
    public static function listing( array $params = [], array $customHeaders = []): BunqResponseBillingContractSubscriptionList
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

        return BunqResponseBillingContractSubscriptionList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
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
     * The timestamp when the billing contract was made.
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
     * The timestamp when the billing contract was last updated.
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
     * The date from when the billing contract is valid.
     *
     * @return string
     */
    public function getContractDateStart()
    {
        return $this->contractDateStart;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $contractDateStart
     */
    public function setContractDateStart($contractDateStart)
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $contractDateEnd
     */
    public function setContractDateEnd($contractDateEnd)
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param int $contractVersion
     */
    public function setContractVersion($contractVersion)
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
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $subscriptionType
     */
    public function setSubscriptionType($subscriptionType)
    {
        $this->subscriptionType = $subscriptionType;
    }

    /**
     * The subscription type the user will have after a subscription downgrade.
     * Will be null if downgrading is not possible.
     *
     * @return string
     */
    public function getSubscriptionTypeDowngrade()
    {
        return $this->subscriptionTypeDowngrade;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $subscriptionTypeDowngrade
     */
    public function setSubscriptionTypeDowngrade($subscriptionTypeDowngrade)
    {
        $this->subscriptionTypeDowngrade = $subscriptionTypeDowngrade;
    }

    /**
     * The subscription status.
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
     * The subscription substatus.
     *
     * @return string
     */
    public function getSubStatus()
    {
        return $this->subStatus;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $subStatus
     */
    public function setSubStatus($subStatus)
    {
        $this->subStatus = $subStatus;
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

        if (!is_null($this->contractDateStart)) {
            return false;
        }

        if (!is_null($this->contractDateEnd)) {
            return false;
        }

        if (!is_null($this->contractVersion)) {
            return false;
        }

        if (!is_null($this->subscriptionType)) {
            return false;
        }

        if (!is_null($this->subscriptionTypeDowngrade)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->subStatus)) {
            return false;
        }

        return true;
    }
}
