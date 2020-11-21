<?php

namespace acme\common;

interface ClientInterface{

    public function __construct(array $config);

    public function present(string $fqdn,string $txt);

    public function cleanUp(string $fqdn, string $txt);
}