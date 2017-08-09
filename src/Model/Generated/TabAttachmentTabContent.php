<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\BunqModel;

/**
 * Fetch the raw content of a tab attachment with given ID. The raw content
 * is the binary representation of a file, without any JSON wrapping.
 *
 * @generated
 */
class TabAttachmentTabContent extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'tab/%s/attachment/%s/content';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'TabAttachmentTabContent';

    /**
     * Get the raw content of a specific attachment.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param string $tabUuid
     * @param int $attachmentId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<string>
     */
    public static function listing(ApiContext $apiContext, $tabUuid, $attachmentId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);

        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$tabUuid, $attachmentId]
            ),
            $customHeaders
        );

        return new BunqResponse($responseRaw->getBodyString(), $responseRaw->getHeaders());
    }
}
