<?php

declare(strict_types=1);

namespace Paykit\Exceptions;

class UnsupportedDriverException extends PaykitException
{
    public function __construct(string $driver)
    {
        parent::__construct("Payment driver [{$driver}] is not registered.");
    }
}
