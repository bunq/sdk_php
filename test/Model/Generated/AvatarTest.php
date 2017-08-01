<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\test\ApiContextHandler;
use bunq\test\TestConfig;
use PHPUnit\Framework\TestCase;
use bunq\Util\FileUtil;

/**
 * Tests:
 *  AttachmentPublic
 *  AttachmentPublicContent Avatar
 */
class AvatarTest extends TestCase
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
     * @var ApiContext
     */
    private static $apiContext;

    /**
     * @var string
     */
    private static $contentType;

    /**
     * @var string
     */
    private static $attachmentDescpription;

    /**
     * @var string
     */
    private static $attachmentPathIn;

    /**
     */
    public static function setUpBeforeClass()
    {
        static::$apiContext = ApiContextHandler::getApiContext();
        static::$attachmentDescpription = TestConfig::getAttachmentDescription();
        static::$attachmentPathIn = TestConfig::getAttachmentPathIn();
        static::$contentType = TestConfig::getAttachmentContentType();
    }

    /**
     * Tests the creation of a new avatar.
     */
    public function testCreateAvatar()
    {
        $fileContentsBefore = $this->getFileContentsOfAttachment();
        $customHeadersMap = [
            ApiClient::HEADER_ATTACHMENT_DESCRIPTION => static::$attachmentDescpription,
            ApiClient::HEADER_CONTENT_TYPE => static::$contentType,
        ];

        $attachmentUuidBefore = AttachmentPublic::create(static::$apiContext, $fileContentsBefore, $customHeadersMap);
        $avatarMap = [
            Avatar::FIELD_ATTACHMENT_PUBLIC_UUID => $attachmentUuidBefore,
        ];
        $avatarUuid = Avatar::create(static::$apiContext, $avatarMap);

        $attachmentUuidAfter = Avatar::get(static::$apiContext, $avatarUuid);
        $imageInfoArray = $attachmentUuidAfter->getImage();
        $attachmentPublicUuid = $imageInfoArray[self::INDEX_FIRST]->getAttachmentPublicUuid();
        $fileContentsAfter = AttachmentPublicContent::listing(static::$apiContext, $attachmentPublicUuid);

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
