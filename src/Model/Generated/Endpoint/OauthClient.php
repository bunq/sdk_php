<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\ApiClient;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\OauthCallbackUrl;

/**
 * Used for managing OAuth Clients.
 *
 * @generated
 */
class OauthClient extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/oauth-client/%s';
    const ENDPOINT_URL_CREATE = 'user/%s/oauth-client';
    const ENDPOINT_URL_UPDATE = 'user/%s/oauth-client/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/oauth-client';

    /**
     * Field constants.
     */
    const FIELD_STATUS = 'status';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'OauthClient';

    /**
     * Id of the client.
     *
     * @var int
     */
    protected $id;

    /**
     * The status of the pack group, can be ACTIVE, CANCELLED or
     * CANCELLED_PENDING.
     *
     * @var string
     */
    protected $status;

    /**
     * The Client ID associated with this Oauth Client
     *
     * @var string
     */
    protected $clientId;

    /**
     * Secret associated with this Oauth Client
     *
     * @var string
     */
    protected $secret;

    /**
     * The callback URLs which are bound to this Oauth Client
     *
     * @var OauthCallbackUrl[]
     */
    protected $callbackUrl;

    /**
     * The status of the Oauth Client, can be ACTIVE or CANCELLED.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * @param string|null $status The status of the Oauth Client, can be ACTIVE
     * or CANCELLED.
     */
    public function __construct(string $status = null)
    {
        $this->statusFieldForRequest = $status;
    }

    /**
     * @param int $oauthClientId
     * @param string[] $customHeaders
     *
     * @return BunqResponseOauthClient
     */
    public static function get(int $oauthClientId, array $customHeaders = []): BunqResponseOauthClient
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), $oauthClientId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseOauthClient::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param string|null $status The status of the Oauth Client, can be ACTIVE
     * or CANCELLED.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(string $status = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId()]
            ),
            [self::FIELD_STATUS => $status],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param int $oauthClientId
     * @param string|null $status The status of the Oauth Client, can be ACTIVE
     * or CANCELLED.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(int $oauthClientId, string $status = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), $oauthClientId]
            ),
            [self::FIELD_STATUS => $status],
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
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponseOauthClientList
     */
    public static function listing(array $params = [], array $customHeaders = []): BunqResponseOauthClientList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId()]
            ),
            $params,
            $customHeaders
        );

        return BunqResponseOauthClientList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Id of the client.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The status of the pack group, can be ACTIVE, CANCELLED or
     * CANCELLED_PENDING.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The Client ID associated with this Oauth Client
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }

    /**
     * Secret associated with this Oauth Client
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @param string $secret
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;
    }

    /**
     * The callback URLs which are bound to this Oauth Client
     *
     * @return OauthCallbackUrl[]
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     * @param OauthCallbackUrl[] $callbackUrl
     *
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->clientId)) {
            return false;
        }

        if (!is_null($this->secret)) {
            return false;
        }

        if (!is_null($this->callbackUrl)) {
            return false;
        }

        return true;
    }
}
