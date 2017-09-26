<?php
namespace bunq\Http\Handler;

/**
 */
abstract class HandlerBase
{
    /**
     * Newline used for signing. We can't use self::NEWLINE because bunq newlines are always "\n" only whereas
     * self::NEWLINE value differs from platform to platform.
     */
    const NEWLINE = "\n";
}
