<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;

/**
 * bunq.me fundraiser result containing all payments.
 *
 * @generated
 */
class BunqMeFundraiserResult extends BunqModel
{
    /**
     * Object type.
     */

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
     * The id of the bunq.me.
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
     * The timestamp when the bunq.me was created.
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
     * The timestamp when the bunq.me was last updated.
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
     * The bunq.me fundraiser profile.
     *
     * @return BunqMeFundraiserProfile
     */
    public function getBunqmeFundraiserProfile()
    {
        return $this->bunqmeFundraiserProfile;
    }

    /**
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
