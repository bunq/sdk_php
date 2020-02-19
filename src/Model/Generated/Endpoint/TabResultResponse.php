<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\RequestInquiryReference;

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
    const OBJECT_TYPE_GET = 'TabResultResponse';

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
     * The reference to the object used for split the bill. Can be
     * RequestInquiry or RequestInquiryBatch
     *
     * @var RequestInquiryReference[]
     */
    protected $requestReferenceSplitTheBill;

    /**
     * Used to view a single TabResultResponse belonging to a tab.
     *
     * @param int $tabResultResponseId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseTabResultResponse
     */
    public static function get(
        int $tabResultResponseId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseTabResultResponse {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $tabResultResponseId,
                ]
            ),
            [],
            $customHeaders
        );

        return BunqResponseTabResultResponse::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Used to view a list of TabResultResponse objects belonging to a tab.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseTabResultResponseList
     */
    public static function listing(
        int $monetaryAccountId = null,
        array $params = [],
        array $customHeaders = []
    ): BunqResponseTabResultResponseList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseTabResultResponseList::castFromBunqResponse(
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
     * constructor.
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
     * constructor.
     *
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    }

    /**
     * The reference to the object used for split the bill. Can be
     * RequestInquiry or RequestInquiryBatch
     *
     * @return RequestInquiryReference[]
     */
    public function getRequestReferenceSplitTheBill()
    {
        return $this->requestReferenceSplitTheBill;
    }

    /**
     * @param RequestInquiryReference[] $requestReferenceSplitTheBill
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setRequestReferenceSplitTheBill($requestReferenceSplitTheBill)
    {
        $this->requestReferenceSplitTheBill = $requestReferenceSplitTheBill;
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

        if (!is_null($this->requestReferenceSplitTheBill)) {
            return false;
        }

        return true;
    }
}
