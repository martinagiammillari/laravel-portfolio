<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Rotta pubblica (Home)
Route::get('/', function () {
    return view('welcome');
});

// AREA AMMINISTRATIVA PROTETTA
Route::middleware(['auth', 'verified'])
    ->name("admin.")    // I nomi delle rotte inizieranno con admin. (es: admin.dashboard)
    ->prefix("admin")   // Gli URL inizieranno con /admin (es: /admin/profile)
    ->group(function () {
        
        // Questa è la tua nuova Dashboard principale: URL è /admin
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        
        // Gestione Profilo dentro l'admin
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

require __DIR__.'/auth.php';