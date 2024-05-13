<?php

use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\APUController;

Route::apiResource('proyectos', ProyectoController::class);
Route::apiResource('apus', APUController::class);