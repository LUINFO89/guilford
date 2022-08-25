<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('profesores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('identificacion_profesores')->unique();
            $table->string('nombre_profesores');
            $table->string('nombre_telefono');
            $table->string('nombre_correo');

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
        //
    }
};
