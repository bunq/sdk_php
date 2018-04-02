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
     * Error constants.
     */
    const ERROR_COULD_NOT_DETERMINE_IBAN_POINTER = 'Could not determine IBAN pointer';
    const ERROR_COULD_NOT_DETERMINE_USER_ALIAS = 'Could not determine user alias.';
    const WARMING_TEST_SKIPPED_DUE_TO_INSUFFICIENT_BALANCE = 'Not enough money on primary account.';

    /*
     * CashRegister constants.
     */
    const CASH_REGISTER_NAME = 'PHP test cash register';
    const CASH_REGISTER_STATUS = 'PENDING_APPROVAL';

    /**
     * MonetaryAccount constants.
     */
    const MOMENTARY_ACCOUNT_CURRENCY = 'EUR';
    const MONETARY_ACCOUNT_DESCRIPTION = 'test account php';
    const MONETARY_ACCOUNT_BALANCE_THRESHOLD = 0.00;

    /**
     * Pointer constants.
     */
    const POINTER_TYPE_IBAN = 'IBAN';
    const POINTER_TYPE_EMAIL = 'EMAIL';
    const EMAIL_BRAVO = 'bravo@bunq.com';

    /**
     * Full name of context config file to use for testing.
     */
    const FILE_PATH_CONTEXT_CONFIG = __DIR__ . '/../bunq-test.conf';
    const FILE_PATH_AVATAR = '/resource/bunq_App_Icon_Square@4x.png';

    /**
     * Attachment constants.
     */
    const ATTACHMENT_CONTENT_TYPE = 'image/png';
    const ATTACHMENT_DESCRIPTION = 'TEST PNG PHP';
    const ATTACHMENT_PATH_IN = '/bunq_App_Icon_Square@4x.png';

    /**
     * The index of the first item in an array.
     */
    const INDEX_FIRST = 0;

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
            ApiContext::restore(self::FILE_PATH_CONTEXT_CONFIG)
        );
    }

    /**
     */
    protected static function createApiContext()
    {
        InstallationUtil::automaticInstall(
            BunqEnumApiEnvironmentType::SANDBOX(),
            self::FILE_PATH_CONTEXT_CONFIG
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
            FileUtil::getFileContents(__DIR__ . self::FILE_PATH_AVATAR),
            [
                ApiClient::HEADER_CONTENT_TYPE => $this->getAttachmentContentType(),
                ApiClient::HEADER_ATTACHMENT_DESCRIPTION => $this->getAttachmentDescription(),
            ]
        );
        $avatarUuid = Avatar::create($attachmentUuid->getValue());
        $cashId = CashRegister::create(
            self::CASH_REGISTER_NAME,
            self::CASH_REGISTER_STATUS,
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
            self::MOMENTARY_ACCOUNT_CURRENCY,
            self::MONETARY_ACCOUNT_DESCRIPTION
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
            if ($alias->getType() === self::POINTER_TYPE_IBAN) {
                return $alias;
            }
        }

        throw new BunqException(self::ERROR_COULD_NOT_DETERMINE_IBAN_POINTER);
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
            return BunqContext::getUserContext()->getUserPerson()->getAlias()[self::INDEX_FIRST];
        } elseif (BunqContext::getUserContext()->isOnlyUserCompanySet()) {
            return BunqContext::getUserContext()->getUserCompany()->getAlias()[self::INDEX_FIRST];
        } else {
            throw new BunqException(self::ERROR_COULD_NOT_DETERMINE_USER_ALIAS);
        }
    }

    /**
     * @return Pointer
     */
    protected function getUserBravoPointer(): Pointer
    {
        return new Pointer(
            self::POINTER_TYPE_EMAIL,
            self::EMAIL_BRAVO
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

        return $balance > self::MONETARY_ACCOUNT_BALANCE_THRESHOLD;
    }

    /**
     * @return bool
     */
    protected function assertTestShouldBeSkippedDueToInsufficientBalance(): bool
    {
        if (!$this->doesAccountHaveEnoughMoney()) {
            static::markTestSkipped(self::WARMING_TEST_SKIPPED_DUE_TO_INSUFFICIENT_BALANCE);
        }

        return true;
    }
}
