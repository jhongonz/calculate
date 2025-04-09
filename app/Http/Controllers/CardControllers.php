<?php

/**
 * @author Jhonny Andres Gonzalez <jhonnygonzalezf@gmail.com>
 * Date: 2025-04-09 20:29:56
 */

namespace App\Http\Controllers;

use Illuminate\View\Factory;

class CardControllers extends Controller
{
    public function __construct(
        private readonly Factory $viewFactory,
    ) {
    }

    public function index(): string
    {
        return $this->viewFactory->make('cards')
            ->render();
    }
}
