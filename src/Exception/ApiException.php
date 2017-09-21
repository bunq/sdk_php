<?php
namespace bunq\Exception;

use Exception;

/**
 */
class ApiException extends Exception
{
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
    public function getResponseCode(): int
    {
        return $this->responseCode;
    }
}
