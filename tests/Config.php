<?php
namespace bunq\test;

use bunq\Model\Generated\Object\Pointer;
use bunq\Util\FileUtil;

/**
 * Configuration for the test cases
 */
class Config
{
    /**
     * The path where the config.json file is stored
     */
    const CONFIG_PATH = '/Resource/config.json';

    /**
     * Delimiter between the IP addresses in the PERMITTED_IPS field.
     */
    const DELIMITER_IPS = ',';

    /**
     * Field constants.
     */
    const FIELD_PERMITTED_IPS = 'PERMITTED_IPS';
    const FIELD_COUNTER_PARTY_OTHER = 'CounterPartyOther';
    const FIELD_ALIAS_TYPE = 'Type';
    const FIELD_COUNTER_PARTY_SELF = 'CounterPartySelf';
    const FIELD_ALIAS = 'Alias';
    const FIELD_CONTENT_TYPE = 'CONTENT_TYPE';
    const FIELD_ATTACHMENT_DESCRIPTION = 'DESCRIPTION';
    const FIELD_MONETARY_ACCOUNT_ID2 = 'MONETARY_ACCOUNT_ID2';
    const FIELD_TAB_USAGE_SINGLE_TEST = 'TabUsageSingleTest';
    const FIELD_CASH_REGISTER_ID = 'CASH_REGISTER_ID';
    const FIELD_MONETARY_ACCOUNT_ID = 'MONETARY_ACCOUNT_ID';
    const FIELD_USER_ID = 'USER_ID';
    const FIELD_API_KEY = 'API_KEY';
    const FIELD_ATTACHMENT_PUBLIC_TEST = 'AttachmentPublicTest';
    const FIELD_ATTACHMENT_PATH_IN = 'PATH_IN';

    /**
     * @return string[]
     */
    public static function getPermittedIps(): array
    {
        $permittedIpsString = static::getConfigFile()[self::FIELD_PERMITTED_IPS];

        if (empty($permittedIpsString)) {
            return [];
        } else {
            return explode(self::DELIMITER_IPS, $permittedIpsString);
        }
    }

    /**
     * @return mixed[]
     */
    private static function getConfigFile(): array
    {
        return json_decode(FileUtil::getFileContents(__DIR__ . self::CONFIG_PATH), true);
    }

    /**
     * @return Pointer
     */
    public static function getCounterPartyAliasOther(): Pointer
    {
        $type = static::getConfigFile()[self::FIELD_COUNTER_PARTY_OTHER][self::FIELD_ALIAS_TYPE];
        $alias = static::getConfigFile()[self::FIELD_COUNTER_PARTY_OTHER][self::FIELD_ALIAS];

        return new Pointer($type, $alias);
    }

    /**
     * @return Pointer
     */
    public static function getCounterPartyAliasSelf(): Pointer
    {
        $type = static::getConfigFile()[self::FIELD_COUNTER_PARTY_SELF][self::FIELD_ALIAS_TYPE];
        $alias = static::getConfigFile()[self::FIELD_COUNTER_PARTY_SELF][self::FIELD_ALIAS];

        return new Pointer($type, $alias);
    }

    /**
     * @return int
     */
    public static function getMonetaryAccountId2(): int
    {
        return static::getConfigFile()[self::FIELD_MONETARY_ACCOUNT_ID2];
    }

    /**
     * @return int
     */
    public static function getCashRegisterId(): int
    {
        return static::getConfigFile()[self::FIELD_TAB_USAGE_SINGLE_TEST][self::FIELD_CASH_REGISTER_ID];
    }

    /**
     * @return int
     */
    public static function getMonetaryAccountId(): int
    {
        return static::getConfigFile()[self::FIELD_MONETARY_ACCOUNT_ID];
    }

    /**
     * @return int
     */
    public static function getUserId(): int
    {
        return static::getConfigFile()[self::FIELD_USER_ID];
    }

    /**
     * @return string
     */
    public static function getApiKey(): string
    {
        return static::getConfigFile()[self::FIELD_API_KEY];
    }

    /**
     * @return string
     */
    public static function getAttachmentContentType(): string
    {
        return static::getConfigFile()[self::FIELD_ATTACHMENT_PUBLIC_TEST][self::FIELD_CONTENT_TYPE];
    }

    /**
     * @return string
     */
    public static function getAttachmentPathIn(): string
    {
        return static::getConfigFile()[self::FIELD_ATTACHMENT_PUBLIC_TEST][self::FIELD_ATTACHMENT_PATH_IN];
    }

    /**
     * @return string
     */
    public static function getAttachmentDescription(): string
    {
        return static::getConfigFile()[self::FIELD_ATTACHMENT_PUBLIC_TEST][self::FIELD_ATTACHMENT_DESCRIPTION];
    }
}
