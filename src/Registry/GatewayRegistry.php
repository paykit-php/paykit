<?php

declare(strict_types=1);

namespace Paykit\Registry;

use Paykit\Contracts\PaymentGatewayInterface;
use Paykit\Exceptions\UnsupportedDriverException;

class GatewayRegistry
{
    private array $drivers = [];

    public function register(string $name, callable $resolver): void
    {
        $this->drivers[$name] = $resolver;
    }

    public function resolve(string $name): PaymentGatewayInterface
    {
        if (!isset($this->drivers[$name])) {
            throw new UnsupportedDriverException($name);
        }

        return ($this->drivers[$name])();
    }
}
