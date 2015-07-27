<?php

namespace MetaSyntactical\Http\Transport;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface TransportInterface
{
    /**
     * Send request and return response
     *
     * @param  RequestInterface  $request
     * @return ResponseInterface
     */
    public function send(RequestInterface $request);

    /**
     * Create new request
     *
     * @return RequestInterface
     */
    public function newRequest();

    /**
     * Build query string as required for PSR 7 URI ->withQuery
     *
     * @return string
     */
    public function buildQuery();
}
