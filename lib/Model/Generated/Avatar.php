<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Model\BunqModel;
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
     * Field constants.
     */
    const FIELD_ATTACHMENT_PUBLIC_UUID = 'attachment_public_uuid';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'avatar';
    const ENDPOINT_URL_READ = 'avatar/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'Avatar';

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
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param string[] $customHeaders
     *
     * @return string
     */
    public static function create(ApiContext $apiContext, array $requestMap, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $response = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                []
            ),
            $requestMap,
            $customHeaders
        );

        return static::processForUuid($response);
    }

    /**
     * @param ApiContext $apiContext
     * @param string $avatarUuid
     * @param string[] $customHeaders
     *
     * @return BunqModel|Avatar
     */
    public static function get(ApiContext $apiContext, $avatarUuid, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $response = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$avatarUuid]
            ),
            $customHeaders
        );

        return static::fromJson($response);
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
     */
    public function setImage(array$image)
    {
        $this->image = $image;
    }
}
