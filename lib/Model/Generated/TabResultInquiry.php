<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Model\BunqModel;

/**
 * Used to view TabResultInquiry objects belonging to a tab. A
 * TabResultInquiry is an object that holds details on both the tab and a
 * single payment made for that tab.
 *
 * @generated
 */
class TabResultInquiry extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/cash-register/%s/tab/%s/tab-result-inquiry/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/cash-register/%s/tab/%s/tab-result-inquiry';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'TabResultInquiry';

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
     * Used to view a single TabResultInquiry belonging to a tab.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $cashRegisterId
     * @param string $tabUuid
     * @param int $tabResultInquiryId
     * @param string[] $customHeaders
     *
     * @return BunqModel|TabResultInquiry
     */
    public static function get(ApiContext $apiContext, $userId, $monetaryAccountId, $cashRegisterId, $tabUuid, $tabResultInquiryId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $response = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $monetaryAccountId, $cashRegisterId, $tabUuid, $tabResultInquiryId]
            ),
            $customHeaders
        );

        return static::fromJson($response);
    }

    /**
     * Used to view a list of TabResultInquiry objects belonging to a tab.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $cashRegisterId
     * @param string $tabUuid
     * @param string[] $customHeaders
     *
     * @return BunqModel[]|TabResultInquiry[]
     */
    public static function listing(ApiContext $apiContext, $userId, $monetaryAccountId, $cashRegisterId, $tabUuid, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $response = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $monetaryAccountId, $cashRegisterId, $tabUuid]
            ),
            $customHeaders
        );

        return static::fromJsonList($response, self::OBJECT_TYPE);
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
