<?php
namespace bunq\Model\Core;

use bunq\Context\BunqContext;
use bunq\Exception\BunqException;
use bunq\Model\Generated\Endpoint\OauthClient;
use bunq\Util\BunqEnumApiEnvironmentType;

/**
 */
class OauthAuthorizationUri extends BunqModel
{
    /**
     * Uri constants.
     */
    const AUTH_URI_FORMAT_PRODUCTION = 'https://oauth.bunq.com/auth?%s';
    const AUTH_URI_FORMAT_SANDBOX = 'https://oauth.sandbox.bunq.com/auth?%s';

    /**
     * Field constants.
     */
    const FIELD_RESPONSE_TYPE = 'response_type';
    const FIELD_REDIRECT_URI = 'redirect_uri';
    const FIELD_STATE = 'state';
    const FIELD_CLIENT_ID = 'client_id';

    /**
     * Error constants.
     */
    const ERROR_UNSUPPORTED_ENVIRONMENT =
        'It\'s not supported to get OAuth access tokens for the current API environment.';

    /**
     * @var string
     */
    protected $authorizationUri;

    /**
     * OauthAuthorizationUri constructor.
     *
     * @param $authorizationUri
     */
    protected function __construct($authorizationUri)
    {
        $this->authorizationUri = $authorizationUri;
    }

    /**
     * @param BunqEnumOauthResponseType $responseType
     * @param string $redirectUri
     * @param OauthClient $client
     * @param string|null $state
     *
     * @return OauthAuthorizationUri
     */
    public static function create(
        BunqEnumOauthResponseType $responseType,
        string $redirectUri,
        OauthClient $client,
        string $state = null
    ): OauthAuthorizationUri {
        $allRequestParameter = [
            self::FIELD_REDIRECT_URI => $redirectUri,
            self::FIELD_RESPONSE_TYPE => $responseType->getChoiceString(),
            self::FIELD_CLIENT_ID => $client->getClientId(),
        ];

        if (!is_null($state)) {
            $allRequestParameter[self::FIELD_STATE] = $state;
        }

        return new static(
            vsprintf(
                static::determineTokenUriFormat(),
                [http_build_query($allRequestParameter)]
            )
        );
    }

    /**
     * @return string
     */
    public function getAuthorizationUriString(): string
    {
        return $this->authorizationUri;
    }

    /**
     * @return bool
     */
    protected function isAllFieldNull()
    {
        if (!is_null($this->authorizationUri)) {
            return false;
        }

        return true;
    }

    /**
     * @return string
     * @throws BunqException
     */
    private static function determineTokenUriFormat(): string
    {
        $environmentType = BunqContext::getApiContext()->getEnvironmentType();

        if ($environmentType->equals(BunqEnumApiEnvironmentType::SANDBOX())) {
            return self::AUTH_URI_FORMAT_SANDBOX;
        } elseif ($environmentType->equals(BunqEnumApiEnvironmentType::PRODUCTION())) {
            return self::AUTH_URI_FORMAT_PRODUCTION;
        } else {
            throw new BunqException(self::ERROR_UNSUPPORTED_ENVIRONMENT);
        }
    }
}
