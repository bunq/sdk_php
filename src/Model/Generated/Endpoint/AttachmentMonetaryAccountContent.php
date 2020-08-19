<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Fetch the raw content of a monetary account attachment with given ID. The
 * raw content is the binary representation of a file, without any JSON
 * wrapping.
 *
 * @generated
 */
class AttachmentMonetaryAccountContent extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/attachment/%s/content';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'AttachmentMonetaryAccountContent';

    /**
     * Get the raw content of a specific attachment.
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $attachmentId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseString
     */
    public static function listing(
        int $attachmentId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseString {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $attachmentId]
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
