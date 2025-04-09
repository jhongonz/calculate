<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 20:29:56
 */

namespace App\Http\Controllers;

use Core\Cards\Domain\Contracts\CreditCardManagerInterface;
use Illuminate\Http\RedirectResponse;
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

        return $this->viewFactory->make('cards.comparator')
            ->with('cards', $cards)
            ->render();
    }

    public function clickOut(int $id): RedirectResponse
    {
        $card = $this->cardManager->findCreditCard($id);

        return redirect()->away($card->clickOutUrl()->value());
    }
}
