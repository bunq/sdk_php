<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class ChatMessageContentText extends BunqModel
{
    /**
     * The text of the message.
     *
     * @var string
     */
    protected $text;

    /**
     * The text of the message.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @deprecated User should not be able to set values via setters, use
     * constructor.
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->text)) {
            return false;
        }

        return true;
    }
}
