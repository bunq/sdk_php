<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * bunq.me fundraiser result containing all payments.
 *
 * @generated
 */
class BunqMeFundraiserResult extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/bunqme-fundraiser-result/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'BunqMeFundraiserResult';

    /**
     * The id of the bunq.me.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp when the bunq.me was created.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp when the bunq.me was last updated.
     *
     * @var string
     */
    protected $updated;

    /**
     * The bunq.me fundraiser profile.
     *
     * @var BunqMeFundraiserProfile
     */
    protected $bunqmeFundraiserProfile;

    /**
     * The list of payments, paid to the bunq.me fundraiser profile.
     *
     * @var Payment[]
     */
    protected $payments;

    /**
     * @param int $bunqMeFundraiserResultId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseBunqMeFundraiserResult
     */
    public static function get(int $bunqMeFundraiserResultId, int $monetaryAccountId = null, array $customHeaders = []): BunqResponseBunqMeFundraiserResult
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $bunqMeFundraiserResultId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseBunqMeFundraiserResult::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the bunq.me.
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
     * The timestamp when the bunq.me was created.
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
     * The timestamp when the bunq.me was last updated.
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
     * The bunq.me fundraiser profile.
     *
     * @return BunqMeFundraiserProfile
     */
    public function getBunqmeFundraiserProfile()
    {
        return $this->bunqmeFundraiserProfile;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param BunqMeFundraiserProfile $bunqmeFundraiserProfile
     */
    public function setBunqmeFundraiserProfile($bunqmeFundraiserProfile)
    {
        $this->bunqmeFundraiserProfile = $bunqmeFundraiserProfile;
    }

    /**
     * The list of payments, paid to the bunq.me fundraiser profile.
     *
     * @return Payment[]
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Payment[] $payments
     */
    public function setPayments($payments)
    {
        $this->payments = $payments;
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

        if (!is_null($this->bunqmeFundraiserProfile)) {
            return false;
        }

        if (!is_null($this->payments)) {
            return false;
        }

        return true;
    }
}
