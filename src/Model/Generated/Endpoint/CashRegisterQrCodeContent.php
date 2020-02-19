<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Show the raw contents of a QR code. First you need to created a QR code
 * using ../cash-register/{id}/qr-code.
 *
 * @generated
 */
class CashRegisterQrCodeContent extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/cash-register/%s/qr-code/%s/content';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'CashRegisterQrCodeContent';

    /**
     * Show the raw contents of a QR code
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $cashRegisterId
     * @param int $qrCodeId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseString
     */
    public static function listing(
        int $cashRegisterId,
        int $qrCodeId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseString {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [
                    static::determineUserId(),
                    static::determineMonetaryAccountId($monetaryAccountId),
                    $cashRegisterId,
                    $qrCodeId,
                ]
            ),
            [],
            $customHeaders
        );

        return BunqResponseString::castFromBunqResponse(
            new BunqResponse($responseRaw->getBodyString(), $responseRaw->getHeaders())
        );
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        return true;
    }
}
