<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Model\Generated\Endpoint\DraftShareInviteBank;
use bunq\Model\Generated\Endpoint\DraftShareInviteBankQrCodeContent;
use bunq\Model\Generated\Object\DraftShareInviteBankEntry;
use bunq\Model\Generated\Object\DraftShareInviteEntry;
use bunq\Model\Generated\Object\ShareDetail;
use bunq\Model\Generated\Object\ShareDetailReadOnly;
use bunq\test\BunqSdkTestBase;
use bunq\test\Config;

/**
 * Tests
 *  DraftShareInviteBankEntry
 *  DraftShareInviteBankQrCodeContent
 */
class DraftShareInviteBankQrCodeContentTest extends BunqSdkTestBase
{
    /**
     * The file path to where to write the generated qr code.
     */
    const PATH_QR_OUTPUT = 'connectQr.png';

    /**
     * The format the date should formatted as before the request is send.
     */
    const FORMAT_MICROTIME = 'm/d/Y h:i:s.000000';

    /**
     *  Amount of time to add to the expiration date when creating a draft share.
     */
    const EXPIRATION_ADDED_TIME = '+1 hour';

    /**
     * @var string
     */
    private static $expirationDate;

    /**
     */
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        static::$expirationDate = date(self::FORMAT_MICROTIME, strtotime(self::EXPIRATION_ADDED_TIME));
    }

    /**
     * Test creating a draft share invite and get its qr code.
     *
     * This test has no assertion as of its testing to see if the code runs without errors.
     */
    public function testCreateDraftShareAndGetGr()
    {
        $draftShareId = $this->createConnect();
        $qrContent = $this->getQrContent($draftShareId);
        file_put_contents(self::PATH_QR_OUTPUT, $qrContent);
    }

    /**
     * @return int
     */
    private function createConnect(): int
    {
        return DraftShareInviteBank::create(
            static::$expirationDate,
            new DraftShareInviteEntry(
                new ShareDetail(
                    null,
                    new ShareDetailReadOnly(true, true, true)
                )
            )
        )->getValue();
    }

    /**
     * @param int $draftShareId
     *
     * @return string
     */
    private function getQrContent(int $draftShareId): string
    {
        return DraftShareInviteBankQrCodeContent::listing($draftShareId)->getValue();
    }
}
