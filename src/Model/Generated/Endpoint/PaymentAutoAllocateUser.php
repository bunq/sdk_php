<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Exception\BunqException;
use bunq\Http\ApiClient;
use bunq\Model\Core\AnchorObjectInterface;
use bunq\Model\Core\BunqModel;

/**
 * List a users automatic payment auto allocated settings.
 *
 * @generated
 */
class PaymentAutoAllocateUser extends BunqModel implements AnchorObjectInterface
{
    /**
     * Error constants.
     */
    const ERROR_NULL_FIELDS = 'All fields of an extended model or object are null.';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/payment-auto-allocate';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'PaymentAutoAllocate';

    /**
     * @var PaymentAutoAllocate
     */
    protected $paymentAutoAllocate;

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentAutoAllocateUserList
     */
    public static function listing(
        array $params = [],
        array $customHeaders = []
    ): BunqResponsePaymentAutoAllocateUserList {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId()]
            ),
            $params,
            $customHeaders
        );

        return BunqResponsePaymentAutoAllocateUserList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @return PaymentAutoAllocate
     */
    public function getPaymentAutoAllocate()
    {
        return $this->paymentAutoAllocate;
    }

    /**
     * @param PaymentAutoAllocate $paymentAutoAllocate
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setPaymentAutoAllocate($paymentAutoAllocate)
    {
        $this->paymentAutoAllocate = $paymentAutoAllocate;
    }

    /**
     * @return BunqModel
     * @throws BunqException
     */
    public function getReferencedObject()
    {
        if (!is_null($this->paymentAutoAllocate)) {
            return $this->paymentAutoAllocate;
        }

        throw new BunqException(self::ERROR_NULL_FIELDS);
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->paymentAutoAllocate)) {
            return false;
        }

        return true;
    }
}
