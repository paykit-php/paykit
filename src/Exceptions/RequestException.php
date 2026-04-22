<?php

declare(strict_types=1);

namespace Paykit\Exceptions;

class RequestException extends PaykitException
{
    public function __construct(
        string $message,
        public readonly ?int $statusCode = null,
        public readonly mixed $response = null
    ) {
        parent::__construct($message);
    }

    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }
}
