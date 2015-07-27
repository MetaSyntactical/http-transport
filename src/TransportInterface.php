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
     * Build a query string from an array of key value pairs
     *
     * @param array     $params   Query string parameters.
     * @param int|false $encoding Set to false to not encode, PHP_QUERY_RFC3986
     *                            to encode using RFC3986, or PHP_QUERY_RFC1738
     *                            to encode using RFC1738.
     * @return string
     */
    public function buildQuery(array $params, $encoding = PHP_QUERY_RFC3986);
}
