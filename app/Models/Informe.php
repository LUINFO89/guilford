<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Certificacione
 *
 * @property $id
 * @property $tipoIdentificacionCertificaciones
 * @property $documentoIdentidadAlumno_id
 * @property $nombresCertificaciones
 * @property $primerApellidoCertificaciones
 * @property $segundoApellidoCertificaciones
 * @property $correoElectronicoCertificaciones
 * @property $tipodeCertificaciones
 * @property $anoCertificacionCertificaciones
 * @property $certificacionesGrado_id
 * @property $comentariosCertificaciones
 * @property $descargarReciboCertificaciones
 * @property $cargarReciboCertificaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno $alumno
 * @property Grado $grado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Informe extends Model
{
    
    static $rules = [
		'tipoIdentificacionCertificaciones' => 'required',
		'documentoIdentidadAlumno_id' => 'required',
		'nombresCertificaciones' => 'required',
		'primerApellidoCertificaciones' => 'required',
		'segundoApellidoCertificaciones' => 'required',
		'tipodeCertificaciones' => 'required',
		'anoCertificacionCertificaciones' => 'required',
		'certificacionesGrado_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipoIdentificacionCertificaciones','documentoIdentidadAlumno_id','nombresCertificaciones','primerApellidoCertificaciones','segundoApellidoCertificaciones','correoElectronicoCertificaciones','tipodeCertificaciones','anoCertificacionCertificaciones','certificacionesGrado_id','comentariosCertificaciones','descargarReciboCertificaciones','cargarReciboCertificaciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alumno()
    {
        return $this->hasOne('App\Models\Alumno', 'id', 'documentoIdentidadAlumno_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grado()
    {
        return $this->hasOne('App\Models\Grado', 'id', 'certificacionesGrado_id');
    }
    

}
