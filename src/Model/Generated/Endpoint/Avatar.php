<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\Image;

/**
 * Avatars are public images used to represent you or your company. Avatars
 * are used to represent users, monetary accounts and cash registers.
 * Avatars cannot be deleted, only replaced. Avatars can be updated after
 * uploading the image you would like to use through AttachmentPublic. Using
 * the attachment_public_uuid which is returned you can update your Avatar.
 * Avatars used for cash registers and company accounts will be reviewed by
 * bunq.
 *
 * @generated
 */
class Avatar extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'avatar';
    const ENDPOINT_URL_READ = 'avatar/%s';

    /**
     * Field constants.
     */
    const FIELD_ATTACHMENT_PUBLIC_UUID = 'attachment_public_uuid';

    /**
     * Object type.
     */
    const OBJECT_TYPE_POST = 'Uuid';
    const OBJECT_TYPE_GET = 'Avatar';

    /**
     * The UUID of the created avatar.
     *
     * @var string
     */
    protected $uuid;

    /**
     * The content type of the image.
     *
     * @var Image[]
     */
    protected $image;

    /**
     * The public UUID of the public attachment from which an avatar image must
     * be created.
     *
     * @var string
     */
    protected $attachmentPublicUuidFieldForRequest;

    /**
     * @param string $attachmentPublicUuid The public UUID of the public
     * attachment from which an avatar image must be created.
     */
    public function __construct(string $attachmentPublicUuid)
    {
        $this->attachmentPublicUuidFieldForRequest = $attachmentPublicUuid;
    }

    /**
     * @param string $attachmentPublicUuid The public UUID of the public
     * attachment from which an avatar image must be created.
     * @param string[] $customHeaders
     *
     * @return BunqResponseString
     */
    public static function create(string $attachmentPublicUuid, array $customHeaders = []): BunqResponseString
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                []
            ),
            [self::FIELD_ATTACHMENT_PUBLIC_UUID => $attachmentPublicUuid],
            $customHeaders
        );

        return BunqResponseString::castFromBunqResponse(
            static::processForUuid($responseRaw)
        );
    }

    /**
     * @param string $avatarUuid
     * @param string[] $customHeaders
     *
     * @return BunqResponseAvatar
     */
    public static function get(string $avatarUuid, array $customHeaders = []): BunqResponseAvatar
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$avatarUuid]
            ),
            [],
            $customHeaders
        );

        return BunqResponseAvatar::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The UUID of the created avatar.
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
     * constructor.
     *
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * The content type of the image.
     *
     * @return Image[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param Image[] $image
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->uuid)) {
            return false;
        }

        if (!is_null($this->image)) {
            return false;
        }

        return true;
    }
}
