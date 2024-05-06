<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApusTable extends Migration
{
    public function up()
    {
        Schema::create('apus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proyecto_id');
            $table->string('descripcion');
            $table->string('unidad');
            $table->decimal('precio_unitario', 10, 2);
            // Agrega otras columnas según tus necesidades
            $table->timestamps();

            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('apus');
    }
}
