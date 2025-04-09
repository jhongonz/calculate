<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 21:58:32
 */

namespace Core\Cards\Application\UseCases\Retrieve;

use Core\Cards\Application\UseCases\RequestServiceInterface;
use Core\Cards\Application\UseCases\UseCaseService;
use Core\Cards\Domain\Contracts\CreditCardRepositoryInterface;
use Core\Cards\Domain\CreditCard;

class FindCreditCard extends UseCaseService
{
    public function __construct(CreditCardRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    /**
     * @throws \Exception
     */
    public function execute(RequestServiceInterface $requestService): ?CreditCard
    {
        $this->validateRequest($requestService, FindCreditCardRequest::class);

        /** @var FindCreditCardRequest $requestService */
        return $this->repository->findById($requestService->id());
    }
}
