<?php
namespace bunq\Model\Core;

/**
 */
class Uuid extends BunqModel
{
    /**
     * @var string
     */
    protected $uuid;

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @return bool
     */
    protected function isAllFieldNull()
    {
        if (!is_null($this->uuid)) {
            return false;
        }

        return true;
    }
}
