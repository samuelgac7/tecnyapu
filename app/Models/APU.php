<?php

// app/Models/APU.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class APU extends Model
{
    protected $fillable = [
        'proyecto_id',
        'descripcion',
        'unidad',
        'precio_unitario',
    ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }
}