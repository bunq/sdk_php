<?php
namespace bunq\test\Context;

use bunq\Context\ApiContext;
use bunq\Context\BunqContext;
use bunq\Model\Generated\Endpoint\OauthClient;
use bunq\Util\BunqEnumApiEnvironmentType;
use bunq\Util\FileUtil;
use bunq\Util\SecurityUtil;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Tests:
 * ApiContext
 * BunqContext
 */
class Psd2ApiContextTest extends TestCase
{
    /**
     * File constants.
     */
    const FILE_TEST_CONFIGURATION = __DIR__ . '/PSD2/bunq-psd2-test.conf';
    const FILE_TEST_OAUTH = __DIR__ . '/PSD2/bunq-oauth-test.conf';
    const FILE_TEST_CERTIFICATE = __DIR__ . '/PSD2/certificate.cert';
    const FILE_TEST_CERTIFICATE_CHAIN = __DIR__ . '/PSD2/certificate.cert';
    const FILE_TEST_PRIVATE_KEY = __DIR__ . '/PSD2/private.pem';

    const TEST_DEVICE_DESCRIPTION = 'PSD2TestDevice';

    /**
     */
    public static function testApiContextCreateForPsd2()
    {
        if (file_exists(self::FILE_TEST_CONFIGURATION)) {
            $apiContext = ApiContext::restore(self::FILE_TEST_CONFIGURATION);
            BunqContext::loadApiContext($apiContext);

            static::assertNotNull($apiContext);
            return;
        }

        try {
            $apiContext = ApiContext::createForPsd2(
                BunqEnumApiEnvironmentType::SANDBOX(),
                SecurityUtil::getCertificateFromFile(self::FILE_TEST_CERTIFICATE),
                SecurityUtil::getPrivateKeyFromFile(self::FILE_TEST_PRIVATE_KEY),
                [
                    SecurityUtil::getCertificateFromFile(self::FILE_TEST_CERTIFICATE_CHAIN),
                ],
                self::TEST_DEVICE_DESCRIPTION
            );
            $apiContext->save(self::FILE_TEST_CONFIGURATION);
            BunqContext::loadApiContext($apiContext);

            static::assertTrue(file_exists(self::FILE_TEST_CONFIGURATION));
        } catch (Exception $exception) {
            static::fail($exception->getMessage());
        }
    }

    /**
     */
    public static function testOauthClientCreate()
    {
        if (file_exists(self::FILE_TEST_OAUTH)) {
            $oauthClient = OauthClient::fromJsonFile(self::FILE_TEST_OAUTH);
            static::assertNotNull($oauthClient->getClientId());

            return;
        }

        try {
            $oauthClientId = OauthClient::create()->getValue();
            $oauthClient = OauthClient::get($oauthClientId)->getValue();

            static::assertNotNull($oauthClient);

            FileUtil::saveObjectAsJson(self::FILE_TEST_OAUTH, $oauthClient);
            static::assertTrue(file_exists(self::FILE_TEST_OAUTH));
        } catch (Exception $exception) {
            static::fail($exception->getMessage());
        }
    }
}
