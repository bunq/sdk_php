<?php
namespace bunq\Http;

/**
 */
class BunqResponse
{
    /**
     * @var mixed
     */
    protected $value;

    /**
     * @var string[]
     */
    protected $headers;

    /**
     * @param mixed $value
     * @param string[] $headers
     */
    public function __construct($value, array $headers)
    {
        $this->value = $value;
        $this->headers = $headers;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string[]
     */
    public function getHeaders()
    {
        return $this->headers;
    }
}
