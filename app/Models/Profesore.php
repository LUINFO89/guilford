<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Profesore
 *
 * @property $id
 * @property $identificacion_profesores
 * @property $nombre_profesores
 * @property $nombre_telefono
 * @property $nombre_correo
 * @property $created_at
 * @property $updated_at
 *
 * @property Asignatura[] $asignaturas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Profesore extends Model
{
    
    static $rules = [
		'identificacion_profesores' => 'required',
		'nombre_profesores' => 'required',
		'nombre_telefono' => 'required',
		'nombre_correo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['identificacion_profesores','nombre_profesores','nombre_telefono','nombre_correo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asignaturas()
    {
        return $this->hasMany('App\Models\Asignatura', 'id_profesor', 'id');
    }
    

}
