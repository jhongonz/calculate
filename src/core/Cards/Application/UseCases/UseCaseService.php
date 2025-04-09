<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 21:39:48
 */

namespace Core\Cards\Application\UseCases;

use Core\Cards\Domain\Contracts\CreditCardRepositoryInterface;

abstract class UseCaseService implements UseCaseServiceInterface
{
    public function __construct(
        protected readonly CreditCardRepositoryInterface $repository,
    ) {
    }

    /**
     * @throws \Exception
     */
    protected function validateRequest(RequestServiceInterface $request, string $requestClass): RequestServiceInterface
    {
        if (!$request instanceof $requestClass) {
            throw new \Exception('Request not valid');
        }

        return $request;
    }
}
