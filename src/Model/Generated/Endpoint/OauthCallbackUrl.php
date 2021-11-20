<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;

/**
 * Used for managing OAuth Client Callback URLs.
 *
 * @generated
 */
class OauthCallbackUrl extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/oauth-client/%s/callback-url/%s';
    const ENDPOINT_URL_CREATE = 'user/%s/oauth-client/%s/callback-url';
    const ENDPOINT_URL_UPDATE = 'user/%s/oauth-client/%s/callback-url/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/oauth-client/%s/callback-url';
    const ENDPOINT_URL_DELETE = 'user/%s/oauth-client/%s/callback-url/%s';

    /**
     * Field constants.
     */
    const FIELD_URL = 'url';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'OauthCallbackUrl';

    /**
     * The URL for this callback.
     *
     * @var string
     */
    protected $url;

    /**
     * The URL for this callback.
     *
     * @var string
     */
    protected $urlFieldForRequest;

    /**
     * @param string $url The URL for this callback.
     */
    public function __construct(string  $url)
    {
        $this->urlFieldForRequest = $url;
    }

    /**
     * @param int $oauthClientId
     * @param int $oauthCallbackUrlId
     * @param string[] $customHeaders
     *
     * @return BunqResponseOauthCallbackUrl
     */
    public static function get(int $oauthClientId, int $oauthCallbackUrlId, array $customHeaders = []): BunqResponseOauthCallbackUrl
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $oauthClientId, $oauthCallbackUrlId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseOauthCallbackUrl::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $oauthClientId
     * @param string $url The URL for this callback.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(int $oauthClientId, string  $url, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), $oauthClientId]
            ),
            [self::FIELD_URL => $url],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param int $oauthClientId
     * @param int $oauthCallbackUrlId
     * @param string|null $url The URL for this callback.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(int $oauthClientId, int $oauthCallbackUrlId, string  $url = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $oauthClientId, $oauthCallbackUrlId]
            ),
            [self::FIELD_URL => $url],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param int $oauthClientId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseOauthCallbackUrlList
     */
    public static function listing(int $oauthClientId, array $params = [], array $customHeaders = []): BunqResponseOauthCallbackUrlList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), $oauthClientId]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseOauthCallbackUrlList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param string[] $customHeaders
     * @param int $oauthClientId
     * @param int $oauthCallbackUrlId
     *
     * @return BunqResponseNull
     */
    public static function delete(int $oauthClientId, int $oauthCallbackUrlId, array $customHeaders = []): BunqResponseNull
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->delete(
            vsprintf(
                self::ENDPOINT_URL_DELETE,
                [static::determineUserId(), $oauthClientId, $oauthCallbackUrlId]
            ),
            $customHeaders
        );

        return BunqResponseNull::castFromBunqResponse(
            new BunqResponse(null, $responseRaw->getHeaders())
        );
    }

    /**
     * The URL for this callback.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->url)) {
            return false;
        }

        return true;
    }
}
