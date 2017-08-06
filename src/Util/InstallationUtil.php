<?php

namespace bunq\Util;

use bunq\Context\ApiContext;
use bunq\Exception\BunqException;
use Exception;
use ReflectionClass;
use ReflectionMethod;
use ReflectionProperty;

/**
 */
final class InstallationUtil
{
    /**
     * Error constants.
     */
    const ERROR_BUNQ_EXCEPTION = 'An error occurred: %s' . PHP_EOL;
    const ERROR_EXCEPTION = "An unexpected error occurred: %s" . PHP_EOL;
    const ERROR_EMPTY_ENVIRONMENT = 'Environment cannot be empty.';
    const ERROR_EMPTY_API_KEY = 'Api key cannot be empty.';
    const ERROR_EMPTY_DESCRIPTION = 'Description cannot be empty.';
    const ERROR_INVALID_IP_ADDRESS = 'Invalid ip address "%s"';

    /**
     * Prompt constants.
     */
    const PROMPT_ENVIRONMENT = 'Choose an environment (SANDBOX/PRODUCTION): ';
    const PROMPT_API_KEY = 'Please provide your api key: ';
    const PROMPT_DESCRIPTION = 'Provide a device description: ';
    const PROMPT_PERMITTED_IPS = 'Provide a list of comma-separated IPs (or leave empty for current IP): ';
    const PROMPT_CONTEXT_FILE = 'Provide a file where the bunq api context will be saved (default: bunq.conf): ';

    /**
     * Private properties and methods of ApiContext to access via reflection.
     */
    const PROPERTY_ENVIRONMENT_TYPE = 'environmentType';
    const PROPERTY_API_KEY = 'apiKey';
    const METHOD_INITIALIZE_INSTALLATION_CONTEXT = 'initializeInstallationContext';
    const METHOD_REGISTER_DEVICE = 'registerDevice';
    const METHOD_INITIALIZE_SESSION_CONTEXT = 'initializeSessionContext';

    /**
     * String constants.
     */
    const STRING_EMPTY = '';
    const DELIMITER_COMMA = ',';

    /**
     * Regex constants.
     */
    const REGEX_IP = '/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/';
    const PREG_MATCH_SUCCESS = 1;

    /**
     *
     */
    public static function interactiveInstall()
    {
        try {
            $context = static::createApiContextWithoutConstructor();

            $environmentType = new BunqEnumApiEnvironmentType(static::readLine(
                self::PROMPT_ENVIRONMENT,
                self::ERROR_EMPTY_ENVIRONMENT
            ));
            static::setPrivateProperty($context, self::PROPERTY_ENVIRONMENT_TYPE, $environmentType);

            $apiKey = static::readLine(
                self::PROMPT_API_KEY,
                self::ERROR_EMPTY_API_KEY
            );
            static::setPrivateProperty($context, self::PROPERTY_API_KEY, $apiKey);

            $methodInitializeInstallationContext = static::createAccessibleReflectionMethod(
                ApiContext::class,
                self::METHOD_INITIALIZE_INSTALLATION_CONTEXT
            );
            $methodInitializeInstallationContext->invoke($context);

            $description = static::readLine(self::PROMPT_DESCRIPTION, self::ERROR_EMPTY_DESCRIPTION);
            $permittedIpsInput = static::readLineOrNull(self::PROMPT_PERMITTED_IPS);
            $permittedIps = static::formatIps($permittedIpsInput);
            $methodRegisterDevice = static::createAccessibleReflectionMethod(ApiContext::class, self::METHOD_REGISTER_DEVICE);
            $methodRegisterDevice->invoke($context, $description, $permittedIps);

            $methodInitializeSessionContext = static::createAccessibleReflectionMethod(
                ApiContext::class,
                self::METHOD_INITIALIZE_SESSION_CONTEXT
            );
            $methodInitializeSessionContext->invoke($context);

            $contextFileName = static::readLineOrNull(self::PROMPT_CONTEXT_FILE);

            if ($contextFileName === null) {
                $context->save();
            } else {
                $context->save($contextFileName);
            }
        } catch (BunqException $exception) {
            echo sprintf(self::ERROR_BUNQ_EXCEPTION, $exception->getMessage());
        } catch (Exception $exception) {
            echo sprintf(self::ERROR_EXCEPTION, $exception->getMessage());
        }
    }

    /**
     * @return ApiContext
     */
    private static function createApiContextWithoutConstructor()
    {
        $contextReflection = new ReflectionClass(ApiContext::class);
        /** @var ApiContext $context */
        $context = $contextReflection->newInstanceWithoutConstructor();

        return $context;
    }

    /**
     * @param string $promptMessage
     * @param string $errorMessage
     *
     * @return string
     * @throws BunqException
     */
    private static function readLine($promptMessage, $errorMessage)
    {
        $input = readline($promptMessage);

        if ($input === false || $input === self::STRING_EMPTY) {
            echo $errorMessage . PHP_EOL;

            return static::readLine($promptMessage, $errorMessage);
        } else {
            return $input;
        }
    }

    /**
     * @param mixed $object
     * @param string $propertyName
     * @param mixed $value
     */
    private static function setPrivateProperty($object, $propertyName, $value)
    {
        $propertyEnvironmentInput = new ReflectionProperty(get_class($object), $propertyName);
        $propertyEnvironmentInput->setAccessible(true);
        $propertyEnvironmentInput->setValue($object, $value);
    }

    /**
     * @param string $class
     * @param string $methodName
     *
     * @return ReflectionMethod
     */
    private static function createAccessibleReflectionMethod($class, $methodName)
    {
        $method = new ReflectionMethod($class, $methodName);
        $method->setAccessible(true);

        return $method;
    }

    /**
     * @param string $promptMessage
     *
     * @return null|string
     */
    private static function readLineOrNull($promptMessage)
    {
        $input = readline($promptMessage);

        if ($input === false || $input === self::STRING_EMPTY) {
            return null;
        } else {
            return $input;
        }
    }

    /**
     * @param $permittedIpsInput
     *
     * @return array
     */
    private static function formatIps($permittedIpsInput)
    {
        if (is_null($permittedIpsInput)) {
            $permittedIps = [];
        } else {
            $permittedIpsRaw = explode(self::DELIMITER_COMMA, $permittedIpsInput);
            $permittedIps = [];

            foreach ($permittedIpsRaw as $permittedIp) {
                static::assertIpIsValid($permittedIp);
                $permittedIps[] = trim($permittedIp);
            }
        }

        return $permittedIps;
    }

    /**
     * @param string $permittedIp
     *
     * @throws BunqException
     */
    private static function assertIpIsValid($permittedIp)
    {
        if (preg_match(self::REGEX_IP, $permittedIp) === self::PREG_MATCH_SUCCESS) {
            // Ip address is valid
        } else {
            throw new BunqException(self::ERROR_INVALID_IP_ADDRESS, [$permittedIp]);
        }
    }
}
