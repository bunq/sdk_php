<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\BunqModel;

/**
 * This call returns the raw content of the QR code that links to this draft
 * share invite. When a bunq user scans this QR code with the bunq app the
 * draft share invite will be shown on his/her device.
 *
 * @generated
 */
class DraftShareInviteBankQrCodeContent extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/draft-share-invite-bank/%s/qr-code-content';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'DraftShareInviteBankQrCodeContent';

    /**
     * Returns the raw content of the QR code that links to this draft share
     * invite. The raw content is the binary representation of a file, without
     * any JSON wrapping.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $draftShareInviteBankId
     * @param string[] $customHeaders
     *
     * @return BunqResponseString
     */
    public static function listing(ApiContext $apiContext, $userId, $draftShareInviteBankId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $draftShareInviteBankId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseString::castFromBunqResponse(
            new BunqResponse($responseRaw->getBodyString(), $responseRaw->getHeaders())
        );
    }
}
