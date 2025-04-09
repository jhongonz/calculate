<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 21:56:59
 */

namespace Core\Cards\Application\UseCases\Retrieve;

use Core\Cards\Application\UseCases\RequestServiceInterface;
use Core\Cards\Domain\ValueObjects\CardId;

readonly class FindCreditCardRequest implements RequestServiceInterface
{
    public function __construct(
        private CardId $id,
    ) {
    }

    public function id(): CardId
    {
        return $this->id;
    }
}
