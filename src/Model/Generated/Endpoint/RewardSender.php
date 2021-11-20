<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\LabelUser;

/**
 * Used to view Rewards.
 *
 * @generated
 */
class RewardSender extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/reward-sender/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/reward-sender';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'RewardSender';

    /**
     * The id of the reward.
     *
     * @var int
     */
    protected $id;

    /**
     * The time the reward was created.
     *
     * @var string
     */
    protected $created;

    /**
     * The time the reward was last updated.
     *
     * @var string
     */
    protected $updated;

    /**
     * The status of the reward.
     *
     * @var string
     */
    protected $status;

    /**
     * The subStatus of the reward.
     *
     * @var string
     */
    protected $subStatus;

    /**
     * The type of the reward.
     *
     * @var string
     */
    protected $type;

    /**
     * The alias of the other user eligible for the reward award.
     *
     * @var LabelUser
     */
    protected $counterpartyAlias;

    /**
     * The amount that will be/was awarded as reward for the reward.
     *
     * @var Amount
     */
    protected $amountReward;

    /**
     * @param int $rewardSenderId
     * @param string[] $customHeaders
     *
     * @return BunqResponseRewardSender
     */
    public static function get(int $rewardSenderId, array $customHeaders = []): BunqResponseRewardSender
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $rewardSenderId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseRewardSender::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseRewardSenderList
     */
    public static function listing( array $params = [], array $customHeaders = []): BunqResponseRewardSenderList
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

        return BunqResponseRewardSenderList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the reward.
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
     * The time the reward was created.
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
     * The time the reward was last updated.
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
     * The status of the reward.
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
     * The subStatus of the reward.
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
     * The type of the reward.
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
     * The alias of the other user eligible for the reward award.
     *
     * @return LabelUser
     */
    public function getCounterpartyAlias()
    {
        return $this->counterpartyAlias;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelUser $counterpartyAlias
     */
    public function setCounterpartyAlias($counterpartyAlias)
    {
        $this->counterpartyAlias = $counterpartyAlias;
    }

    /**
     * The amount that will be/was awarded as reward for the reward.
     *
     * @return Amount
     */
    public function getAmountReward()
    {
        return $this->amountReward;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountReward
     */
    public function setAmountReward($amountReward)
    {
        $this->amountReward = $amountReward;
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

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->subStatus)) {
            return false;
        }

        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->counterpartyAlias)) {
            return false;
        }

        if (!is_null($this->amountReward)) {
            return false;
        }

        return true;
    }
}
