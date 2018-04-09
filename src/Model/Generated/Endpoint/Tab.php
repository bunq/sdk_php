<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\LabelMonetaryAccount;

/**
 * Used to read a single publicly visible tab.
 *
 * @generated
 */
class Tab extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'tab/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'Tab';

    /**
     * The uuid of the tab.
     *
     * @var string
     */
    protected $uuid;

    /**
     * The label of the party that owns this tab.
     *
     * @var LabelMonetaryAccount
     */
    protected $alias;

    /**
     * The avatar of this tab.
     *
     * @var string
     */
    protected $avatar;

    /**
     * The reference of the tab, as defined by the owner.
     *
     * @var string
     */
    protected $reference;

    /**
     * The short description of the tab.
     *
     * @var string
     */
    protected $description;

    /**
     * The status of the tab.
     *
     * @var string
     */
    protected $status;

    /**
     * The moment when this tab expires.
     *
     * @var string
     */
    protected $expiration;

    /**
     * The total amount of the tab.
     *
     * @var Amount
     */
    protected $amountTotal;

    /**
     * Get a publicly visible tab.
     *
     * @param string $tabUuid
     * @param string[] $customHeaders
     *
     * @return BunqResponseTab
     */
    public static function get(string $tabUuid, array $customHeaders = []): BunqResponseTab
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$tabUuid]
            ),
            [],
            $customHeaders
        );

        return BunqResponseTab::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The uuid of the tab.
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $uuid
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * The label of the party that owns this tab.
     *
     * @return LabelMonetaryAccount
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param LabelMonetaryAccount $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * The avatar of this tab.
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * The reference of the tab, as defined by the owner.
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * The short description of the tab.
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
     * The status of the tab.
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
     * The moment when this tab expires.
     *
     * @return string
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $expiration
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
    }

    /**
     * The total amount of the tab.
     *
     * @return Amount
     */
    public function getAmountTotal()
    {
        return $this->amountTotal;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountTotal
     */
    public function setAmountTotal($amountTotal)
    {
        $this->amountTotal = $amountTotal;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->uuid)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->avatar)) {
            return false;
        }

        if (!is_null($this->reference)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->expiration)) {
            return false;
        }

        if (!is_null($this->amountTotal)) {
            return false;
        }

        return true;
    }
}
