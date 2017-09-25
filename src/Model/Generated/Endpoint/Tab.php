<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Once your CashRegister has been activated you can use it to create Tabs.
 * A Tab is a template for a payment. In contrast to requests a Tab is not
 * pointed towards a specific user. Any user can pay the Tab as long as it
 * is made visible by you. The creation of a Tab happens with
 * /tab-usage-single or /tab-usage-multiple. A TabUsageSingle is a Tab that
 * can be paid once. A TabUsageMultiple is a Tab that can be paid multiple
 * times by different users.
 *
 * @generated
 */
class Tab extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/cash-register/%s/tab/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/cash-register/%s/tab';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'Tab';

    /**
     * @var TabUsageSingle
     */
    protected $tabUsageSingle;

    /**
     * @var TabUsageMultiple
     */
    protected $tabUsageMultiple;

    /**
     * Get a specific tab. This returns a TabUsageSingle or TabUsageMultiple.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $cashRegisterId
     * @param string $tabUuid
     * @param string[] $customHeaders
     *
     * @return BunqResponseTab
     */
    public static function get(ApiContext $apiContext, $userId, $monetaryAccountId, $cashRegisterId, $tabUuid, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $monetaryAccountId, $cashRegisterId, $tabUuid]
            ),
            [],
            $customHeaders
        );

        return BunqResponseTab::castFromBunqResponse(
            static::fromJson($responseRaw)
        );
    }

    /**
     * Get a collection of tabs.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $cashRegisterId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseTabList
     */
    public static function listing(ApiContext $apiContext, $userId, $monetaryAccountId, $cashRegisterId, array $params = [], array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $monetaryAccountId, $cashRegisterId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseTabList::castFromBunqResponse(
            static::fromJsonList($responseRaw)
        );
    }

    /**
     * @return TabUsageSingle
     */
    public function getTabUsageSingle()
    {
        return $this->tabUsageSingle;
    }

    /**
     * @param TabUsageSingle $tabUsageSingle
     */
    public function setTabUsageSingle(TabUsageSingle $tabUsageSingle)
    {
        $this->tabUsageSingle = $tabUsageSingle;
    }

    /**
     * @return TabUsageMultiple
     */
    public function getTabUsageMultiple()
    {
        return $this->tabUsageMultiple;
    }

    /**
     * @param TabUsageMultiple $tabUsageMultiple
     */
    public function setTabUsageMultiple(TabUsageMultiple $tabUsageMultiple)
    {
        $this->tabUsageMultiple = $tabUsageMultiple;
    }
}
