<?php
namespace bunq\Http;

use Psr\Http\Message\StreamInterface;

/**
 */
class BunqResponseRaw
{
    /**
     * @var string|StreamInterface
     */
    protected $bodyString;

    /**
     * @var string[]
     */
    protected $headers;

    /**
     * @param string|StreamInterface $bodyString
     * @param string[] $headers
     */
    public function __construct($bodyString, array $headers)
    {
        $this->bodyString = $bodyString;
        $this->headers = $headers;
    }

    /**
     * @return string|StreamInterface
     */
    public function getBodyString()
    {
        return $this->bodyString;
    }

    /**
     * @return string[]
     */
    public function getHeaders()
    {
        return $this->headers;
    }
}
