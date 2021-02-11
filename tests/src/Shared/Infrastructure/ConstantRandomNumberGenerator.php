<?php

declare(strict_types=1);


namespace DDD\Tests\Shared\Infrastructure;


use DDD\Shared\Domain\RandomNumberGenerator;

class ConstantRandomNumberGenerator implements RandomNumberGenerator
{

    public function generate(): int
    {
        return 1;
    }
}