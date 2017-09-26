<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Generated\Endpoint\AttachmentPublic;
use bunq\Model\Generated\Endpoint\AttachmentPublicContent;
use bunq\test\BunqSdkTestBase;
use bunq\test\Config;
use bunq\Util\FileUtil;

/**
 * Tests:
 *  AttachmentPublic
 *  AttachmentPublicContent
 */
class AttachmentPublicTest extends BunqSdkTestBase
{
    /**
     *  Points to the folder where attachments are located.
     */
    const PATH_ATTACHMENT = '/../../../resource/';

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
        static::$contentType = Config::getAttachmentContentType();
        static::$attachmentDescription = Config::getAttachmentDescription();
        static::$attachmentPathIn = Config::getAttachmentPathIn();
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

        $beforeUuid = AttachmentPublic::create(static::getApiContext(), $beforeBytes, $customHeadersMap)->getValue();
        $bytesAfter = AttachmentPublicContent::listing(static::getApiContext(), $beforeUuid)->getValue();

        static::assertEquals($beforeBytes, $bytesAfter);
    }

    /**
     * @return string
     */
    private function getFileContentsOfAttachment(): string
    {
        $path = __DIR__ . self::PATH_ATTACHMENT . static::$attachmentPathIn;

        return FileUtil::getFileContents($path);
    }
}
