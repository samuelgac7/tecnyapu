<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function show()
    {
        $project = Project::first(); // Ajusta la lógica según tus necesidades
        return response()->json($project);
    }
}