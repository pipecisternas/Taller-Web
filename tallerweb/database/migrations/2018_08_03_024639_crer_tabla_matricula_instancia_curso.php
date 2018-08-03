<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrerTablaMatriculaInstanciaCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculainstanciacursos', function (Blueprint $table) {
            $table->string('agno',5);
            $table->string('semestre',10);
            $table->string('rut',20);
            $table->boolean('estado');
            $table->string('sigla',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matriculainstanciacursos');
    }
}
