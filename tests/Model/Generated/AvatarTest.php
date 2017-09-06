<?php
namespace bunq\test\Model\Generated;

use bunq\Http\ApiClient;
use bunq\test\BunqSdkTestBase;
use bunq\test\Config;
use bunq\Util\FileUtil;

/**
 * Tests:
 *  AttachmentPublic
 *  AttachmentPublicContent Avatar
 */
class AvatarTest extends BunqSdkTestBase
{
    /**
     * Index number of the first item in an array.
     */
    const INDEX_FIRST = 0;

    /**
     *  Points to the directory where attachments are stored.
     */
    const PATH_ATTACHMENT = '/../../resource/';

    /**
     * @var string
     */
    private static $contentType;

    /**
     * @var string
     */
    private static $attachmentDescription;

    /**
     * @var string
     */
    private static $attachmentPathIn;

    /**
     */
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        static::$attachmentDescription = Config::getAttachmentDescription();
        static::$attachmentPathIn = Config::getAttachmentPathIn();
        static::$contentType = Config::getAttachmentContentType();
    }

    /**
     * Tests the creation of a new avatar.
     */
    public function testCreateAvatar()
    {
        $fileContentsBefore = $this->getFileContentsOfAttachment();
        $customHeadersMap = [
            ApiClient::HEADER_ATTACHMENT_DESCRIPTION => static::$attachmentDescription,
            ApiClient::HEADER_CONTENT_TYPE => static::$contentType,
        ];

        $attachmentUuidBefore = AttachmentPublic::create(
            static::getApiContext(),
            $fileContentsBefore,
            $customHeadersMap
        )->getValue();
        $avatarMap = [
            Avatar::FIELD_ATTACHMENT_PUBLIC_UUID => $attachmentUuidBefore,
        ];
        $avatarUuid = Avatar::create(static::getApiContext(), $avatarMap)->getValue();

        /** @var Avatar $attachmentUuidAfter */
        $attachmentUuidAfter = Avatar::get(static::getApiContext(), $avatarUuid)->getValue();
        $imageInfoArray = $attachmentUuidAfter->getImage();
        $attachmentPublicUuid = $imageInfoArray[self::INDEX_FIRST]->getAttachmentPublicUuid();
        $fileContentsAfter = AttachmentPublicContent::listing(static::getApiContext(), $attachmentPublicUuid)->getValue();

        static::assertEquals($fileContentsBefore, $fileContentsAfter);
    }

    /**
     * @return string
     */
    private function getFileContentsOfAttachment()
    {
        $path = __DIR__ . self::PATH_ATTACHMENT . static::$attachmentPathIn;

        return FileUtil::getFileContents($path);
    }
}
