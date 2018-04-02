<?php
namespace bunq\test;

use bunq\Context\ApiContext;
use bunq\Context\BunqContext;
use bunq\Exception\BunqException;
use bunq\Http\ApiClient;
use bunq\Model\Generated\Endpoint\AttachmentPublic;
use bunq\Model\Generated\Endpoint\Avatar;
use bunq\Model\Generated\Endpoint\CashRegister;
use bunq\Model\Generated\Endpoint\MonetaryAccountBank;
use bunq\Model\Generated\Object\Pointer;
use bunq\Util\BunqEnumApiEnvironmentType;
use bunq\Util\FileUtil;
use bunq\Util\InstallationUtil;
use PHPUnit\Framework\TestCase;

/**
 * The base for all the Bunq SDK tests.
 */
class BunqSdkTestBase extends TestCase
{
    /**
     * Full name of context config file to use for testing.
     */
    const FILENAME_CONTEXT_CONFIG = __DIR__ . '/../bunq-test.conf';
    /**
     * Device description for PHP unit tests
     */
    const DEVICE_DESCRIPTION = 'PHP unit tests';

    /**
     * Attachment constants.
     */
    const ATTACHMENT_CONTENT_TYPE = 'image/png';
    const ATTACHMENT_DESCRIPTION = 'TEST PNG PHP';
    const ATTACHMENT_PATH_IN = '/bunq_App_Icon_Square@4x.png';

    /**
     * @var MonetaryAccountBank
     */
    protected $secondMonetaryAccountBank;

    /**
     * @var CashRegister
     */
    protected $cashRegister;

    /**
     */
    public static function setUpBeforeClass()
    {
        static::createApiContext();
        BunqContext::loadApiContext(
            ApiContext::restore(self::FILENAME_CONTEXT_CONFIG)
        );
    }

    /**
     */
    protected static function createApiContext()
    {
        InstallationUtil::automaticInstall(
            BunqEnumApiEnvironmentType::SANDBOX(),
            self::FILENAME_CONTEXT_CONFIG
        );
    }

    /**
     */
    protected function setUp()
    {
        $this->setSecondMonetaryAccountBank();
    }

    /**
     */
    private function setCashRegister()
    {
        $attachmentUuid = AttachmentPublic::create(
            FileUtil::getFileContents(__DIR__ . '/resource/bunq_App_Icon_Square@4x.png'),
            [
                ApiClient::HEADER_CONTENT_TYPE => $this->getAttachmentContentType(),
                ApiClient::HEADER_ATTACHMENT_DESCRIPTION => $this->getAttachmentDescription(),
            ]
        );
        $avatarUuid = Avatar::create($attachmentUuid->getValue());

        $cashId = CashRegister::create(
            'PHP test cash register',
            'PENDING_APPROVAL',
            $avatarUuid->getValue()
        );

        $this->cashRegister = CashRegister::get($cashId->getValue());
    }

    /**
     * @return string
     */
    protected function getAttachmentContentType(): string
    {
        return self::ATTACHMENT_CONTENT_TYPE;
    }

    /**
     * @return string
     */
    protected function getAttachmentDescription(): string
    {
        return self::ATTACHMENT_DESCRIPTION;
    }

    /**
     */
    private function setSecondMonetaryAccountBank()
    {
        $createdId = MonetaryAccountBank::create(
            'EUR',
            'test account php'
        );

        $this->secondMonetaryAccountBank = MonetaryAccountBank::get($createdId->getValue())->getValue();
    }

    /**
     * @return Pointer
     *
     * @throws BunqException
     */
    protected function getSecondMonetaryAccountAlias(): Pointer
    {
        $allAlias = $this->secondMonetaryAccountBank->getAlias();

        foreach ($allAlias as $alias) {
            if ($alias->getType() === 'IBAN') {
                return $alias;
            }
        }

        throw new BunqException('Could not determine IBAN pointer');
    }

    /**
     * @return string
     */
    protected function getAttachmentFilePath(): string
    {
        return self::ATTACHMENT_PATH_IN;
    }

    /**
     * @return Pointer
     *
     * @throws BunqException
     */
    protected function getUserAlias(): Pointer
    {
        if (BunqContext::getUserContext()->isOnlyUserPersonSet()) {
            return BunqContext::getUserContext()->getUserPerson()->getAlias()[0];
        } elseif (BunqContext::getUserContext()->isOnlyUserCompanySet()) {
            return BunqContext::getUserContext()->getUserCompany()->getAlias()[0];
        } else {
            throw new BunqException('Could not determine user alias.');
        }
    }

    /**
     * @return Pointer
     */
    protected function getUserBravoPointer(): Pointer
    {
        return new Pointer(
            'EMAIL',
            'bravo@bunq.com'
        );
    }

    /**
     * @return int
     */
    protected function getSecondMonetaryAccountId(): int
    {
        return $this->secondMonetaryAccountBank->getId();
    }

    /**
     * @return int
     */
    protected function getCashRegisterId(): int
    {
        if (is_null($this->cashRegister)) {
            $this->setCashRegister();
        }

        return $this->cashRegister->getId();
    }

    /**
     * @return bool
     */
    protected function doesAccountHaveEnoughMoney(): bool
    {
        $balance = floatval(BunqContext::getUserContext()->getPrimaryMonetaryAccount()->getBalance()->getValue());

        return $balance > 0.00;
    }

    /**
     * @return bool
     */
    protected function assertTestShouldBeSkippedDueToInsufficientBalance(): bool
    {
        if (!$this->doesAccountHaveEnoughMoney()) {
            static::markTestSkipped('Not enough money on primary account.');
        }

        return true;
    }
}
