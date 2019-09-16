<?php

namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

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
    const OBJECT_TYPE_GET = 'TabResultInquiry';

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
     * @param int $cashRegisterId
     * @param string $tabUuid
     * @param int $tabResultInquiryId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseTabResultInquiry
     */
    public static function get(
        int $cashRegisterId,
        string $tabUuid,
        int $tabResultInquiryId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseTabResultInquiry {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $cashRegisterId,
                    $tabUuid,
                    $tabResultInquiryId,
                ]
            ),
            [],
            $customHeaders
        );

        return BunqResponseTabResultInquiry::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Used to view a list of TabResultInquiry objects belonging to a tab.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $cashRegisterId
     * @param string $tabUuid
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseTabResultInquiryList
     */
    public static function listing(
        int $cashRegisterId,
        string $tabUuid,
        int $monetaryAccountId = null,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseTabResultInquiryList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $cashRegisterId,
                    $tabUuid,
                ]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseTabResultInquiryList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setTab($tab)
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
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->tab)) {
            return false;
        }

        if (!is_null($this->payment)) {
            return false;
        }

        return true;
    }
}
