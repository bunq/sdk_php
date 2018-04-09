<?php

namespace bunq\Util;

use bunq\Context\ApiContext;
use bunq\Exception\BunqException;
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
    const ERROR_CANNOT_CREATE_API_KEY_PRODUCTION = 'Cannot automatically create API key for production.';
    const ERROR_INVALID_DEVICE_DESCRIPTION =
        '"%s" can not be used as a device description, must be a non empty string.';

    /**
     * Prompt constants.
     */
    const PROMPT_ENVIRONMENT = 'Choose an environment (SANDBOX/PRODUCTION): ';
    const PROMPT_API_KEY = 'Please provide your api key: ';
    const PROMPT_PROXY_URL = 'Provide a proxy url, leave empty for no proxy (default: no proxy): ';
    const PROMPT_DESCRIPTION = 'Provide a device description: ';
    const PROMPT_ALL_PERMITTED_IP = 'Provide a list of comma-separated IPs (or leave empty for current IP): ';
    const PROMPT_CONTEXT_FILE = 'Provide a file where the bunq api context will be saved (default: bunq.conf): ';

    /**
     * Private properties and methods of ApiContext to access via reflection.
     */
    const PROPERTY_ENVIRONMENT_TYPE = 'environmentType';
    const PROPERTY_API_KEY = 'apiKey';
    const PROPERTY_PROXY_URL = 'proxyUrl';
    const METHOD_CREATE_SANDBOX_USER = 'createSandboxUser';
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
     * @throws BunqException
     */
    public static function interactiveInstall()
    {
        $context = static::createApiContextWithoutConstructor();

        $environmentType = new BunqEnumApiEnvironmentType(
            static::readLine(
                self::PROMPT_ENVIRONMENT,
                self::ERROR_EMPTY_ENVIRONMENT
            )
        );
        static::setPrivateProperty($context, self::PROPERTY_ENVIRONMENT_TYPE, $environmentType);

        $apiKey = static::readLine(
            self::PROMPT_API_KEY,
            self::ERROR_EMPTY_API_KEY
        );
        static::setPrivateProperty($context, self::PROPERTY_API_KEY, $apiKey);

        $proxyUrl = static::readLineOrNull(self::PROMPT_PROXY_URL);
        static::setPrivateProperty($context, self::PROPERTY_PROXY_URL, $proxyUrl);

        $methodInitializeInstallationContext = static::createAccessibleReflectionMethod(
            ApiContext::class,
            self::METHOD_INITIALIZE_INSTALLATION_CONTEXT
        );
        $methodInitializeInstallationContext->invoke($context);

        $description = static::readLine(self::PROMPT_DESCRIPTION, self::ERROR_EMPTY_DESCRIPTION);
        $allPermittedIpInput = static::readLineOrNull(self::PROMPT_ALL_PERMITTED_IP);
        $allPermittedIp = static::formatAllIp($allPermittedIpInput);
        $methodRegisterDevice = static::createAccessibleReflectionMethod(
            ApiContext::class,
            self::METHOD_REGISTER_DEVICE
        );
        $methodRegisterDevice->invoke($context, $description, $allPermittedIp);

        $methodInitializeSessionContext = static::createAccessibleReflectionMethod(
            ApiContext::class,
            self::METHOD_INITIALIZE_SESSION_CONTEXT
        );
        $methodInitializeSessionContext->invoke($context);

        $contextFileName = static::readLineOrNull(self::PROMPT_CONTEXT_FILE);

        $context->save($contextFileName);
    }

    /**
     * @return ApiContext
     */
    private static function createApiContextWithoutConstructor(): ApiContext
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
     */
    private static function readLine(string $promptMessage, string $errorMessage): string
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
    private static function setPrivateProperty($object, string $propertyName, $value)
    {
        $propertyEnvironmentInput = new ReflectionProperty(get_class($object), $propertyName);
        $propertyEnvironmentInput->setAccessible(true);
        $propertyEnvironmentInput->setValue($object, $value);
    }

    /**
     * @param string $promptMessage
     *
     * @return null|string
     */
    private static function readLineOrNull(string $promptMessage)
    {
        $input = readline($promptMessage);

        if ($input === false || $input === self::STRING_EMPTY) {
            return null;
        } else {
            return $input;
        }
    }

    /**
     * @param string $class
     * @param string $methodName
     *
     * @return ReflectionMethod
     */
    private static function createAccessibleReflectionMethod(string $class, string $methodName)
    {
        $method = new ReflectionMethod($class, $methodName);
        $method->setAccessible(true);

        return $method;
    }

    /**
     * @param $permittedIpsInput
     *
     * @return string[]
     */
    private static function formatAllIp(string $permittedIpsInput = null): array
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
     * @param string $ip
     *
     * @throws BunqException when the IP address is invalid
     */
    private static function assertIpIsValid(string $ip)
    {
        if (preg_match(self::REGEX_IP, $ip) === self::PREG_MATCH_SUCCESS) {
            // Ip address is valid
        } else {
            throw new BunqException(self::ERROR_INVALID_IP_ADDRESS, [$ip]);
        }
    }

    /**
     * @param string[] $allIp
     *
     * @return bool
     */
    public static function assertAllIpIsValid(array $allIp): bool
    {
        foreach ($allIp as $ip) {
            static::assertIpIsValid($ip);
        }

        return true;
    }

    /**
     * @param BunqEnumApiEnvironmentType $environmentType
     * @param string|null $contextFileName
     * @param string|null $apiKey
     *
     * @throws BunqException
     */
    public static function automaticInstall(
        BunqEnumApiEnvironmentType $environmentType,
        string $contextFileName = null,
        string $apiKey = null
    ) {
        $context = static::createApiContextWithoutConstructor();

        if (is_null($environmentType)) {
            $environmentType = BunqEnumApiEnvironmentType::SANDBOX();
        }

        static::setPrivateProperty($context, self::PROPERTY_ENVIRONMENT_TYPE, $environmentType);

        if (static::shouldSandboxUserBeCreated($environmentType, $apiKey)) {
            $methodCreateSandboxUser = static::createAccessibleReflectionMethod(
                ApiContext::class,
                self::METHOD_CREATE_SANDBOX_USER
            );

            $methodCreateSandboxUser->invoke($context);
        } elseif (!is_null($apiKey)) {
            static::setPrivateProperty($context, self::PROPERTY_API_KEY, $apiKey);
        } else {
            throw new BunqException(self::ERROR_CANNOT_CREATE_API_KEY_PRODUCTION);
        }

        $methodInitializeInstallationContext = static::createAccessibleReflectionMethod(
            ApiContext::class,
            self::METHOD_INITIALIZE_INSTALLATION_CONTEXT
        );
        $methodInitializeInstallationContext->invoke($context);

        $methodRegisterDevice = static::createAccessibleReflectionMethod(
            ApiContext::class,
            self::METHOD_REGISTER_DEVICE
        );
        $methodRegisterDevice->invoke($context, gethostname(), []);

        $methodInitializeSessionContext = static::createAccessibleReflectionMethod(
            ApiContext::class,
            self::METHOD_INITIALIZE_SESSION_CONTEXT
        );
        $methodInitializeSessionContext->invoke($context);

        $context->save($contextFileName);
    }

    /**
     * @param BunqEnumApiEnvironmentType $environmentType
     * @param string|null $apiKey
     *
     * @return bool
     */
    private static function shouldSandboxUserBeCreated(
        BunqEnumApiEnvironmentType $environmentType,
        string $apiKey = null
    ): bool {
        return $environmentType->equals(BunqEnumApiEnvironmentType::SANDBOX()) && is_null($apiKey);
    }

    /**
     * @param string $deviceDescription
     *
     * @return bool
     * @throws BunqException
     */
    public static function assertDeviceDescriptionIsValid(string $deviceDescription): bool
    {
        if (empty($deviceDescription)) {
            throw new BunqException(vsprintf(self::ERROR_INVALID_DEVICE_DESCRIPTION, [$deviceDescription]));
        }

        return true;
    }
}
