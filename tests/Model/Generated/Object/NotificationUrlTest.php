<?php
namespace bunq\test\Model\Object;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Endpoint\BunqMeTab;
use bunq\Model\Generated\Endpoint\ChatMessage;
use bunq\Model\Generated\Endpoint\ChatMessageAnnouncement;
use bunq\Model\Generated\Endpoint\DraftPayment;
use bunq\Model\Generated\Endpoint\MasterCardAction;
use bunq\Model\Generated\Endpoint\MonetaryAccount;
use bunq\Model\Generated\Endpoint\MonetaryAccountBank;
use bunq\Model\Generated\Endpoint\Payment;
use bunq\Model\Generated\Endpoint\PaymentBatch;
use bunq\Model\Generated\Endpoint\RequestInquiry;
use bunq\Model\Generated\Endpoint\RequestResponse;
use bunq\Model\Generated\Endpoint\ScheduleInstance;
use bunq\Model\Generated\Endpoint\SchedulePayment;
use bunq\Model\Generated\Endpoint\ShareInviteBankInquiry;
use bunq\Model\Generated\Endpoint\ShareInviteBankResponse;
use bunq\Model\Generated\Object\NotificationUrl;
use bunq\test\BunqSdkTestBase;
use bunq\Util\FileUtil;

/**
 * Tests:
 *  NotificationUrl
 */
class NotificationUrlTest extends BunqSdkTestBase
{
    /**
     * Assertion errors.
     */
    const ERROR_ASSERT_JSON_DECODE_ERROR = 'Error accorded while decoding the JSON file.';
    const ERROR_ASSERT_OBJECT_IS_NULL_ERROR = 'The field object of NotificationUrl is null.';

    /**
     * Getter string constants
     */
    const GETTER_PAYMENT = 'getPayment';
    const GETTER_BUNQ_ME_TAB = 'getBunqMeTab';
    const GETTER_CHAT_MESSAGE = 'getChatMessage';
    const GETTER_CHAT_MESSAGE_ANNOUNCEMENT = 'getChatMessageAnnouncement';
    const GETTER_DRAFT_PAYMENT = 'getDraftPayment';
    const GETTER_MASTER_CARD_ACTION = 'getMasterCardAction';
    const GETTER_MONETARY_ACCOUNT = 'getMonetaryAccount';
    const GETTER_MONETARY_ACCOUNT_BANK= 'getMonetaryAccountBank';
    const GETTER_PAYMENT_BATCH = 'getPaymentBatch';
    const GETTER_REQUEST_INQUIRY = 'getRequestInquiry';
    const GETTER_REQUEST_RESPONSE = 'getRequestResponse';
    const GETTER_SCHEDULE_PAYMENT = 'getScheduledPayment';
    const GETTER_SCHEDULE_INSTANCE = 'getScheduledInstance';
    const GETTER_SHARE_INVITE_BANK_INQUIRY = 'getShareInviteBankInquiry';
    const GETTER_SHARE_INVITE_BANK_RESPONSE = 'getShareInviteBankResponse';

