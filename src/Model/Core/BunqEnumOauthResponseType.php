<?php
namespace bunq\Model\Core;

use bunq\Util\BunqEnum;

/**
 */
final class BunqEnumOauthResponseType extends BunqEnum
{
    /**
     * Choice constants.
     */
    const CHOICE_CODE = 'code';

    /**
     * @var string[]
     */
    protected $supportedChoices = [
        self::CHOICE_CODE => self::CHOICE_CODE,
    ];

    /**
     * @return BunqEnumOauthResponseType
     */
    public static function CODE(): BunqEnumOauthResponseType
    {
        return new static(self::CHOICE_CODE);
    }
}
