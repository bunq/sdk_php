<?php
namespace bunq\Model\Core;

/**
 */
class Token extends BunqModel
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $created;

    /**
     * @var string
     */
    protected $updated;

    /**
     * @var string
     */
    protected $token;

    /**
     * @param string $token
     */
    public function __construct(string $token = null)
    {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }
}
