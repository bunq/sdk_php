<?php
namespace bunq\Context;

use bunq\Model\Core\SessionServer;
use bunq\Model\Core\Token;
use bunq\Model\Generated\Endpoint\UserApiKey;
use bunq\Model\Generated\Endpoint\UserCompany;
use bunq\Model\Generated\Endpoint\UserPaymentServiceProvider;
use bunq\Model\Generated\Endpoint\UserPerson;
use bunq\Util\ModelUtil;
use DateTime;
use JsonSerializable;

/**
 */
class SessionContext implements JsonSerializable
{
    /**
     * Field constants.
     */
    const FIELD_TOKEN = 'token';
    const FIELD_EXPIRY_TIME = 'expiry_time';
    const FIELD_USER_ID = 'user_id';
    const FIELD_USER_PERSON = 'userPerson';
    const FIELD_USER_COMPANY = 'userCompany';
    const FIELD_USER_API_KEY = 'userApiKey';
    const FIELD_USER_PAYMENT_SERVICE_PROVIDER = 'userPaymentServiceProvider';

    /**
     * Constants for manipulating expiry timestamp.
     */
    const FORMAT_MICRO_TIME_PARTIAL = 'Y-m-d H:i:s.';
    const FORMAT_MICRO_TIME = 'Y-m-d H:i:s.u';
    const MICROSECONDS_IN_SECOND = 1000000;
    const FORMAT_MICROSECONDS = '%06d';

    /**
     * @var Token
     */
    protected $sessionToken;

    /**
     * @var DateTime
     */
    protected $expiryTime;

    /**
     * @var int
     */
    protected $userId;

    /**
     * @var UserPerson
     */
    protected $userPerson;

    /**
     * @var UserCompany
     */
    protected $userCompany;

    /**
     * @var UserApiKey
     */
    protected $userApiKey;

    /**
     * @var UserPaymentServiceProvider
     */
    protected $userPaymentServiceProvider;

    /**
     */
    private function __construct()
    {
    }

    /**
     * @param SessionServer $sessionServer
     *
     * @return static
     */
    public static function create(SessionServer $sessionServer): SessionContext
    {
        $sessionContext = new static();
        $sessionContext->sessionToken = $sessionServer->getSessionToken();
        $sessionContext->expiryTime = static::calculateExpiryTime($sessionServer);
        $sessionContext->userId = $sessionServer->getUserReference()->getId();
        $sessionContext->userCompany = $sessionServer->getUserCompanyOrNull();
        $sessionContext->userPerson = $sessionServer->getUserPersonOrNull();
        $sessionContext->userApiKey = $sessionServer->getUserApiKeyOrNull();
        $sessionContext->userPaymentServiceProvider = $sessionServer->getUserPaymentServiceProviderOrNull();

        return $sessionContext;
    }

    /**
     * @param SessionServer $sessionServer
     *
     * @return DateTime
     */
    private static function calculateExpiryTime(SessionServer $sessionServer): DateTime
    {
        $expiryTime = microtime(true) + static::getSessionTimeout($sessionServer);

        return static::microTimeToDateTime($expiryTime);
    }

    /**
     * @param SessionServer $sessionServer
     *
     * @return int
     */
    private static function getSessionTimeout(SessionServer $sessionServer): int
    {
        $user = $sessionServer->getUserReference();

        if ($user instanceof UserApiKey) {
            return $user->getRequestedByUser()->getReferencedObject()->getSessionTimeout();
        } else {
            return $user->getSessionTimeout();
        }
    }

    /**
     * @param float $microtime
     *
     * @return DateTime
     */
    private static function microTimeToDateTime(float $microtime): DateTime
    {
        $microseconds = ($microtime - floor($microtime)) * self::MICROSECONDS_IN_SECOND;
        $microsecondsFormatted = sprintf(self::FORMAT_MICROSECONDS, $microseconds);
        $dateFormatted = date(self::FORMAT_MICRO_TIME_PARTIAL . $microsecondsFormatted, $microtime);

        return new DateTime($dateFormatted);
    }

