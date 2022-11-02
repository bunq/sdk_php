<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Pointer;

/**
 * Endpoint for managing currency conversions.
 *
 * @generated
 */
class CurrencyCloudPaymentQuote extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/currency-cloud-payment-quote';

    /**
     * Field constants.
     */
    const FIELD_POINTERS = 'pointers';

    /**
     * The amount that we'll charge the user with.
     *
     * @var Amount
     */
    protected $amountFee;

    /**
     * The points we want to know the fees for.
     *
     * @var Pointer[]
     */
    protected $pointersFieldForRequest;

    /**
     * @param Pointer[] $pointers The points we want to know the fees for.
     */
    public function __construct(array  $pointers)
    {
        $this->pointersFieldForRequest = $pointers;
    }

    /**
     * @param Pointer[] $pointers The points we want to know the fees for.
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(array  $pointers, int $monetaryAccountId = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            [self::FIELD_POINTERS => $pointers],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * The amount that we'll charge the user with.
     *
     * @return Amount
     */
    public function getAmountFee()
    {
        return $this->amountFee;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param Amount $amountFee
     */
    public function setAmountFee($amountFee)
    {
        $this->amountFee = $amountFee;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->amountFee)) {
            return false;
        }

        return true;
    }
}
