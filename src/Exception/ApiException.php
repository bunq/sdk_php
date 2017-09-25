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
     * @param string $message
     * @param int $responseCode
     */
    public function __construct(string $message, int $responseCode)
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
