<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 20:47:31
 */

namespace Core\Cards\Domain\ValueObjects;

readonly class CardAnnualFee
{
    public function __construct(private float $value = 0.0)
    {
    }

    public function value(): float
    {
        return $this->value;
    }
}
