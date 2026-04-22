<?php

declare(strict_types=1);

namespace Paykit\Exceptions;

class InvalidConfigurationException extends PaykitException
{
    public static function missing(string $key): self
    {
        return new self("Missing required configuration key [{$key}].");
    }

    public static function invalid(string $key, string $message = ''): self
    {
        $msg = "Invalid configuration for [{$key}]";
        if ($message) {
            $msg .= ": {$message}";
        }

        return new self($msg);
    }
}
