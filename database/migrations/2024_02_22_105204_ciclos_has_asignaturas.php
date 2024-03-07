<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CiclosHasAsignaturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciclos_has_asignaturas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ciclos_id')->unsigned();
            $table->bigInteger('asignaturas_id')->unsigned();
            $table->timestamps();

            $table->foreign('ciclos_id')->references('id')->on('ciclos');
            $table->foreign('asignaturas_id')->references('id')->on('asignaturas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
