<?php
namespace bunq\Context;

use bunq\Model\Core\SessionServer;
use bunq\Model\Core\Token;
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

    /**
     * Constants for manipulating expiry timestamp.
     */
    const FORMAT_MICROTIME_PARTIAL = 'Y-m-d H:i:s.';
    const FORMAT_MICROTIME = 'Y-m-d H:i:s.u';
    const MICROSECONDS_IN_SECOND = 1000000;
    const FORMAT_MICROSECONDS = '%06d';

    /** @var Token */
    protected $sessionToken;

    /** @var DateTime */
    protected $expiryTime;

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
    public static function create(SessionServer $sessionServer)
    {
        $sessionContext = new static();
        $sessionContext->sessionToken = $sessionServer->getSessionToken();
        $sessionContext->expiryTime = static::calculateExpiryTime($sessionServer);

        return $sessionContext;
    }

    /**
     * @param SessionServer $sessionServer
     *
     * @return DateTime
     */
    private static function calculateExpiryTime(SessionServer $sessionServer)
    {
        $expiryTime = microtime(true) + static::getSessionTimeout($sessionServer);

        return static::microtimeToDateTime($expiryTime);
    }

    /**
     * @param SessionServer $sessionServer
     *
     * @return int
     */
    private static function getSessionTimeout(SessionServer $sessionServer)
    {
        if (is_null($sessionServer->getUserCompany())) {
            return $sessionServer->getUserPerson()->getSessionTimeout();
        } else {
            return $sessionServer->getUserCompany()->getSessionTimeout();
        }
    }

    /**
     * @param float $microtime
     *
     * @return DateTime
     */
    private static function microtimeToDateTime($microtime)
    {
        $microseconds = ($microtime - floor($microtime)) * self::MICROSECONDS_IN_SECOND;
        $microsecondsFormatted = sprintf(self::FORMAT_MICROSECONDS, $microseconds);
        $dateFormatted = date(self::FORMAT_MICROTIME_PARTIAL . $microsecondsFormatted, $microtime);

        return new DateTime($dateFormatted);
    }

    /**
     * @param string[] $sessionContextBody
     *
     * @return static
     */
    public static function restore(array $sessionContextBody)
    {
        $sessionContext = new static();
        $sessionContext->sessionToken = new Token($sessionContextBody[self::FIELD_TOKEN]);
        $sessionContext->expiryTime = Datetime::createFromFormat(
            self::FORMAT_MICROTIME,
            $sessionContextBody[self::FIELD_EXPIRY_TIME]
        );

        return $sessionContext;
    }

    /**
     * @return string[]
     */
    public function jsonSerialize()
    {
        return [
            self::FIELD_TOKEN => $this->getSessionToken()->getToken(),
            self::FIELD_EXPIRY_TIME => $this->getExpiryTime()->format(self::FORMAT_MICROTIME),
        ];
    }

    /**
     * @return Token
     */
    public function getSessionToken()
    {
        return $this->sessionToken;
    }

    /**
     * @return DateTime
     */
    public function getExpiryTime()
    {
        return $this->expiryTime;
    }
}
