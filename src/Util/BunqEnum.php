<?php
namespace bunq\Util;

use bunq\Exception\BunqException;

/**
 */
abstract class BunqEnum
{
    /**
     * Error constant.
     */
    const UNEXPECTED_VALUE = 'Unexpected enum value "%s".';

    /** @var string */
    protected $choice;

    /** @var string[] */
    protected $supportedChoices = [];

    /**
     * @param string $choice
     * @throws BunqException
     */
    public function __construct($choice)
    {
        $choice = strtoupper($choice);
        if (isset($this->supportedChoices[$choice])) {
            $this->choice = $choice;
        } else {
            throw new BunqException(self::UNEXPECTED_VALUE, [$choice]);
        }
    }

    /**
     * @return string
     */
    public function getChoiceString()
    {
        return $this->choice;
    }

    /**
     * @param mixed $other
     * @return bool
     */
    public function equals($other = null)
    {
        if (is_null($other)) {
            return false;
        } else {
            return $other instanceof static
                && $other->getChoiceString() === $this->getChoiceString();
        }
    }
}
