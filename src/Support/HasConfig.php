<?php

declare(strict_types=1);

namespace Paykit\Support;

trait HasConfig
{
    protected function config(string $key, mixed $default = null): mixed
    {
        return $this->config[$key] ?? $default;
    }
}
