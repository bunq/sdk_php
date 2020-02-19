<?php
namespace bunq\Http\Handler;

use bunq\Security\PrivateKey;
use Psr\Http\Message\RequestInterface;

/**
 */
class RequestHandlerSignature extends RequestHandlerBase
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_INSTALLATION = '/v1/installation';

    /**
     * Header constants.
     */
    const HEADER_CLIENT_SIGNATURE = 'X-Bunq-Client-Signature';

    /**
     * @var PrivateKey
     */
    protected $privateKey;

    /**
     * @param PrivateKey $privateKey
     */
    public function __construct(PrivateKey $privateKey)
    {
        $this->privateKey = $privateKey;
    }

    /**
     * @param RequestInterface $request
     *
     * @return RequestInterface
     */
    public function execute(RequestInterface $request): RequestInterface
    {
        if ($request->getUri()->getPath() === self::ENDPOINT_INSTALLATION) {
            return $request;
        } else {
            $signature = $this->generateRequestSignature($request->getBody()->getContents());

            return $request->withHeader(self::HEADER_CLIENT_SIGNATURE, $signature);
        }
    }

    /**
     * @param string $body
     *
     * @return string
     */
    protected function generateRequestSignature(string $body): string
    {
        return $this->privateKey->sign($body);
    }
}
