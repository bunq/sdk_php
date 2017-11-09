<?php

namespace bunq\test\Model\Object;

use bunq\Exception\BunqException;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Endpoint\BunqMeTab;
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

    /**
     * Model root key.
     */
    const KEY_NOTIFICATION_URL_MODEL = 'NotificationUrl';
    const KEY_MUTATION_MODEL = '';

    /**
     */
    public function testMutationModel()
    {
        $jsonString = FileUtil::getFileContents(self::JSON_PATH_MUTATION_MODEL);
        $notificationUrl = $this->getNotificationUrlFromJson($jsonString);

        $paymentModel = $notificationUrl->getObject()->getPayment();
        $referencedPaymentModel = $notificationUrl->getObject()->getReferencedObject();

        $this->assetReferencedModelIsNotNull($paymentModel);
        $this->assetReferencedModelIsNotNull($referencedPaymentModel);
        static::assertInstanceOf(Payment::class, $referencedPaymentModel);
    }

    /**
     */
    public function testBunqMeTabModel()
    {
        $jsonString = FileUtil::getFileContents(self::JSON_PATH_BUNQ_ME_TAB_MODEL);
        $notificationUrl = $this->getNotificationUrlFromJson($jsonString);

        $bunqMeTabModel = $notificationUrl->getObject()->getBunqMeTab();
        $referencedBunqMeTabModel = $notificationUrl->getObject()->getReferencedObject();

        $this->assetReferencedModelIsNotNull($bunqMeTabModel);
        $this->assetReferencedModelIsNotNull($referencedBunqMeTabModel);
        static::assertInstanceOf(BunqMeTab::class, $referencedBunqMeTabModel);
    }

    /**
     */
    public function testChatMessageModel()
    {
        $jsonString = FileUtil::getFileContents(self::JSON_PATH_CHAT_MESSAGE_MODEL);
        $notificationUrl = $this->getNotificationUrlFromJson($jsonString);

        $chatMessageModel = $notificationUrl->getObject()->getChatMessage();
        $referencedChatMessageModel = $notificationUrl->getObject()->getReferencedObject();

        $this->assetReferencedModelIsNotNull($chatMessageModel);
        $this->assetReferencedModelIsNotNull($referencedChatMessageModel);
        static::assertInstanceOf(BunqMeTab::class, $referencedChatMessageModel);
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

        return self::assertInstanceOfNotificationUrl($notificationUrl);
    }

    /**
     * @param BunqModel $model
     */
    private function assetReferencedModelIsNotNull(BunqModel $model)
    {
        static::assertNotNull($model);
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
