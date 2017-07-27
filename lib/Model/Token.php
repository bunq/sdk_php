<?php
namespace bunq\Model;

/**
 */
class Token extends BunqModel
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $created;

    /** @var string */
    protected $updated;

    /** @var string */
    protected $token;

    /**
     * Token constructor.
     *
     * @param string $token
     */
    public function __construct($token = null)
    {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
}
