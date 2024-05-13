<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = [
        'nombre',
        'propietario',
        'direccion',
        'ciudad',
        'comuna',
        'leyes_sociales_porc',
        'impuestos_porc',
        'fecha_entrega',
    ];

    public function apus()
    {
        return $this->hasMany(APU::class);
    }
}