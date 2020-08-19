<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Attachment;

/**
 * This call is used to upload an attachment that will be accessible only
 * through tabs. This can be used for example to upload special promotions
 * or other attachments. Attachments supported are png, jpg and gif.
 *
 * @generated
 */
class AttachmentTab extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/attachment-tab';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/attachment-tab/%s';

    /**
     * Binary constants.
     */
    const FIELD_BODY = ApiClient::FIELD_BODY;
    const FIELD_CONTENT_TYPE = ApiClient::FIELD_CONTENT_TYPE;
    const FIELD_DESCRIPTION = ApiClient::FIELD_DESCRIPTION;

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'AttachmentTab';

    /**
     * The id of the attachment.
     *
     * @var int
     */
    protected $id;

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
     * Upload a new attachment to use with a tab, and to read its metadata.
     * Create a POST request with a payload that contains the binary
     * representation of the file, without any JSON wrapping. Make sure you
     * define the MIME type (i.e. image/jpeg) in the Content-Type header. You
     * are required to provide a description of the attachment using the
     * X-Bunq-Attachment-Description header.
     *
     * @param string $requestBytes
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(
        string $requestBytes,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseInt {
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
     * Get a specific attachment. The header of the response contains the
     * content-type of the attachment.
     *
     * @param int $attachmentTabId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseAttachmentTab
     */
    public static function get(
        int $attachmentTabId,
        int $monetaryAccountId = null,
        array $customHeaders = []
    ): BunqResponseAttachmentTab {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $attachmentTabId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseAttachmentTab::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The id of the attachment.
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
     * constructor.
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * constructor.
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
     * constructor.
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
     * constructor.
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
        if (!is_null($this->id)) {
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
