<?php

declare(strict_types=1);


namespace DDD\Shared\Domain\ValueObject;


abstract class Email
{
    protected string $value;
    public function __construct(string $value)
    {
        $sanitizedValue =  mb_strtolower(trim($value), 'UTF-8');
        $this->ensureIsValidEmail($sanitizedValue);
        $this->value = $sanitizedValue;
    }
    public function value(): string
    {
        return $this->value;
    }
    private function ensureIsValidEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(sprintf('Email does not allow the value <%s>.', $email));
        }
    }
}