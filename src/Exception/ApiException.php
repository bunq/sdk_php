<?php
namespace bunq\Exception;

use Exception;

/**
 */
class ApiException extends Exception
{
    /**
     * The first item index in an array.
     */
    const INDEX_FIRST = 0;

    /**
     * @var int
     */
    private $responseCode;

    /**
     * ApiException constructor.
     *
     * @param int $responseCode
     */
    public function __construct($message, $responseCode)
    {
        $this->responseCode = $responseCode;

        parent::__construct($message);
    }

    /**
     * @return int
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }
}
