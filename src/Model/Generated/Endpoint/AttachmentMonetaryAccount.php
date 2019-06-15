<?php

namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Attachment;

/**
 * This call is used to upload an attachment that can be referenced to in
 * payment requests and payments sent from a specific monetary account.
 * Attachments supported are png, jpg and gif.
 *
 * @generated
 */
class AttachmentMonetaryAccount extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/attachment';

    /**
     * Binary constants.
     */
    const FIELD_BODY = ApiClient::FIELD_BODY;
    const FIELD_CONTENT_TYPE = ApiClient::FIELD_CONTENT_TYPE;
    const FIELD_DESCRIPTION = ApiClient::FIELD_DESCRIPTION;

    /**
     * The attachment.
     *
     * @var Attachment
     */
    protected $attachment;

    /**
     * The ID of the attachment created.
     *
     * @var int
     */
    protected $id;

    /**
     * Create a new monetary account attachment. Create a POST request with a
     * payload that contains the binary representation of the file, without any
     * JSON wrapping. Make sure you define the MIME type (i.e. image/jpeg) in
     * the Content-Type header. You are required to provide a description of the
     * attachment using the X-Bunq-Attachment-Description header.
     *
     * @param string $requestBytes
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(string $requestBytes, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $apiClient->enableBinary();
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            $requestBytes,
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * The attachment.
     *
     * @return Attachment
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @param Attachment $attachment
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
    }

    /**
     * The ID of the attachment created.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->attachment)) {
            return false;
        }

        if (!is_null($this->id)) {
            return false;
        }

        return true;
    }
}
