<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;

/**
 * An incoming payment made towards an account of an external bank and
 * redirected to a bunq account via switch service.
 *
 * @generated
 */
class BankSwitchServiceNetherlandsIncomingPayment extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/switch-service-payment/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'BankSwitchServiceNetherlandsIncomingPayment';

    /**
     * The bank switch service details.
     *
     * @var BankSwitchServiceNetherlandsIncoming
     */
    protected $bankSwitchService;

    /**
     * The payment made using bank switch service.
     *
     * @var Payment
     */
    protected $payment;

    /**
     * @param int $bankSwitchServiceNetherlandsIncomingPaymentId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseBankSwitchServiceNetherlandsIncomingPayment
     */
    public static function get(
        int $bankSwitchServiceNetherlandsIncomingPaymentId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseBankSwitchServiceNetherlandsIncomingPayment {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $bankSwitchServiceNetherlandsIncomingPaymentId,
                ]
            ),
            [],
            $customHeaders
        );

        return BunqResponseBankSwitchServiceNetherlandsIncomingPayment::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The bank switch service details.
     *
     * @return BankSwitchServiceNetherlandsIncoming
     */
    public function getBankSwitchService()
    {
        return $this->bankSwitchService;
    }

    /**
     * @param BankSwitchServiceNetherlandsIncoming $bankSwitchService
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setBankSwitchService($bankSwitchService)
    {
        $this->bankSwitchService = $bankSwitchService;
    }

    /**
     * The payment made using bank switch service.
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
        if (!is_null($this->bankSwitchService)) {
            return false;
        }

        if (!is_null($this->payment)) {
            return false;
        }

        return true;
    }
}
