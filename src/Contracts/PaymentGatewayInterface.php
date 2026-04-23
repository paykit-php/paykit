<?php

declare(strict_types=1);

namespace Paykit\Contracts;

use Paykit\Dto\CreatePaymentDto;
use Paykit\Dto\MethodsDto;
use Paykit\Dto\PaymentDto;
use Paykit\Dto\PurchaseDto;

interface PaymentGatewayInterface
{
    public function getMethods(int $amount = 0): MethodsDto;

    public function purchase(PurchaseDto $payment): PaymentDto;

    public function inquiry(string $orderId): PaymentDto;
}
