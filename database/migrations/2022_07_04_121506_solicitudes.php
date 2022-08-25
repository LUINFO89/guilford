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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('tipoIdentificacionSolicitud', ['CC', 'RC','TI','TE']);
            $table->integer('documentoIdentidadSolicitud');
            $table->string('nombresSolicitud');
            $table->string('primerApellidoSolicitud');
            $table->string('segundoApellidoSolicitud')->nullable();
            $table->string('correoElectronicoSolicitud')->nullable();
            $table->enum('tipodeCertificacionSolicitus', ['Certificado de estudios', 'Certificado de Notas','Boletines','Paz y salvo']);
            $table->date('anodeingreso');
            $table->bigInteger('gradoSolicitud')->unsigned()->nullable();
            $table->foreign('gradoSolicitud')->references('id')->on('grados')->onDelete('cascade');

  
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
