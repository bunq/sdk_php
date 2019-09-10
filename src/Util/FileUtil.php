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
    const ERROR_COULD_NOT_WRITE_FILE = 'Could not write to "%s".';
    const ERROR_DESERIALIZE_NOT_AVAILABLE = 'Class %s doesn\'t contain JSON deserializer method.';
    const ERROR_FILE_DOES_NOT_EXIST = 'The requested file "%s" does not exist.';
    const ERROR_COULD_NOT_SAVE_OBJECT = 'Object ("%s") could not be saved.';

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

    /**
     * @param string $fileName
     * @param $object
     *
     * @throws BunqException
     */
    public static function saveObjectAsJson(string $fileName, $object)
    {
        try {
            $encoded = \GuzzleHttp\json_encode($object, JSON_PRETTY_PRINT);
            $saveResult = @file_put_contents($fileName, $encoded);

            if ($saveResult === false) {
                throw new BunqException(vsprintf(self::ERROR_COULD_NOT_WRITE_FILE, [$fileName]));
            }
        } catch (\Throwable $throwable) {
            throw new BunqException(
                vsprintf(
                    self::ERROR_COULD_NOT_SAVE_OBJECT,
                    [get_class($object)]
                )
            );
        }
    }

    /**
     * @param string $fileName
     * @param $objectClass
     *
     * @return mixed
     * @throws BunqException
     */
    public static function readObjectFromJsonFile(string $fileName, $objectClass)
    {
        if (method_exists($objectClass, 'fromJsonFile')) {
            return $objectClass::fromJsonFile($fileName);
        }
        throw new BunqException(self::ERROR_DESERIALIZE_NOT_AVAILABLE, [$objectClass]);
    }
}
