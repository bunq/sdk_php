<?php

namespace bunq\test\Model\Object;

use bunq\Exception\BunqException;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Endpoint\BunqMeTab;
use bunq\Model\Generated\Endpoint\ChatMessage;
use bunq\Model\Generated\Endpoint\DraftPayment;
use bunq\Model\Generated\Endpoint\Payment;
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
     * Getter string constants
     */
    const GET_PAYMENT = 'getPayment';
    const GET_BUNQ_ME_TAB = 'getBunqMeTab';
    const GET_CHAT_MESSAGE = 'getChatMessage';
    const GET_DRAFT_PAYMENT = 'getDraftPayment';

    /**
     * Assertion errors.
     */
    const ASSERT_SHOULD_NOT_REACH_THIS_CODE_ERROR = 'Something super weird just happen';
    const ASSERT_JSON_DECODE_ERROR = 'Might be that the JSON file is not a valid json.';

    /**
     * Model json paths constants.
     */
    const BASE_PATH_JSON_MODEL =  __DIR__ . '/../../../resource/NotificationUrlJsons';
    const JSON_PATH_MUTATION_MODEL = self::BASE_PATH_JSON_MODEL . '/Mutation.json';
    const JSON_PATH_BUNQ_ME_TAB_MODEL = self::BASE_PATH_JSON_MODEL . '/BunqMeTab.json';
    const JSON_PATH_CHAT_MESSAGE_MODEL = self::BASE_PATH_JSON_MODEL . '/ChatMessage.json';
    const JSON_PATH_DRAFT_PAYMENT_MODEL = self::BASE_PATH_JSON_MODEL . '/DraftPayment.json';

    /**
     * Model root key.
     */
    const KEY_NOTIFICATION_URL_MODEL = 'NotificationUrl';
    const KEY_MUTATION_MODEL = '';

    /**
     * @param string $fileName
     * @param string $className
     * @param string $getterName
     */
    private function executeTest(string $fileName, string $className, string $getterName)
    {
        $jsonString = FileUtil::getFileContents($fileName);
        $notificationUrl = $this->getNotificationUrlFromJson($jsonString);

        $model = $notificationUrl->getObject()->$getterName();
        $referencedModel = $notificationUrl->getObject()->getReferencedObject();

        static::assertNotNull($model);
        static::assertNotNull($referencedModel);
        static::assertInstanceOf($className, $referencedModel);
    }

    /**
     */
    public function testMutationModel()
    {
        $this->executeTest(self::JSON_PATH_MUTATION_MODEL, Payment::class, self::GET_PAYMENT);
    }

    /**
     */
    public function testBunqMeTabModel()
    {
        $this->executeTest(self::JSON_PATH_BUNQ_ME_TAB_MODEL, BunqMeTab::class, self::GET_BUNQ_ME_TAB);
    }

    ///**
    // */
    //public function testChatMessageModel()
    //{
    //    $this->executeTest(self::JSON_PATH_CHAT_MESSAGE_MODEL, ChatMessage::class, self::GET_CHAT_MESSAGE);
    //}

    /**
     */
    public function testDraftPaymentModel()
    {
        $this->executeTest(self::JSON_PATH_DRAFT_PAYMENT_MODEL, DraftPayment::class, self::GET_DRAFT_PAYMENT);
    }

    /**
     * @param string $jsonString
     *
     * @return NotificationUrl
     */
    private function getNotificationUrlFromJson(string $jsonString): NotificationUrl
    {
        $json = json_decode($jsonString, true);
        static::assertNotNull($json, self::ASSERT_JSON_DECODE_ERROR);
        $notificationObject = $this->getNotificationObjectAsString($json);
        $notificationUrl = NotificationUrl::fromJsonToModel($notificationObject);
        $notificationUrl = self::assertInstanceOfNotificationUrl($notificationUrl);

        static::assertNotNull($notificationUrl->getObject());

        return $notificationUrl;
    }

    /**
     * @param BunqModel $model
     *
     * @return NotificationUrl
     * @throws BunqException
     */
    private function assertInstanceOfNotificationUrl(BunqModel $model): NotificationUrl
    {
        static::assertInstanceOf(NotificationUrl::class, $model);

        if ($model instanceof NotificationUrl) {
            return $model;
        }

        throw new BunqException(self::ASSERT_SHOULD_NOT_REACH_THIS_CODE_ERROR);
    }

    /**
     * @param array $json
     *
     * @return string
     */
    private function getNotificationObjectAsString(array $json)
    {
        $this->assertJsonIsNotificationUrlJson($json);

        return json_encode($json[self::KEY_NOTIFICATION_URL_MODEL]);
    }

    /**
     * @param array $json
     */
    private function assertJsonIsNotificationUrlJson(array $json)
    {
        static::assertArrayHasKey(self::KEY_NOTIFICATION_URL_MODEL, $json);
    }
}