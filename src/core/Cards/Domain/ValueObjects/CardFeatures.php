<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 21:12:38
 */

namespace Core\Cards\Domain\ValueObjects;

readonly class CardFeatures
{
    /**
     * @param array<string> $value
     */
    public function __construct(private array $value = [])
    {
    }

    /**
     * @return array<string>
     */
    public function value(): array
    {
        return $this->value;
    }
}
