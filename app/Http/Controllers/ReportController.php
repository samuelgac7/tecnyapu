<?php

// app/Http/Controllers/ReportController.php
namespace App\Http\Controllers;

use App\Exports\ProyectosExport;
use App\Exports\APUsExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class ReportController extends Controller
{
    public function exportProyectosExcel()
    {
        return Excel::download(new ProyectosExport, 'proyectos.xlsx');
    }

    public function exportAPUsExcel()
    {
        return Excel::download(new APUsExport, 'apus.xlsx');
    }

    public function exportProyectosPDF()
    {
        $proyectos = Proyecto::all();
        $pdf = PDF::loadView('reports.proyectos', ['proyectos' => $proyectos]);
        return $pdf->download('proyectos.pdf');
    }

    public function exportAPUsPDF()
    {
        $apus = APU::with('proyecto')->get();
        $pdf = PDF::loadView('reports.apus', ['apus' => $apus]);
        return $pdf->download('apus.pdf');
    }
}