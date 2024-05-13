<?php

// app/Exports/ProyectosExport.php
namespace App\Exports;

use App\Models\Proyecto;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProyectosExport implements FromCollection
{
    public function collection()
    {
        return Proyecto::all();
    }
}