<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 20:29:56
 */

namespace App\Http\Controllers;

use Core\Cards\Domain\Contracts\CreditCardManagerInterface;
use Illuminate\View\Factory;

class CardControllers extends Controller
{
    public function __construct(
        private readonly Factory $viewFactory,
        private readonly CreditCardManagerInterface $cardManager,
    ) {
    }

    public function index(): string
    {
        $cards = $this->cardManager->getCreditCard();
        dd($cards);

        return $this->viewFactory->make('cards')
            ->render();
    }
}
