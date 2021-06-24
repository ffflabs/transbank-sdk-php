<?php

namespace Transbank\Contracts;

interface HttpClientInterface
{
    public function request(string $method, string  $url, $payload = [], $options = null);
}
