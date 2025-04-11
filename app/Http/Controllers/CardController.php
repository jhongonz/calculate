<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 20:29:56
 */

namespace App\Http\Controllers;

use Core\Cards\Domain\Contracts\CreditCardManagerInterface;
use Core\Cards\Domain\CreditCard;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\Factory as ViewFactory;

class CardController extends Controller
{
    public function __construct(
        private readonly ViewFactory $viewFactory,
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
        /** @var CreditCard $card */
        $card = $this->cardManager->findCreditCard($id);

        return redirect()->away($card->clickOutUrl()->value());
    }
}
