<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 21:27:32
 */

namespace Core\Cards\Infrastructure\Persistence\Repositories;

use Core\Cards\Domain\Contracts\CreditCardFactoryInterface;
use Core\Cards\Domain\Contracts\CreditCardRepositoryInterface;
use Core\Cards\Domain\CreditCard;
use Core\Cards\Domain\ValueObjects\CardId;
use Illuminate\Database\DatabaseManager;

class EloquentCreditCardRepository implements CreditCardRepositoryInterface
{
    public function __construct(
        private readonly DatabaseManager $databaseManager,
        private readonly CreditCardFactoryInterface $cardFactory,
    ) {
    }

    /**
     * @param array<string> $search
     *
     * @return array<CreditCard>
     */
    public function getAll(array $search = []): array
    {
        $builder = $this->databaseManager->table('credit_card');
        $result = $builder->get()->toArray();

        $collection = [];
        foreach ($result as $item) {
            $card = $this->cardFactory->buildCreditCardFromObject($item);
            $collection[] = $card;
        }

        return $collection;
    }

    public function findById(CardId $id): ?CreditCard
    {
        $builder = $this->databaseManager->table('credit_card');
        $result = $builder->first($id->value())->toArray();

        return $this->cardFactory->buildCreditCardFromObject($result);
    }
}
