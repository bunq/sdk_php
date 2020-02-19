<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Pointer;

/**
 * Used to confirm availability of funds on an account.
 *
 * @generated
 */
class ConfirmationOfFunds extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/confirmation-of-funds';

    /**
     * Field constants.
     */
    const FIELD_POINTER_IBAN = 'pointer_iban';
    const FIELD_AMOUNT = 'amount';

    /**
     * Object type.
     */
    const OBJECT_TYPE_POST = 'ConfirmationOfFunds';

    /**
     * Whether the account has sufficient funds.
     *
     * @var bool
     */
    protected $hasSufficientFunds;

    /**
     * The pointer (IBAN) of the account we're querying.
     *
     * @var Pointer
     */
    protected $pointerIbanFieldForRequest;

    /**
     * The amount we want to check for.
     *
     * @var Amount
     */
    protected $amountFieldForRequest;

    /**
     * @param Pointer $pointerIban The pointer (IBAN) of the account we're
     * querying.
     * @param Amount $amount The amount we want to check for.
     */
    public function __construct(Pointer $pointerIban, Amount $amount)
    {
        $this->pointerIbanFieldForRequest = $pointerIban;
        $this->amountFieldForRequest = $amount;
    }

    /**
     * @param Pointer $pointerIban The pointer (IBAN) of the account we're
     * querying.
     * @param Amount $amount The amount we want to check for.
     * @param string[] $customHeaders
     *
     * @return BunqResponseConfirmationOfFunds
     */
    public static function create(
        Pointer $pointerIban,
        Amount $amount,
        array $customHeaders = []
    ): BunqResponseConfirmationOfFunds {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [
                self::FIELD_POINTER_IBAN => $pointerIban,
                self::FIELD_AMOUNT => $amount,
            ],
            $customHeaders
        );

        return BunqResponseConfirmationOfFunds::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_POST)
        );
    }

    /**
     * Whether the account has sufficient funds.
     *
     * @return bool
     */
    public function getHasSufficientFunds()
    {
        return $this->hasSufficientFunds;
    }

    /**
     * @param bool $hasSufficientFunds
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setHasSufficientFunds($hasSufficientFunds)
    {
        $this->hasSufficientFunds = $hasSufficientFunds;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->hasSufficientFunds)) {
            return false;
        }

        return true;
    }
}
