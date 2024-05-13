<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\APUController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::post('/proyectos', [ProyectoController::class, 'store'])->name('proyectos.store');
    Route::put('/proyectos/{proyecto}', [ProyectoController::class, 'update'])->name('proyectos.update');
    Route::delete('/proyectos/{proyecto}', [ProyectoController::class, 'destroy'])->name('proyectos.destroy');

    Route::post('/apus', [APUController::class, 'store'])->name('apus.store');
    Route::put('/apus/{apu}', [APUController::class, 'update'])->name('apus.update');
    Route::delete('/apus/{apu}', [APUController::class, 'destroy'])->name('apus.destroy');
});

Auth::routes();