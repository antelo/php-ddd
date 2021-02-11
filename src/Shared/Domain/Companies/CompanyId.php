<?php

declare(strict_types=1);


namespace DDD\Shared\Domain\Companies;


use DDD\Shared\Domain\ValueObject\IntValueObject;

final class CompanyId extends IntValueObject
{
    public function __toString(): string
    {
        return strval($this->value());
    }
}