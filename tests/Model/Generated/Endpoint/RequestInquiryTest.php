<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Model\Generated\Endpoint\RequestInquiry;
use bunq\Model\Generated\Endpoint\RequestResponse;
use bunq\Model\Generated\Object\Amount;
use bunq\test\BunqSdkTestBase;
use bunq\test\Config;

/**
 * Tests:
 *  RequestInquiry
 */
class RequestInquiryTest extends BunqSdkTestBase
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
    private static $monetaryAccountId2;

    /**
     * @var string
     */
    private static $counterPartyAliasSelf;


    /**
     */
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        static::$monetaryAccountId2 = Config::getMonetaryAccountId2();
        static::$counterPartyAliasSelf = Config::getCounterPartyAliasSelf();
    }

    /**
     * Send a request from monetary account 1 to monetary account 2 and accept it.
     *
     * This test has no assertion as of its testing to see if the code runs without errors.
     */
    public function testSendingAndAcceptingRequest()
    {
        $this->sendRequest();
        $responses = RequestResponse::listing(static::$monetaryAccountId2)->getValue();
        $requestResponseId = $responses[self::INDEX_FIRST]->getId();
        $this->acceptRequest($requestResponseId);
    }

    /**
     */
    private function sendRequest()
    {
        RequestInquiry::create(
            new Amount(self::REQUEST_AMOUNT_IN_EUR, self::REQUEST_CURRENCY),
            static::$counterPartyAliasSelf,
            self::REQUEST_DESCRIPTION,
            false
        );
    }

    /**
     * @param int $requestResponseId
     */
    private function acceptRequest(int $requestResponseId)
    {
        RequestResponse::update(
            $requestResponseId,
            static::$monetaryAccountId2,
            null,
            self::REQUEST_STATUS_ACCEPTED
        );
    }
}
