<?php

declare(strict_types=1);

namespace Paykit\Contracts\Capabilities;

use Paykit\Dto\PaymentDto;

interface SupportsWebhook
{
    public function callback(?array $payload): PaymentDto;
}
