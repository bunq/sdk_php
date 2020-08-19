<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\exception\BunqException;
use bunq\Http\ApiClient;
use bunq\Model\Core\AnchorObjectInterface;
use bunq\Model\Core\BunqModel;

/**
 * Used to show the MonetaryAccounts that you can access. Currently the only
 * MonetaryAccount type is MonetaryAccountBank. See also:
 * monetary-account-bank.<br/><br/>Notification filters can be set on a
 * monetary account level to receive callbacks. For more information check
 * the <a href="/api/2/page/callbacks">dedicated callbacks page</a>.
 *
 * @generated
 */
class MonetaryAccount extends BunqModel implements AnchorObjectInterface
{
    /**
     * Error constants.
     */
    const ERROR_NULL_FIELDS = 'All fields of an extended model or object are null.';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'MonetaryAccount';

    /**
     * @var MonetaryAccountBank
     */
    protected $monetaryAccountBank;

    /**
     * @var MonetaryAccountJoint
     */
    protected $monetaryAccountJoint;

    /**
     * @var MonetaryAccountLight
     */
    protected $monetaryAccountLight;

    /**
     * @var MonetaryAccountSavings
     */
    protected $monetaryAccountSavings;

    /**
     * Get a specific MonetaryAccount.
     *
     * @param int $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseMonetaryAccount
     */
    public static function get(int $monetaryAccountId, array $customHeaders = []): BunqResponseMonetaryAccount
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            [],
            $customHeaders
        );

        return BunqResponseMonetaryAccount::castFromBunqResponse(
            static::fromJson($responseRaw)
        );
    }

    /**
     * Get a collection of all your MonetaryAccounts.
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseMonetaryAccountList
     */
    public static function listing(array $params = [], array $customHeaders = []): BunqResponseMonetaryAccountList
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

        return BunqResponseMonetaryAccountList::castFromBunqResponse(
            static::fromJsonList($responseRaw)
        );
    }

    /**
     * @return MonetaryAccountBank
     */
    public function getMonetaryAccountBank()
    {
        return $this->monetaryAccountBank;
    }

    /**
     * @param MonetaryAccountBank $monetaryAccountBank
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setMonetaryAccountBank($monetaryAccountBank)
    {
        $this->monetaryAccountBank = $monetaryAccountBank;
    }

    /**
     * @return MonetaryAccountJoint
     */
    public function getMonetaryAccountJoint()
    {
        return $this->monetaryAccountJoint;
    }

    /**
     * @param MonetaryAccountJoint $monetaryAccountJoint
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setMonetaryAccountJoint($monetaryAccountJoint)
    {
        $this->monetaryAccountJoint = $monetaryAccountJoint;
    }

    /**
     * @return MonetaryAccountLight
     */
    public function getMonetaryAccountLight()
    {
        return $this->monetaryAccountLight;
    }

    /**
     * @param MonetaryAccountLight $monetaryAccountLight
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setMonetaryAccountLight($monetaryAccountLight)
    {
        $this->monetaryAccountLight = $monetaryAccountLight;
    }

    /**
     * @return MonetaryAccountSavings
     */
    public function getMonetaryAccountSavings()
    {
        return $this->monetaryAccountSavings;
    }

    /**
     * @param MonetaryAccountSavings $monetaryAccountSavings
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setMonetaryAccountSavings($monetaryAccountSavings)
    {
        $this->monetaryAccountSavings = $monetaryAccountSavings;
    }

    /**
     * @return BunqModel
     * @throws BunqException
     */
    public function getReferencedObject()
    {
        if (!is_null($this->monetaryAccountBank)) {
            return $this->monetaryAccountBank;
        }

        if (!is_null($this->monetaryAccountJoint)) {
            return $this->monetaryAccountJoint;
        }

        if (!is_null($this->monetaryAccountLight)) {
            return $this->monetaryAccountLight;
        }

        if (!is_null($this->monetaryAccountSavings)) {
            return $this->monetaryAccountSavings;
        }

        throw new BunqException(self::ERROR_NULL_FIELDS);
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->monetaryAccountBank)) {
            return false;
        }

        if (!is_null($this->monetaryAccountJoint)) {
            return false;
        }

        if (!is_null($this->monetaryAccountLight)) {
            return false;
        }

        if (!is_null($this->monetaryAccountSavings)) {
            return false;
        }

        return true;
    }
}
