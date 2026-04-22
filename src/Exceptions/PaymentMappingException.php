<?php

declare(strict_types=1);

namespace Paykit\Exceptions;

class PaymentMappingException extends PaykitException
{
    public function __construct(string $message, public readonly mixed $payload = null)
    {
        parent::__construct($message);
    }
}
