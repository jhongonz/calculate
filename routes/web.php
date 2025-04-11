<?php

use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/cards');
});

Route::controller(CardController::class)->prefix('cards')->group(function () {
    Route::get('', 'index')->name('cards.index');

    Route::get('clickout/{id}', 'clickOut')
        ->whereNumber('id')
        ->name('cards.clickout');
});
