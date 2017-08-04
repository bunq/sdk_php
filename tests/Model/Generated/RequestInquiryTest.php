<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Pointer;
use bunq\test\ApiContextHandler;
use bunq\test\TestConfig;
use PHPUnit\Framework\TestCase;

/**
 * Tests:
 *  RequestInquiry
 */
class RequestInquiryTest extends TestCase
{
    /**
     *  The amount of money that is being requested.
     */
    const REQUEST_AMOUNT_IN_EUR = '0.01';

    /**
     *  The currency of the requested money.
     */
    const REQUEST_CURRENCY = 'EUR';

    /**
     * Field constants
     */
    const REQUEST_DESCRIPTION = 'PHP unit test request';
    const REQUEST_STATUS_ACCEPTED = 'ACCEPTED';

    /**
     *  Index number of the first item in an array.
     */
    const INDEX_FIRST = 0;

    /**
     * @var int
     */
    private static $userId;

    /**
     * @var int
     */
    private static $monetaryAccountId;

    /**
     * @var int
     */
    private static $monetaryAccountId2;

    /**
     * @var string
     */
    private static $counterAlias;

    /**
     * @var string
     */
    private static $counterType;


    /**
     */
    public static function setUpBeforeClass()
    {
        static::$userId = TestConfig::getUserId();
        static::$monetaryAccountId = TestConfig::getMonetaryAccountId();
        static::$monetaryAccountId2 = TestConfig::getMonetaryAccountId2();
        static::$counterAlias = TestConfig::getAliasCounterParty();
        static::$counterType = TestConfig::getTypeCounterParty();
    }

    /**
     * Send a request from monetary account 1 to monetary account 2 and accept it.
     *
     * This test has no assertion as of its testing to see if the code runs without errors.
     */
    public function testSendingAndAcceptingRequest()
    {
        $apiContext = ApiContextHandler::getApiContext();

        $this->sendRequest($apiContext);
        $requestResponseId = RequestResponse::listing($apiContext, static::$userId, static::$monetaryAccountId2)[
            self::INDEX_FIRST]->getId();
        $this->acceptRequest($apiContext, $requestResponseId);
    }

    /**
     * @param ApiContext $apiContext
     */
    private function sendRequest($apiContext)
    {
        $requestMap = [
            RequestInquiry::FIELD_AMOUNT_INQUIRED => new Amount(self::REQUEST_AMOUNT_IN_EUR,
                self::REQUEST_CURRENCY),
            RequestInquiry::FIELD_COUNTERPARTY_ALIAS => new Pointer(static::$counterType, static::$counterAlias),
            RequestInquiry::FIELD_DESCRIPTION => self::REQUEST_DESCRIPTION,
            RequestInquiry::FIELD_ALLOW_BUNQME => false,
        ];

        RequestInquiry::create($apiContext, $requestMap, static::$userId, static::$monetaryAccountId);
    }

    /**
     * @param ApiContext $apiContext
     * @param int $requestResponseId
     */
    private function acceptRequest($apiContext, $requestResponseId)
    {
        $responseMap = [
            RequestResponse::FIELD_STATUS => self::REQUEST_STATUS_ACCEPTED,
        ];

        RequestResponse::update(
            $apiContext,
            $responseMap,
            static::$userId,
            static::$monetaryAccountId2,
            $requestResponseId
        );
    }
}

