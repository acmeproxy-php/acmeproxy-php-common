<?php

namespace acme\common;

use RuntimeException;

class ACME
{
    /**
     * @param string $provider
     * @param array $config
     * @return ClientInterface
     */
    public static function create(string $provider, array $config = []): ClientInterface
    {
        $className = "\\acme\\".strtolower($provider)."\\".ucfirst($provider);

        if (!class_exists($className)) {
            throw new RuntimeException("Class '$className' not found");
        }

        return new $className($config);
    }
}