<?php
namespace bunq\test;

use bunq\Util\FileUtil;

/**
 * Configuration for the test cases
 */
class TestConfig
{
    /**
     * Field constants
     */
    const FIELD_IP_ADDRESS_ALLOWED = 'ipAddress';
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
     * The path where the config.json file is stored
     */
    const CONFIG_PATH = '/resource/config.json';

    /**
     * @return string
     */
    public static function getIpAddress()
    {
        return static::getConfigFile()[self::FIELD_IP_ADDRESS_ALLOWED];
    }

    /**
     * @return mixed[]
     */
    private static function getConfigFile()
    {
        return json_decode(FileUtil::getFileContents(__DIR__ . self::CONFIG_PATH), true);
    }

    /**
     * @return string
     */
    public static function getTypeCounterPartyOther()
    {
        return static::getConfigFile()[self::FIELD_COUNTER_PARTY_OTHER][self::FIELD_ALIAS_TYPE];
    }

    /**
     * @return string
     */
    public static function getAliasCounterPartyOther()
    {
        return static::getConfigFile()[self::FIELD_COUNTER_PARTY_OTHER][self::FIELD_ALIAS];
    }

    /**
     * @return string
     */
    public static function getAliasCounterParty()
    {
        return static::getConfigFile()[self::FIELD_COUNTER_PARTY_SELF][self::FIELD_ALIAS];
    }

    /**
     * @return string
     */
    public static function getTypeCounterParty()
    {
        return static::getConfigFile()[self::FIELD_COUNTER_PARTY_SELF][self::FIELD_ALIAS_TYPE];
    }

    /**
     * @return int
     */
    public static function getMonetaryAccountId2()
    {
        return static::getConfigFile()[self::FIELD_MONETARY_ACCOUNT_ID2];
    }

    /**
     * @return int
     */
    public static function getCashRegisterId()
    {
        return static::getConfigFile()[self::FIELD_TAB_USAGE_SINGLE_TEST][self::FIELD_CASH_REGISTER_ID];
    }

    /**
     * @return int
     */
    public static function getMonetaryAccountId()
    {
        return static::getConfigFile()[self::FIELD_MONETARY_ACCOUNT_ID];
    }

    /**
     * @return int
     */
    public static function getUserId()
    {
        return static::getConfigFile()[self::FIELD_USER_ID];
    }

    /**
     * @return string
     */
    public static function getApiKey(){
        return static::getConfigFile()[self::FIELD_API_KEY];
    }

    /**
     * @return string
     */
    public static function getAttachmentContentType()
    {
        return static::getConfigFile()[self::FIELD_ATTACHMENT_PUBLIC_TEST][self::FIELD_CONTENT_TYPE];
    }

    /**
     * @return string
     */
    public static function getAttachmentPathIn()
    {
        return static::getConfigFile()[self::FIELD_ATTACHMENT_PUBLIC_TEST][self::FIELD_ATTACHMENT_PATH_IN];
    }

    /**
     * @return string
     */
    public static function getAttachmentDescription()
    {
        return static::getConfigFile()[self::FIELD_ATTACHMENT_PUBLIC_TEST][self::FIELD_ATTACHMENT_DESCRIPTION];
    }
}
