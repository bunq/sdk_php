<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Exception\BunqException;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\AnchorObjectInterface;
use bunq\Model\Core\BunqModel;

/**
 * Payments that are not processed yet.
 *
 * @generated
 */
class PaymentDelayed extends BunqModel implements AnchorObjectInterface
{
    /**
     * Error constants.
     */
    const ERROR_NULL_FIELDS = 'All fields of an extended model or object are null.';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/payment-delayed/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'PaymentDelayed';

    /**
     * @var PaymentDelayedIncoming
     */
    protected $paymentDelayedIncoming;

    /**
     * @param int $paymentDelayedId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentDelayed
     */
    public static function get(int $paymentDelayedId, int $monetaryAccountId = null, array $customHeaders = []): BunqResponsePaymentDelayed
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $paymentDelayedId]
            ),
            [],
            $customHeaders
        );

        return BunqResponsePaymentDelayed::castFromBunqResponse(
            static::fromJson($responseRaw)
        );
    }

    /**
     * @return PaymentDelayedIncoming
     */
    public function getPaymentDelayedIncoming()
    {
        return $this->paymentDelayedIncoming;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param PaymentDelayedIncoming $paymentDelayedIncoming
     */
    public function setPaymentDelayedIncoming($paymentDelayedIncoming)
    {
        $this->paymentDelayedIncoming = $paymentDelayedIncoming;
    }

    /**
     * @return BunqModel
     * @throws BunqException
     */
    public function getReferencedObject()
    {
        if (!is_null($this->paymentDelayedIncoming)) {
            return $this->paymentDelayedIncoming;
        }

        throw new BunqException(self::ERROR_NULL_FIELDS);
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->paymentDelayedIncoming)) {
            return false;
        }

        return true;
    }
}
