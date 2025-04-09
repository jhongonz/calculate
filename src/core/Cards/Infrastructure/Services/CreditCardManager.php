<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 21:49:11
 */

namespace Core\Cards\Infrastructure\Services;

use Core\Cards\Application\UseCases\Retrieve\FindCreditCard;
use Core\Cards\Application\UseCases\Retrieve\FindCreditCardRequest;
use Core\Cards\Application\UseCases\Retrieve\GetCreditCard;
use Core\Cards\Application\UseCases\Retrieve\GetCreditCardRequest;
use Core\Cards\Domain\Contracts\CreditCardFactoryInterface;
use Core\Cards\Domain\Contracts\CreditCardManagerInterface;
use Core\Cards\Domain\CreditCard;

readonly class CreditCardManager implements CreditCardManagerInterface
{
    public function __construct(
        private CreditCardFactoryInterface $factory,
        private GetCreditCard $getCreditCard,
        private FindCreditCard $findCreditCard,
    ) {
    }

    /**
     * @return array<CreditCard>
     *
     * @throws \Exception
     */
    public function getCreditCard(): array
    {
        $request = new GetCreditCardRequest();

        return $this->getCreditCard->execute($request);
    }

    /**
     * @throws \Exception
     */
    public function findCreditCard(int $id): ?CreditCard
    {
        $request = new FindCreditCardRequest(
            $this->factory->buildId($id)
        );

        return $this->findCreditCard->execute($request);
    }
}
