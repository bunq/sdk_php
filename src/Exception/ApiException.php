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
     * @var string
     */
    private $responseId;

    /**
     * @param string $message
     * @param int $responseCode
     * @param string $responseId
     */
    public function __construct(string $message, int $responseCode, string $responseId)
    {
        $this->responseCode = $responseCode;
        $this->responseId = $responseId;

        parent::__construct($message);
    }

    /**
     * @return string
     */
    public function getResponseId(): string
    {
        return $this->responseId;
    }

    /**
     * @return int
     */
    public function getResponseCode(): int
    {
        return $this->responseCode;
    }
}
