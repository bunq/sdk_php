<?php
namespace bunq\test\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Model\Generated\AttachmentPublic;
use bunq\Model\Generated\AttachmentPublicContent;
use bunq\test\ApiContextHandler;
use bunq\test\TestConfig;
use bunq\Util\FileUtil;

/**
 * Tests:
 *  AttachmentPublic
 *  AttachmentPublicContent
 */
class AttachmentPublicTest extends \PHPUnit_Framework_TestCase
{
    /**
     *  Points to the folder where attachments are located.
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
    private static $attachmentDescription;

    /**
     * @var string
     */
    private static $attachmentPathIn;

    /**
     */
    public static function setUpBeforeClass()
    {
        static::$apiContext = ApiContextHandler::getApiContext();
        static::$contentType = TestConfig::getAttachmentContentType();
        static::$attachmentDescription = TestConfig::getAttachmentDescription();
        static::$attachmentPathIn = TestConfig::getAttachmentPathIn();
    }

    /**
     * Check if the file send is indeed the same file we receive.
     */
    public function testCompareBeforeAndAfterBytes()
    {
        $beforeBytes = $this->getFileContentsOfAttachment();
        $customHeadersMap = [
            ApiClient::HEADER_CONTENT_TYPE => static::$contentType,
            ApiClient::HEADER_ATTACHMENT_DESCRIPTION => static::$attachmentDescription,
        ];

        $beforeUuid = AttachmentPublic::create(static::$apiContext, $beforeBytes, $customHeadersMap);
        $bytesAfter = AttachmentPublicContent::listing(static::$apiContext, $beforeUuid);

        static::assertEquals($beforeBytes, $bytesAfter);
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
