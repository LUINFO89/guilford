<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alumno
 *
 * @property $id
 * @property $tipoIdentificacionAlumno
 * @property $documentoIdentidadAlumno
 * @property $nombresAlumno
 * @property $primerApellidoAlumno
 * @property $segundoApellidoAlumno
 * @property $correoElectronicoAlumno
 * @property $direccionAlumno
 * @property $telefonoAlumno
 * @property $fechadeNacimientoAlumno
 * @property $lugarNacimientoAlumno
 * @property $tipodeSangreAlumno
 * @property $generoAlumno
 * @property $grados_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Certificacione[] $certificaciones
 * @property Grado $grado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alumno extends Model
{
    
    static $rules = [
		'tipoIdentificacionAlumno' => 'required',
		'documentoIdentidadAlumno' => 'required',
		'nombresAlumno' => 'required',
		'primerApellidoAlumno' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipoIdentificacionAlumno','documentoIdentidadAlumno','nombresAlumno','primerApellidoAlumno','segundoApellidoAlumno','correoElectronicoAlumno','direccionAlumno','telefonoAlumno','fechadeNacimientoAlumno','lugarNacimientoAlumno','tipodeSangreAlumno','generoAlumno','grados_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function certificaciones()
    {
        return $this->hasMany('App\Models\Certificacione', 'documentoIdentidadAlumno_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grado()
    {
        return $this->hasOne('App\Models\Grado', 'id', 'grados_id');
    }
    

}
