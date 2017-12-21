<?php
namespace bunq\Util;

use bunq\Exception\BunqException;
use bunq\Model\Core\BunqModel;

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
    const FORMAT_QUALIFIED_MODEL_TYPE = 'bunq\\Model\\Generated\\Endpoint\\%s';
    const FORMAT_QUALIFIED_OBJECT_TYPE = 'bunq\\Model\\Generated\\Object\\%s';
    const FORMAT_QUALIFIED_OVERRIDE_TYPE = 'bunq\\Model\\Core\\%s';

    /**
     * Error constants.
     */
    const ERROR_MODEL_NOT_DEFINED = 'Found model "%s" which is not defined.';

    /**
     * @param string $json
     *
     * @return mixed[]
     */
    public static function deserializeResponseArray(string $json): array
    {
        return \GuzzleHttp\json_decode($json, true);
    }

    /**
     * @param string $model
     *
     * @return string
     * @throws BunqException when the model is not defined.
     */
    public static function determineModelClassNameQualified(string $model): string
    {
        $classNameModel = static::getModelClassNameQualifiedOrNull($model);

        if (is_null($classNameModel)) {
            throw new BunqException(self::ERROR_MODEL_NOT_DEFINED, [$model]);
        }

        return $classNameModel;
    }

    /**
     * @param string $model
     *
     * @return null|string
     */
    public static function getModelClassNameQualifiedOrNull(string $model)
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
            return null;
        }
    }

    /**
     * @param string $className
     *
     * @return bool
     */
    private static function isClassSubClassOfBunqModel(string $className): bool
    {
        return class_exists($className) && is_subclass_of($className, BunqModel::class);
    }

    /**
     * @param mixed[] $array
     *
     * @return mixed[]
     */
    public static function formatResponseArray(array $array): array
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
    public static function snakeCaseToCamelCase(string $field): string
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
    public static function camelCaseToSnakeCase(string $field): string
    {
        return strtolower(preg_replace(self::REGEX_CAPITAL, self::REPLACEMENT_UNDERSCORE, $field));
    }
}
