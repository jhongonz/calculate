<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 21:25:23
 */

namespace Core\Cards\Application;

use Core\Cards\Domain\Contracts\CreditCardFactoryInterface;
use Core\Cards\Domain\ValueObjects\CardId;
use Core\Cards\Domain\ValueObjects\CardIssuer;
use Core\Cards\Domain\ValueObjects\CardName;

class CreditCardFactory implements CreditCardFactoryInterface
{
    public function buildId(int $id): CardId
    {
        return new CardId($id);
    }

    public function buildName(string $name): CardName
    {
        return new CardName($name);
    }

    public function buildIssuer(string $issuer): CardIssuer
    {
        return new CardIssuer($issuer);
    }
}
