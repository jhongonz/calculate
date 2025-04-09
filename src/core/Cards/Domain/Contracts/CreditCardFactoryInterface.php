<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 21:21:24
 */

namespace Core\Cards\Domain\Contracts;

use Core\Cards\Domain\ValueObjects\CardId;
use Core\Cards\Domain\ValueObjects\CardIssuer;
use Core\Cards\Domain\ValueObjects\CardName;

interface CreditCardFactoryInterface
{
    public function buildId(int $id): CardId;

    public function buildName(string $name): CardName;

    public function buildIssuer(string $issuer): CardIssuer;
}
