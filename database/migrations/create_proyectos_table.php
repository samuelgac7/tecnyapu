<?php

// database/migrations/create_proyectos_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('propietario');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('comuna');
            $table->decimal('leyes_sociales_porc', 5, 2);
            $table->decimal('impuestos_porc', 5, 2);
            $table->date('fecha_entrega');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}