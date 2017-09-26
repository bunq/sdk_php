<?php
namespace bunq\Http\Handler;

use bunq\Model\Core\Token;
use Psr\Http\Message\RequestInterface;

/**
 */
class RequestHandlerAuthentication extends RequestHandlerBase
{
    /**
     * Header constants.
     */
    const HEADER_CLIENT_AUTHENTICATION = 'X-Bunq-Client-Authentication';

    /**
     * @var Token
     */
    protected $sessionToken;

    /**
     * @param Token|null $sessionToken
     */
    public function __construct(Token $sessionToken = null)
    {
        $this->sessionToken = $sessionToken;
    }

    /**
     * @param RequestInterface $request
     *
     * @return RequestInterface
     */
    public function execute(RequestInterface $request): RequestInterface
    {
        if (is_null($this->sessionToken)) {
            return $request;
        } else {
            return $request->withHeader(
                self::HEADER_CLIENT_AUTHENTICATION,
                [$this->sessionToken->getToken()]
            );
        }
    }
}
