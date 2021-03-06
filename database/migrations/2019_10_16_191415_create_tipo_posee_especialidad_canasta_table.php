<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoPoseeEspecialidadCanastaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_posee_especialidad_canasta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->unsignedBigInteger('tipo_id');
            $table->unsignedBigInteger('especialidad_id');

            $table->foreign('tipo_id')->references('id')->on('tipo_prestacion');
            $table->foreign('especialidad_id')->references('id')->on('especialidad');
            $table->boolean('activa')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_posee_especialidad_canasta');
    }
}
