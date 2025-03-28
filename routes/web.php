<?php

declare(strict_types=1);

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', fn() => Inertia::render('welcome'))->name('home');

Route::middleware(['auth', 'verified'])->group(function (): void {
    Route::get('dashboard', fn() => Inertia::render('dashboard'))->name('dashboard');

    Route::resource('clients', ClientController::class);
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
