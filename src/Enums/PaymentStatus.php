<?php

declare(strict_types=1);

namespace Paykit\Enums;

enum PaymentStatus: string
{
    case Success = 'success';

    case Pending = 'pending';

    case Failed = 'failed';

    case Expired = 'expired';

    case Cancelled = 'cancelled';
}
