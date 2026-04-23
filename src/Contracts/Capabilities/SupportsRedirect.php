<?php

declare(strict_types=1);

namespace Paykit\Contracts\Capabilities;

use Paykit\Dto\PaymentDto;

interface SupportsRedirect
{
    public function redirect(?array $payload, bool $shouldVerify = true): PaymentDto;
}
