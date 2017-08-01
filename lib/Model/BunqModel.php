<?php

namespace bunq\Model;

use bunq\Exception\BunqException;
use bunq\Util\ModelUtil;
use ReflectionClass;
use ReflectionProperty;

/**
 * Base class for all endpoints, responsible for parsing json received from the server.
 *
 */
abstract class BunqModel implements \JsonSerializable
{
    /**
     * Error constants.
     */
    const ERROR_PROPERTY_DOES_NOT_EXIST = 'Property "%s" does not exist in "%s"' . PHP_EOL;
    const ERROR_UNEXPECTED_RESULT = 'Unexpected number of results "%d", expected "1".';

    /**
     * Regex constants.
     */
    const REGEX_DOC_BLOCK_VARIABLE = '/@var\s(\w+)(\[\])?/';
    const REGEX_EXPECTED_ONE = 1;
    const REGEX_MATCH_RESULT_TYPE = 1;
    const REGEX_MATCH_RESULT_IS_ARRAY = 2;

    /**
     * Array count constants.
     */
    const COUNT_ONE = 1;

    /**
     * Type constants.
     */
    const SCALAR_TYPES = [
        self::SCALAR_TYPE_STRING => true,
        self::SCALAR_TYPE_BOOL => true,
        self::SCALAR_TYPE_INT => true,
        self::SCALAR_TYPE_FLOAT => true
    ];
    const SCALAR_TYPE_STRING = 'string';
    const SCALAR_TYPE_BOOL = 'bool';
    const SCALAR_TYPE_INT = 'int';
    const SCALAR_TYPE_FLOAT = 'float';

    /**
     * @var string[]
     */
    protected static $fieldNameOverrideMap = [];

    /**
     * @param string $json
     * @param string $wrapper
     *
     * @return BunqModel[]
     */
    protected static function fromJsonList($json, $wrapper = null)
    {
        $array = ModelUtil::determineResponseArray($json);

        return static::createListFromResponseArray($array, $wrapper);
    }

    /**
     * @param mixed[] $responseArray
     * @param string $wrapper
     *
     * @return BunqModel[]
     */
    protected static function createListFromResponseArray(array $responseArray, $wrapper = null)
    {
        $list = [];

        foreach ($responseArray as $className => $element) {
            $list[] = static::createFromResponseArray($element, $wrapper);
        }

        return $list;
    }

    /**
     * @param mixed[] $responseArray
     * @param string $wrapper
     *
     * @return BunqModel
     */
    protected static function createFromResponseArray(array $responseArray, $wrapper = null)
    {
        if (is_string($wrapper)) {
            $responseArray = $responseArray[$wrapper];
        }

        if (is_null($responseArray)) {
            return null;
        } else {
            return self::createInstanceFromResponseArray($responseArray);
        }
    }

    /**
     * @param mixed[] $responseArray
     *
     * @return BunqModel
     */
    private static function createInstanceFromResponseArray(array $responseArray)
    {
        $classDefinition = new \ReflectionClass(static::class);
        /** @var BunqModel $instance */
        $instance = $classDefinition->newInstanceWithoutConstructor();

        foreach ($responseArray as $fieldNameRaw => $contents) {
            $fieldName = static::determineResponseFieldName($fieldNameRaw);

            if ($classDefinition->hasProperty($fieldName)) {
                $property = $classDefinition->getProperty($fieldName);
                $instance->{$fieldName} = static::determineFieldContents($property, $contents);
            }
        }

        return $instance;
    }

    /**
     * @param string $fieldNameRaw
     *
     * @return string
     */
    private static function determineResponseFieldName($fieldNameRaw)
    {
        $fieldNameOverrideMapFlipped = array_flip(static::$fieldNameOverrideMap);

        if (isset($fieldNameOverrideMapFlipped[$fieldNameRaw])) {
            $fieldNameRaw = $fieldNameOverrideMapFlipped[$fieldNameRaw];
        }

        return ModelUtil::snakeCaseToCamelCase($fieldNameRaw);
    }

