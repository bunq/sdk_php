<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\BunqModel;

/**
 * Used to view TabResultResponse objects belonging to a tab. A
 * TabResultResponse is an object that holds details on a tab which has been
 * paid from the provided monetary account.
 *
 * @generated
 */
class TabResultResponse extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/tab-result-response/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/tab-result-response';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'TabResultResponse';

    /**
     * The Tab details.
     *
     * @var Tab
     */
    protected $tab;

    /**
     * The payment made for the Tab.
     *
     * @var Payment
     */
    protected $payment;

    /**
     * Used to view a single TabResultResponse belonging to a tab.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $tabResultResponseId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<TabResultResponse>
     */
    public static function get(ApiContext $apiContext, $userId, $monetaryAccountId, $tabResultResponseId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $monetaryAccountId, $tabResultResponseId]
            ),
            $customHeaders
        );

        return static::fromJson($responseRaw);
    }

    /**
     * Used to view a list of TabResultResponse objects belonging to a tab.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<BunqModel[]|TabResultResponse[]>
     */
    public static function listing(ApiContext $apiContext, $userId, $monetaryAccountId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $monetaryAccountId]
            ),
            $customHeaders
        );

        return static::fromJsonList($responseRaw, self::OBJECT_TYPE);
    }

    /**
     * The Tab details.
     *
     * @return Tab
     */
    public function getTab()
    {
        return $this->tab;
    }

    /**
     * @param Tab $tab
     */
    public function setTab(Tab $tab)
    {
        $this->tab = $tab;
    }

    /**
     * The payment made for the Tab.
     *
     * @return Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param Payment $payment
     */
    public function setPayment(Payment $payment)
    {
        $this->payment = $payment;
    }
}
