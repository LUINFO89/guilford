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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('tipoIdentificacionAlumno', ['CC', 'RC','TI','TE']);
            $table->integer('documentoIdentidadAlumno')->unique();
            $table->string('nombresAlumno');
            $table->string('primerApellidoAlumno');
            $table->string('segundoApellidoAlumno')->nullable();;
            $table->string('correoElectronicoAlumno')->nullable();
            $table->string('direccionAlumno')->nullable();
            $table->integer('telefonoAlumno')->nullable();
            $table->date('fechadeNacimientoAlumno')->nullable();
            $table->enum('lugarNacimientoAlumno',['Colombia','Ecuador','Bolivia',
            'Chile','Brazil','Venezuela','Peru',
            'Argentina','Uruguay','Mexico',
            'Centro America','Usa'])->nullable();
            $table->enum('tipodeSangreAlumno',
            ['A+', 'A-','AB+','AB-',
            'B+','B-','O+','O-'])->nullable();
            $table->enum('generoAlumno', ['Masculino', 'Femenino'])->nullable();
            $table->bigInteger('grados_id')->unsigned()->nullable();
            $table->bigInteger('asignatura_id')->unsigned()->nullable();

            $table->timestamps();
  
            $table->foreign('grados_id')->references('id')->on('grados')->onDelete('cascade');
           // $table->foreign('asignatura_id')->references('id')->on('asignaturas')->onDelete('cascade');

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
