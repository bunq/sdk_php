<?php

namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;

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
    const OBJECT_TYPE_GET = 'CustomerLimit';

    /**
     * The limit of monetary accounts.
     *
     * @var int
     */
    protected $limitMonetaryAccount;

    /**
     * The amount of additional monetary accounts you can create.
     *
     * @var int
     */
    protected $limitMonetaryAccountRemaining;

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
     * DEPRECTATED: The limit of wildcards, e.g. Maestro or MasterCard cards.
     *
     * @var int
     */
    protected $limitCardDebitWildcard;

    /**
     * The limit of wildcards, e.g. Maestro or MasterCard cards.
     *
     * @var int
     */
    protected $limitCardWildcard;

    /**
     * DEPRECTATED: The limit of free replacement debit cards, replaced by:
     * limit_card_replacement
     *
     * @var int
     */
    protected $limitCardDebitReplacement;

    /**
     * The limit of free replacement cards.
     *
     * @var int
     */
    protected $limitCardReplacement;

    /**
     * The maximum amount a user is allowed to spend in a month.
     *
     * @var Amount
     */
    protected $limitAmountMonthly;

    /**
     * The amount the user has spent in the last month.
     *
     * @var Amount
     */
    protected $spentAmountMonthly;

    /**
     * Get all limits for the authenticated user.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseCustomerLimitList
     */
    public static function listing(array $params = [], array $customHeaders = []): BunqResponseCustomerLimitList
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

        return BunqResponseCustomerLimitList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setLimitMonetaryAccount($limitMonetaryAccount)
    {
        $this->limitMonetaryAccount = $limitMonetaryAccount;
    }

    /**
     * The amount of additional monetary accounts you can create.
     *
     * @return int
     */
    public function getLimitMonetaryAccountRemaining()
    {
        return $this->limitMonetaryAccountRemaining;
    }

    /**
     * @param int $limitMonetaryAccountRemaining
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setLimitMonetaryAccountRemaining($limitMonetaryAccountRemaining)
    {
        $this->limitMonetaryAccountRemaining = $limitMonetaryAccountRemaining;
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setLimitCardDebitMaestro($limitCardDebitMaestro)
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setLimitCardDebitMastercard($limitCardDebitMastercard)
    {
        $this->limitCardDebitMastercard = $limitCardDebitMastercard;
    }

    /**
     * DEPRECTATED: The limit of wildcards, e.g. Maestro or MasterCard cards.
     *
     * @return int
     */
    public function getLimitCardDebitWildcard()
    {
        return $this->limitCardDebitWildcard;
    }

    /**
     * @param int $limitCardDebitWildcard
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setLimitCardDebitWildcard($limitCardDebitWildcard)
    {
        $this->limitCardDebitWildcard = $limitCardDebitWildcard;
    }

    /**
     * The limit of wildcards, e.g. Maestro or MasterCard cards.
     *
     * @return int
     */
    public function getLimitCardWildcard()
    {
        return $this->limitCardWildcard;
    }

    /**
     * @param int $limitCardWildcard
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setLimitCardWildcard($limitCardWildcard)
    {
        $this->limitCardWildcard = $limitCardWildcard;
    }

    /**
     * DEPRECTATED: The limit of free replacement debit cards, replaced by:
     * limit_card_replacement
     *
     * @return int
     */
    public function getLimitCardDebitReplacement()
    {
        return $this->limitCardDebitReplacement;
    }

    /**
     * @param int $limitCardDebitReplacement
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setLimitCardDebitReplacement($limitCardDebitReplacement)
    {
        $this->limitCardDebitReplacement = $limitCardDebitReplacement;
    }

    /**
     * The limit of free replacement cards.
     *
     * @return int
     */
    public function getLimitCardReplacement()
    {
        return $this->limitCardReplacement;
    }

    /**
     * @param int $limitCardReplacement
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setLimitCardReplacement($limitCardReplacement)
    {
        $this->limitCardReplacement = $limitCardReplacement;
    }

    /**
     * The maximum amount a user is allowed to spend in a month.
     *
     * @return Amount
     */
    public function getLimitAmountMonthly()
    {
        return $this->limitAmountMonthly;
    }

    /**
     * @param Amount $limitAmountMonthly
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setLimitAmountMonthly($limitAmountMonthly)
    {
        $this->limitAmountMonthly = $limitAmountMonthly;
    }

    /**
     * The amount the user has spent in the last month.
     *
     * @return Amount
     */
    public function getSpentAmountMonthly()
    {
        return $this->spentAmountMonthly;
    }

    /**
     * @param Amount $spentAmountMonthly
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setSpentAmountMonthly($spentAmountMonthly)
    {
        $this->spentAmountMonthly = $spentAmountMonthly;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->limitMonetaryAccount)) {
            return false;
        }

        if (!is_null($this->limitMonetaryAccountRemaining)) {
            return false;
        }

        if (!is_null($this->limitCardDebitMaestro)) {
            return false;
        }

        if (!is_null($this->limitCardDebitMastercard)) {
            return false;
        }

        if (!is_null($this->limitCardDebitWildcard)) {
            return false;
        }

        if (!is_null($this->limitCardWildcard)) {
            return false;
        }

        if (!is_null($this->limitCardDebitReplacement)) {
            return false;
        }

        if (!is_null($this->limitCardReplacement)) {
            return false;
        }

        if (!is_null($this->limitAmountMonthly)) {
            return false;
        }

        if (!is_null($this->spentAmountMonthly)) {
            return false;
        }

        return true;
    }
}
