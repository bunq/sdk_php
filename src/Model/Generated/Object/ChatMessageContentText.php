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
     * @param string $text
     */
    public function setText(string $text)
    {
        $this->text = $text;
    }
}
