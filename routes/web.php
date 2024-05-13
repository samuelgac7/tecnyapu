<?php

// routes/web.php

use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\APUController;
use App\Http\Controllers\ReportController;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/proyectos', function () {
    $proyectos = Proyecto::all();
    return Inertia::render('Proyectos/Index', ['proyectos' => $proyectos]);
})->name('proyectos.index');

Route::get('/proyectos/create', function () {
    return Inertia::render('Proyectos/Form');
})->name('proyectos.create');

Route::get('/proyectos/{proyecto}/edit', function (Proyecto $proyecto) {
    return Inertia::render('Proyectos/Form', ['proyecto' => $proyecto]);
})->name('proyectos.edit');

Route::get('/apus', function () {
    $apus = APU::with('proyecto')->get();
    return Inertia::render('APUs/Index', ['apus' => $apus]);
})->name('apus.index');

Route::get('/apus/create', function () {
    $proyectos = Proyecto::all();
    return Inertia::render('APUs/Form', ['proyectos' => $proyectos]);
})->name('apus.create');

Route::get('/apus/{apu}/edit', function (APU $apu) {
    $proyectos = Proyecto::all();
    return Inertia::render('APUs/Form', ['apu' => $apu, 'proyectos' => $proyectos]);
})->name('apus.edit');

Route::get('/reportes/proyectos/excel', [ReportController::class, 'exportProyectosExcel'])->name('reportes.proyectos.excel');
Route::get('/reportes/proyectos/pdf', [ReportController::class, 'exportProyectosPDF'])->name('reportes.proyectos.pdf');
Route::get('/reportes/apus/excel', [ReportController::class, 'exportAPUsExcel'])->name('reportes.apus.excel');
Route::get('/reportes/apus/pdf', [ReportController::class, 'exportAPUsPDF'])->name('reportes.apus.pdf');