<?php
namespace bunq\tests;

use bunq\Model\BunqModel;
use bunq\Model\Installation;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\UserCompany;
use PHPUnit\Framework\TestCase;

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
     * Call a private static method on a class.
     *
     * @param string $class
     * @param string $method
     * @param array $args
     *
     * @return mixed
     */
    private function callPrivateStaticMethod($class, $method, array $args)
    {
        $reflectionClass = new \ReflectionClass($class);
        $createFromJsonMethod = $reflectionClass->getMethod($method);
        $createFromJsonMethod->setAccessible(true);

        return $createFromJsonMethod->invokeArgs(null, $args);
    }

    /**
     * Test creation of Id.
     */
    public function testCreateIdFromJson()
    {
        $id = $this->callPrivateStaticMethod(BunqModel::class, self::FUNCTION_PROCESS_FOR_ID, [self::JSON_ID]);

        $this->assertEquals(self::EXPECTED_ID, $id);
    }

    /**
     * Test creation of Uuid.
     */
    public function testCreateUuidFromJson()
    {
        $uuid = $this->callPrivateStaticMethod(BunqModel::class, self::FUNCTION_PROCESS_FOR_UUID, [self::JSON_UUID]);

        $this->assertEquals(self::EXPECTED_UUID, $uuid);
    }

    /**
     * Test creation of UserCompany.
     */
    public function testCreateFromJson()
    {
        $userCompanyJson = file_get_contents(__DIR__ . self::RESOURCE_USER_COMPANY_JSON);
        /** @var UserCompany $userCompany */
        $userCompany = $this->callPrivateStaticMethod(
            UserCompany::class,
            self::FUNCTION_FROM_JSON,
            [$userCompanyJson]
        );

        $this->assertInstanceOf(UserCompany::class, $userCompany);
        $this->assertEquals(self::EXPECTED_NAME_BUNQ, $userCompany->getName());
        $this->assertEquals(self::EXPECTED_EMAIL_BRAVO, $userCompany->getAlias()[0]->getValue());
        $this->assertInstanceOf(Amount::class, $userCompany->getDailyLimitWithoutConfirmationLogin());
    }

    /**
     * Test creating a predefined class from json.
     */
    public function testCreateClassFormJson()
    {
        /** @var Installation $installation */
        $installation = $this->callPrivateStaticMethod(
            BunqModel::class,
            self::FUNCTION_CLASS_FROM_JSON,
            [
                Installation::class,
                file_get_contents(__DIR__ . self::RESOURCE_INSTALLATION_JSON),
            ]
        );

        $this->assertInstanceOf(Installation::class, $installation);
        $this->assertEquals(self::EXPECTED_INSTALLATION_ID, $installation->getId()->getId());
        $this->assertEquals(self::EXPECTED_TOKEN, $installation->getToken()->getToken());
        $this->assertEquals(
            self::EXPECTED_PUBLIC_KEY,
            $installation->getServerPublicKey()->getServerPublicKey()->getKey()
        );
    }
}
