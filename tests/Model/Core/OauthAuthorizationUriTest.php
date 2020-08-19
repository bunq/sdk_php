<?php
namespace bunq\test\Model\Core;

use bunq\Model\Core\BunqEnumOauthResponseType;
use bunq\Model\Core\OauthAuthorizationUri;
use bunq\Model\Generated\Endpoint\OauthClient;
use bunq\test\BunqSdkTestBase;

/**
 * @author Angelo Melonas <angelo@bunq.com>
 * @since 20200813 Initial creation.
 */
class OauthAuthorizationUriTest extends BunqSdkTestBase
{
    const TEST_EXPECT_URI = 'https://oauth.sandbox.bunq.com/auth?redirect_uri=redirecturi&response_type=code&state=state';
    const TEST_REDIRECT_URI = 'redirecturi';
    const TEST_STATUS = 'status';
    const TEST_STATE = 'state';

    /**
     */
    public function testAdditionalOathUriParameters()
    {
        $uri = OauthAuthorizationUri::create(
            BunqEnumOauthResponseType::CODE(),
            self::TEST_REDIRECT_URI,
            new OauthClient(self::TEST_STATUS),
            self::TEST_STATE
        )->getAuthorizationUriString();

        static::assertEquals(self::TEST_EXPECT_URI, $uri);
    }
}
