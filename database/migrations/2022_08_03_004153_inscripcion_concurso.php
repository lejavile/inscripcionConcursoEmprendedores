<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InscripcionConcurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion_concurso', function (Blueprint $table) {
            // $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('cod_inscripcion', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('last_name', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('cedula', 255)->nullable();
            $table->string('tlf', 255)->nullable();
            $table->unsignedInteger('entrepreneurship_economicactivity_id')->nullable();
            $table->string('nombre_empre', 255)->nullable();
            $table->text('sobre_equipo')->nullable();
            $table->text('define_empre')->nullable();
            $table->text('necesidades_cubre')->nullable();
            $table->text('deferencia_empre')->nullable();
            $table->text('propuesta_valor')->nullable();
            $table->text('modelo_negocio')->nullable();
            $table->unsignedInteger('cant_empleados')->nullable();
            $table->unsignedInteger('cant_clientes')->nullable();
            $table->string('img_prod', 255)->nullable();
            $table->text('mercado')->nullable()->after('img_prod');
            $table->boolean('bactivo')->default(1)->nullable();
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
        Schema::dropIfExists('inscripcion_concurso');
    }
}
