<?php

declare(strict_types=1);

namespace Paykit\Exceptions;

class SignatureVerificationException extends PaykitException
{
    public function __construct()
    {
        parent::__construct("Invalid signature detected.");
    }
}
