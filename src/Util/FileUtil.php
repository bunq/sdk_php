<?php
namespace bunq\Util;

use bunq\Exception\BunqException;

/**
 */
class FileUtil
{
    /**
     * Error constants.
     */
    const ERROR_FILE_DOES_NOT_EXIST = 'The requested file "%s" does not exist.';

    /**
     * @param string $fileName
     *
     * @return string|bool
     * @throws BunqException when the requested file does not exist.
     */
    public static function getFileContents(string $fileName)
    {
        if (is_file($fileName)) {
            return file_get_contents($fileName);
        } else {
            throw new BunqException(vsprintf(self::ERROR_FILE_DOES_NOT_EXIST, [$fileName]));
        }
    }
}
