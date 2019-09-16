<?php

namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Used to view bunq.me TabResultResponse objects belonging to a tab. A
 * TabResultResponse is an object that holds details on a tab which has been
 * paid from the provided monetary account.
 *
 * @generated
 */
class BunqMeTabResultResponse extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/bunqme-tab-result-response/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'BunqMeTabResultResponse';

    /**
     * The payment made for the bunq.me tab.
     *
     * @var Payment
     */
    protected $payment;

    /**
     * @param int $bunqMeTabResultResponseId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseBunqMeTabResultResponse
     */
    public static function get(
        int $bunqMeTabResultResponseId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseBunqMeTabResultResponse {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $bunqMeTabResultResponseId,
                ]
            ),
            [],
            $customHeaders
        );

        return BunqResponseBunqMeTabResultResponse::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The payment made for the bunq.me tab.
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
        if (!is_null($this->payment)) {
            return false;
        }

        return true;
    }
}
