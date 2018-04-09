<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Model\Generated\Endpoint\MonetaryAccountJoint;
use bunq\test\BunqSdkTestBase;
use bunq\Util\FileUtil;

/**
 * @author Kevin Hellemun <khellemun@bunq.com>
 * @since  20180409 Initial creation.
 */
class MonetaryAccountJointTest extends BunqSdkTestBase
{

    public static function setUpBeforeClass()
    {
    }

    public function setUp()
    {
    }

    /**
     */
    public function testMonetaryAccountJointFromJson()
    {
        $jsonString =
            FileUtil::getFileContents(__DIR__ . '/../../../resource/ResponseJsons/MonetaryAccountJoint.json');

        $monetaryAccountJoint = MonetaryAccountJoint::createFromJsonString($jsonString);

        static::assertNotNull($monetaryAccountJoint->getAllCoOwner());

        foreach ($monetaryAccountJoint->getAllCoOwner() as $coOwner) {
            static::assertNotNull($coOwner->getAlias());
            static::assertNotNull($coOwner->getStatus());
        }
    }
}
