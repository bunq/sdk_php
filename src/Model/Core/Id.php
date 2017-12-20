<?php
namespace bunq\Model\Core;

/**
 */
class Id extends BunqModel
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    protected function isAllFieldNull()
    {
        if (!is_null($this->id)) {
            return false;
        }

        return true;
    }
}