    /**
     * Model json paths constants.
     */
    const BASE_PATH_JSON_MODEL = __DIR__ . '../../../Resource/NotificationUrlJsons';
    const JSON_PATH_MUTATION_MODEL = self::BASE_PATH_JSON_MODEL . '/Mutation.json';
    const JSON_PATH_BUNQ_ME_TAB_MODEL = self::BASE_PATH_JSON_MODEL . '/BunqMeTab.json';
    const JSON_PATH_CHAT_MESSAGE_ANNOUNCEMENT_MODEL = self::BASE_PATH_JSON_MODEL . '/ChatMessageAnnouncement.json';
    const JSON_PATH_DRAFT_PAYMENT_MODEL = self::BASE_PATH_JSON_MODEL . '/DraftPayment.json';
    const JSON_PATH_MASTER_CARD_ACTION_MODEL = self::BASE_PATH_JSON_MODEL . '/MasterCardAction.json';
    const JSON_PATH_MONETARY_ACCOUNT_BANK_MODEL = self::BASE_PATH_JSON_MODEL . '/MonetaryAccountBank.json';
    const JSON_PATH_PAYMENT_BATCH_MODEL = self::BASE_PATH_JSON_MODEL . '/PaymentBatch.json';
    const JSON_PATH_REQUEST_INQUIRY_MODEL = self::BASE_PATH_JSON_MODEL . '/RequestInquiry.json';
    const JSON_PATH_REQUEST_RESPONSE_MODEL = self::BASE_PATH_JSON_MODEL . '/RequestResponse.json';
    const JSON_PATH_SCHEDULE_PAYMENT_MODEL = self::BASE_PATH_JSON_MODEL . '/ScheduledPayment.json';
    const JSON_PATH_SCHEDULE_INSTANCE_MODEL = self::BASE_PATH_JSON_MODEL . '/ScheduledInstance.json';
    const JSON_PATH_SHARE_INVITE_BANK_INQUIRY_MODEL = self::BASE_PATH_JSON_MODEL . '/ShareInviteBankInquiry.json';
    const JSON_PATH_SHARE_INVITE_BANK_RESPONSE_MODEL = self::BASE_PATH_JSON_MODEL . '/ShareInviteBankResponse.json';

    /**
     * Model root key.
     */
    const KEY_NOTIFICATION_URL_MODEL = 'NotificationUrl';

    /**
     */
    public function testMutationModel()
    {
        $this->executeNotificationUrlTest(
            self::JSON_PATH_MUTATION_MODEL,
            Payment::class,
            self::GETTER_PAYMENT
        );
    }

    /**
     */
    public function testBunqMeTabModel()
    {
        $this->executeNotificationUrlTest(
            self::JSON_PATH_BUNQ_ME_TAB_MODEL,
            BunqMeTab::class,
            self::GETTER_BUNQ_ME_TAB
        );
    }

    /**
     */
    public function testGetMonetaryAccountModel()
    {
        $this->executeNotificationUrlTest(
            self::JSON_PATH_MONETARY_ACCOUNT_BANK_MODEL,
            MonetaryAccount::class,
            self::GETTER_MONETARY_ACCOUNT,
            self::GETTER_MONETARY_ACCOUNT_BANK,
            MonetaryAccountBank::class
        );
    }
    
    /**
     */
    public function testPaymentBatchModel()
    {
        $this->executeNotificationUrlTest(
            self::JSON_PATH_PAYMENT_BATCH_MODEL,
            PaymentBatch::class,
            self::GETTER_PAYMENT_BATCH
        );
    }

    /**
     */
    public function testRequestResponse()
    {
        $this->executeNotificationUrlTest(
            self::JSON_PATH_REQUEST_RESPONSE_MODEL,
            RequestResponse::class,
            self::GETTER_REQUEST_RESPONSE
        );
    }

    /**
     */
    public function testRequestInquiryModel()
    {
        $this->executeNotificationUrlTest(
            self::JSON_PATH_REQUEST_INQUIRY_MODEL,
            RequestInquiry::class,
            self::GETTER_REQUEST_INQUIRY
        );
    }

    /**
     */
    public function testSchedulePaymentModel()
    {
        $this->executeNotificationUrlTest(
            self::JSON_PATH_SCHEDULE_PAYMENT_MODEL,
            SchedulePayment::class,
            self::GETTER_SCHEDULE_PAYMENT
        );
    }

    /**
     */
    public function testShareInviteBankResponse()
    {
        $this->executeNotificationUrlTest(
            self::JSON_PATH_SHARE_INVITE_BANK_RESPONSE_MODEL,
            ShareInviteBankResponse::class,
            self::GETTER_SHARE_INVITE_BANK_RESPONSE
        );
    }

    /**
     */
    public function testScheduledInstance()
    {
        $this->executeNotificationUrlTest(
            self::JSON_PATH_SCHEDULE_INSTANCE_MODEL,
            ScheduleInstance::class,
            self::GETTER_SCHEDULE_INSTANCE
        );
    }

