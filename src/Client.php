<?php

namespace acme\common;

abstract class Client implements ClientInterface
{
    protected $config = [];

    public function __construct(array $config)
    {
        $this->config = $config;
    }
}
