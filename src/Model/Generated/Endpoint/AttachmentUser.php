<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Attachment;

/**
 * This call is used to upload an attachment that is accessible only by a
 * specific user. This can be used for example to upload passport scans or
 * other documents. Attachments supported are png, jpg and gif.
 *
 * @generated
 */
class AttachmentUser extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/attachment/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'AttachmentUser';

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
     * Get a specific attachment. The header of the response contains the
     * content-type of the attachment.
     *
     * @param int $attachmentUserId
     * @param string[] $customHeaders
     *
     * @return BunqResponseAttachmentUser
     */
    public static function get(int $attachmentUserId, array $customHeaders = []): BunqResponseAttachmentUser
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $attachmentUserId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseAttachmentUser::castFromBunqResponse(
            static::fromJson($responseRaw)
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
     *
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
     * constructor.
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
     * constructor.
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
