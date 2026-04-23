<?php

declare(strict_types=1);

namespace Paykit\Contracts\Capabilities;

use Paykit\Dto\PaymentDto;

interface SupportsCancel
{
    public function cancelPayment(string $orderId): PaymentDto;
}
