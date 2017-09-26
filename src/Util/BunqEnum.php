<?php
namespace bunq\Util;

use bunq\Exception\BunqException;

/**
 */
abstract class BunqEnum
{
    /**
     * Error constants.
     */
    const UNEXPECTED_VALUE = 'Unexpected enum value "%s".';

    /**
     * @var string
     */
    protected $choice;

    /**
     * @var string[]
     */
    protected $supportedChoices = [];

    /**
     * @param string $choice
     *
     * @throws BunqException when the value is not one of expected.
     */
    public function __construct(string $choice)
    {
        if (isset($this->supportedChoices[$choice])) {
            $this->choice = $choice;
        } else {
            throw new BunqException(self::UNEXPECTED_VALUE, [$choice]);
        }
    }

    /**
     * @param mixed $other
     *
     * @return bool
     */
    public function equals($other = null): bool
    {
        if (is_null($other)) {
            return false;
        } else {
            return
                $other instanceof static &&
                $other->getChoiceString() === $this->getChoiceString();
        }
    }

    /**
     * @return string
     */
    public function getChoiceString(): string
    {
        return $this->choice;
    }
}
