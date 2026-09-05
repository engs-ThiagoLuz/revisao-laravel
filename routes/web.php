<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return 'Área do adm.';
    });
});

Route::middleware(['auth', 'role:admin,professor'])->group(function () {
    Route::get('/professor', function () {
        return 'Área do professor.';
    });
});

require __DIR__.'/auth.php';
