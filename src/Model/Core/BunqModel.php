<?php
namespace bunq\Model\Core;

use bunq\Context\ApiContext;
use bunq\Context\BunqContext;
use bunq\Exception\BunqException;
use bunq\Http\BunqResponse;
use bunq\Http\BunqResponseRaw;
use bunq\Http\Pagination;
use bunq\Util\FileUtil;
use bunq\Util\ModelUtil;
use JsonSerializable;
use ReflectionClass;
use ReflectionProperty;

/**
 * Base class for all endpoints, responsible for parsing json received from the server.
 */
abstract class BunqModel implements JsonSerializable
{
    /**
     * Error constants.
     */
    const ERROR_PROPERTY_DOES_NOT_EXIST = 'Property "%s" does not exist in "%s"' . PHP_EOL;
    const ERROR_UNEXPECTED_RESULT = 'Unexpected number of results "%d", expected "1".';

    /**
     * Field constants.
     */
    const FIELD_RESPONSE = 'Response';
    const FIELD_PAGINATION = 'Pagination';
    const FIELD_ID = 'Id';
    const FIELD_UUID = 'Uuid';

    /**
     * Regex constants.
     */
    const REGEX_DOC_BLOCK_VARIABLE = '/@var\s(\w+)(\[\])?/';
    const REGEX_EXPECTED_ONE = 1;
    const REGEX_MATCH_RESULT_TYPE = 1;
    const REGEX_MATCH_RESULT_IS_ARRAY = 2;

    /**
     * Index of the very first item in an array.
     */
    const INDEX_FIRST = 0;

    /**
     * Depth counter constants.
     */
    const DEPTH_COUNTER_BEGIN = 0;
    const DEPTH_COUNTER_MAX = 2;
    const DEPTH_COUNTER_INCREMENTER = 1;

    /**
     * Type constants.
     */
    const SCALAR_TYPE_STRING = 'string';
    const SCALAR_TYPE_BOOL = 'bool';
    const SCALAR_TYPE_INT = 'int';
    const SCALAR_TYPE_FLOAT = 'float';

    /**
     * @var string[]
     */
    protected static $fieldNameOverrideMap = [];

    /**
     * Set of the PHP scalar types. Mimicking a constant, and therefore should be used with self::.
     *
     * @var bool[]
     */
    private static $scalarTypes = [
        self::SCALAR_TYPE_STRING => true,
        self::SCALAR_TYPE_BOOL => true,
        self::SCALAR_TYPE_INT => true,
        self::SCALAR_TYPE_FLOAT => true,
    ];

    /**
     * Format constants.
     */
    const FORMAT_STRING_EMPTY = '';
    const SUFFIX_REQUEST_FIELD = '_field_for_request';

    /**
     * @param string $json
     *
     * @return static
     */
    public static function createFromJsonString(string $json): BunqModel
    {
        $responseArray = ModelUtil::deserializeResponseArray($json);

        return static::createFromResponseArray($responseArray);
    }

    /**
     * @param mixed[] $responseArray
     * @param string $wrapper
     *
     * @return BunqModel|null
     */
    protected static function createFromResponseArray(
        array $responseArray,
        string $wrapper = null
    ) {
        if (is_subclass_of(get_called_class(), AnchorObjectInterface::class)) {
            return self::createFromResponseArrayAnchorObject($responseArray);
        }

        if (is_string($wrapper) && isset($responseArray[$wrapper])) {
            $responseArray = $responseArray[$wrapper];
        }

        if (empty($responseArray)) {
            return null;
        }

        return self::createInstanceFromResponseArray($responseArray);
    }

