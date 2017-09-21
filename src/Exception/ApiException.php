<?php
namespace bunq\Exception;

/**
 */
class ApiException extends \Exception
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
    public function __construct($message, $args = [])
    {
        $this->responseCode = $args[self::INDEX_FIRST];

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
