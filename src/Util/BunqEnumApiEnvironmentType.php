<?php
namespace bunq\Util;

/**
 */
final class BunqEnumApiEnvironmentType extends BunqEnum
{
    /**
     * Choice constants.
     */
    const CHOICE_PRODUCTION = 'PRODUCTION';
    const CHOICE_SANDBOX = 'SANDBOX';

    /**
     * @var string[]
     */
    protected $supportedChoices = [
        self::CHOICE_PRODUCTION => self::CHOICE_PRODUCTION,
        self::CHOICE_SANDBOX => self::CHOICE_SANDBOX,
    ];

    /**
     * @return BunqEnumApiEnvironmentType
     */
    public static function PRODUCTION(): BunqEnumApiEnvironmentType
    {
        return new static(self::CHOICE_PRODUCTION);
    }

    /**
     * @return BunqEnumApiEnvironmentType
     */
    public static function SANDBOX(): BunqEnumApiEnvironmentType
    {
        return new static(self::CHOICE_SANDBOX);
    }
}
