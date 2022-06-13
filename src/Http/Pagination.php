<?php
namespace bunq\Http;

use bunq\Exception\BunqException;
use GuzzleHttp\Psr7\Query;

/**
 */
class Pagination
{
    /**
     * Error constants.
     */
    const ERROR_NO_PREVIOUS_PAGE = 'Could not generate previous page URL params: there is no previous page.';
    const ERROR_NO_NEXT_PAGE = 'Could not generate next page URL params: there is no next page.';

    /**
     * URL Param constants.
     */
    const PARAM_OLDER_ID = 'older_id';
    const PARAM_NEWER_ID = 'newer_id';
    const PARAM_FUTURE_ID = 'future_id';
    const PARAM_COUNT = 'count';

    /**
     * Field constants.
     */
    const FIELD_OLDER_URL = 'older_url';
    const FIELD_NEWER_URL = 'newer_url';
    const FIELD_FUTURE_URL = 'future_url';

    /**
     * @var int|null
     */
    protected $olderId;

    /**
     * @var int|null
     */
    protected $newerId;

    /**
     * @var int|null
     */
    protected $futureId;

    /**
     * @var int|null
     */
    protected $count;

    /**
     * @param string[] $paginationJson
     *
     * @return static
     */
    public static function restore(array $paginationJson): Pagination
    {
        $paginationBody = static::parsePaginationBody($paginationJson);

        $pagination = new static();
        $pagination->setOlderId($paginationBody[self::PARAM_OLDER_ID]);
        $pagination->setNewerId($paginationBody[self::PARAM_NEWER_ID]);
        $pagination->setFutureId($paginationBody[self::PARAM_FUTURE_ID]);
        $pagination->setCount($paginationBody[self::PARAM_COUNT]);

        return $pagination;
    }

    /**
     * @param string[] $paginationResponse
     *
     * @return string[]|null[]
     */
    private static function parsePaginationBody(array $paginationResponse)
    {
        $paginationBody = [
            self::PARAM_OLDER_ID => null,
            self::PARAM_NEWER_ID => null,
            self::PARAM_FUTURE_ID => null,
            self::PARAM_COUNT => null,
        ];
        static::updatePaginationBodyIdFieldFromResponseField(
            $paginationBody,
            self::PARAM_OLDER_ID,
            $paginationResponse,
            self::FIELD_OLDER_URL,
            self::PARAM_OLDER_ID
        );
        static::updatePaginationBodyIdFieldFromResponseField(
            $paginationBody,
            self::PARAM_NEWER_ID,
            $paginationResponse,
            self::FIELD_NEWER_URL,
            self::PARAM_NEWER_ID
        );
        static::updatePaginationBodyIdFieldFromResponseField(
            $paginationBody,
            self::PARAM_FUTURE_ID,
            $paginationResponse,
            self::FIELD_FUTURE_URL,
            self::PARAM_NEWER_ID
        );

        return $paginationBody;
    }

    /**
     * @param string[] &$paginationBody
     * @param string $idField
     * @param string[] $response
     * @param string $responseField
     * @param string $responseParam
     */
    private static function updatePaginationBodyIdFieldFromResponseField(
        array &$paginationBody,
        string $idField,
        array $response,
        string $responseField,
        string $responseParam
    ) {
        $url = $response[$responseField];

        if (!is_null($url)) {
            $urlQuery = parse_url($url, PHP_URL_QUERY);
            $parameters = Query::parse($urlQuery);
            $paginationBody[$idField] = $parameters[$responseParam];

            if (isset($parameters[self::PARAM_COUNT]) && !isset($paginationBody[self::PARAM_COUNT])) {
                $paginationBody[self::PARAM_COUNT] = $parameters[self::PARAM_COUNT];
            }
        }
    }

    /**
     * @param int|null $olderId
     */
    public function setOlderId(int $olderId = null)
    {
        $this->olderId = $olderId;
    }

    /**
     * @param int|null $newerId
     */
    public function setNewerId(int $newerId = null)
    {
        $this->newerId = $newerId;
    }

    /**
     * @param int|null $futureId
     */
    public function setFutureId(int $futureId = null)
    {
        $this->futureId = $futureId;
    }

    /**
     * @param int|null $count
     */
    public function setCount(int $count = null)
    {
        $this->count = $count;
    }

    /**
     * @return string[]
     */
    public function getUrlParamsNextPage(): array
    {
        $this->assertHasNextPage();

        $params = [
            self::PARAM_NEWER_ID => $this->getNextId(),
        ];
        $this->addCountToParamsIfNeeded($params);

        return $params;
    }

    /**
     * @throws BunqException
     */
    private function assertHasNextPage()
    {
        if (is_null($this->getNextId())) {
            throw new BunqException(self::ERROR_NO_NEXT_PAGE);
        }
    }

    /**
     * @return int
     */
    private function getNextId()
    {
        if ($this->hasNextPageAssured()) {
            return $this->newerId;
        } else {
            return $this->futureId;
        }
    }

    /**
     * @return bool
     */
    public function hasNextPageAssured(): bool
    {
        return !is_null($this->newerId);
    }

    /**
     * @param string[] &$params
     */
    private function addCountToParamsIfNeeded(array &$params)
    {
        if (!is_null($this->count)) {
            $params[self::PARAM_COUNT] = $this->count;
        }
    }

    /**
     * @return string[]
     * @throws BunqException When there is no previous page.
     */
    public function getUrlParamsPreviousPage(): array
    {
        $this->assertHasPreviousPage();

        $params = [
            self::PARAM_OLDER_ID => $this->olderId,
        ];
        $this->addCountToParamsIfNeeded($params);

        return $params;
    }

    /**
     * @throws BunqException
     */
    private function assertHasPreviousPage()
    {
        if (!$this->hasPreviousPage()) {
            throw new BunqException(self::ERROR_NO_PREVIOUS_PAGE);
        }
    }

    /**
     * @return bool
     */
    public function hasPreviousPage(): bool
    {
        return !is_null($this->olderId);
    }

    /**
     * @return string[]
     */
    public function getUrlParamsCountOnly(): array
    {
        $params = [];
        $this->addCountToParamsIfNeeded($params);

        return $params;
    }

    /**
     * @return int|null
     */
    public function getOlderId()
    {
        return $this->olderId;
    }

    /**
     * @return int|null
     */
    public function getNewerId()
    {
        return $this->newerId;
    }

    /**
     * @return int|null
     */
    public function getFutureId()
    {
        return $this->futureId;
    }

    /**
     * @return int|null
     */
    public function getCount()
    {
        return $this->count;
    }
}
