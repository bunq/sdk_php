<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Fetch the raw content of an attachment.
 *
 * @generated
 */
class AttachmentContent extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'attachment-content/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'AttachmentContent';

    /**
     * @param string $attachmentContentUuid
     * @param string[] $customHeaders
     *
     * @return BunqResponseAttachmentContent
     */
    public static function get(string $attachmentContentUuid, array $customHeaders = []): BunqResponseAttachmentContent
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$attachmentContentUuid]
            ),
            [],
            $customHeaders
        );

        return BunqResponseAttachmentContent::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
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
