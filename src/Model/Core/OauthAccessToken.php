<?php
namespace bunq\Model\Core;

use bunq\Context\BunqContext;
use bunq\Exception\BunqException;
use bunq\Model\Generated\Endpoint\OauthClient;
use bunq\Util\BunqEnumApiEnvironmentType;
use GuzzleHttp\Client;

/**
 */
class OauthAccessToken extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_GRANT_TYPE = 'grant_type';
    const FIELD_CODE = 'code';
    const FIELD_REDIRECT_URI = 'redirect_uri';
    const FIELD_CLIENT_ID = 'client_id';
    const FIELD_CLIENT_SECRET = 'client_secret';
    const FIELD_TOKEN = 'access_token';
    const FIELD_TOKEN_TYPE = 'token_type';
    const FIELD_STATE = 'state';

    /**
     * Token constants.
     */
    const TOKEN_URI_FORMAT_SANDBOX = 'https://api.oauth.sandbox.bunq.com/v1/token?%s';
    const TOKEN_URI_FORMAT_PRODUCTION = 'https://api.oauth.bunq.com/v1/token?%s';

    /**
     * Error constants.
     */
    const ERROR_UNSUPPORTED_ENVIRONMENT =
        'It\'s not supported to get OAuth access tokens for the current API environment.';

    /**
     * @var string
     */
    protected $token;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $state;

    /**
     * OauthAccessToken constructor.
     *
     * @param string $accessToken
     * @param string $tokenType
     * @param string|null $state
     */
    protected function __construct(
        string $accessToken,
        string $tokenType,
        string $state = null
    ) {
        $this->token = $accessToken;
        $this->type = $tokenType;
        $this->state = $state;
    }

    /**
     * @param BunqEnumOauthGrantType $grantType
     * @param string $authCode
     * @param string $redirectUri
     * @param OauthClient $client
     *
     * @return OauthAccessToken
     */
    public static function create(
        BunqEnumOauthGrantType $grantType,
        string $authCode,
        string $redirectUri,
        OauthClient $client
    ): OauthAccessToken {
        $responseString = (new Client())->post(
            static::createTokenUri($grantType->getChoiceString(), $authCode, $redirectUri, $client)
        )
            ->getBody()
            ->getContents();

        $parsedResponse = json_decode($responseString, true);
        $accessToken = new static(
            $parsedResponse[self::FIELD_TOKEN],
            $parsedResponse[self::FIELD_TOKEN_TYPE]
        );

        if (isset($parsedResponse[self::FIELD_STATE])) {
            $accessToken->state = $parsedResponse[self::FIELD_STATE];
        }

        return $accessToken;
    }

    /**
     * @param string $grantType
     * @param string $authCode
     * @param string $redirectUri
     * @param OauthClient $client
     *
     * @return string
     */
    protected static function createTokenUri(
        string $grantType,
        string $authCode,
        string $redirectUri,
        OauthClient $client
    ): string {
        return vsprintf(
            static::determineTokenUriFormat(),
            [
                http_build_query(
                    [
                        self::FIELD_GRANT_TYPE => $grantType,
                        self::FIELD_CODE => $authCode,
                        self::FIELD_REDIRECT_URI => $redirectUri,
                        self::FIELD_CLIENT_ID => $client->getClientId(),
                        self::FIELD_CLIENT_SECRET => $client->getSecret(),
                    ]
                )
            ]
        );
    }

    /**
     * @return string
     */
    public function getAccessTokenString(): string
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getStateString(): string
    {
        return $this->state;
    }

    /**
     * @return bool
     */
    protected function isAllFieldNull(): bool
    {
        if (!is_null($this->token)) {
            return false;
        } elseif (!is_null($this->type)) {
            return false;
        } elseif (!is_null($this->state)) {
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
            return self::TOKEN_URI_FORMAT_SANDBOX;
        } elseif ($environmentType->equals(BunqEnumApiEnvironmentType::PRODUCTION())) {
            return self::TOKEN_URI_FORMAT_PRODUCTION;
        } else {
            throw new BunqException(self::ERROR_UNSUPPORTED_ENVIRONMENT);
        }
    }
}
