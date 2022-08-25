<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Solicitude
 *
 * @property $id
 * @property $tipoIdentificacionSolicitud
 * @property $documentoIdentidadSolicitud
 * @property $nombresSolicitud
 * @property $primerApellidoSolicitud
 * @property $segundoApellidoSolicitud
 * @property $correoElectronicoSolicitud
 * @property $tipodeCertificacionSolicitus
 * @property $anodeingreso
 * @property $gradoSolicitud
 * @property $created_at
 * @property $updated_at
 *
 * @property Grado $grado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Solicitude extends Model
{
    
    static $rules = [
		'tipoIdentificacionSolicitud' => 'required',
		'documentoIdentidadSolicitud' => 'required',
		'nombresSolicitud' => 'required',
		'primerApellidoSolicitud' => 'required',
		'tipodeCertificacionSolicitus' => 'required',
		'anodeingreso' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipoIdentificacionSolicitud','documentoIdentidadSolicitud','nombresSolicitud','primerApellidoSolicitud','segundoApellidoSolicitud','correoElectronicoSolicitud','tipodeCertificacionSolicitus','anodeingreso','gradoSolicitud'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grado()
    {
        return $this->hasOne('App\Models\Grado', 'id', 'gradoSolicitud');
    }
    

}
