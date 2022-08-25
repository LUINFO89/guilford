<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asignatura
 *
 * @property $id
 * @property $nombre_asignatura
 * @property $creditos
 * @property $id_profesor
 * @property $created_at
 * @property $updated_at
 *
 * @property Nota[] $notas
 * @property Profesore $profesore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asignatura extends Model
{
    
    static $rules = [
		'nombre_asignatura' => 'required',
		'creditos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_asignatura','creditos','id_profesor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notas()
    {
        return $this->hasMany('App\Models\Nota', 'id_asignatura_estudiante', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profesore()
    {
        return $this->hasOne('App\Models\Profesore', 'id', 'id_profesor');
    }
    

}
