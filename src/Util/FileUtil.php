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
    const ERROR_COULD_NOT_GET_FILE_CONTENT = 'Could not get the content of "%s".';
    const ERROR_FILE_DOES_NOT_EXIST = 'The requested file "%s" does not exist.';

    /**
     * @param string $fileName
     *
     * @return string
     * @throws BunqException when the requested file does not exist.
     */
    public static function getFileContents(string $fileName): string
    {
        if (is_file($fileName)) {
            $fileContent = @file_get_contents($fileName);

            if ($fileContent === false) {
                throw new BunqException(vsprintf(self::ERROR_COULD_NOT_GET_FILE_CONTENT, [$fileName]));
            } else {
                return $fileContent;
            }
        } else {
            throw new BunqException(vsprintf(self::ERROR_FILE_DOES_NOT_EXIST, [$fileName]));
        }
    }
}
