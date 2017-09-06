<?php
namespace bunq\Util;

use bunq\Exception\BunqException;
use bunq\Model\BunqModel;

/**
 */
class ModelUtil
{
    /**
     * Constants for name format conversion.
     */
    const DELIMITER_UNDERSCORE = '_';
    const STRING_EMPTY = '';
    const REGEX_CAPITAL = '/(?<!^)[A-Z]/';
    const REPLACEMENT_UNDERSCORE = '_$0';

    /**
     * Qualified type format.
     */
    const FORMAT_QUALIFIED_MODEL_TYPE = 'bunq\\Model\\Generated\\%s';
    const FORMAT_QUALIFIED_OBJECT_TYPE = 'bunq\\Model\\Generated\\Object\\%s';
    const FORMAT_QUALIFIED_OVERRIDE_TYPE = 'bunq\\Model\\%s';

    /**
     * Error constants.
     */
    const ERROR_MODEL_NOT_DEFINED = 'Found model "%s" which is not defined.';

    /**
     * @param string $json
     *
     * @return mixed[]
     */
    public static function deserializeResponseArray($json)
    {
        return \GuzzleHttp\json_decode($json, true);
    }

    /**
     * @param string $model
     *
     * @return BunqModel
     * @throws BunqException
     */
    public static function determineModelClassNameQualified($model)
    {
        $classNameOverride = vsprintf(self::FORMAT_QUALIFIED_OVERRIDE_TYPE, [$model]);
        $classNameModel = vsprintf(self::FORMAT_QUALIFIED_MODEL_TYPE, [$model]);
        $classNameObject = vsprintf(self::FORMAT_QUALIFIED_OBJECT_TYPE, [$model]);

        if (static::isClassSubClassOfBunqModel($classNameOverride)) {
            return $classNameOverride;
        } elseif (static::isClassSubClassOfBunqModel($classNameModel)) {
            return $classNameModel;
        } elseif (static::isClassSubClassOfBunqModel($classNameObject)) {
            return $classNameObject;
        } else {
            throw new BunqException(self::ERROR_MODEL_NOT_DEFINED, [$model]);
        }
    }

    /**
     * @param string $className
     *
     * @return bool
     */
    private static function isClassSubClassOfBunqModel($className)
    {
        return class_exists($className)
            && is_subclass_of($className, BunqModel::class);
    }

    /**
     * @param mixed[] $array
     *
     * @return mixed[]
     */
    public static function formatResponseArray($array)
    {
        $formattedArray = [];

        foreach ($array as $item) {
            reset($item);
            $formattedArray[key($item)] = current($item);
        }

        return $formattedArray;
    }

    /**
     * @param string $field
     *
     * @return string
     */
    public static function snakeCaseToCamelCase($field)
    {
        return lcfirst(str_replace(
            self::DELIMITER_UNDERSCORE,
            self::STRING_EMPTY,
            ucwords($field, self::DELIMITER_UNDERSCORE)
        ));
    }

    /**
     * @param string $field
     *
     * @return string
     */
    public static function camelCaseToSnakeCase($field)
    {
        return strtolower(preg_replace(self::REGEX_CAPITAL, self::REPLACEMENT_UNDERSCORE, $field));
    }
}
