<?php
namespace bunq\Model;

/**
 */
class Uuid extends BunqModel
{
    /** @var string */
    protected $uuid;

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }
}
