<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 21:42:25
 */

namespace Core\Cards\Application\UseCases\Retrieve;

use Core\Cards\Application\UseCases\RequestServiceInterface;
use Core\Cards\Application\UseCases\UseCaseService;
use Core\Cards\Domain\Contracts\CreditCardRepositoryInterface;
use Core\Cards\Domain\CreditCard;

class GetCreditCard extends UseCaseService
{
    public function __construct(CreditCardRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    /**
     * @return array<CreditCard>
     *
     * @throws \Exception
     */
    public function execute(RequestServiceInterface $requestService): array
    {
        $this->validateRequest($requestService, GetCreditCardRequest::class);

        /** @var GetCreditCardRequest $requestService */
        return $this->repository->getAll($requestService->search());
    }
}
