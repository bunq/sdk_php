<?php
namespace bunq\Exception;

/**
 */
class BunqException extends \Exception
{
    /**
     * @param string $message
     * @param string[] $args
     */
    public function __construct(string $message, array $args = [])
    {
        parent::__construct(vsprintf($message, $args));
    }
}