    /**
     */
    public function testShareInviteBankInquiry()
    {
        $this->executeNotificationUrlTest(
            self::JSON_PATH_SHARE_INVITE_BANK_INQUIRY_MODEL,
            ShareInviteBankInquiry::class,
            self::GETTER_SHARE_INVITE_BANK_INQUIRY
        );
    }

    /**
     */
    public function testMasterCardAction()
    {
        $this->executeNotificationUrlTest(
            self::JSON_PATH_MASTER_CARD_ACTION_MODEL,
            MasterCardAction::class,
            self::GETTER_MASTER_CARD_ACTION
        );
    }

    /**
     */
    public function testChatMessageAnnouncementModel()
    {
        $this->executeNotificationUrlTest(
            self::JSON_PATH_CHAT_MESSAGE_ANNOUNCEMENT_MODEL,
            ChatMessage::class,
            self::GETTER_CHAT_MESSAGE,
            self::GETTER_CHAT_MESSAGE_ANNOUNCEMENT,
            ChatMessageAnnouncement::class
        );
    }

    /**
     */
    public function testDraftPaymentModel()
    {
        $this->executeNotificationUrlTest(
            self::JSON_PATH_DRAFT_PAYMENT_MODEL,
            DraftPayment::class,
            self::GETTER_DRAFT_PAYMENT
        );
    }

    /**
     * @param string $expectedJsonFileName
     * @param string $classNameExpected
     * @param string $referencedObjectGetterName
     * @param string|null $subClassObjectGetterName
     * @param string|null $subClassNameExpected
     */
    private function executeNotificationUrlTest(
        string $expectedJsonFileName,
        string $classNameExpected,
        string $referencedObjectGetterName,
        string $subClassObjectGetterName = null,
        string $subClassNameExpected = null
    ) {
        $jsonExpectedString = FileUtil::getFileContents($expectedJsonFileName);
        $notificationUrl = $this->getNotificationUrlFromJson($jsonExpectedString);

        $model = $notificationUrl->getObject()->$referencedObjectGetterName();
        $referencedModel = $notificationUrl->getObject()->getReferencedObject();

        static::assertNotNull($model);
        static::assertNotNull($referencedModel);
        static::assertInstanceOf($classNameExpected, $referencedModel);

        if (!is_null($subClassObjectGetterName)) {
            $subClassModel = $referencedModel->$subClassObjectGetterName();

            static::assertNotNull($subClassModel);
            static::assertInstanceOf($subClassNameExpected, $subClassModel);
        }
    }

    /**
     * @param string $jsonString
     *
     * @return NotificationUrl
     */
    private function getNotificationUrlFromJson(string $jsonString): NotificationUrl
    {
        $json = json_decode($jsonString, true);

        static::assertNotNull($json, self::ERROR_ASSERT_JSON_DECODE_ERROR);

        $notificationObject = $this->getNotificationObjectJsonString($json);
        $notificationUrl = NotificationUrl::createFromJsonString($notificationObject);
        $notificationUrl = self::assertInstanceOfNotificationUrl($notificationUrl);

        static::assertNotNull($notificationUrl->getObject(), self::ERROR_ASSERT_OBJECT_IS_NULL_ERROR);

        return $notificationUrl;
    }

    /**
     * @param string[] $json
     *
     * @return string
     */
    private function getNotificationObjectJsonString(array $json)
    {
        $this->assertJsonIsNotificationUrlJson($json);

        return json_encode($json[self::KEY_NOTIFICATION_URL_MODEL]);
    }

    /**
     * @param string[] $json
     */
    private function assertJsonIsNotificationUrlJson(array $json)
    {
        static::assertArrayHasKey(self::KEY_NOTIFICATION_URL_MODEL, $json);
    }

    /**
     * @param BunqModel $model
     *
     * @return NotificationUrl
     */
    private function assertInstanceOfNotificationUrl(BunqModel $model): NotificationUrl
    {
        static::assertInstanceOf(NotificationUrl::class, $model);

        /* @var NotificationUrl $model */

        return $model;
    }
}
