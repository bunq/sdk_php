<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Show the limits for the authenticated user.
 *
 * @generated
 */
class CustomerLimit extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/limit';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'CustomerLimit';

    /**
     * The limit of monetary accounts.
     *
     * @var int
     */
    protected $limitMonetaryAccount;

    /**
     * The limit of Maestro cards.
     *
     * @var int
     */
    protected $limitCardDebitMaestro;

    /**
     * The limit of MasterCard cards.
     *
     * @var int
     */
    protected $limitCardDebitMastercard;

    /**
     * The limit of free replacement cards.
     *
     * @var int
     */
    protected $limitCardDebitReplacement;

    /**
     * Get all limits for the authenticated user.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseCustomerLimitList
     */
    public static function listing(ApiContext $apiContext, int $userId, array $params = [], array $customHeaders = [])
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

        return BunqResponseCustomerLimitList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE)
        );
    }

    /**
     * The limit of monetary accounts.
     *
     * @return int
     */
    public function getLimitMonetaryAccount()
    {
        return $this->limitMonetaryAccount;
    }

    /**
     * @param int $limitMonetaryAccount
     */
    public function setLimitMonetaryAccount(int $limitMonetaryAccount)
    {
        $this->limitMonetaryAccount = $limitMonetaryAccount;
    }

    /**
     * The limit of Maestro cards.
     *
     * @return int
     */
    public function getLimitCardDebitMaestro()
    {
        return $this->limitCardDebitMaestro;
    }

    /**
     * @param int $limitCardDebitMaestro
     */
    public function setLimitCardDebitMaestro(int $limitCardDebitMaestro)
    {
        $this->limitCardDebitMaestro = $limitCardDebitMaestro;
    }

    /**
     * The limit of MasterCard cards.
     *
     * @return int
     */
    public function getLimitCardDebitMastercard()
    {
        return $this->limitCardDebitMastercard;
    }

    /**
     * @param int $limitCardDebitMastercard
     */
    public function setLimitCardDebitMastercard(int $limitCardDebitMastercard)
    {
        $this->limitCardDebitMastercard = $limitCardDebitMastercard;
    }

    /**
     * The limit of free replacement cards.
     *
     * @return int
     */
    public function getLimitCardDebitReplacement()
    {
        return $this->limitCardDebitReplacement;
    }

    /**
     * @param int $limitCardDebitReplacement
     */
    public function setLimitCardDebitReplacement(int $limitCardDebitReplacement)
    {
        $this->limitCardDebitReplacement = $limitCardDebitReplacement;
    }
}