    /**
     * @param mixed[] $responseArray
     * @param int|null $depthCounter
     *
     * @return BunqModel|null
     */
    private static function createFromResponseArrayAnchorObject(
        array $responseArray,
        int $depthCounter = null
    ) {
        if (empty($responseArray)) {
            return null;
        }

        if (is_null($depthCounter)) {
            $depthCounter = self::DEPTH_COUNTER_BEGIN;
        }

        $model = self::createInstanceFromResponseArray($responseArray);

        if ($model->isAllFieldNull() && $depthCounter < self::DEPTH_COUNTER_MAX) {
            $model = self::decodeInsideModelFields($responseArray, $model, $depthCounter);
        }

        return $model;
    }

    /**
     * @param mixed[] $responseArray
     *
     * @return BunqModel
     */
    private static function createInstanceFromResponseArray(array $responseArray): BunqModel
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
    private static function determineResponseFieldName(string $fieldNameRaw): string
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
                /** @var BunqModel $modelClassNameQualified */
                $modelClassNameQualified = ModelUtil::determineModelClassNameQualified($fieldType);

                return $modelClassNameQualified::createListFromResponseArray($contents);
            } else {
                /** @var BunqModel $modelClassNameQualified */
                $modelClassNameQualified = ModelUtil::determineModelClassNameQualified($fieldType);

                $parentClassName = $property->getDeclaringClass()->getName();
                $additionalWrappingKey = BunqModelWrapper::determineWrappingKey($parentClassName, $property->getName());

                if (!is_null($additionalWrappingKey)) {
                    if (isset($contents[$additionalWrappingKey])) {
                        return $modelClassNameQualified::createFromResponseArray($contents[$additionalWrappingKey]);
                    }
                }

                return $modelClassNameQualified::createFromResponseArray($contents);
            }
        } else {
            return $contents;
        }
    }

    /**
     * @param string $type
     *
     * @return bool
     */
    private static function isTypeScalar(string $type): bool
    {
        return isset(self::$scalarTypes[$type]);
    }

    /**
     * @param mixed[] $responseArray
     * @param string $wrapper
     *
     * @return BunqModel[]
     */
    protected static function createListFromResponseArray(
        array $responseArray,
        string $wrapper = null
    ): array {
        $list = [];

        foreach ($responseArray as $className => $element) {
            $list[] = static::createFromResponseArray($element, $wrapper);
        }

        return $list;
    }

    /**
     * @return bool
     */
    abstract protected function isAllFieldNull();

    /**
     * @param mixed[] $responseArray
     * @param BunqModel $model
     * @param int $depthCounter
     *
     * @return BunqModel
     */
    private static function decodeInsideModelFields(array $responseArray, BunqModel $model, int $depthCounter)
    {
        $modelFields = (array_keys(get_object_vars($model)));

        foreach ($modelFields as $field) {
            $fieldClass = ModelUtil::getModelClassNameQualifiedOrNull($field);

            if (is_null($fieldClass)) {
                continue;
            }

            $reflectionClass = new ReflectionClass($fieldClass);
            /** @var BunqModel $bunqModelSubClass */
            $bunqModelSubClass = $reflectionClass->newInstanceWithoutConstructor();
            $fieldContents = $bunqModelSubClass::createFromResponseArrayAnchorObject(
                $responseArray,
                $depthCounter + self::DEPTH_COUNTER_INCREMENTER
            );

            if ($fieldContents->isAllFieldNull()) {
                $model->{$field} = null;
            } else {
                $model->{$field} = $fieldContents;
            }
        }

        return $model;
    }

    /**
     * @param BunqResponseRaw $responseRaw
     * @param string $wrapper
     *
     * @return BunqResponse
     */
    protected static function fromJsonList(
        BunqResponseRaw $responseRaw,
        string $wrapper = null
    ): BunqResponse {
        $json = $responseRaw->getBodyString();
        $responseArray = ModelUtil::deserializeResponseArray($json);
        $response = $responseArray[self::FIELD_RESPONSE];
        $value = static::createListFromResponseArray($response, $wrapper);
        $pagination = null;

        if (isset($responseArray[self::FIELD_PAGINATION])) {
            $pagination = Pagination::restore($responseArray[self::FIELD_PAGINATION]);
        }

        return new BunqResponse($value, $responseRaw->getHeaders(), $pagination);
    }

    /**
     * @param BunqResponseRaw $responseRaw
     *
     * @return BunqResponse
     */
    protected static function classFromJson(BunqResponseRaw $responseRaw): BunqResponse
    {
        $json = $responseRaw->getBodyString();
        $response = ModelUtil::deserializeResponseArray($json)[self::FIELD_RESPONSE];
        $formattedResponseArray = ModelUtil::formatResponseArray($response);
        $value = static::createFromResponseArray($formattedResponseArray);

        return new BunqResponse($value, $responseRaw->getHeaders());
    }

    /**
     * @param BunqResponseRaw $responseRaw
     *
     * @return BunqResponse
     */
    protected static function processForId(BunqResponseRaw $responseRaw): BunqResponse
    {
        $id = Id::fromJson($responseRaw, self::FIELD_ID)->getValue();

        return new BunqResponse($id->getId(), $responseRaw->getHeaders());
    }

    /**
     * @param BunqResponseRaw $responseRaw
     * @param string|null $wrapper
     *
     * @return BunqResponse
     * @throws BunqException when the result is not expected.
     */
    protected static function fromJson(BunqResponseRaw $responseRaw, string $wrapper = null): BunqResponse
    {
        $json = $responseRaw->getBodyString();
        $responseArray = ModelUtil::deserializeResponseArray($json);
        $response = $responseArray[self::FIELD_RESPONSE];
        $value = static::createListFromResponseArray($response, $wrapper);

        return new BunqResponse($value[self::INDEX_FIRST], $responseRaw->getHeaders());
    }

    /**
     * @param string $path
     *
     * @return BunqModel
     */
    public static function fromJsonFile(string $path): BunqModel
    {
        $decodedArray = ModelUtil::deserializeResponseArray(
            FileUtil::getFileContents($path)
        );

        return static::createInstanceFromResponseArray($decodedArray);
    }

    /**
     * @param BunqResponseRaw $responseRaw
     *
     * @return BunqResponse
     */
    protected static function processForUuid(BunqResponseRaw $responseRaw): BunqResponse
    {
        $uuid = Uuid::fromJson($responseRaw, self::FIELD_UUID)->getValue();

        return new BunqResponse($uuid->getUuid(), $responseRaw->getHeaders());
    }

    /**
     * @return ApiContext
     */
    protected static function getApiContext(): ApiContext
    {
        return BunqContext::getApiContext();
    }

    /**
     * @return int
     */
    protected static function determineUserId(): int
    {
        return BunqContext::getUserContext()->getUserId();
    }

    /**
     * @param int|null $monetaryAccountId
     *
     * @return int
     */
    protected static function determineMonetaryAccountId(int $monetaryAccountId = null): int
    {
        if (is_null($monetaryAccountId)) {
            return BunqContext::getUserContext()->getMainMonetaryAccountId();
        } else {
            return $monetaryAccountId;
        }
    }

    /**
     * @return mixed[]
     */
    public function jsonSerialize(): array
    {
        $array = [];

        foreach ($this->getNonStaticProperties() as $property) {
            $fieldName = static::determineRequestFieldName($property);

            if (!is_null($this->{$property->getName()})) {
                $fieldName = str_replace(self::SUFFIX_REQUEST_FIELD, self::FORMAT_STRING_EMPTY, $fieldName);
                $array[$fieldName] = $this->{$property->getName()};
            }
        }

        return $array;
    }

    /**
     * @return ReflectionProperty[]
     */
    private function getNonStaticProperties(): array
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
    private static function determineRequestFieldName(ReflectionProperty $property): string
    {
        $fieldName = ModelUtil::camelCaseToSnakeCase($property->getName());

        if (isset(static::$fieldNameOverrideMap[$fieldName])) {
            return static::$fieldNameOverrideMap[$fieldName];
        } else {
            return $fieldName;
        }
    }
}
