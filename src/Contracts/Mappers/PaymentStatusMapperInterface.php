<?php

declare(strict_types=1);

namespace Paykit\Contracts\Mappers;

use Paykit\Enums\PaymentStatus;

interface PaymentStatusMapperInterface
{
    public static function map(string $status): PaymentStatus;
}
