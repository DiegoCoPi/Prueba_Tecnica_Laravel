<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id'); // Cambia esto si prefieres usar id() para bigserial
            $table->string('nombre_del_alumno');
            $table->date('fecha_de_nacimiento');
            $table->string('nombre_del_padre');
            $table->string('nombre_de_la_madre');
            $table->integer('grado');
            $table->string('seccion');
            $table->date('fecha_de_ingreso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
