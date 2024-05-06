<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::with('apus')->get();
        
        return Inertia::render('Dashboard', [
            'proyectos' => $proyectos,
        ]);
    }
    
    public function store(Request $request)
    {
        $proyecto = Proyecto::create($request->all());
        
        return redirect()->route('dashboard');
    }
    
    public function update(Request $request, Proyecto $proyecto)
    {
        $proyecto->update($request->all());
        
        return redirect()->route('dashboard');
    }
    
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        
        return redirect()->route('dashboard');
    }
}