    /**
     * @param ReflectionProperty $property
     * @param mixed|mixed[] $contents
     *
     * @return BunqModel|BunqModel[]|mixed
     */
    private static function determineFieldContents(ReflectionProperty $property, $contents)
    {
        $docComment = $property->getDocComment();

        if (preg_match(self::REGEX_DOC_BLOCK_VARIABLE, $docComment, $matches) === self::REGEX_EXPECTED_ONE) {
            $fieldType = $matches[self::REGEX_MATCH_RESULT_TYPE];

            if (is_null($contents) || static::isTypeScalar($fieldType)) {
                return $contents;
            } elseif (isset($matches[self::REGEX_MATCH_RESULT_IS_ARRAY])) {
                $modelClassNameQualified = ModelUtil::determineModelClassNameQualified($fieldType);

                return $modelClassNameQualified::createListFromResponseArray($contents);
            } else {
                $modelClassNameQualified = ModelUtil::determineModelClassNameQualified($fieldType);

                return $modelClassNameQualified::createFromResponseArray($contents);
            }
        } else {
            return $contents;
        }
    }

    /**
     * Determine if a type is scalar.
     *
     * @param string $type
     *
     * @return bool
     */
    private static function isTypeScalar($type)
    {
        return isset(self::SCALAR_TYPES[$type]);
    }

    /**
     * @param string $class
     * @param string $json
     *
     * @return BunqModel
     */
    protected static function classFromJson($class, $json)
    {
        assert(is_subclass_of($class, BunqModel::class));
        /** @var BunqModel $class */

        $responseArray = ModelUtil::determineResponseArray($json);
        $formattedResponseArray = ModelUtil::formatResponseArray($responseArray);

        return $class::createFromResponseArray($formattedResponseArray);
    }

    /**
     * Process json and retrieve the ID.
     *
     * @param string $json
     *
     * @return int
     */
    protected static function processForId($json)
    {
        /** @var Id $id */
        $id = Id::fromJson($json);

        return $id->getId();
    }

    /**
     * @param string $json
     *
     * @return BunqModel
     * @throws BunqException
     */
    protected static function fromJson($json)
    {
        $responseArray = ModelUtil::determineResponseArray($json);

        $bunqModelList = [];

        foreach ($responseArray as $modelPropertyArray) {
            $value = self::determineJsonResponseValue($modelPropertyArray);
            $bunqModelList[] = static::createFromResponseArray($value);
        }

        if (count($bunqModelList) === self::COUNT_ONE) {
            return current($bunqModelList);
        } else {
            throw new BunqException(self::ERROR_UNEXPECTED_RESULT, [count($bunqModelList)]);
        }
    }

    /**
     * @param mixed[] $responseArray
     *
     * @return mixed[]
     */
    private static function determineJsonResponseValue(array $responseArray)
    {
        return current($responseArray);
    }

    /**
     * @param $json
     *
     * @return string
     */
    protected static function processForUuid($json)
    {
        /** @var Uuid $uuid */
        $uuid = Uuid::fromJson($json);

        return $uuid->getUuid();
    }

    /**
     * @return mixed[]
     */
    public function jsonSerialize()
    {
        $array = [];

        foreach ($this->getNonStaticProperties() as $property) {
            $fieldName = static::determineRequestFieldName($property);
            $array[$fieldName] = $this->{$property->getName()};
        }

        return $array;
    }

    /**
     * @return ReflectionProperty[]
     */
    private function getNonStaticProperties()
    {
        $reflectionClass = new ReflectionClass($this);

        return array_diff(
            $reflectionClass->getProperties(ReflectionProperty::IS_PROTECTED),
            $reflectionClass->getProperties(ReflectionProperty::IS_STATIC)
        );
    }

    /**
     * @param ReflectionProperty $property
     *
     * @return string
     */
    private static function determineRequestFieldName(ReflectionProperty $property)
    {
        $fieldName = ModelUtil::camelCaseToSnakeCase($property->getName());

        if (isset(static::$fieldNameOverrideMap[$fieldName])) {
            return static::$fieldNameOverrideMap[$fieldName];
        } else {
            return $fieldName;
        }
    }
}
