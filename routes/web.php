<?php

use App\Http\Controllers\CardControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/cards');
});

Route::controller(CardControllers::class)->prefix('cards')->group(function () {
    Route::get('', 'index')->name('cards.index');
});
