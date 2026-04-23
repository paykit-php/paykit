<?php

declare(strict_types=1);

namespace Paykit\Contracts\Capabilities;

use Paykit\Dto\BalanceDto;

interface SupportsBalance
{
    public function getBalance(): BalanceDto;
}
