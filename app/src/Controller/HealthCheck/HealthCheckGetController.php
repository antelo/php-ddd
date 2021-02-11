<?php

declare(strict_types = 1);

namespace DDD\App\Controller\HealthCheck;


use DDD\Shared\Domain\RandomNumberGenerator;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class HealthCheckGetController
{
    private RandomNumberGenerator $generator;

    public function __construct(RandomNumberGenerator $generator) {
        $this->generator = $generator;
    }
    public function __invoke(): Response
    {
        return new JsonResponse(
            [
                'platform' => 'ok',
                'rand'   => $this->generator->generate(),
            ]
        );
    }
}