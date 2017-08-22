<?php
namespace bunq\Model;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Generated\UserCompany;
use bunq\Model\Generated\UserPerson;

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
     * @return BunqResponse<SessionServer>
     */
    public static function create(ApiContext $apiContext)
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            self::ENDPOINT_URL_POST,
            [self::FIELD_SECRET => $apiContext->getApiKey()]
        );

        return static::classFromJson(SessionServer::class, $responseRaw);
    }

    /**
     * The Session token is the token the client has to provide in the "X-Bunq-Client-Authentication"
     * header for each API call that requires a Session (only the creation of a Installation and
     * DeviceServer don't require a Session).
     *
     * @return Token
     */
    public function getSessionToken()
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
}
