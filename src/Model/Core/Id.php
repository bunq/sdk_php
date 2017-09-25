<?php
namespace bunq\Model\Core;

/**
 */
class Id extends BunqModel
{
    /** @var int */
    protected $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
