<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Grupos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->bigInteger('aulas_id')->unsigned();
            $table->bigInteger('cursos_id')->unsigned();
            $table->bigInteger('ciclos_id')->unsigned();
            $table->timestamps();

            $table->foreign('aulas_id')->references('id')->on('aulas');
            $table->foreign('cursos_id')->references('id')->on('curso');
            $table->foreign('ciclos_id')->references('id')->on('ciclos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}
