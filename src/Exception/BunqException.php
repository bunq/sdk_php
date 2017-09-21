<?php
namespace bunq\Exception;

/**
 */
class BunqException extends \Exception
{
    /**
     * @param string $message
     * @param string[] $responseCode
     */
    public function __construct($message, $responseCode = [])
    {
        parent::__construct(vsprintf($message, $responseCode));
    }
}
