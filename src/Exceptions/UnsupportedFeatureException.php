<?php

declare(strict_types=1);

namespace Paykit\Exceptions;

namespace Paykit\Exceptions;

class UnsupportedFeatureException extends PaykitException
{
    public function __construct(string $feature)
    {
        parent::__construct("Feature [{$feature}] is not supported by this gateway.");
    }
}