    /**
     * @param string[] $sessionContextBody
     *
     * @return static
     */
    public static function restore(array $sessionContextBody): SessionContext
    {
        $sessionContext = new static();
        $sessionContext->sessionToken = new Token($sessionContextBody[self::FIELD_TOKEN]);
        $sessionContext->expiryTime = Datetime::createFromFormat(
            self::FORMAT_MICRO_TIME,
            $sessionContextBody[self::FIELD_EXPIRY_TIME]
        );
        $sessionContext->userId = $sessionContextBody[self::FIELD_USER_ID];
        $sessionContext->userPerson = static::getUserPersonFromSessionOrNull($sessionContextBody);
        $sessionContext->userCompany = static::getUserCompanyFromSessionOrNull($sessionContextBody);
        $sessionContext->userApiKey = static::getUserApiKeyFromSessionOrNull($sessionContextBody);
        $sessionContext->userPaymentServiceProvider =
            static::getUserPaymentServiceProviderFromSessionOrNull($sessionContextBody);

        return $sessionContext;
    }

    /**
     * @param array $sessionContextBody
     *
     * @return UserPerson|null
     */
    private static function getUserPersonFromSessionOrNull(array $sessionContextBody)
    {
        if (isset($sessionContextBody[self::FIELD_USER_PERSON])) {
            return UserPerson::createFromJsonString(json_encode($sessionContextBody[self::FIELD_USER_PERSON]));
        } else {
            return null;
        }
    }

    /**
     * @param array $sessionContextBody
     *
     * @return UserCompany|null
     */
    private static function getUserCompanyFromSessionOrNull(array $sessionContextBody)
    {
        if (isset($sessionContextBody[self::FIELD_USER_COMPANY])) {
            return UserCompany::createFromJsonString(json_encode($sessionContextBody[self::FIELD_USER_COMPANY]));
        } else {
            return null;
        }
    }

    /**
     * @param array $sessionContextBody
     *
     * @return UserApiKey|null
     */
    private static function getUserApiKeyFromSessionOrNull(array $sessionContextBody)
    {
        if (isset($sessionContextBody[self::FIELD_USER_API_KEY])) {
            return UserApiKey::createFromJsonString(json_encode($sessionContextBody[self::FIELD_USER_API_KEY]));
        } else {
            return null;
        }
    }

    /**
     * @param array $sessionContextBody
     *
     * @return UserPaymentServiceProvider|null
     */
    private static function getUserPaymentServiceProviderFromSessionOrNull(array $sessionContextBody)
    {
        if (isset($sessionContextBody[self::FIELD_USER_PAYMENT_SERVICE_PROVIDER])) {
            return UserPaymentServiceProvider::createFromJsonString(
                json_encode($sessionContextBody[self::FIELD_USER_PAYMENT_SERVICE_PROVIDER])
            );
        } else {
            return null;
        }
    }

    /**
     * @return string[]
     */
    public function jsonSerialize(): array
    {
        return [
            self::FIELD_TOKEN => $this->getSessionToken()->getToken(),
            self::FIELD_EXPIRY_TIME => $this->getExpiryTime()->format(self::FORMAT_MICRO_TIME),
            self::FIELD_USER_ID => $this->getUserId(),
            self::FIELD_USER_COMPANY => $this->getUserCompanyOrNull(),
            self::FIELD_USER_PERSON => $this->getUserPersonOrNull(),
            self::FIELD_USER_API_KEY => $this->getUserApiKeyOrNull(),
            self::FIELD_USER_PAYMENT_SERVICE_PROVIDER => $this->getUserPaymentServiceProviderOrNull(),
        ];
    }

    /**
     * @return Token
     */
    public function getSessionToken(): Token
    {
        return $this->sessionToken;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return UserPerson|null
     */
    public function getUserPersonOrNull()
    {
        return $this->userPerson;
    }

    /**
     * @return UserCompany|null
     */
    public function getUserCompanyOrNull()
    {
        return $this->userCompany;
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
     * @return DateTime
     */
    public function getExpiryTime(): DateTime
    {
        return $this->expiryTime;
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
}
