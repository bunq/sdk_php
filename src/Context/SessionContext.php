<?php
namespace bunq\Context;

use bunq\Model\Core\SessionServer;
use bunq\Model\Core\Token;
use bunq\Model\Generated\Endpoint\UserApiKey;
use bunq\Model\Generated\Endpoint\UserCompany;
use bunq\Model\Generated\Endpoint\UserPaymentServiceProvider;
use bunq\Model\Generated\Endpoint\UserPerson;
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
     * @var UserApiKey|UserCompany|UserPaymentServiceProvider|UserPerson
     */
    private $user;

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
        $sessionContext->userId = $sessionServer->getReferencedUser()->getId();
        $sessionContext->user = $sessionServer->getReferencedUser();

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
        $user = $sessionServer->getReferencedUser();

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

        return $sessionContext;
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
     * @return UserApiKey|UserCompany|UserPaymentServiceProvider|UserPerson
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return DateTime
     */
    public function getExpiryTime(): DateTime
    {
        return $this->expiryTime;
    }
}
