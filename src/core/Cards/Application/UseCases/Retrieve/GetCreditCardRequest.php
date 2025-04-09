<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 21:52:22
 */

namespace Core\Cards\Application\UseCases\Retrieve;

use Core\Cards\Application\UseCases\RequestServiceInterface;

readonly class GetCreditCardRequest implements RequestServiceInterface
{
    /**
     * @param array<string> $search
     */
    public function __construct(
        private array $search = [],
    ) {
    }

    public function search(): array
    {
        return $this->search;
    }
}
