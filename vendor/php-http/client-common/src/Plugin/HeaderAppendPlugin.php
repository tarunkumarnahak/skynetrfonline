<?php

namespace Http\Client\Common\Plugin;

use Http\Client\Common\Plugin;
use Psr\Http\Message\RequestInterface;


final class HeaderAppendPlugin implements Plugin
{
    /**
     * @var array
     */
    private $headers = [];

    /**
     * @param array $headers Hashmap of header name to header value
     */
    public function __construct(array $headers)
    {
        $this->headers = $headers;
    }

    /**
     * {@inheritdoc}
     */
    public function handleRequest(RequestInterface $request, callable $next, callable $first)
    {
        foreach ($this->headers as $header => $headerValue) {
            $request = $request->withAddedHeader($header, $headerValue);
        }

        return $next($request);
    }
}
