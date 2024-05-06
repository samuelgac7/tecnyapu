<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';

    protected $fillable = [
        'nombre',
        'mandante',
        'direccion',
        'comuna',
        'leyes_sociales_porc',
        'fecha_entrega',
        // Agrega otros campos según tus necesidades
    ];

    public function apus()
    {
        return $this->hasMany(APU::class);
    }
}