<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Lit\Http\Controllers\WelcomeController;

Route::get('/', WelcomeController::class);

Route::get('cache:clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');

    return back()->withAlert([
        'type'    => 'success',
        'message' => 'Cache cleared!',
    ]);
})->name('cache.clear');
