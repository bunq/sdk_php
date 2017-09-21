<?php
namespace bunq\Exception;

/**
 */
class ApiException extends \Exception
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
    public function __construct($message, $args = [])
    {
        $this->responseCode = $args[0];

        parent::__construct(vsprintf($message, $args));
    }

    /**
     * @return int
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }
}
