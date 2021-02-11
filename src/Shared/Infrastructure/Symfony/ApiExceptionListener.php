<?php

declare(strict_types=1);


namespace DDD\Shared\Infrastructure\Symfony;




use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;

class ApiExceptionListener
{
//    private $exceptionHandler;

//    public function __construct(ApiExceptionsHttpStatusCodeMapping $exceptionHandler)
//    {
//        $this->exceptionHandler = $exceptionHandler;
//    }

    public function onException(ExceptionEvent $event): void
    {
        $exception = $event->getThrowable();

        $event->setResponse(
            new JsonResponse(
                [
//                    'code'    => $this->exceptionCodeFor($exception),
                    'code'    => $exception->getCode(),
                    'message' => $exception->getMessage(),
                ],
//                $this->exceptionHandler->statusCodeFor(get_class($exception))
            )
        );
    }

//    private function exceptionCodeFor(Exception $error)
//    {
//        $domainErrorClass = DomainError::class;
//
//        return $error instanceof $domainErrorClass ? $error->errorCode() : Utils::toSnakeCase(class_basename($error));
//    }
}