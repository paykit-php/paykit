<?php

declare(strict_types=1);

namespace Paykit\Drivers\Dummy;

use Paykit\Contracts\PaymentGatewayInterface;
use Paykit\Dto\AmountDto;
use Paykit\Dto\FeeDto;
use Paykit\Dto\MethodDto;
use Paykit\Dto\MethodsDto;

class DummyGateway implements PaymentGatewayInterface
{
    public function getMethods(int $amount = 0): MethodsDto
    {
        return new MethodsDto(['items' => [
            new MethodDto([
                'code' => 'VA',
                'name' => 'Virtual Account',
                'imageUrl' => 'https://placehold.co/50',
                'fee' => new FeeDto([
                    'flat' => 1000,
                    'percent' => null,
                ]),
                'amount' => new AmountDto([
                    'minimum' => 10_000,
                    'maximum' => 100_000_000,
                ]),
            ]),
        ]]);
    }
}
