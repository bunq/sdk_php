<?php
namespace bunq\Model\Core;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Model\Generated\Endpoint\UserCompany;
use bunq\Model\Generated\Endpoint\UserPerson;

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
     * @return UserCompany
     */
    public function getUserCompany()
    {
        return $this->userCompany;
    }

    /**
     * @return UserPerson
     */
    public function getUserPerson()
    {
        return $this->userPerson;
    }

    /**
     * @return bool
     */
    protected function areAllFieldsNull()
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

        return true;
    }
}
