<?php

namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Attachment;

/**
 * This call is used to upload an attachment that can be referenced to as an
 * avatar (through the Avatar endpoint) or in a tab sent. Attachments
 * supported are png, jpg and gif.
 *
 * @generated
 */
class AttachmentPublic extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'attachment-public';
    const ENDPOINT_URL_READ = 'attachment-public/%s';

    /**
     * Binary constants.
     */
    const FIELD_BODY = ApiClient::FIELD_BODY;
    const FIELD_CONTENT_TYPE = ApiClient::FIELD_CONTENT_TYPE;
    const FIELD_DESCRIPTION = ApiClient::FIELD_DESCRIPTION;

    /**
     * Object type.
     */
    const OBJECT_TYPE_POST = 'Uuid';
    const OBJECT_TYPE_GET = 'AttachmentPublic';

    /**
     * The UUID of the attachment.
     *
     * @var string
     */
    protected $uuid;

    /**
     * The timestamp of the attachment's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the attachment's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The attachment.
     *
     * @var Attachment
     */
    protected $attachment;

    /**
     * Create a new public attachment. Create a POST request with a payload that
     * contains a binary representation of the file, without any JSON wrapping.
     * Make sure you define the MIME type (i.e. image/jpeg, or image/png) in the
     * Content-Type header. You are required to provide a description of the
     * attachment using the X-Bunq-Attachment-Description header.
     *
     * @param string $requestBytes
     * @param string[] $customHeaders
     *
     * @return BunqResponseString
     */
    public static function create(string $requestBytes, array $customHeaders = []): BunqResponseString
    {
        $apiClient = new ApiClient(static::getApiContext());
        $apiClient->enableBinary();
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                []
            ),
            $requestBytes,
            $customHeaders
        );

        return BunqResponseString::castFromBunqResponse(
            static::processForUuid($responseRaw)
        );
    }

    /**
     * Get a specific attachment's metadata through its UUID. The Content-Type
     * header of the response will describe the MIME type of the attachment
     * file.
     *
     * @param string $attachmentPublicUuid
     * @param string[] $customHeaders
     *
     * @return BunqResponseAttachmentPublic
     */
    public static function get(string $attachmentPublicUuid, array $customHeaders = []): BunqResponseAttachmentPublic
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$attachmentPublicUuid]
            ),
            [],
            $customHeaders
        );

        return BunqResponseAttachmentPublic::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The UUID of the attachment.
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * The timestamp of the attachment's creation.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the attachment's last update.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     *
     * @deprecated User should not be able to set values via setters, use
     *             constructor.
     *
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
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
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->uuid)) {
            return false;
        }

        if (!is_null($this->created)) {
            return false;
        }

        if (!is_null($this->updated)) {
            return false;
        }

        if (!is_null($this->attachment)) {
            return false;
        }

        return true;
    }
}
