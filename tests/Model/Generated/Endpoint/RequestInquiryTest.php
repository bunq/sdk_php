<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Model\Generated\Endpoint\RequestInquiry;
use bunq\Model\Generated\Endpoint\RequestResponse;
use bunq\Model\Generated\Object\Amount;
use bunq\test\BunqSdkTestBase;

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
     * Send a request from monetary account 1 to monetary account 2 and accept it.
     *
     * This test has no assertion as of its testing to see if the code runs without errors.
     */
    public function testSendingAndAcceptingRequest()
    {
        $this->skipTestIfNeededDueToInsufficientBalance();

        $this->sendRequest();
        $responses = RequestResponse::listing($this->getSecondMonetaryAccountId())->getValue();

        static::assertNotNull($responses);

        $requestResponseId = $responses[self::INDEX_FIRST]->getId();
        $this->acceptRequest($requestResponseId);
    }

    /**
     */
    private function sendRequest()
    {
        $response = RequestInquiry::create(
            new Amount(self::REQUEST_AMOUNT_IN_EUR, self::REQUEST_CURRENCY),
            $this->getSecondMonetaryAccountAlias(),
            self::REQUEST_DESCRIPTION,
            false
        );

        static::assertNotNull($response);
    }

    /**
     * @param int $requestResponseId
     */
    private function acceptRequest(int $requestResponseId)
    {
        $response = RequestResponse::update(
            $requestResponseId,
            $this->getSecondMonetaryAccountId(),
            null,
            self::REQUEST_STATUS_ACCEPTED
        );

        static::assertNotNull($response);
    }
}
