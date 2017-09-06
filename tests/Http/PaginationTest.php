<?php
namespace bunq\test\Http;

use bunq\Http\Pagination;
use PHPUnit\Framework\TestCase;

/**
 * Tests:
 *  Pagination
 */
class PaginationTest extends TestCase
{
    /**
     * Values of pagination properties for testing.
     */
    const PAGINATION_OLDER_ID_CUSTOM = 1;
    const PAGINATION_NEWER_ID_CUSTOM = 2;
    const PAGINATION_FUTURE_ID_CUSTOM = 3;
    const PAGINATION_COUNT_CUSTOM = 5;

    /**
     */
    public function testGetUrlParamsCountOnly()
    {
        $pagination = $this->createPaginationWithAllPropertiesSet();
        $urlParamsCountOnlyExpected = [
            Pagination::PARAM_COUNT => self::PAGINATION_COUNT_CUSTOM,
        ];

        static::assertEquals($urlParamsCountOnlyExpected, $pagination->getUrlParamsCountOnly());
    }

    /**
     * @return Pagination
     */
    private function createPaginationWithAllPropertiesSet(): Pagination
    {
        $pagination = new Pagination();
        $pagination->setOlderId(self::PAGINATION_OLDER_ID_CUSTOM);
        $pagination->setNewerId(self::PAGINATION_NEWER_ID_CUSTOM);
        $pagination->setFutureId(self::PAGINATION_FUTURE_ID_CUSTOM);
        $pagination->setCount(self::PAGINATION_COUNT_CUSTOM);

        return $pagination;
    }

    /**
     */
    public function testGetUrlParamsPreviousPage()
    {
        $pagination = $this->createPaginationWithAllPropertiesSet();
        $urlParamsPreviousPageExpected = [
            Pagination::PARAM_COUNT => self::PAGINATION_COUNT_CUSTOM,
            Pagination::PARAM_OLDER_ID => self::PAGINATION_OLDER_ID_CUSTOM,
        ];

        static::assertEquals($urlParamsPreviousPageExpected, $pagination->getUrlParamsPreviousPage());
    }

    /**
     */
    public function testGetUrlParamsPreviousPageNoCount()
    {
        $pagination = $this->createPaginationWithAllPropertiesSet();
        $pagination->setCount(null);
        $urlParamsPreviousPageExpected = [
            Pagination::PARAM_OLDER_ID => self::PAGINATION_OLDER_ID_CUSTOM,
        ];

        static::assertEquals($urlParamsPreviousPageExpected, $pagination->getUrlParamsPreviousPage());
    }

    /**
     */
    public function testGetUrlParamsNextPageNewer()
    {
        $pagination = $this->createPaginationWithAllPropertiesSet();
        $urlParamsNextPageExpected = [
            Pagination::PARAM_COUNT => self::PAGINATION_COUNT_CUSTOM,
            Pagination::PARAM_NEWER_ID => self::PAGINATION_NEWER_ID_CUSTOM,
        ];

        static::assertEquals($urlParamsNextPageExpected, $pagination->getUrlParamsNextPage());
    }

    /**
     */
    public function testGetUrlParamsNextPageNewerNoCount()
    {
        $pagination = $this->createPaginationWithAllPropertiesSet();
        $pagination->setCount(null);
        $urlParamsNextPageExpected = [
            Pagination::PARAM_NEWER_ID => self::PAGINATION_NEWER_ID_CUSTOM,
        ];

        static::assertEquals($urlParamsNextPageExpected, $pagination->getUrlParamsNextPage());
    }

    /**
     */
    public function testGetUrlParamsNextPageFuture()
    {
        $pagination = $this->createPaginationWithAllPropertiesSet();
        $pagination->setNewerId(null);
        $urlParamsNextPageExpected = [
            Pagination::PARAM_COUNT => self::PAGINATION_COUNT_CUSTOM,
            Pagination::PARAM_NEWER_ID => self::PAGINATION_FUTURE_ID_CUSTOM,
        ];

        static::assertEquals($urlParamsNextPageExpected, $pagination->getUrlParamsNextPage());
    }

    /**
     */
    public function testGetUrlParamsNextPageFutureNoCount()
    {
        $pagination = $this->createPaginationWithAllPropertiesSet();
        $pagination->setNewerId(null);
        $pagination->setCount(null);
        $urlParamsNextPageExpected = [
            Pagination::PARAM_NEWER_ID => self::PAGINATION_FUTURE_ID_CUSTOM,
        ];

        static::assertEquals($urlParamsNextPageExpected, $pagination->getUrlParamsNextPage());
    }

    /**
     * @expectedException \bunq\Exception\BunqException
     */
    public function testGetUrlParamsPreviousPageFromPaginationWithNoPreviousPage()
    {
        $pagination = $this->createPaginationWithAllPropertiesSet();
        $pagination->setOlderId(null);
        $pagination->getUrlParamsPreviousPage();
    }

    /**
     * @expectedException \bunq\Exception\BunqException
     */
    public function testGetUrlParamsNextPageFromPaginationWithNoNextPage()
    {
        $pagination = $this->createPaginationWithAllPropertiesSet();
        $pagination->setNewerId(null);
        $pagination->setFutureId(null);
        $pagination->getUrlParamsNextPage();
    }
}
