<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Orchid\Screens\Customer\CustomerShowScreen;

// Platform > Customers > Customer > Show
Route::screen('customers/{customer}/show', CustomerShowScreen::class)
    ->name('customers.show');