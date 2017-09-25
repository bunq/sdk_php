<?php
namespace bunq\test;

use bunq\Http\BunqResponseRaw;
use bunq\Model\Core\BunqModel;
use bunq\Model\Core\BunqResponseInstallation;
use bunq\Model\Generated\Endpoint\BunqResponseInt;
use bunq\Model\Generated\Endpoint\BunqResponseString;
use bunq\Model\Generated\Endpoint\BunqResponseUserCompany;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Endpoint\UserCompany;
use bunq\Model\Core\Installation;
use bunq\Util\FileUtil;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * @author Gerben Oolbekkink <gerben@bunq.com>
 * @since 20170630 Initial creation.
 */
class JsonParserTest extends TestCase
{
    /**
     * Test constants.
     */
    const JSON_ID = '{"Response": [{"Id": {"id": 37}}]}';
    const EXPECTED_ID = 37;
    const JSON_UUID = '{"Response": [{"Uuid": {"uuid": "5a442b1d-3d43-4285-b532-dbb21055824a"}}]}';
    const EXPECTED_UUID = '5a442b1d-3d43-4285-b532-dbb21055824a';
    const EXPECTED_TOKEN = 'a4f9d888eea84f52722b9baf2f17c289d549edf6e0eccdbf868eb922be306fb6';
    const EXPECTED_PUBLIC_KEY = 'My server public key';
    const EXPECTED_NAME_BUNQ = 'bunq';
    const EXPECTED_EMAIL_BRAVO = 'bravo@bunq.com';
    const EXPECTED_INSTALLATION_ID = 26;

    /**
     * Resource location constants.
     */
    const RESOURCE_INSTALLATION_JSON = '/resource/installation.json';
    const RESOURCE_USER_COMPANY_JSON = '/resource/user_company.json';

    /**
     * Function constants.
     */
    const FUNCTION_CLASS_FROM_JSON = 'classFromJson';
    const FUNCTION_FROM_JSON = 'fromJson';
    const FUNCTION_PROCESS_FOR_ID = 'processForId';
    const FUNCTION_PROCESS_FOR_UUID = 'processForUuid';

    /**
     * Test creation of Id.
     */
    public function testCreateIdFromJson()
    {
        /** @var BunqResponseInt $bunqResponseId */
        $bunqResponseId = $this->callPrivateStaticMethod(
            BunqModel::class,
            self::FUNCTION_PROCESS_FOR_ID,
            [new BunqResponseRaw(self::JSON_ID, [])]
        );
        $id = $bunqResponseId->getValue();

        static::assertEquals(self::EXPECTED_ID, $id);
    }

    /**
     * Call a private static method on a class.
     *
     * @param string $class
     * @param string $method
     * @param mixed[] $args
     *
     * @return mixed
     */
    private function callPrivateStaticMethod(string $class, string $method, array $args)
    {
        $reflectionClass = new ReflectionClass($class);
        $createFromJsonMethod = $reflectionClass->getMethod($method);
        $createFromJsonMethod->setAccessible(true);

        return $createFromJsonMethod->invokeArgs(null, $args);
    }

    /**
     * Test creation of Uuid.
     */
    public function testCreateUuidFromJson()
    {
        /** @var BunqResponseString $bunqResponseUuid */
        $bunqResponseUuid = $this->callPrivateStaticMethod(
            BunqModel::class,
            self::FUNCTION_PROCESS_FOR_UUID,
            [new BunqResponseRaw(self::JSON_UUID, [])]
        );
        $uuid = $bunqResponseUuid->getValue();

        static::assertEquals(self::EXPECTED_UUID, $uuid);
    }

    /**
     * Test creation of UserCompany.
     */
    public function testCreateFromJson()
    {
        $userCompanyJson = FileUtil::getFileContents(__DIR__ . self::RESOURCE_USER_COMPANY_JSON);
        /** @var BunqResponseUserCompany $bunqResponseUserCompany */
        $bunqResponseUserCompany = $this->callPrivateStaticMethod(
            UserCompany::class,
            self::FUNCTION_FROM_JSON,
            [new BunqResponseRaw($userCompanyJson, []), UserCompany::OBJECT_TYPE]
        );
        $userCompany = $bunqResponseUserCompany->getValue();

        static::assertInstanceOf(UserCompany::class, $userCompany);
        static::assertEquals(self::EXPECTED_NAME_BUNQ, $userCompany->getName());
        static::assertEquals(self::EXPECTED_EMAIL_BRAVO, $userCompany->getAlias()[0]->getValue());
        static::assertInstanceOf(Amount::class, $userCompany->getDailyLimitWithoutConfirmationLogin());
    }

    /**
     * Test creating a predefined class from json.
     */
    public function testCreateClassFormJson()
    {
        $installationJson = FileUtil::getFileContents(__DIR__ . self::RESOURCE_INSTALLATION_JSON);
        /** @var BunqResponseInstallation $bunqResponseInstallation */
        $bunqResponseInstallation = $this->callPrivateStaticMethod(
            Installation::class,
            self::FUNCTION_CLASS_FROM_JSON,
            [new BunqResponseRaw($installationJson, [])]
        );
        $installation = $bunqResponseInstallation->getValue();

        static::assertInstanceOf(Installation::class, $installation);
        static::assertEquals(self::EXPECTED_INSTALLATION_ID, $installation->getId()->getId());
        static::assertEquals(self::EXPECTED_TOKEN, $installation->getToken()->getToken());
        static::assertEquals(
            self::EXPECTED_PUBLIC_KEY,
            $installation->getServerPublicKey()->getServerPublicKey()->getKey()
        );
    }
}
