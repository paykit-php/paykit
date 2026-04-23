<?php

declare(strict_types=1);

namespace Paykit\Contracts;

use Paykit\Dto\CreatePaymentDto;
use Paykit\Dto\MethodsDto;
use Paykit\Dto\PaymentDto;

interface PaymentGatewayInterface
{
    public function getMethods(int $amount = 0): MethodsDto;

    public function createPayment(CreatePaymentDto $payment): PaymentDto;

    public function inquiry(string $orderId): PaymentDto;
}
