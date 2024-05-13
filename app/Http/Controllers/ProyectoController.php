<?php

// app/Http/Controllers/ProyectoController.php
namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::with('apus')->get();
        return response()->json($proyectos);
    }

    public function store(Request $request)
    {
        $proyecto = Proyecto::create($request->all());
        return response()->json($proyecto, 201);
    }

    public function show(Proyecto $proyecto)
    {
        $proyecto->load('apus');
        return response()->json($proyecto);
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        $proyecto->update($request->all());
        return response()->json($proyecto);
    }

    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return response()->json(null, 204);
    }
}