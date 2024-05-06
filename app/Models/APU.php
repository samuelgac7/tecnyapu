<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class APU extends Model
{
    protected $table = 'apus';

    protected $fillable = [
        'proyecto_id',
        'descripcion',
        'unidad',
        'precio_unitario',
        // Agrega otros campos según tus necesidades
    ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }
}