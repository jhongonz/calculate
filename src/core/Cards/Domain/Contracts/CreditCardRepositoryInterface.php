<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 21:16:36
 */

namespace Core\Cards\Domain\Contracts;

use Core\Cards\Domain\CreditCard;
use Core\Cards\Domain\ValueObjects\CardId;

interface CreditCardRepositoryInterface
{
    /**
     * @param array<string> $search
     *
     * @return array<CreditCard>
     */
    public function getAll(array $search = []): array;

    public function findById(CardId $id): ?CreditCard;
}
