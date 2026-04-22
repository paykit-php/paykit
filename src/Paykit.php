<?php

declare(strict_types=1);

namespace Paykit;

use Paykit\Contracts\PaymentGatewayInterface;
use Paykit\Registry\GatewayRegistry;

class Paykit
{
    public function __construct(
        private GatewayRegistry $registry = new GatewayRegistry()
    ) {}

    public function register(string $name, callable $resolver): void
    {
        $this->registry->register($name, $resolver);
    }

    public function driver(string $name): PaymentGatewayInterface
    {
        return $this->registry->resolve($name);
    }
}
