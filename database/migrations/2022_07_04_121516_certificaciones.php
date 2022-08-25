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
        Schema::create('certificaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipoIdentificacionCertificaciones', ['CC', 'RC','TI','TE']);
            $table->biginteger('documentoIdentidadAlumno_id')->unsigned();
            $table->string('nombresCertificaciones', 45);
            $table->string('primerApellidoCertificaciones', 30);
            $table->string('segundoApellidoCertificaciones', 30);
            $table->string('correoElectronicoCertificaciones')->nullable();
            $table->enum('tipodeCertificaciones', ['Certificado de estudios', 'Certificado de Notas','Boletines','Paz y salvo']);
            $table->bigInteger('anoCertificacionCertificaciones');
            $table->bigInteger('certificacionesGrado_id')->unsigned();
            $table->string('comentariosCertificaciones')->nullable();
           


            $table->timestamps();
  
            $table->foreign('documentoIdentidadAlumno_id')->references('id')->on('alumnos')->onDelete('cascade');
            $table->foreign('certificacionesGrado_id')->references('id')->on('grados')->onDelete('cascade');
  
  
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
