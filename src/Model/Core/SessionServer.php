<?php
namespace bunq\Model\Core;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Model\Generated\Endpoint\UserApiKey;
use bunq\Model\Generated\Endpoint\UserCompany;
use bunq\Model\Generated\Endpoint\UserPaymentServiceProvider;
use bunq\Model\Generated\Endpoint\UserPerson;
use bunq\Util\ModelUtil;

/**
 */
class SessionServer extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_SECRET = 'secret';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_POST = 'session-server';

    /**
     * @var Token
     */
    protected $token;

    /**
     * @var Id;
     */
    protected $id;

    /**
     * @var UserCompany
     */
    protected $userCompany;

    /**
     * @var UserPerson
     */
    protected $userPerson;

    /**
     * @var UserApiKey
     */
    protected $userApiKey;

    /**
     * @var UserPaymentServiceProvider
     */
    protected $userPaymentServiceProvider;

    /**
     * @param ApiContext $apiContext
     *
     * @return BunqResponseSessionServer
     */
    public static function create(ApiContext $apiContext): BunqResponseSessionServer
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            self::ENDPOINT_URL_POST,
            [self::FIELD_SECRET => $apiContext->getApiKey()],
            []
        );

        return BunqResponseSessionServer::castFromBunqResponse(
            static::classFromJson($responseRaw)
        );
    }

    /**
     * The Session token is the token the client has to provide in the "X-Bunq-Client-Authentication"
     * header for each API call that requires a Session (only the creation of a Installation and
     * DeviceServer don't require a Session).
     *
     * @return Token
     */
    public function getSessionToken(): Token
    {
        return $this->token;
    }

    /**
     * @return UserCompany|null
     */
    public function getUserCompanyOrNull()
    {
        return $this->userCompany;
    }

    /**
     * @return UserPerson|null
     */
    public function getUserPersonOrNull()
    {
        return $this->userPerson;
    }

    /**
     * @return UserApiKey|null
     */
    public function getUserApiKeyOrNull()
    {
        return $this->userApiKey;
    }

    /**
     * @return UserPaymentServiceProvider|null
     */
    public function getUserPaymentServiceProviderOrNull()
    {
        return $this->userPaymentServiceProvider;
    }

    /**
     * @return UserCompany|UserPerson|UserApiKey|UserPaymentServiceProvider
     */
    public function getUserReference()
    {
        return ModelUtil::getUserReference(
            $this->userPerson,
            $this->userCompany,
            $this->userApiKey,
            $this->userPaymentServiceProvider
        );
    }

    /**
     * @return bool
     */
    protected function isAllFieldNull()
    {
        if (!is_null($this->token)) {
            return false;
        }

        if (!is_null($this->id)) {
            return false;
        }

        if (!is_null($this->userCompany)) {
            return false;
        }

        if (!is_null($this->userPerson)) {
            return false;
        }

        if (!is_null($this->userApiKey)) {
            return false;
        }

        if (!is_null($this->userPaymentServiceProvider)) {
            return false;
        }

        return true;
    }
}
