<?php

declare(strict_types=1);

namespace DDD\Shared\Domain;

interface RandomNumberGenerator
{
    public function generate(): int;
}
