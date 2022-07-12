<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\LabelMonetaryAccount;

/**
 * Endpoint for apps to fetch a challenge request.
 *
 * @generated
 */
class MasterCardIdentityCheckChallengeRequestUser extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/challenge-request/%s';
    const ENDPOINT_URL_UPDATE = 'user/%s/challenge-request/%s';

    /**
     * Field constants.
     */
    const FIELD_STATUS = 'status';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'MasterCardIdentityCheckChallengeRequest';

    /**
     * The transaction amount.
     *
     * @var string
     */
    protected $amount;

    /**
     * When the secure code expires.
     *
     * @var string
     */
    protected $expiryTime;

    /**
     * The description of the purchase. NULL if no description is given.
     *
     * @var string
     */
    protected $description;

    /**
     * The status of the secure code. Can be PENDING, ACCEPTED, REJECTED,
     * EXPIRED.
     *
     * @var string
     */
    protected $status;

    /**
     * The monetary account label of the counterparty.
     *
     * @var LabelMonetaryAccount
     */
    protected $counterpartyAlias;

    /**
     * The status of the identity check. Can be ACCEPTED_PENDING_RESPONSE or
     * REJECTED_PENDING_RESPONSE.
     *
     * @var string
     */
    protected $statusFieldForRequest;

    /**
     * @param string $status The status of the identity check. Can be
     * ACCEPTED_PENDING_RESPONSE or REJECTED_PENDING_RESPONSE.
     */
    public function __construct(string  $status)
    {
        $this->statusFieldForRequest = $status;
    }

    /**
     * @param int $masterCardIdentityCheckChallengeRequestUserId
     * @param string[] $customHeaders
     *
     * @return BunqResponseMasterCardIdentityCheckChallengeRequestUser
     */
    public static function get(int $masterCardIdentityCheckChallengeRequestUserId, array $customHeaders = []): BunqResponseMasterCardIdentityCheckChallengeRequestUser
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $masterCardIdentityCheckChallengeRequestUserId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseMasterCardIdentityCheckChallengeRequestUser::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $masterCardIdentityCheckChallengeRequestUserId
     * @param string|null $status The status of the identity check. Can be
     * ACCEPTED_PENDING_RESPONSE or REJECTED_PENDING_RESPONSE.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(int $masterCardIdentityCheckChallengeRequestUserId, string  $status = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $masterCardIdentityCheckChallengeRequestUserId]
            ),
            [self::FIELD_STATUS => $status],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * The transaction amount.
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * When the secure code expires.
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
     * The description of the purchase. NULL if no description is given.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * The status of the secure code. Can be PENDING, ACCEPTED, REJECTED,
     * EXPIRED.
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
     * The monetary account label of the counterparty.
     *
     * @return LabelMonetaryAccount
     */
    public function getCounterpartyAlias()
    {
        return $this->counterpartyAlias;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelMonetaryAccount $counterpartyAlias
     */
    public function setCounterpartyAlias($counterpartyAlias)
    {
        $this->counterpartyAlias = $counterpartyAlias;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->amount)) {
            return false;
        }

        if (!is_null($this->expiryTime)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->counterpartyAlias)) {
            return false;
        }

        return true;
    }
}
