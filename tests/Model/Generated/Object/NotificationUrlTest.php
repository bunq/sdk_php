<?php

namespace bunq\test\Model\Object;

use bunq\Exception\BunqException;
use bunq\Model\Core\BunqModel;
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
     * Model json paths constants.
     */
    const BASE_PATH_JSON_MODEL =  __DIR__ . '/../../../resource/NotificationUrlJsons';
    const JSON_PATH_MUTATION_MODEL = self::BASE_PATH_JSON_MODEL . '/Mutation.json';

    /**
     * Model root key.
     */
    const KEY_NOTFICATION_URL_MODEL = 'NotificationUrl';
    const KEY_MUTATION_MODEL = '';

    /**
     */
    public function testMutationModel()
    {
        $jsonString = FileUtil::getFileContents(self::JSON_PATH_MUTATION_MODEL);
        $json = json_decode($jsonString, true);
        $notificationObject = $this->getNotificationObjectAsString($json);
        $notificationUrl = NotificationUrl::fromJsonToModel($notificationObject);
        $notificationUrl = self::assertInstanceOfNotificationUrl($notificationUrl);

        $paymentModel = $notificationUrl->getObject()->getPayment();
        $referencedPaymentModel = $notificationUrl->getObject()->getReferencedObject();

        $this->assetReferencedModelIsNotNull($paymentModel);
        $this->assetReferencedModelIsNotNull($referencedPaymentModel);
        static::assertInstanceOf(Payment::class, $referencedPaymentModel);
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

        throw new BunqException('Something super weird just happen');
    }

    /**
     * @param array $json
     *
     * @return string
     */
    private function getNotificationObjectAsString(array $json)
    {
        $this->assertJsonIsNotificationUrlJson($json);

        return json_encode($json[self::KEY_NOTFICATION_URL_MODEL]);
    }

    /**
     * @param array $json
     */
    private function assertJsonIsNotificationUrlJson(array $json)
    {
        static::assertArrayHasKey(self::KEY_NOTFICATION_URL_MODEL, $json);
    }
}