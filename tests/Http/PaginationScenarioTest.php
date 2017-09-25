<?php
namespace bunq\test\Http;

use bunq\Http\BunqResponse;
use bunq\Http\Pagination;
use bunq\Model\Generated\Object\Amount;
use bunq\Model\Generated\Object\Pointer;
use bunq\Model\Generated\Endpoint\Payment;
use bunq\test\BunqSdkTestBase;
use bunq\test\Config;

/**
 * Tests:
 *  Pagination
 */
class PaginationScenarioTest extends BunqSdkTestBase
{
    /**
     * Constants for scenario testing.
     */
    const PAYMENT_LISTING_PAGE_SIZE = 2;
    const PAYMENT_REQUIRED_COUNT_MINIMUM = self::PAYMENT_LISTING_PAGE_SIZE * 2;
    const NUMBER_ZERO = 0;

    /**
     * Constants for payment creation.
     */
    const PAYMENT_AMOUNT_EUR = '0.01';
    const PAYMENT_CURRENCY = 'EUR';
    const PAYMENT_DESCRIPTION = 'PHP test Payment';

    /**
     * @var int
     */
    private static $userId;

    /**
     * @var int
     */
    private static $monetaryAccountId;

    /**
     * @var Pointer
     */
    private static $counterPartyAliasOther;

    /**
     */
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        static::$userId = Config::getUserId();
        static::$monetaryAccountId = Config::getMonetaryAccountId();
        static::$counterPartyAliasOther = Config::getCounterPartyAliasOther();
    }

    /**
     */
    public function testApiScenarioPaymentListingWithPagination()
    {
        static::ensureEnoughPayments();
        $paymentsExpected = static::getPaymentsRequired();
        $paginationCountOnly = new Pagination();
        $paginationCountOnly->setCount(self::PAYMENT_LISTING_PAGE_SIZE);

        $responseLatest = static::listPayments($paginationCountOnly->getUrlParamsCountOnly());
        $paginationLatest = $responseLatest->getPagination();
        $responsePrevious = static::listPayments($paginationLatest->getUrlParamsPreviousPage());
        $paginationPrevious = $responsePrevious->getPagination();
        $responsePreviousNext = static::listPayments($paginationPrevious->getUrlParamsNextPage());

        $paymentsActual = array_merge($responsePreviousNext->getValue(), $responsePrevious->getValue());

        static::assertEquals($paymentsExpected, $paymentsActual);
    }

    /**
     */
    private static function ensureEnoughPayments()
    {
        for ($i = self::NUMBER_ZERO; $i < self::getPaymentsMissingCount(); ++$i) {
            static::createPayment();
        }
    }

    /**
     * @return int
     */
    private static function getPaymentsMissingCount(): int
    {
        return self::PAYMENT_REQUIRED_COUNT_MINIMUM - count(static::getPaymentsRequired());
    }

    /**
     * @return Payment[]
     */
    private static function getPaymentsRequired(): array
    {
        $pagination = new Pagination();
        $pagination->setCount(self::PAYMENT_REQUIRED_COUNT_MINIMUM);

        return static::listPayments($pagination->getUrlParamsCountOnly())->getValue();
    }

    /**
     * @param string[] $urlParams
     *
     * @return BunqResponse
     */
    private static function listPayments(array $urlParams): BunqResponse
    {
        return Payment::listing(static::$apiContext, static::$userId, static::$monetaryAccountId, $urlParams);
    }

    /**
     */
    public static function createPayment()
    {
        $apiContext = static::getApiContext();
        $requestMap = [
            Payment::FIELD_AMOUNT => new Amount(self::PAYMENT_AMOUNT_EUR, self::PAYMENT_CURRENCY),
            Payment::FIELD_COUNTERPARTY_ALIAS => static::$counterPartyAliasOther,
            Payment::FIELD_DESCRIPTION => self::PAYMENT_DESCRIPTION,
        ];

        Payment::create(
            $apiContext,
            $requestMap,
            static::$userId,
            static::$monetaryAccountId
        );
    }
}
