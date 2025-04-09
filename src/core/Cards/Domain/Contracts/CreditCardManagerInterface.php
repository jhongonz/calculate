<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 21:19:29
 */

namespace Core\Cards\Domain\Contracts;

use Core\Cards\Domain\CreditCard;

interface CreditCardManagerInterface
{
    /**
     * @return array<CreditCard>
     */
    public function getCreditCard(): array;

    public function findCreditCard(int $id): ?CreditCard;
}
