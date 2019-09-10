<?php
namespace bunq\Model\Core;

use bunq\Util\BunqEnum;

/**
 */
final class BunqEnumOauthGrantType extends BunqEnum
{
    /**
     * Choice constants.
     */
    const CHOICE_AUTHORIZATION_CODE = 'authorization_code';

    /**
     * @var string[]
     */
    protected $supportedChoices = [
        self::CHOICE_AUTHORIZATION_CODE => self::CHOICE_AUTHORIZATION_CODE,
    ];

    /**
     * @return BunqEnumOauthGrantType
     */
    public static function AUTHORIZATION_CODE(): BunqEnumOauthGrantType
    {
        return new static(self::CHOICE_AUTHORIZATION_CODE);
    }
}
