<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 20:41:41
 */

namespace Core\Cards\Domain\ValueObjects;

readonly class CardId
{
    public function __construct(private int $value)
    {
    }

    public function value(): int
    {
        return $this->value;
    }
}
