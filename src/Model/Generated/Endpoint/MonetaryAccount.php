<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\exception\BunqException;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
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
class MonetaryAccount extends BunqModel
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
    const OBJECT_TYPE = 'MonetaryAccount';

    /**
     * @var MonetaryAccountBank
     */
    protected $monetaryAccountBank;

    /**
     * Get a specific MonetaryAccount.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseMonetaryAccount
     */
    public static function get(ApiContext $apiContext, int $userId, int $monetaryAccountId, array $customHeaders = []): BunqResponseMonetaryAccount
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $monetaryAccountId]
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
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseMonetaryAccountList
     */
    public static function listing(ApiContext $apiContext, int $userId, array $params = [], array $customHeaders = []): BunqResponseMonetaryAccountList
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
     */
    public function setMonetaryAccountBank($monetaryAccountBank)
    {
        $this->monetaryAccountBank = $monetaryAccountBank;
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

        throw new BunqException(self::ERROR_NULL_FIELDS);
    }

    /**
     * @return bool
     */
    public function areAllFieldsNull()
    {
        if (!is_null($this->monetaryAccountBank)) {
            return false;
        }

        return true;
    }
}
