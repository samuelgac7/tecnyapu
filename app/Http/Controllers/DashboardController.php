<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Proyecto;
use App\Models\APU;

class DashboardController extends Controller
{
    public function index()
    {
        // Obtener el proyecto actual
        $proyecto = Proyecto::findOrFail(1); // Ajusta el ID del proyecto según tus necesidades
        
        // Obtener los APUs seleccionados para el proyecto
        $selectedAPUs = $proyecto->apus;
        
        // Obtener los APUs disponibles para agregar al proyecto
        $availableAPUs = APU::whereNotIn('id', $selectedAPUs->pluck('id'))->get();
        
        // Pasar los datos a la vista de Inertia
        return Inertia::render('Dashboard', [
            'project' => $proyecto,
            'selectedAPUs' => $selectedAPUs,
            'availableAPUs' => $availableAPUs,
        ]);
    }
}