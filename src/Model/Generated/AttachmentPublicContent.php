<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Model\BunqModel;
use bunq\Model\BunqResponse;

/**
 * Fetch the raw content of a public attachment with given ID. The raw
 * content is the binary representation of a file, without any JSON
 * wrapping.
 *
 * @generated
 */
class AttachmentPublicContent extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'attachment-public/%s/content';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'AttachmentPublicContent';

    /**
     * Get the raw content of a specific attachment.
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param string $attachmentPublicUuid
     * @param string[] $customHeaders
     *
     * @return BunqResponse<string>
     */
    public static function listing(ApiContext $apiContext, $attachmentPublicUuid, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);

        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$attachmentPublicUuid]
            ),
            $customHeaders
        );

        return new BunqResponse($responseRaw->getBodyString(), $responseRaw->getHeaders());
    }
}
