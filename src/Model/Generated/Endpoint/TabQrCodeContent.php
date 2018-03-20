<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * This call returns the raw content of the QR code that links to this Tab.
 * When a bunq user scans this QR code with the bunq app the Tab will be
 * shown on his/her device.
 *
 * @generated
 */
class TabQrCodeContent extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/cash-register/%s/tab/%s/qr-code-content';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'TabQrCodeContent';

    /**
     * Returns the raw content of the QR code that links to this Tab. The raw
     * content is the binary representation of a file, without any JSON
     * wrapping.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $cashRegisterId
     * @param string $tabUuid
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseString
     */
    public static function listing(
        int $cashRegisterId,
        string $tabUuid,
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
                    $tabUuid,
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
